<?php
require_once "includes/db.php";

$categories = $pdo->query("SELECT * FROM categories")->fetchAll();

$category_id = $_GET['category'] ?? null;
if ($category_id) {
    $stmt = $pdo->prepare("SELECT * FROM categories WHERE id = ?");
    $stmt->execute([$category_id]);
    $products = $stmt->fetchAll();
} else {
    $products = $categories;
}

include "includes/header.php";
?>

<main>
    <div class="breadcrumbs container">
        <a href="/">Главная</a> &rarr; <span>Каталог</span>
    </div>

    <section class="catalog container">
        <div class="grid">
            <?php foreach ($products as $cat): ?>
                <div class="card product-card">
                    <?php if (!empty($cat['image']) && file_exists("img/products/".$cat['image'])): ?>
                        <img src="img/products/<?= htmlspecialchars($cat['image']) ?>" alt="<?= htmlspecialchars($cat['name']) ?>">
                    <?php else: ?>
                        <img src="img/products/default.jpg" alt="<?= htmlspecialchars($cat['name']) ?>">
                    <?php endif; ?>
                    <h3><?= htmlspecialchars($cat['name']) ?></h3>
                    <a href="catalog.php?category=<?= $cat['id'] ?>" class="btn-small">Смотреть →</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include "includes/footer.php"; ?>

<?php
require_once "includes/db.php";

$categories = $pdo->query("SELECT * FROM categories LIMIT 6")->fetchAll();

$products = $pdo->query("SELECT * FROM products ORDER BY id DESC LIMIT 8")->fetchAll();

include "includes/header.php";
?>

<main>
<section class="hero">
    <div class="container hero-content">
        <h1 class="hero-title">Производство и <span class="highlight">полиэтиленовой упаковки</span> оптом</h1>
        <p class="hero-subtitle">
            <span class="highlight">Собственное производство</span> с 2001 года. 
            Пакеты, <span class="highlight">плёнка</span>, одноразовая посуда и упаковочные материалы.
        </p>
        <div class="hero-buttons">
            <a href="catalog.php" class="btn">Перейти в каталог</a>
            <a href="#request" class="btn btn-outline">Оставить заявку</a>
        </div>
    </div>
</section>



<section class="catalog">
    <div class="container">
        <h2>НАШ КАТАЛОГ</h2>
        <div class="grid">
            <?php foreach ($categories as $cat): ?>
                <div class="card product-card">
                    <?php if(!empty($cat['image'])): ?>
                        <img src="img/products/<?= htmlspecialchars($cat['image']) ?>" alt="<?= htmlspecialchars($cat['name']) ?>">
                    <?php else: ?>
                        <img src="img/products/default.jpg" alt="<?= htmlspecialchars($cat['name']) ?>">
                    <?php endif; ?>
                    <h3><?= htmlspecialchars($cat['name']) ?></h3>
                    <a href="catalog.php?category=<?= $cat['id'] ?>" class="btn-small">Смотреть →</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>


<section class="partners">
    <div class="container">
        <h2>Компании, которые с нами сотрудничают</h2>
        <div class="partners-slider-wrapper">
            <div class="partners-slider">
            <div class="slide"><img src="img/partner1.jpg" alt="Компания 1"></div>
            <div class="slide"><img src="img/partner2.jpg" alt="Компания 2"></div>
            <div class="slide"><img src="img/partner3.png" alt="Компания 3"></div>
            <div class="slide"><img src="img/partner4.jpg" alt="Компания 4"></div>
            <div class="slide"><img src="img/partner5.jpg" alt="Компания 5"></div>
            <div class="slide"><img src="img/partner6.jpg" alt="Компания 6"></div>
            <div class="slide"><img src="img/partner1.jpg" alt="Компания 1"></div>
            <div class="slide"><img src="img/partner2.jpg" alt="Компания 2"></div>
            <div class="slide"><img src="img/partner3.png" alt="Компания 3"></div>
            <div class="slide"><img src="img/partner4.jpg" alt="Компания 4"></div>
            <div class="slide"><img src="img/partner5.jpg" alt="Компания 5"></div>
            <div class="slide"><img src="img/partner6.jpg" alt="Компания 6"></div>
        </div>
    </div>
</section>

<section class="advantages">
    <div class="container">
        <h2>Почему выбирают нас</h2>
        <div class="advantages-grid">
            <div class="adv-card">
                <div class="icon">🏭</div>
                <h3>Собственное производство</h3>
            </div>
            <div class="adv-card">
                <div class="icon">💰</div>
                <h3>Цены от производителя</h3>
            </div>
            <div class="adv-card">
                <div class="icon">🚚</div>
                <h3>Быстрая доставка</h3>
            </div>
            <div class="adv-card">
                <div class="icon">🎨</div>
                <h3>Печать логотипа</h3>
            </div>
        </div>
    </div>
</section>


<section class="products">
    <div class="container">
        <h2>Популярная продукция</h2>
        <div class="grid">
            <?php foreach ($products as $product): ?>
                <div class="card product-card">
                    <img src="img/products/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <h4><?= htmlspecialchars($product['name']) ?></h4>
                    <p>от <?= htmlspecialchars($product['price']) ?> ₽</p>
                    <a href="product.php?id=<?= $product['id'] ?>" class="btn-small">Подробнее</a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section id="request" class="request">
    <div class="container">
        <h2>Получить оптовое предложение</h2>
        <p>Заполните форму, и мы подготовим для вас индивидуальное предложение.</p>

        <form action="send_request.php" method="post" class="request-form">
            <div class="form-group">
                <input type="text" name="name" placeholder="Ваше имя" required>
            </div>
            <div class="form-group">
                <input type="tel" name="phone" placeholder="Телефон" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <textarea name="comment" placeholder="Что вас интересует?" rows="4"></textarea>
            </div>
            <button type="submit" class="btn submit-btn">Отправить заявку</button>
        </form>
    </div>
</section>


</main>

<?php include "includes/footer.php"; ?>

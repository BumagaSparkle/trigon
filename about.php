<?php
include "includes/header.php";
?>

<main>
    <section class="hero hero-about">
        <div class="container hero-content">
            <h1>ООО «Тригон»</h1>
            <p class="hero-subtitle">
                С 2001 года мы производим и поставляем полиэтиленовую упаковку оптом. 
                Пакеты, плёнка, одноразовая посуда и упаковочные материалы для вашего бизнеса.
            </p>
        </div>
    </section>

<section class="about container">
    <h2>О нашей компании</h2>
    <p>
        ООО «Тригон» — крупный оптовый поставщик различных упаковочных и расходных материалов, плёнки, одноразовой посуды, салфеток, контейнеров и упаковки. С 2001 года основным видом деятельности фирмы стала переработка полиэтилена низкого давления и выпуск полиэтиленовой упаковки любого типа и размера, включая пакеты с ручкой типа «маечка», с прорубной ручкой, а также изготовление заказных пакетов с логотипом или рекламой заказчика.
    </p>
    <p>
        Заказывая пакеты с фирменной символикой, вы получаете дополнительное продвижение и ненавязчивую рекламу. Это помогает выделить товар или услугу из общей массы. Нанесение фирменной символики направлено на создание уникального имиджа компании и выполняет эффективную рекламную функцию именно в той социальной среде, где востребован ваш продукт.
    </p>
    <img src="img/about-production.jpeg" alt="Производство" class="about-image">
</section>


<section class="advantages container">
    <h2>Наши преимущества</h2>
    <div class="advantages-grid">
        <div class="advantage-card">
            <div class="adv-circle">1</div>
            <h3>Собственное производство</h3>
            <p>Контроль качества на каждом этапе и производство любых типов упаковки.</p>
        </div>
        <div class="advantage-card">
            <div class="adv-circle">2</div>
            <h3>Цены от производителя</h3>
            <p>Оптовые цены напрямую с завода — выгодно для бизнеса любого масштаба.</p>
        </div>
        <div class="advantage-card">
            <div class="adv-circle">3</div>
            <h3>Быстрая доставка</h3>
            <p>Доставка по всей России в кратчайшие сроки с возможностью отслеживания.</p>
        </div>
        <div class="advantage-card">
            <div class="adv-circle">4</div>
            <h3>Печать логотипа</h3>
            <p>Индивидуальная упаковка с логотипом или рекламой вашей компании.</p>
        </div>
    </div>
</section>



    <section class="clients container">
        <h2>Наши партнеры</h2>
        <div class="grid clients-grid">
            <img src="img/partner1.jpg" alt="Компания 1">
            <img src="img/partner2.jpg" alt="Компания 2">
            <img src="img/partner3.png" alt="Компания 3">
            <img src="img/partner4.jpg" alt="Компания 4">
            <img src="img/partner5.jpg" alt="Компания 5">
            <img src="img/partner6.jpg" alt="Компания 6">
        </div>
    </section>

    <section class="request" id="request">
        <div class="container">
            <h2>Свяжитесь с нами для оптового предложения</h2>
            <form action="send_request.php" method="post" class="form">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <input type="email" name="email" placeholder="Email">
                <textarea name="comment" placeholder="Ваш запрос"></textarea>
                <button type="submit" class="btn">Отправить заявку</button>
            </form>
        </div>
    </section>
</main>

<?php include "includes/footer.php"; ?>

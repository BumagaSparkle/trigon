<?php include "includes/header.php"; ?>

<main>
    <section class="hero hero-delivery">
        <div class="container hero-content">
            <h1>Доставка и оплата</h1>
            <p class="hero-subtitle">
                Удобные условия доставки и гибкие способы оплаты для наших клиентов.
            </p>
        </div>
    </section>

    <section class="delivery-options container">
        <h2>Варианты доставки</h2>
        <div class="grid delivery-grid">
            <div class="delivery-card">
                <h3>Курьерская доставка</h3>
                <p>Доставка прямо до двери вашего склада или магазина по согласованному адресу.</p>
            </div>
            <div class="delivery-card">
                <h3>Транспортная компания</h3>
                <p>Отправка через надежные ТК по всей России с возможностью отслеживания груза.</p>
            </div>
            <div class="delivery-card">
                <h3>Самовывоз</h3>
                <p>Забрать товар самостоятельно со склада компании в удобное время.</p>
            </div>
        </div>
    </section>

    <section class="delivery-terms container">
        <h2>Сроки и условия</h2>
        <ul>
            <li>Доставка по городу — 1–2 рабочих дня</li>
            <li>Доставка по России — 3–7 рабочих дней в зависимости от региона</li>
            <li>Минимальная партия для доставки — от 1 коробки или пакета</li>
            <li>Возможна бесплатная доставка при заказе от 50 000 ₽</li>
        </ul>
    </section>

    <!-- Оплата -->
    <section class="payment container">
        <h2>Способы оплаты</h2>
        <ul>
            <li>Наличный расчет при самовывозе или доставке</li>
            <li>Безналичный расчет для юридических лиц</li>
            <li>Оплата банковской картой или онлайн-платежами</li>
        </ul>
    </section>

    <section class="request" id="request">
        <div class="container">
            <h2>Оставьте заявку на доставку</h2>
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

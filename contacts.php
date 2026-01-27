<?php include "includes/header.php"; ?>

<main>
    <section class="hero hero-contacts">
        <div class="container hero-content">
            <h1>Контакты</h1>
            <p class="hero-subtitle">
                Свяжитесь с нами любым удобным способом. Мы всегда рады новым партнерам!
            </p>
        </div>
    </section>

    <section class="contact-info container">
        <h2>Наши контакты</h2>
        <div class="grid contact-grid">
            <div class="contact-card">
                <h3>Адрес</h3>
                <p>ул. Ленина, 38, Ижевск</p>
            </div>
            <div class="contact-card">
                <h3>Телефон</h3>
                <p><a href="tel:+79000000000">+7 (900) 000-00-00</a></p>
            </div>
            <div class="contact-card">
                <h3>Email</h3>
                <p><a href="mailto:info@trigon.ru">trigon.ooo@mail.ru</a></p>
            </div>
            <div class="contact-card">
                <h3>Часы работы</h3>
                <p>Пн-Пт: 8:00 – 17:00<br>Сб-Вс: выходные</p>
            </div>
        </div>
    </section>

    <section class="request" id="request">
        <div class="container">
            <h2>Напишите нам</h2>
            <form action="send_request.php" method="post" class="form">
                <input type="text" name="name" placeholder="Ваше имя" required>
                <input type="tel" name="phone" placeholder="Телефон" required>
                <input type="email" name="email" placeholder="Email">
                <textarea name="comment" placeholder="Ваш вопрос"></textarea>
                <button type="submit" class="btn">Отправить сообщение</button>
            </form>
        </div>
    </section>

    <section class="map container">
    <h2>Мы на карте</h2>
    <div class="map-wrapper">
        <iframe width="100%" height="450" frameborder="0" scrolling="no"
                src="https://www.openstreetmap.org/export/embed.html?bbox=53.2110%2C56.8465%2C53.2135%2C56.8475&amp;layer=mapnik&marker=56.8470%2C53.2123"
                style="border:1px solid black">
        </iframe>
        <br/>
        <small>
            <a href="https://www.openstreetmap.org/?mlat=56.8470&mlon=53.2123#map=19/56.8470/53.2123" target="_blank">
                Посмотреть карту в полном размере
            </a>
        </small>
    </div>
</section>

</main>

<?php include "includes/footer.php"; ?>

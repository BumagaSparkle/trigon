<footer class="footer">
    <div class="container">
        <p>© <?= date("Y") ?> ООО «Тригон». Все права защищены.</p>
        <p>Телефон: +7 (900) 000-00-00 | Email: trigon.ooo@mail.ru</p>
    </div>
</footer>

<script>
const slider = document.querySelector('.partners-slider');
const slides = document.querySelectorAll('.partners-slider .slide');
let index = 0;

function nextSlide() {
    index++;
    if(index > slides.length - 6) index = 0;
    slider.style.transform = `translateX(-${index * (100/6)}%)`;
}

setInterval(nextSlide, 3000);
</script>
</body>
</html>

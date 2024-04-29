<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        body, html {
    height: 100%;
    margin: 0;
    padding: 0;
    overflow: hidden;
}

.slider {
    display: flex;
    height: 100vh;
    overflow: hidden;
}

.slide {
    flex: 1;
    transition: transform 0.5s ease-in-out;
    overflow: hidden;
}

img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
</head>
<body>
    <div class="slider">
        <div class="slide">
            <img src="demos/saas-2/images/hero4.jpg" alt="Slide 1">
        </div>
    </div>
    <script>const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

function nextSlide() {
    slides[currentSlide].style.transform = 'translateX(-100%)';
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].style.transform = 'translateX(0)';
}

function prevSlide() {
    slides[currentSlide].style.transform = 'translateX(100%)';
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    slides[currentSlide].style.transform = 'translateX(0)';
}

setInterval(nextSlide, 5000); // Auto-advance every 5 seconds
</script>
</body>
</html>

let currentSlide = 0;

function showSlide(index) {
    const slides = document.querySelectorAll('.carousel-item');
    const totalSlides = slides.length;

    // Đảm bảo index nằm trong giới hạn
    if (index >= totalSlides) {
        currentSlide = 0;
    } else if (index < 0) {
        currentSlide = totalSlides - 1;
    } else {
        currentSlide = index;
    }

    // Di chuyển carousel
    const carouselInner = document.querySelector('.carousel-inner');
    carouselInner.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
}

function moveSlide(direction) {
    showSlide(currentSlide + direction);
}

// Hiển thị slide đầu tiên
showSlide(currentSlide);
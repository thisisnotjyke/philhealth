// JavaScript Document
let currentIndex = 0;

function showSlide(index) {
    const carouselWrapper = document.querySelector('.carousel-wrapper');
    const totalSlides = document.querySelectorAll('.carousel-item').length;

    // Ensure the index is within the valid range
    currentIndex = (index + totalSlides) % totalSlides;

    // Calculate the transform value to shift the wrapper
    const transformValue = -currentIndex * 100 + '%';
    carouselWrapper.style.transform = `translateX(${transformValue})`;
}

function prevSlide() {
    showSlide(currentIndex - 1);
}

function nextSlide() {
    showSlide(currentIndex + 1);
}

// Optional: Auto-play the carousel
setInterval(nextSlide, 8000); // Change the interval as needed
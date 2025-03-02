const toggleButton = document.getElementById('darkModeToggle');
const body = document.body;
const header = document.querySelector('header');


toggleButton.addEventListener('click', () => {
    if (body.classList.contains('dark-mode')) {
        body.classList.remove('dark-mode');
        header.classList.remove('dark-mode');
        body.classList.add('light-mode');
        toggleButton.textContent = 'Mode nuit';
    } else {
        body.classList.remove('light-mode');
        header.classList.add('dark-mode');
        body.classList.add('dark-mode');
        toggleButton.textContent = 'Mode clair';    
    }
});

// Initial mode (optionnel, mode clair par défaut)
body.classList.add('light-mode');
header.classList.add('light-mode');

  
//carousel//
let slideIndex = 0;

function moveSlide(n) {
    const slides = document.querySelector('.carousel-container');
    const totalSlides = document.querySelectorAll('.carousel-slide img').length;

    slideIndex += n;
    if (slideIndex >= totalSlides) {
        slideIndex = 0;
    }
    if (slideIndex < 0) {
        slideIndex = totalSlides - 1;
    }

    slides.style.transform = `translateX(-${slideIndex * 100}%)`;
}
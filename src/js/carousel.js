let slideIndex = 0;
let timeoutHandle;

function showSlides(n) {
    const slides = document.getElementsByClassName("slides");
    const dots = document.getElementsByClassName("dot");
    
    if (n !== undefined) {
        slideIndex = n;
    } else {
        slideIndex++;
    }
    
    if (slideIndex >= slides.length) { slideIndex = 0; }
    if (slideIndex < 0) { slideIndex = slides.length - 1; }
    
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
        dots[i].classList.remove("active");
    }
    
    slides[slideIndex].style.display = "block";
    dots[slideIndex].classList.add("active");
    
    clearTimeout(timeoutHandle);
    timeoutHandle = setTimeout(() => showSlides(), 5000);
}

document.addEventListener("DOMContentLoaded", () => {
    const dots = document.getElementsByClassName("dot");
    
    for (let i = 0; i < dots.length; i++) {
        dots[i].onclick = function() {
            showSlides(i);
        };
    }
    
    showSlides();
});
document.addEventListener('DOMContentLoaded', () => {
    const sections = ['section1', 'section2', 'section3'];

    sections.forEach(id => {
        const element = document.getElementById(id);
        if (element) {
            element.addEventListener('mouseover', () => {
                element.style.color = 'gray';
            });

            element.addEventListener('mouseout', () => {
                element.style.color = '';
            });
        }
    });
});

let slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("images");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
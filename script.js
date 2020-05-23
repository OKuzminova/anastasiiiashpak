/* Индекс слайда по умолчанию */
var slideIndex = 1;
showSlides(slideIndex);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide() {
    showSlides(slideIndex += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide() {
    showSlides(slideIndex -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide(n) {
    showSlides(slideIndex = n);
}

/* Основная функция слайдера */
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("item");
    var dots = document.getElementsByClassName("slider-dots_item");
    if (n > slides.length) {
      slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
}


/* Индекс слайда по умолчанию */
var slideIndex2 = 1;
showSlides2(slideIndex2);

/* Функция увеличивает индекс на 1, показывает следующй слайд*/
function plusSlide2() {
    showSlides2(slideIndex2 += 1);
}

/* Функция уменьшяет индекс на 1, показывает предыдущий слайд*/
function minusSlide2() {
    showSlides2(slideIndex2 -= 1);  
}

/* Устанавливает текущий слайд */
function currentSlide2(b) {
    showSlides2(slideIndex2 = b);
}

/* Основная функция слайдера */
function showSlides2(b) {
    var z;
    var slides2 = document.getElementsByClassName("item-2");
    var dots2 = document.getElementsByClassName("slider-dots-2_item-2");
    if (b > slides2.length) {
      slideIndex2 = 1
    }
    if (b < 1) {
        slideIndex2 = slides2.length
    }
    for (z = 0; z < slides2.length; z++) {
        slides2[z].style.display = "none";
    }
    for (z = 0; z < dots2.length; z++) {
        dots2[z].className = dots2[z].className.replace(" active-2", "");
    }
    slides2[slideIndex2 - 1].style.display = "block";
    dots2[slideIndex2 - 1].className += " active-2";
}
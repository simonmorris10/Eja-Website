// JavaScript for toggling the navigation menu

function openLink() {
    var ul = document.querySelector('nav ul');
    ul.classList.add('show');
}

function closeLink() {
    var ul = document.querySelector('nav ul');
    ul.classList.remove('show');
}

// JavaScript for image slider

var currentImageIndex = 0;
var images = ["1.jpg", "2.jpg", "3.jpg"]; // Replace with your image URLs
var sliderImage = document.getElementById("sliderImage");
var prevBtn = document.getElementById("prevBtn");
var nextBtn = document.getElementById("nextBtn");

prevBtn.addEventListener("click", showPrevImage);
nextBtn.addEventListener("click", showNextImage);

function showPrevImage() {
    currentImageIndex = (currentImageIndex === 0) ? images.length - 1 : currentImageIndex - 1;
    updateImage();
}

function showNextImage() {
    currentImageIndex = (currentImageIndex === images.length - 1) ? 0 : currentImageIndex + 1;
    updateImage();
}

function updateImage() {
    sliderImage.src = images[currentImageIndex];
}
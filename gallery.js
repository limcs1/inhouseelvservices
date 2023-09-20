// JavaScript for the image gallery
const images = ["images/products/ruckuspng.png", "images/products/tiandy.png", "images/products/NEC_logo.svg.png"]; // Replace with your image URLs
let currentIndex = 0;

const prevButton = document.getElementById("prev-button");
const nextButton = document.getElementById("next-button");
const galleryImage = document.querySelector(".gallery-image");

prevButton.addEventListener("click", () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateImage();
});

nextButton.addEventListener("click", () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
});

function updateImage() {
    galleryImage.src = images[currentIndex];
    galleryImage.alt = `Image ${currentIndex + 1}`;
}

// Initialize the gallery with the first image
updateImage();

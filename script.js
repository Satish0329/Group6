document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');
    const signupForm = document.getElementById('signupForm');
    const loginStatus = document.getElementById('loginStatus');
    const signupStatus = document.getElementById('signupStatus');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('loginUsername').value;
        const password = document.getElementById('loginPassword').value;

        // Replace this with your authentication logic
        if (username === 'your_username' && password === 'your_password') {
            loginStatus.textContent = 'Login successful!';
        } else {
            loginStatus.textContent = 'Login failed. Please check your credentials.';
        }
    });

    signupForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('signupUsername').value;

        // Replace this with your registration logic
        // For this example, we assume successful registration
        signupStatus.textContent = 'Registration successful!';
    });
});

// Slideshow logic
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 2 seconds (adjust as needed)
}

// Chatbot JavaScript code
const chatIcon = document.getElementById("chat-icon");
const chatContainer = document.getElementById("chat-container");

chatIcon.addEventListener("click", () => {
    chatContainer.style.display = chatContainer.style.display === "block" ? "none" : "block";
});

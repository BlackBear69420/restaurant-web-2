
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}

const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


/*email subscribe*/
// Get references to HTML elements
const emailInput = document.getElementById('email-input');
const subscribeButton = document.getElementById('subscribe-button');
const subscriptionMessage = document.getElementById('subscription-message');

// Add an event listener to the Subscribe button
subscribeButton.addEventListener('click', function() {
    // Validate the email address using a simple regular expression
    const email = emailInput.value.trim();
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (emailPattern.test(email)) {
        // Valid email, hide the form and display the thank you message
        emailInput.style.display = 'none';
        subscribeButton.style.display = 'none';
        subscriptionMessage.style.display = 'block';
    } else {
        // Invalid email, you can add error handling here if needed
        alert('Please enter a valid email address.');
    }
});



// assets/js/script.js

// Simple alert example
function showAlert(message) {
    alert(message);
}

// Example form validation
function validateForm() {
    const name = document.getElementById("name").value;
    const email = document.getElementById("email").value;

    if (name === "" || email === "") {
        alert("Please fill all required fields.");
        return false;
    }
    return true;
}

// Example dynamic message on load
document.addEventListener("DOMContentLoaded", function() {
    console.log("Organ Donation Website Loaded ✅");
});

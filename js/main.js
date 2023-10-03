class PasswordToggle {
    constructor() {
        this.passwordInput = document.getElementById("password");
        this.passwordToggle = document.getElementById("password-toggle");

        this.passwordToggle.addEventListener("click", this.togglePasswordVisibility.bind(this));
    }

    togglePasswordVisibility() {
        if (this.passwordInput.type === "password") {
            this.passwordInput.type = "text";
            this.passwordToggle.innerHTML = "&#x1F440;";
        } else {
            this.passwordInput.type = "password";
            this.passwordToggle.innerHTML = "&#x1F441;";
        }
    }
}

// Maak een instantie van de PasswordToggle-klasse
const passwordToggle = new PasswordToggle();

function validatePassword() {
    const passwordInput = document.getElementById('{{ registrationForm.plainPassword.vars.id }}');
    const feedback = document.getElementById('password-feedback');

    if (!passwordInput || !feedback) {
        console.error('Password input or feedback element not found.');
        return;
    }

    const regexLower = /[a-z]/;
    const regexUpper = /[A-Z]/;
    const regexNonAlphaNum = /\W/;
    const minLength = 12;

    passwordInput.addEventListener('input', function() {
        const value = passwordInput.value;
        let message = "Votre mot de passe doit contenir :<br>";

        if (!regexLower.test(value)) {
            message += "- Au moins une lettre minuscule<br>";
        }
        if (!regexUpper.test(value)) {
            message += "- Au moins une lettre majuscule<br>";
        }
        if (!regexNonAlphaNum.test(value)) {
            message += "- Au moins un caractère non alphanumérique<br>";
        }
        if (value.length < minLength) {
            message += `- Au moins ${minLength} caractères<br>`;
        }

        if (regexLower.test(value) && regexUpper.test(value) && regexNonAlphaNum.test(value) && value.length >= minLength) {
            message = "<span style='color: green;'>Votre mot de passe est fort.</span>";
        }

        feedback.innerHTML = message;
    });
}

document.addEventListener('DOMContentLoaded', function() {
    validatePassword();
});

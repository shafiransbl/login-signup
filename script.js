document.addEventListener('DOMContentLoaded', function () {
    const loginButton = document.getElementById('login-btn');
    if (loginButton) {
        loginButton.addEventListener('click', function () {
            alert('Login berhasil!');
        });
    }
});

function togglePassword() {
    const passwordInput = document.getElementById('password');
    const toggleIcon = document.querySelector('.toggle-password i');
    const isPassword = passwordInput.getAttribute('type') === 'password';

    passwordInput.setAttribute('type', isPassword ? 'text' : 'password');
    toggleIcon.classList.toggle('fa-eye', isPassword);
    toggleIcon.classList.toggle('fa-eye-slash', !isPassword);
}

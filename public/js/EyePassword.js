const passwordInput = document.getElementById('passwordInput');
const togglePassword = document.getElementById('togglePassword');

togglePassword.addEventListener('click', () => {
    passwordInput.type =
        passwordInput.type === 'password' ? 'text' : 'password';
    togglePassword.classList.toggle('ri-eye-line');
    togglePassword.classList.toggle('ri-eye-off-line');
});

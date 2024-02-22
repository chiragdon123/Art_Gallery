const passwordInput = document.querySelector('.password');
const passwordToggle = document.querySelector('.password-toggle');

passwordToggle.addEventListener('click', function() {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.classList.toggle('active');
});

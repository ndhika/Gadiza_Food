const togglePassword = document.getElementById('togglePassword');
const passwordInput = document.getElementById('password');

togglePassword.addEventListener('click', function () {
    const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordInput.setAttribute('type', type);
    this.querySelector('i').classList.toggle('bi-eye-fill');
    this.querySelector('i').classList.toggle('bi-eye-slash-fill');
});

setTimeout(function () {
    var notification = document.getElementById('notification');
    if (notification) {
        notification.style.display = 'none';
    }
}, 3000); 

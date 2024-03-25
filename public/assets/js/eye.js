function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password');
    var showPasswordSpan = document.getElementById('show-password');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPasswordSpan.textContent = 'Hide';
    } else {
        passwordInput.type = 'password';
        showPasswordSpan.textContent = 'Show';
    }
}

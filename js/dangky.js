document.getElementById('registration-form').addEventListener('submit', function(event) {
    const password = document.getElementById('password').value;
    const passwordMessage = document.getElementById('password-message');

    // Kiểm tra độ dài mật khẩu
    if (password.length > 8) {
        event.preventDefault(); // Ngăn không cho form gửi
        passwordMessage.textContent = 'Mật khẩu phải chứa tối đa 8 ký tự.';
    } else {
        passwordMessage.textContent = ''; // Xóa thông báo lỗi
    }
});
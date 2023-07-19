<?Php
if ($_POST) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    if (empty($username)) {
        echo "<script>
    alert('Username cannot be empty');location.href = './Sign up.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password cannot be empty');location.href = './Sign up.php';</script>";
    } elseif ($password !== $confirm) {
        echo "<script>alert('Please enter a matching password');location.href = './Sign up.php';</script>";
    } else {
        // Kiểm tra xem mật khẩu đã nhập có khớp với mật khẩu đã đăng ký hay không
        $stored_password = "hashed_password_here"; // Thay thế bằng mật khẩu đã lưu trữ được mã hóa
        if (password_verify($password, $stored_password)) {
            echo "<script>alert('Logged in successfully');</script>";
        } else {
            header("Location: ./login.php");
            exit();
        }
    }
}
?>
?>
<?php
session_start();
include("koneksi.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submittedCaptcha = $_POST['captcha'];
    $correctCaptcha = $_SESSION['captcha_code'];

    if ($submittedCaptcha === $correctCaptcha) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "SELECT * FROM user WHERE email = :email AND password = :password";
        $stmt = $koneksi->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $_SESSION['user'] = $email;
            header("Location: dashboard_admin.php"); 
        } else {
            echo "<script>alert('Login gagal: Email atau Password salah.');</script>";
            echo "<script>window.location.href = 'login2.php';</script>";
        }
    } else {
        echo "<script>alert('Captcha salah!');</script>";
        echo "<script>window.location.href = 'login2.php';</script>";
    }
}
?>

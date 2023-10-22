<?php
session_start();

if (isset($_POST['username_email']) && isset($_POST['password']) && isset($_POST['captcha'])) {
    $username_email = $_POST['username_email'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    if (strtolower($captcha) == strtolower($_SESSION['captcha'])) {
        // Validasi login, misalnya dengan database
        if ($username_email == 'admin' && $password == 'adminpass') {
            // Admin berhasil login
            $_SESSION['admin'] = true;
            header('Location: admin_dashboard.php');
        } elseif ($username_email == 'customer' && $password == 'customerpass') {
            // Customer berhasil login
            $_SESSION['customer'] = true;
            header('Location: customer_dashboard.php');
        } else {
            // Peringatan jika username/email atau password salah
            header('Location: login.php?error=1');
        }
    } else {
        // Peringatan jika Captcha salah
        header('Location: login.php?error=2');
    }
} else {
    // Peringatan jika tidak ada username/email, password, atau captcha
    header('Location: login.php?error=3');
}
?>

<?php
session_start();

if (isset($_POST['username_email']) && isset($_POST['password']) && isset($_POST['captcha'])) {
    $username_email = $_POST['username_email'];
    $password = $_POST['password'];
    $captcha = $_POST['captcha'];

    if (isset($_SESSION['captcha']) && strtolower($captcha) == strtolower($_SESSION['captcha'])) {
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
            $loginError = "Username/email atau password salah.";
        }
    } else {
        // Peringatan jika Captcha salah
        $loginError = "Captcha salah.";
    }
}

// Halaman login

// Form login dengan textbox username/email dan password
echo '<form method="post" action="login.php">';
echo '<input type="text" name="username_email" placeholder="Username/Email"><br>';
echo '<input type="password" name="password" placeholder="Password"><br>';
echo '<img src="captcha_image.php" alt="Captcha"><br>'; // Menampilkan gambar Captcha
echo '<input type="text" name="captcha" placeholder="Captcha"><br>';
if (isset($loginError)) {
    echo '<p style="color: red;">' . $loginError . '</p>';
}
echo '<input type="submit" value="Login">';
echo '</form>';

?>

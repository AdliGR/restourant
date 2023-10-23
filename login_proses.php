<?php
session_start();

$servername = "localhost";
$username = "username_db"; // Ganti dengan username database Anda
$password = "password_db"; // Ganti dengan password database Anda
$dbname = "uts_restorant";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $captcha = $_POST["captcha"];

    // Verifikasi Captcha
    if ($_SESSION["captcha"] != $captcha) {
        echo "Captcha salah. Coba lagi.";
    } else {
        // Proses login
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $row['role'];
            
            if ($row['role'] == 'admin') {
                // Redirect ke halaman admin
                header("Location: admin_crud.php");
            } elseif ($row['role'] == 'customer') {
                // Redirect ke halaman pemesanan
                header("Location: customer_order.php");
            } else {
                echo "Role tidak valid.";
            }
        } else {
            echo "Username atau password salah.";
        }
    }
}

$conn->close();
?>

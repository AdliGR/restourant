<?php
session_start();
include("koneksi.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $submittedCaptcha = $_POST['captcha'];
    $correctCaptcha = $_SESSION['captcha_code'];

    if ($submittedCaptcha === $correctCaptcha) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];

        $query = "SELECT * FROM user WHERE email = :email";
        $stmt = $koneksi->prepare($query);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $user['password'];

            if (password_verify($password, $hashed_password)) 
            {
                $_SESSION['user'] = $email;
                $_SESSION['role'] = $user['role'];

                if ($user['role'] == 'Admin') 
                {
                    header("Location: dashboard_admin.php");
                } 
                else 
                {
                    header("Location: dashboard_customer.php");
                }

                // Pesan sukses
                echo "<script>alert('Login berhasil. Selamat datang, " . $user['firstname'] . "');</script>";
            } else {
                echo "<script>alert('Login gagal: Password salah.');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
            }
        } else {
            echo "<script>alert('Login gagal: Email tidak ditemukan.');</script>";
            echo "<script>window.location.href = 'login.php';</script>";
        }
    } else {
        echo "<script>alert('Captcha salah!');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
}
?>

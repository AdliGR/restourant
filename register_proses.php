<?php
include("koneksi.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $tanggallahir = $_POST["tanggallahir"];
    $jeniskelamin = $_POST["jeniskelamin"];
    $role = $_POST["role"];

    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    $query = "INSERT INTO user (firstname, lastname, username, email, password, tanggallahir, jeniskelamin, role) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    try {
        $stmt = $koneksi->prepare($query);
        $stmt->execute([$firstname, $lastname, $username, $email, $hashed_password, $tanggallahir, $jeniskelamin, $role]);

        header("Location: login.php");
        echo "<script>alert('Pendaftaran berhasil. Anda dapat masuk sekarang.');</script>";
        exit();
    } catch (PDOException $e) {
        echo "Terjadi kesalahan saat mendaftar: " . $e->getMessage();
    }
}
?>

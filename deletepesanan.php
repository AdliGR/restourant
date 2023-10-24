<?php
include 'koneksi.php';

if (isset($_SESSION['role'])) 
{
    $role = $_SESSION['role'];
} 
else 
{
    $role = 'Guest';
}

if ($role == 'User') {
    $nama_user = $_SESSION['user'];

    $sql = "DELETE FROM pesanan WHERE nama_user = :nama_user";
    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(':nama_user', $nama_user);
    $stmt->execute();

    // Additional code for displaying a message or redirection can be added here.
}
?>

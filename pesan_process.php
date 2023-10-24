<?php
session_start();
include 'koneksi.php';

if (isset($_GET['id'])) 
{
    $menu_id = $_GET['id'];
    $nama = $_SESSION['user'];

    $sql = "INSERT INTO pesanan (nama_user, nama_makanan, category, harga, file_path, deskripsi) 
            SELECT :nama_user, nama_makanan, category, harga, file_path, deskripsi FROM menu WHERE id = :menu_id";

    $stmt = $koneksi->prepare($sql);
    $stmt->bindParam(':nama_user', $nama, PDO::PARAM_STR);
    $stmt->bindParam(':menu_id', $menu_id, PDO::PARAM_INT);
    
    if ($stmt->execute()) 
    {
        echo "<script>alert('Pesanan Berhasil');</script>";
        echo "<script>history.go(-1);</script>";
    } 
    else 
    {
        echo "<script>alert('Pesanan Gagal Mohon Coba Kembali')</script>";
        echo "<script>history.go(-1);</script>";
    }
} 

else 
{
    echo "<script>alert('ID Tidak Ada')</script>";
    echo "<script>history.go(-1);</script>";
}
?>




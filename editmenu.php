<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama_makanan = $_POST['nama_makanan'];
    $category = $_POST['category'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    if (isset($_FILES['new_file_path']) && $_FILES['new_file_path']['error'] === UPLOAD_ERR_OK) {
        $new_file_path = 'gambar/' . $_FILES['new_file_path']['name'];
        move_uploaded_file($_FILES['new_file_path']['tmp_name'], $new_file_path);
        
        $sql = "SELECT file_path FROM menu WHERE id = ?";
        $stmt = $koneksi->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result && $result['file_path']) {
            unlink($result['file_path']);
        }
    } else {
        $sql = "SELECT file_path FROM menu WHERE id = ?";
        $stmt = $koneksi->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $new_file_path = $result['file_path'];
    }

    $sql = "UPDATE menu SET nama_makanan = ?, category = ?, harga = ?, deskripsi = ?, file_path = ? WHERE id = ?";
    $stmt = $koneksi->prepare($sql);

    if ($stmt->execute([$nama_makanan, $category, $harga, $deskripsi, $new_file_path, $id])) {
        header('Location: dashboard_admin.php');
        exit; 
    }
}
?>

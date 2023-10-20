<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM menu WHERE id = ?";
    $stmt = $koneksi->prepare($sql);

    if ($stmt->execute([$id])) {
        header('Location: dashboard_admin.php');
        exit;
    } else {
        echo "Gagal menghapus data.";
    }
}
?>

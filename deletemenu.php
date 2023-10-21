<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Ambil nama file gambar sebelum menghapus data
    $sql = "SELECT file_path FROM menu WHERE id = ?";
    $stmt = $koneksi->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetch();

    if ($result) {
        $file_path = $result['file_path'];

        // Hapus data dari database
        $delete_sql = "DELETE FROM menu WHERE id = ?";
        $delete_stmt = $koneksi->prepare($delete_sql);

        if ($delete_stmt->execute([$id])) {
            // Hapus file gambar dari folder jika ada
            if (file_exists($file_path)) {
                unlink($file_path);
            }

            header('Location: dashboard_admin.php');
            exit;
        } else {
            echo "Gagal menghapus data.";
        }
    } else {
        echo "Data tidak ditemukan.";
    }
}
?>

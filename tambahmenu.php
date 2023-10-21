<?php
include 'koneksi.php';

$response = ['status' => 'error', 'message' => 'Registrasi gagal. Silakan coba lagi.'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_makanan = $_POST['nama_makanan'];
    $category = $_POST['category'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

    $metadata = [
        'nama_makanan' => $nama_makanan,
        'category' => $category,
        'harga' => $harga,
        'deskripsi' => $deskripsi,
    ];

    $metadata_json = json_encode($metadata);

    $sql_check = "SELECT COUNT(*) FROM menu WHERE nama_makanan = ?";
    $stmt_check = $koneksi->prepare($sql_check);
    $stmt_check->execute([$nama_makanan]);
    $nama_makanan_count = $stmt_check->fetchColumn();

    if ($nama_makanan_count > 0) {
        $response = ['status' => 'error', 'message' => 'Nama makanan sudah tersimpan.'];
    } else {
        if (isset($_FILES['file_path']) && $_FILES['file_path']['error'] === UPLOAD_ERR_OK) {
            $file_path = 'gambar/' . $_FILES['file_path']['name'];
            move_uploaded_file($_FILES['file_path']['tmp_name'], $file_path);

            $sql = "INSERT INTO menu (nama_makanan, category, harga, deskripsi, metadata, file_path) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $koneksi->prepare($sql);

            if ($stmt->execute([$nama_makanan, $category, $harga, $deskripsi, $metadata_json, $file_path])) {
                $response = ['status' => 'success', 'message' => 'Menu berhasil ditambahkan.'];
            }
        }
    }
}

header('Content-Type: application/json');
echo json_encode($response);
?>

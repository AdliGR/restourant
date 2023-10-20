<?php

include 'koneksi.php';

$sql = "SELECT * FROM menu";
$result = $koneksi->query($sql);

if ($result->rowCount() > 0) {
    $nomor = 1; // Inisialisasi nomor

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<tr>';
        echo '<td>' . $nomor . '</td>'; // Tampilkan nomor
        echo '<td>' . $row['nama_makanan'] . '</td>';
        echo '<td>' . $row['category'] . '</td>';
        echo '<td>Rp ' . number_format($row['harga'], 0, ',', '.') . '</td>';
        echo '<td>' . $row['deskripsi'] . '</td>';
        echo '<td><img src="' . $row['file_path'] . '" alt="' . $row['nama_makanan'] . '" width="150"></td>';
        echo '<td><a href="edit_menu.php?id=' . $row['id'] . '" class="btn bg-gradient-danger">Edit</a></td>';
        echo '<td><a href="deletemenu.php?id=' . $row['id'] . '" class="btn bg-gradient-info">Delete</a></td>';
        echo '</tr>';
        $nomor++;
    }
} else {
    echo '<tr><td colspan="8">Tidak ada data menu yang tersedia.</td></tr>';
}
?>

<?php
include 'koneksi.php';

$sql = "SELECT * FROM menu";
$result = $koneksi->query($sql);

if ($result->rowCount() > 0) {
    $nomor = 1;

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div class="card animated">';
        echo '<div class="card-body">';
        echo '<div class="row">';
        echo '<div class="col">' . $nomor . '</div>';
        echo '<div class="col"><img src="' . $row['file_path'] . '" alt="' . $row['nama_makanan'] . '" width="250"></div>';
        echo '<div class="col"><p>' . $row['nama_makanan'] . '</p></div>';
        echo '<div class="col"><p>' . $row['category'] . '</p></div>';
        echo '<div class="col"><p>Rp ' . number_format($row['harga'], 0, ',', '.') . '</p></div>';
        echo '<div class="col"><p>' . $row['deskripsi'] . '</p></div>';
        echo '<div class="col"><a href="edit_menu.php?id=' . $row['id'] . '" class="btn bg-gradient-danger">Edit</a></div>';
        echo '<div class="col"><a href="deletemenu.php?id=' . $row['id'] . '" class="btn bg-gradient-info">Delete</a></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '<hr>';
        $nomor++;
    }
} else {
    echo 'Tidak ada data menu yang tersedia.';
}
?>

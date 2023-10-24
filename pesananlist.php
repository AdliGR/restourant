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

$nama_user = $_SESSION['user'];

$sql = "SELECT * FROM pesanan WHERE nama_user = :nama_user";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(':nama_user', $nama_user, PDO::PARAM_STR);
$stmt->execute();

if ($stmt->rowCount() > 0) 
{
    $nomor = 1;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
    {
        echo '<div class="card animated">';
        echo '<div class="card-body">';
        echo '<div class="row">';
        echo '<div class="col">' . $nomor . '</div>';
        echo '<div class="col"><img src="' . $row['file_path'] . '" alt="' . $row['nama_makanan'] . '" width="150"></div>';
        echo '<div class="col"><p>' . $row['nama_makanan'] . '</p></div>';
        echo '<div class="col"><p>' . $row['category'] . '</p></div>';
        echo '<div class="col"><p>Rp ' . number_format($row['harga'], 0, ',', '.') . '</p></div>';
        echo '<div class="col"><p>' . $row['deskripsi'] . '</p></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<br>';
        echo '<hr>';
        $nomor++;
    }
} 
else 
{
    echo 'Tidak ada data menu pesanan yang tersedia.';
}
?>


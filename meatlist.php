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

$category = 'Meat';
$sql = "SELECT * FROM menu WHERE category = :category";
$stmt = $koneksi->prepare($sql);
$stmt->bindParam(':category', $category);
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
        echo '<div class="col"><a href="detailmenu.php?id=' . $row['id'] . '"><img src="' . $row['file_path'] . '" alt="' . $row['nama_makanan'] . '" width="150"></a></div>';
        echo '<div class="col"><a href="detailmenu.php?id=' . $row['id'] . '"><p>' . $row['nama_makanan'] . '</p></a></div>';
        echo '<div class="col"><p>' . $row['category'] . '</p></div>';

        echo '<div class="col">';
        if ($role == 'User') 
        {
            echo '<a href="pesan_process.php?id=' . $row['id'] . '" class="btn bg-gradient-info">Pesan</a>';
        } 
        else if ($role == 'Admin') 
        {
           
        } 
        else 
        {
            echo '<a href="login.php" class="btn bg-gradient-danger">Pesan</a>';
        }
        echo '</div>';

        if ($role == 'Admin') 
        {
            echo '<div class="col"><p>Rp ' . number_format($row['harga'], 0, ',', '.') . '</p></div>';
            echo '<div class="col"><p>' . $row['deskripsi'] . '</p></div>';
            echo '<div class="col"><a href="edit_menu.php?id=' . $row['id'] . '" class="btn bg-gradient-danger">Edit</a></div>';
            echo '<div class="col"><a href="deletemenu.php?id=' . $row['id'] . '" class="btn bg-gradient-info">Delete</a></div>';
        }
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
    echo 'Tidak ada data menu Meat yang tersedia.';
}
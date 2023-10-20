<?php
$host = "localhost"; 
$dbname = "uts_restorant"; 
$username = "root"; 
$password = ""; 

try {
    $koneksi = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $koneksi->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $koneksi->exec("SET NAMES utf8");

} catch (PDOException $e) {
    die("Koneksi gagal: " . $e->getMessage());
}

?>

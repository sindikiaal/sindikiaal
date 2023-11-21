<?php
$conn = new mysqli('localhost','root','','prodi_mahasiswa.sql');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


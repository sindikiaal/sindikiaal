<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $nim = $_GET['nim'];
    $sql = "DELETE FROM data_mahasiswa WHERE nim = '$nim'";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php?status=successhapus");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

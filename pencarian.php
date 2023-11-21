<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $prodi = $_POST['prodi'];
    $sql = "SELECT * FROM data_mahasiswa WHERE prodi = '$prodi'";
    $result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pencarian</title>
</head>
<body>
    <h2>Hasil Pencarian</h2>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Kode Prodi</th>
            <th>Aksi</th>
        </tr>

        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nim']}</td>
                        <td>{$row['nama']}</td>
                        <td>{$row['prodi']}</td>
                        <td>
                            <a href='editdata.php?nim={$row['nim']}'>Edit</a>
                            <a href='hapusdata.php?nim={$row['nim']}'>Hapus</a>
                        </td>
                    </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>Tidak ada data mahasiswa untuk prodi ini</td></tr>";
        }
        ?>

    </table>

    <a href="index.php">Kembali ke Data Mahasiswa</a>
</body>
</html>

<?php
}

$conn->close();
?>

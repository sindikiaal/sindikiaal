<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="tambahdata.css">
</head>
<body>
    <div class="header">
        <h2>Data Mahasiswa Universitas Gemilang Nusantara</h2>
    </div>

    <div class="body">
        <h2>Tambah Data Mahasiswa</h2>

        <?php include 'koneksi.php'; ?>
        <form action="tambahdata.php" method="post">
            <label for="nim">NIM:</label>
            <input type="text" id="nim" name="nim" required>
            <br>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            <br>
            <label for="prodi">Prodi:</label>
            <select id="prodi" name="prodi" required>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Teknik Elektro">Teknik Elektro</option>
                <option value="Teknik Kimia">Teknik Kimia</option>
                <option value="Teknik Industri">Teknik Industri</option>
                <option value="Teknik Sipil">Teknik Sipil</option>
                <option value="Arsitektur">Arsitektur</option>
                <option value="Matematika">Matematika</option>
                <option value="Teknik Geologi">Fisika</option>
                <option value="Farmasi">Biologi</option>
                <option value="Kimia">Kimia</option>
                <option value="Teknik Pertambangan">Manajemen Informatika</option>
                <option value="Teknik Mesin">Teknik Mesin</option>
                <option value="Teknik Material">Teknik Material</option>
                <option value="Teknik Geofisika">Teknik Geofisika</option>
                <option value="Teknik Sistem Energi">Teknik Sistem Energi</option>
                <option value="Teknik Geodesi">Teknik Geodesi</option>
                <option value="Rekayasa Kosmetik">Rekayasa Kosmetik</option>
                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                <option value="Arsitektur Lanskap">Arsitektur Lanskap</option>
                <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
            </select>
            <br>
            <button type="submit">Tambah Data</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nim = $_POST['nim'];
            $nama = $_POST['nama'];
            $prodi = $_POST['prodi'];

            $sql = "INSERT INTO data_mahasiswa (nim, nama, prodi) VALUES ('$nim', '$nama', '$prodi')";
            if ($conn->query($sql) === TRUE) {
                echo "Data berhasil ditambahkan.";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
        $conn->close();
        ?>

        <br>
        <a href="index.php">Kembali</a>
</div>

</body>
</html>

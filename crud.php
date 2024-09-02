<?php
// Koneksi ke database
$conn = new mysqli("localhost", "username", "password", "database_name");

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Query untuk mengambil data pegawai
$sql = "SELECT Tabel_Pegawai.*, Tabel_Jabatan.Nama_jabatan FROM Tabel_Pegawai 
        LEFT JOIN Tabel_Jabatan ON Tabel_Pegawai.Jabatan = Tabel_Jabatan.id";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="mt-4">Data Pegawai</h2>
        <a href="register.php" class="btn btn-success mb-2">Tambah Pegawai</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Jabatan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td>{$row['Id']}</td>
                                <td>{$row['Nik']}</td>
                                <td>{$row['Nama']}</td>
                                <td>{$row['Alamat']}</td>
                                <td>{$row['Jenis_kelamin']}</td>
                                <td>{$row['No_tlp']}</td>
                                <td>{$row['Nama_jabatan']}</td>
                                <td>
                                    <a href='edit.php?id={$row['Id']}' class='btn btn-warning btn-sm'>Edit</a>
                                    <a href='delete.php?id={$row['Id']}' class='btn btn-danger btn-sm'>Hapus</a>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='8' class='text-center'>Tidak ada data pegawai</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>

<?php
$conn->close();
?>
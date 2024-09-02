<html>

<head>
    <!-- <meta http-equiv="refresh" content="2; URL=tampil_le.php" /> -->
</head>

<body>
    <?php
    if ($_POST) {
        $ID = $_POST['ID'];
        $NIK = $_POST['NIK'];
        $Nama= $_POST['Nama'];
        $Alamat= $_POST['Alamat'];
        $Jenis_kelamin = $_POST['Jenis_kelamin'];
        $No_tlp = $_POST['No_tlp'];
        $Jabatan= $_POST['Jabatan'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if (empty($ID)) {
            echo "<script>alert('ID Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($NIK)) {
            echo "<script>alert('NIK Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($Nama)) {
            echo "<script>alert('Nama Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($Alamat)) {
            echo "<script>alert('Alamat Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($Jenis_kelamin)) {
            echo "<script>alert('Jenis_kelamin Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($No_tlp)) {
            echo "<script>alert('No_tlf Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($username)) {
            echo "<script>alert('username Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } elseif (empty($password)) {
            echo "<script>alert('password Tidak Boleh Kosong')</script>; location.href='tambah_pegawai.php'";
        } else {
            include "koneksi.php";
            $insert = mysqli_query($conn, "insert into pegawai (ID, NIK, Nama, Alamat , Jenis_kelamin, No_tlf, Jabatan, username, password) value ('" . $ID . "','" . $NIK . "','" . $Nama . "','" . $Alamat . "','" . $Jenis_kelamin . "','" . $No_tlf. "','" . $Jabatan . "','" . $username . "','" . $password . "')") or die(mysqli_error($conn));
            if ($insert) {
                echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
            }
        }
    }
    ?>

</html>
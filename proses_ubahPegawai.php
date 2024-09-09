<?php
if ($_POST) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $No_tlp = $_POST['No_tlp'];
    $id_jabatan = $_POST['id_jabatan'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($nama)) {
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('username tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "koneksi.php";
        if (empty($password)) {
            $update = mysqli_query($conn, "update pegawai set nik='" . $nik. "', nama='" . $nama . "', jenis_kelamin='" . $jenis_kelamin . "', No_tlp='" . $No_tlp . "',  username'" . $username . "',id_jabatan'" . $id_jabatan . "',  password='" . $password . "'") or die(mysqli_error($conn));
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=" . $id_pegawai . "';</script>";
            }
        } else {
            $update = mysqli_query($conn,
                "update pegawai set nik='" . $nik . "', nama='" . $nama . "', jenis_kelamin='" . $jenis_kelamin . "', No_tlp='" . $No_tlp . "',  username'" . $username . "',id_jabatan'" . $id_jabatan . "',  password='" . $password . "'" ) or die(mysqli_error($conn));
            if ($update) {
            if ($update) {
                echo "<script>alert('Sukses update pegawai');location.href='tampil_pegawai.php';</script>";
            } else {
                echo "<script>alert('Gagal update pegawai');location.href='ubah_pegawai.php?id_pegawai=" . $id_pegawai . "';</script>";
            }
        }
    }
}
}
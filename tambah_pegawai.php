<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>

<body>
    <h3>Tambah pegawai</h3>
    <form action="prosses_tambahPegawai.php" method="post">
        ID :
        <input type="int" name="ID" value="" class="form-control">
        <br>
        NIK :
        <input type="int" name="NIK" value="" class="form-control">
        <br>
        Nama :
        <input type="varchar" name="Nama" value="" class="form-control">
        <br>
        Alamat :
        <textarea name="alamat" class="form-control" rows="3"></textarea>
        <br>
        Jenis_kelamin :
        <select name="Jenis kelamin" class="form-control">
            <option></option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>
        <br>
        No_tlf :
        <textarea name="nomor telfon" class="form-control" rows="3"></textarea>
        <br>
        jabatan :
        <select name="id_jabatan" class="form-control">
            <option></option>
            <?php
            include "koneksi.php";
            $qry_jabatan = mysqli_query($conn, "select * from jabatan");
            while ($data_jabatan = mysqli_fetch_array($qry_jabatan)) {
                echo '<option value="' . $data_jabatam['id_jabatan'] . '">' . $data_jabatan['nama_jabatan'] . '</option>';
            }
            ?>
        </select>
        <br>
        Username :
        <input type="text" name="username" value="" class="form-control">
        <br>
        Password :
        <input type="password" name="password" value="" class="form-control">
        <br>
        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>v
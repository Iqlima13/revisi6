<?php
$conn = mysqli_connect("localhost", "root", "", "iqlima");


if (isset($_POST["submit"])) {
    $judul = $_POST["judul"];
    $deskripsi =  $_POST["deskripsi"];
    $foto = $_POST["foto"];
    $waktu = $_POST["waktu"];


    $simpan = "INSERT INTO berita
            VALUES(NULL,'$judul','$deskripsi','$foto','$waktu')";
    mysqli_query($conn, $simpan);

    if (mysqli_affected_rows($conn)) {
        header("location : ./konten/beranda.html");
    } else {
        mysqli_error($conn);
    }
}
?>

<div class="box">
    <h1 style="text-align : center; margin :20px">Tambah Berita Baru</h1>
    <form action="" method="POST" enctype="multipart/form-data">

        <div class="form-control">
            <label for="nm">Judul</label>
            <input type="text" name="judul" id="nm" required>
        </div>
        <div class="form-control">
            <label for="nm">Deskripsi</label>
            <input type="text" name="deskripsi" id="nm" required>
        </div>
        <div class="form-control">
            <label for="al">Foto</label>
            <textarea name="foto" id="" cols="30" rows="5"></textarea>
        </div>
        <div class="form-control">
            <label for="nm">Waktu</label>
            <input type="text" name="waktu">
        </div>
        <div class="form-button">
            <a href="adminlist.php"> <button style="background-color : #4890A0;" name="submit">Simpan</button></a>
            <a href="admin.php"></a><button style="background-color : #4890A0;">Batal</button>
        </div>
    </form>
</div>
<?php
require 'koneksi.php';

// INSERT
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $query = "INSERT INTO tamu(nama, email, komentar) VALUES('$nama', '$email', '$komentar')";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php");
        exit;
    } else {
        echo "Maaf, data gagal disimpan!";
    }
}

// DELETE
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM tamu WHERE id='$id'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php");
        exit;
    } else {
        echo "Maaf, data gagal dihapus!";
    }
}

//UPDATE

if (isset($_POST['ubah'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $komentar = $_POST['komentar'];

    $query = "UPDATE tamu SET nama='$nama', email='$email', komentar='$komentar' WHERE id='$id'";
    $sql = $koneksi->query($query);

    if ($sql) {
        header("Location:index.php");
        exit;
    } else {
        echo "Maaf, data gagal diubah!!";
    }
}

?>
<?php
require 'koneksi.php';
$id = $_GET['id'];
$query = $koneksi->query("SELECT * FROM tamu WHERE id='$id'");
$data = $query->fetch_assoc();
?>
        
        <h1>Edit Data Buku Tamu</h1>

        <form action="proses.php" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama"
                       value="<?= $data['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       value="<?= $data['email'] ?>">
            </div>
            <div class="mb-3">
                <label for="komentar" class="form-label">Komentar</label>
                <textarea class="form-control" id="komentar" rows="3" name="komentar"><?= $data['komentar'] ?></textarea>
            </div>
            <div>
                <input type="hidden" name="id" value="<?= $data['id'] ?>">
                <input type="submit" name="ubah" value="Update" class="btn btn-primary">
                <input type="reset" value="Reset" class="btn btn-secondary">
            </div>
        </form>
    

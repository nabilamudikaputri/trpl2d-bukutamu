<h2>List Data Buku Tamu</h2>
<a href='index.php?page=create' class='btn btn-primary'> Input Buku Tamu</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Komentar</th>
      <th scope="col">Waktu</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    require 'koneksi.php';
    $tampil = $koneksi->query("select * from tamu");
    $no=1;
    //looping data tamu
    // -> tanda objek
    while($data = $tampil->fetch_assoc()){
    ?>
        <tr>
            <th scope="row"><?= $no ?></th>
            <td><?= $data['nama'] ?></td>
            <td><?= $data['email'] ?></td>
            <td><?= $data['komentar'] ?></td>
            <td><?= $data['date_created'] ?></td>
            <td>  
                <a href="index.php?id=<?=$data['id']?> &page=edit" class= "btn btn-warning btn-sm">Edit</a>
                <a href="proses.php?id=<?=$data['id']?>" class= "btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
    <?php $no++; } ?>
  </tbody>
</table>

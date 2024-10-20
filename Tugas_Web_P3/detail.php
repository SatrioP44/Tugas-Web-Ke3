<?php
include 'database.php';
$db = new Database();


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->ambilData($id);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data Pengguna</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="container mt-3">
        <h1 class="text-center">Detail Pengguna</h1>
        <hr>
        <div class="card" style="width: 81rem;">
          <?php
            foreach($db->detailData($id) as $dataUser){
          ?>
          <img src="file/<?= $dataUser['foto']; ?>" class="card-img-top" alt="Foto" style="width: 250px; height: 250px;">
          <a href="profil.php?id=<?php echo $dataUser["id"]; ?>">Ubah Foto Profil</a>
          <div class="card-body">
            <h5 class="card-title">Detail Identitas</h5>   
            <p class="card-text">
              <strong>Nama          :</strong> <?= $dataUser['nama']; ?><br>
              <strong>Jenis Kelamin :</strong> <?= $dataUser['jeniskelamin']; ?><br>
              <strong>Alamat        :</strong> <?= $dataUser['alamat']; ?><br>
              <strong>No HP         :</strong> <?= $dataUser['nohp']; ?><br>
            </p>
            <?php
            }
            ?>
            <a href="index.php" class="btn btn-primary">Kembali</a>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

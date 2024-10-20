<?php
include 'database.php';
$db = new Database();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->ambilData($id);

    $db->profillama($_GET["id"]);
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Foto Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-3">
    <h1 class="text-center">Ubah Foto Profil</h1>
    <hr>
    <div class="card">
        <div class="card-body text-center">
        <?php
            foreach($db->detailData($id) as $dataUser){
          ?>
            <form enctype="multipart/form-data" method="POST" action="proses.php?id=<?php echo $dataUser["id"]; ?>&aksi=profilbaru">
            <input type="hidden" name="id" value="<?php echo $dataUser["id"]; ?>">
                <div class="mb-3">
                    <label for="foto" class="form-label">Ganti Foto Profil</label>
                    <input type="file" class="form-control" id="foto" name="foto" required>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Foto</button>
            </form>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

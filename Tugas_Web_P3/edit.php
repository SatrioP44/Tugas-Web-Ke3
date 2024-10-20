<?php
    include "database.php";
    $db = new Database;
    if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $dataUser = $db->detailData($id);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">
        <!-- Form Edit Data -->
        <form enctype= "multipart/form-data" method="POST" action="proses.php?aksi=update">
            <?php
                foreach($db->detailData($id) as $dataUser){
            ?>

            
            <div class="mb-3">

                <input type="hidden" name="id" value="<?php echo $dataUser["id"]; ?>">

                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser ["nama"] ?>" >

                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskelamin" class="form-select mb-4" >
                    <option value="" disabled <?php if(!$dataUser["jeniskelamin"]) echo 'selected'; ?>>Pilih jenis kelamin</option>
                    <option value="Laki - Laki" <?php if($dataUser["jeniskelamin"] == "Laki - Laki") echo 'selected'; ?>>Laki-laki</option>
                    <option value="Perempuan" <?php if($dataUser["jeniskelamin"] == "Perempuan") echo 'selected'; ?>>Perempuan</option>
                </select>

                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser ["alamat"] ?>" >

                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="nohp" name="nohp" value="<?php echo $dataUser ["nohp"] ?>" >
            
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

            <?php
                }
            ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
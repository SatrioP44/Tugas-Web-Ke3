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
        <h1 class="text-center">CRUD OOP PHP</h1>
        <h4>Tambah Data</h4>
        <hr class="mt-0">
        <!-- Form Tambah Data -->
        <form enctype= "multipart/form-data" method="POST" action="proses.php?aksi=tambah">
            <div class="mb-3">
                <label for="nama" class="form-label" >Nama</label>
                <input type="text" class="form-control mb-4" id="nama" name="nama" placeholder="Masukkan nama" required>

                <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
                <select id="jeniskelamin" name="jeniskelamin" class="form-select mb-4" required>
                    <option value="" disabled selected>Pilih jenis kelamin</option>
                    <option value="Laki - Laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control mb-4" id="alamat" name="alamat" placeholder="Masukkan alamat" required>

                <label for="nohp" class="form-label">No HP</label>
                <input type="text" class="form-control mb-4" id="nohp" name="nohp" placeholder="Masukkan no hp" required>

                <label for="foto" class="from-label">Foto / Gambar</label>
                <input type="file" class="form-control mb-4" id="foto" name="foto" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
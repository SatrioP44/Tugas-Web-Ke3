<?php
    include "database.php";
    $db = new Database();
    $aksi = $_GET["aksi"];

    if ($aksi == "tambah") {
        $foto = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $uniqueName = uniqid() . '_' . $foto;

        $target_directory = 'file/';
        $target_file = $target_directory . basename($uniqueName);

        if (move_uploaded_file($file_tmp, $target_file)) {
            $db->tambahData($_POST["nama"], $_POST["jeniskelamin"], $_POST["alamat"], $_POST["nohp"], $uniqueName);
            header("location:index.php");
        } else {
            echo "Gagal mengunggah file";
        }
    }

    elseif($aksi == "hapus"){
        $db->hapusData($_GET["id"]);
        header("location:index.php");
    }

    elseif($aksi == "update"){
        $db->updateData($_POST["id"], $_POST["nama"], $_POST["jeniskelamin"], $_POST["alamat"], $_POST["nohp"]);
        header("location:index.php");
    }

    elseif ($aksi == "profilbaru"){
        $db->profillama($_GET["id"]);

        $foto = $_FILES['foto']['name'];
        $file_tmp = $_FILES['foto']['tmp_name'];
        $uniqueName = uniqid() . '_' . $foto;

        $target_directory = 'file/';
        $target_file = $target_directory . basename($uniqueName);

        if (move_uploaded_file($file_tmp, $target_file)) {
            $db->updateProfil($_POST["id"],  $uniqueName);
            header("location:index.php");
        } else {
            echo "Gagal mengunggah file";
        }
    }
?>
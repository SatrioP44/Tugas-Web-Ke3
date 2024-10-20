<?php
    class Database{
        public $host = "localhost";
        public $user = "root";
        public $password = "";
        public $database = "db_php_0044";
        public $connect;

        function __construct(){
            $this->connect = mysqli_connect($this->host, $this->user, $this->password);
            mysqli_select_db($this->connect, $this->database);
        
            // Pengujian Koneksi Database
            //if ($this->connect->connect_error) {
            //    die("Koneksi Gagal !" . $this->connect->connect_error);
            //}
            //echo "Koneksi Berhasil";
        }

        function tampilData(){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0044");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }

        function detailData($id){
            $data = mysqli_query($this->connect, "SELECT * FROM tb_user_0044 WHERE id = '$id'");
            $rows = mysqli_fetch_all($data, MYSQLI_ASSOC);
            // var_dump($rows);
            return $rows;
        }

        function tambahData($nama, $jeniskelamin, $alamat, $nohp, $foto){
            $data = mysqli_query($this->connect, "INSERT INTO tb_user_0044 VALUES (NULL, '$nama', '$jeniskelamin','$alamat', '$nohp', '$foto')");
        }

        function hapusData($id) {
            $datafoto = mysqli_query($this->connect, "SELECT foto FROM tb_user_0044 WHERE id = '$id'");
            $data = mysqli_fetch_assoc($datafoto);
        
            if ($data) {
                $file = 'file/' . $data['foto'];
        
                if (file_exists($file)) {
                    unlink($file);
                }
        
                mysqli_query($this->connect, "DELETE FROM tb_user_0044 WHERE id = '$id'");
            }
        }

        function ambilData($id){
            $datafoto = mysqli_query($this->connect, "SELECT foto FROM tb_user_0044 WHERE id = '$id'");
            $data = mysqli_fetch_assoc($datafoto);
            return $data;
        }

        function updateData($id, $nama, $jeniskelamin, $alamat, $nohp) {
            $data = mysqli_query($this->connect, "UPDATE tb_user_0044 SET nama = '$nama', jeniskelamin = '$jeniskelamin', alamat = '$alamat', nohp = '$nohp' WHERE id = '$id'");
        }
        
        function profillama($id) {
            $datafoto = mysqli_query($this->connect, "SELECT foto FROM tb_user_0044 WHERE id = '$id'");
            $data = mysqli_fetch_assoc($datafoto);
        
            if ($data) {
                $file = 'file/' . $data['foto'];
        
                if (file_exists($file)) {
                    unlink($file);
                }
            }
            return $id;
        }

        function updateProfil($id, $foto) {
            $data = mysqli_query($this->connect, "UPDATE tb_user_0044 SET foto = '$foto' WHERE id = '$id'");
        }
    }
?>
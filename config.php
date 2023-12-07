<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class database{
            var $host = "localhost";
            var $username = "root";
            var $password = "";
            var $database = "sewa_buku";
            var $koneksi = "";
            function __construct(){
                $this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
                if(mysqli_connect_errno()){
                    echo "koneksi database gagal:" .mysqli_connect_error();
                }
            }
            function tampil_data(){
                $data = mysqli_query($this->koneksi, "SELECT * FROM data_peminjam");
                while ($row = mysqli_fetch_array($data)){
                    $hasil[]=$row;
                }
                return $hasil;
            }
        }
    ?>
</body>
</html>
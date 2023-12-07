<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'config.php';
    $db = new Database();
    ?>
    <h3> Tambah Data Peminjam</h3>
    <form action="simpan_data_peminjam.php" method="post">
    <table>
        <tr>
            <td>Kode Peminjam</td>
            <td><input type="text" name="kode_peminjam"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td><input type=

    
</body>
</html>
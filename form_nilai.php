<?php 
require_once 'dbkoneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            max-width: 300px;
            margin: 0 auto;
        }
        label {
            margin-bottom: 5px;
        }
        input, button {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form method="post" action="proses.php">
        <label for="nama">Nama Mahasiswa:</label>
        <input type="text" id="nama" name="nama">

        <label for="nim">Nim:</label>
        <input type="text" id="nim" name="nim">

        <label for="jurusan">Prodi:</label>
        <input type="text" id="jurusan" name="jurusan">

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester">

        <input type="submit" name="proses" type="submit" value="Simpan"/>
    </form>
</body>
</html>

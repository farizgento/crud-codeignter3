<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST" action="<?php echo site_url('mahasiswa/store'); ?>">
        <label for="">nim</label><br>
        <input type="number" name="nim">
        <br>
        <label for="">nama</label><br>
        <input type="text" name="nama">
        <br>
        <label for="">alamat</label><br>
        <input type="alamat" name="alamat">
        <button type="subit">kirim</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form method="POST" action="<?php echo site_url('mahasiswa/update/'.$mahasiswa->id); ?>">
        <label>NIM</label>
        <input type="text" name="nim" value="<?php echo $mahasiswa->nim; ?>" required><br>
        <label>Nama</label>
        <input type="text" name="nama" value="<?php echo $mahasiswa->nama; ?>" required><br>
        <label>Alamat</label>
        <input type="text" name="alamat" value="<?php echo $mahasiswa->alamat; ?>" required><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

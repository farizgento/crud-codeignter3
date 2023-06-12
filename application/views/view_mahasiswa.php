<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    Hallo <?php echo $nama_mahasiswa ?>
    <br>
    <h4>Daftar Nama Dosen</h4>
    <table border="1">
        <tr>
            <td>Niy</td>
            <td>Nama</td>
            <td>Alamat</td>
        </tr>
       <?php foreach($dosen as $data):?>
        <tr>
            <td><?php echo $data['niy']?></td>
            <td><?php echo $data['nama']?></td>
            <td><?php echo $data['alamat']?></td>
        </tr>
        <?php endforeach?>
    </table>
    <br>
    <br>
    <h4>Daftar Nama Mahasiswa</h4>
    <a href="<?php echo site_url('mahasiswa/create/'); ?>"><button>Tambah</button></a>
    <table border="1">
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Aksi</td>
            
        </tr>
        <?php foreach($data_mahasiswa as $data):?>
        <tr>
            <td><?php echo $data->nim?></td>
            <td><?php echo $data->nama?></td>
            <td><?php echo $data->alamat?></td>
            <td>
                <a href="<?php echo site_url('mahasiswa/edit/'.$data->id); ?>"><button>edit</button></a>
                <a href="<?php echo site_url('mahasiswa/delete/'.$data->id); ?>"><button>delete</button></a>
            </td>
        </tr>
        <?php endforeach?>
    </table>
    
    <br>
    
</body>
</html>
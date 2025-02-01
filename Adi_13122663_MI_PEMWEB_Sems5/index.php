<?php
require 'config.php';

$sql =  "SELECT * FROM tb_pegawai";
$result = mysqli_query($conn, $sql);

if(isset($_POST['submit'])){
    $nip = $_POST['nip'];
    $nama = $_POST['nama'];
    $jabatan = $_POST['jabatan'];
    $email = $_POST['email'];

    $query = "INSERT INTO tb_pegawai(nip,nama,jabatan,email) VALUES('$nip','$nama','$jabatan','$email')";
    mysqli_query($conn, $query);
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    <h1>Tambah Pegawai</h1>
    
    <form action="" method="post">
    <table border="1">

<tr>
    <td><label for="">NIP</label></td> 
    <td><input type="text" name="nip" require></td>

    <td><label for="">Nama</label></td> 
    <td><input type="text" name="nama" require></td>

    <td><label for="">Jabatan</label></td>
    <td><input type="text" name="jabatan" require></td>

    <td><label for="">Email</label></td>
    <td><input type="text" name="email" require></td>
    
</tr>

<tr>
<td><button type="reset">Reset</button></td>
<td><button type="submit" name="submit">Tambah Data</button></td>
</tr>

    </table>
    </form>

    <h1>Daftar Pegawai</h1>
    <table border="1">
    <tr>
    
    <th>ID</th>
    <th>NIP</th>
    <th>Nama</th>
    <th>Jabatan</th>
    <th>Email</th>
    
    </tr>
    <?php while ($row = mysqli_fetch_assoc($result)); ?>
    <tr>
    <td><?=$row['id'];?></td>
    <td><?=$row['nip'];?></td>
    <td><?=$row['nama'];?></td>
    <td><?=$row['jabatan'];?></td>
    <td><?=$row['email'];?></td>
    <td>
    <a href="delete.php?id=<?=$row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')">Delete</a>
    </td>
    </tr>
    </table>
</body>
</html>

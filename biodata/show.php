<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan CRUD - Show Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $biodata = new Biodata();
    foreach ($biodata->show($_GET['id']) as $data) {
        $id     = $data['id'];
        $nama   = $data['nama'];
        $alamat = $data['alamat'];
        $jk     = $data['jenis_kelamin'];
        $agama  = $data['agama'];
        $lahir  = $data['tgl_lahir'];
        $umur   = $data['umur'];
    }
    ?>
    <fieldset>
        <legend>Show Data Biodata</legend>
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" value="<?php echo $nama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" cols="40" readonly><?php echo $alamat; ?></textarea></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><input type="text" name="jenis_kelamin" value="<?php echo $jk; ?>" readonly></td>
            </tr>
            <tr>
                <th>Agama</th>
                <td><input type="text" name="agama" value="<?php echo $agama; ?>" readonly></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tgl_lahir" value="<?php echo $lahir; ?>" readonly></td>
            </tr>
            <tr>
                <th>Umur</th>
                <td><input type="number" name="umur" value="<?php echo $umur; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>
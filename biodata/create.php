<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Data Biodata</title>
</head>
<body>
<fieldset>
    <legend>Input Data Biodata</legend>
    <form action="/biodata/proses.php?aksi=tambah" method="post">
        <table>
            <tr>
                <th>Nama</th>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><textarea name="alamat" required></textarea></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <th>Agama</th>
                <td><select name="agama">
                                              <option value="islam">islam
                                              <option value="Protestand">Protestand
                                              <option value="Konghucu">Konghucu
                                              <option value="Budha">Budha
                                              <option value="Katolik">Katolik
                                              </option>
                                              </select></td>
            </tr>
            <tr>
                <th>Tanggal Lahir</th>
                <td><input type="date" name="tgl_lahir" required></td>
            </tr>
            <tr>
                <th><input type="submit" name="save" value="simpan"></th>
                
            </tr>
        </table>
        </form>
    </fieldset>
    
</body>
</html>
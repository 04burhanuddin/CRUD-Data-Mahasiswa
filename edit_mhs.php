<!-- Untuk edit data mahasiswa -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form edit data mahasiswa</title>
    </head>

    <body>
        <h3>Edit Data Mahasiswa</h3>
        <?php
    include "koneksi.php";
    $editData = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim='$_GET[nim]'");
    $d = mysqli_fetch_array($editData);
    ?>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" size="18" value="<?php echo $d['nim']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="18" value="<?php echo $d['nama']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <?php if ($d['jk'] == 'L') {
                        echo '<input type="radio" name="jk" value="L" checked="checked">Laki-Laki';
                        echo '<input type="radio" name="jk" value="P"> Perempuan';
                    } else {
                        echo '<input type="radio" name="jk" value="L">Laki-Laki';
                        echo '<input type="radio" name="jk" value="P" checked="checked">Perempuan';
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="prodi">
                            <option value="<?php echo $d['prodi']; ?>"><?php echo $d['prodi']; ?></option>
                            <option value="Teknik Informatika">Teknik Informatika</option>
                            <option value="Sistem Informasi">Sistem Informasi</option>
                            <option value="Manajemen Informatika">Manajemen Informatika</option>
                            <option value="Teknik Komputer">Teknik Komputer</option>
                            <option value="Komputer Akuntansi">Komputer Akuntansi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" size="18" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
        <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $update = mysqli_query($connect, "UPDATE mahasiswa SET nama='$_POST[nama]', jk='$_POST[jk]', 
                    prodi='$_POST[prodi]', alamat='$_POST[alamat]' WHERE nim='$_POST[nim]'");
        if ($update) {
            header('location:data_mhs.php');
        } else {
            echo "Gagal Mengupdate Data Mahasiswa !!!";
        }
    }
    ?>
    </body>

</html>
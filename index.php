<!-- Halaman utama penambahan data mahasiswa -->
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form input data mahasiswa</title>
    </head>

    <body>
        <h3>Input Data Mahasiswa</h3>
        <form method="POST" action="">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim" size="18"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" size="18"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <input type="radio" name="jk" value="L">Laki-Laki
                        <input type="radio" name="jk" Value="P">Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>
                        <select name="prodi">
                            <option value="">- Pilih -</option>
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
                    <td><input type="text" name="alamat" size="18"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>
            </table>
        </form>
        <?php
    include "koneksi.php";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $simpan = mysqli_query($connect, "INSERT INTO mahasiswa(nim, nama, jk, prodi, alamat)
                    VALUES('$_POST[nim]', '$_POST[nama]', '$_POST[jk]', '$_POST[prodi]', '$_POST[alamat]')");
        if ($simpan) {
            header('location:data_mhs.php');
            echo "Gagal Menyimpan Data Mahasiswa !!!";
        }
    }
    ?>
    </body>

</html>
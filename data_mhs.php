<!-- Untuk menampilkan data yang telah di tambahkan dan data yang talah di edit
dan sisa data yang tidak di hapus -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<!-- body -->
    <body>
        <h3>Data-Data Mahasiswa yang berhasil di Simpan</h3>
        <a href="index.php">Tambah Data Mahasiswa</a>
        <!-- table agar formnya rapi tanpa menggunakan css-->
            <table border="1" cellspacing="0" width="50%">
                <!-- tr -->
                    <tr>
                        <th>No.</th>
                        <th>NIM</th>
                        <th>Nama Mahasiswa</th>
                        <th>L/P</th>
                        <th>Jurusan</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                <!-- end tr -->
                <?php
                    include"koneksi.php";
                    //pemberian no.urut pada data-data mahasiswa
                    $No=1;
                    $sqlMhs = mysqli_query($connect, "SELECT * FROM mahasiswa ORDER BY nim ASC");
                    while ($a = mysqli_fetch_array($sqlMhs)){
                        echo "<tr>
                            <td align='center'>$No</td>
                            <td>$a[nim]</td>
                            <td>$a[nama]</td>
                            <td align='center'>$a[jk]</td>
                            <td>$a[prodi]</td>
                            <td>$a[alamat]</td>
                            <td align='center'>
                                <a href='edit_mhs.php?nim=$a[nim]'>Edit</a> | 
                                <a href='hapus_mhs.php?nim=$a[nim]'>Hapus</a>
                            </td>
                        </tr>";
                        $No++;
                    }
                ?>
            </table>
        <!-- end table -->
    </body>
<!-- end body -->
</html>
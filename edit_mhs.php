<!-- Untuk edit data mahasiswa -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form edit data mahasiswa</title>
</head>
<!-- body -->
    <body>
        <h3>Edit Data Mahasiswa</h3>
        <?php
            //include file koneksi.php
            include "koneksi.php";
            $editData = mysqli_query($connect, "SELECT * FROM mahasiswa WHERE nim='$_GET[nim]'");
            $d = mysqli_fetch_array($editData);
        ?>
        <!-- form -->
            <form method="POST" action="">
                <!-- table agar formnya rapi tanpa menggunakan css-->
                    <table>
                        <tr>
                            <td>NIM</td>
                            <!-- nim tidak bisa di ubah hanya bisa di baca -->
                            <td><input type="text" name="nim" size="18" value="<?php echo $d['nim']; ?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td><input type="text" name="nama" size="18" value="<?php echo $d['nama']; ?>"></td>
                        </tr>
                        <!-- radio button -->
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>
                                    <input type="radio" name="jk" value="L">Laki-Laki
                                    <input type="radio" name="jk" Value="P">Perempuan
                                </td>
                            </tr>
                        <!-- end radio button -->
                        <!-- dropdown -->
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
                        <!-- end dropdown -->
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" size="18" value="<?php echo $d['alamat']; ?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="Update"></td>
                        </tr>
                    </table>
                <!-- end table -->
            </form>
        <!-- end form -->
        <!-- script php untuk proses data yang sudah di edit -->
            <?php
                //jika ada request POST dari dengan click update maka data akan di simpan
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    //update data kedalam tabel mahasiswa
                    $update = mysqli_query($connect,"UPDATE mahasiswa SET nama='$_POST[nama]', jk='$_POST[jk]', 
                    prodi='$_POST[prodi]', alamat='$_POST[alamat]' WHERE nim='$_POST[nim]'");
                    //jika berhasil di update maka akan di arahkan ke data_mhs.php
                    if($update){
                        header('location:data_mhs.php');
                    }else{
                        //pesan jika gagal update data
                        echo"Gagal Mengupdate Data Mahasiswa !!!";
                    }
                }
            ?>
        <!-- end script -->
    </body>
<!-- end body -->
</html>
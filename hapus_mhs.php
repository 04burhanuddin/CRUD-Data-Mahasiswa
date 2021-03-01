<!--Untuk menghapus data mahasiswa yang ada pada tabel Mahasiswa -->
<?php
    include"koneksi.php";
    $hapus = mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim='$_GET[nim]'");
    if($hapus){
        //kondisi jika berhasil di hapus
        header('location:data_mhs.php');
    }else{
        //pesan jika gagal menghapus data
        echo "Gagal Menghapus Data Mahasiswa !!!";
    }
?>
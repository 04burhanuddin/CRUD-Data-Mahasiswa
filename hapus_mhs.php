<!--Untuk menghapus data mahasiswa yang ada pada tabel Mahasiswa -->
<?php
include "koneksi.php";
$hapus = mysqli_query($connect, "DELETE FROM mahasiswa WHERE nim='$_GET[nim]'");
if ($hapus) {
    header('location:data_mhs.php');
} else {
    echo "Gagal Menghapus Data Mahasiswa !!!";
}
?>
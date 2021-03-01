## Panduan Penggunaan

- Buat sebuah database di `phpmyadmin` dengan nama database `akademik`
- Lakukan <b>Import</b> database dari folder `database` kedalam database yang dibuat pada phpmyadmin
- Buat sebuah file baru dengan nama file `koneksi.php` untuk mengatur koneksi ke database sebagai berikut :
  ```php
      <?php
      $connect = mysqli_connect("hostname", "username", "password", "akademik");
      ?>
  ```
  - hostnama deafult localhost
  - username biasanya root default
  - password jika ada kalo tidak di kosongkan saja
  - akademik nama database.
- Terakhir jalankan aplikasi Dil Local server anda.

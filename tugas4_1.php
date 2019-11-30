<?php
  $hargabeli = 6000; //dicontoh ada 8000 rupiah yang tidak masuk akal
  $hargajual = 7500;
  $keuntungan = 300;

  $jual = $hargajual - $hargabeli;
  $hasil = $jual / $keuntungan;

  echo "Harga Beli = Rp. $hargabeli <br>";
  echo "Harga Jual = Rp. $hargajual <br>";
  echo "Keuntungan = Rp. $keuntungan <br>";
  echo "Jumlah Kambing yang di beli adalah $hasil ekor";

 ?>

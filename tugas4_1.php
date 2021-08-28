<?php
  echo "Harga Beli = Rp 8000</br>";
  echo "Harga Jual = Rp 7500</br>";
  echo "Keuntungan = Rp 300</br>";
  echo "Berapa Jumlah kambing yang dibeli? Jawabah : ... ekor</br>";
  echo "Jawab : </br>";
  $beli = 8000;
  $jual = 7500;
  $rugi = 300;
  $ekor = ($beli-$jual)/$rugi;
  $ekorbulat = ceil($ekor);
  echo "Jumlah kambing = (beli-jual)/kerugian = ($beli-$jual)/$rugi = $ekor dibulatkan = $ekorbulat ekor";
 ?>

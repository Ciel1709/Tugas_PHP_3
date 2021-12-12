<?php 
    $tabungan_awal = 150000;
    $bunga = 12.5;
    $tabungan_akhir = ($bunga/100*$tabungan_awal)+$tabungan_awal;
     echo "Tabungan Awal = Rp ".$tabungan_awal;
     echo "<br> Bunga Setahun = ".$bunga."%";
     echo "<br> Total Tabungan Setahun = ?";
     echo "<br> Jawaban : Rp ".$tabungan_akhir;
?>
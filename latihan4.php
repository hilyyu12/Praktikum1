<?php 
    $nama = 'Firdausa';
    $kelas =" XI";
    function tampil_nama() 
        { 
            global $nama, $kelas;
         echo "Nama Saya : ".$nama;
         echo $kelas;
        } 
    tampil_nama(); 
?>
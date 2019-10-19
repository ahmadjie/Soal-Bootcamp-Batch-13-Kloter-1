<?php

function hitungKembalian($belanja,$bayar){


    echo "Total Harga Belanja $belanja";
    echo "<br>";
    echo "Uang Yang Dimasukan $bayar";
    echo "<br><br>";


    //deklarasi nilai awal biar engga undifined
    $lembar50k = 0;
    $lembar20k = 0;
    $lembar10k = 0;
    $lembar5k = 0;
    $sisa = 0;

    //hitung kembalian
    $kembalian = $bayar - $belanja;

    echo "Total Kembalian $kembalian Dengan Pecahan Uang Senilai : ";
    echo "<br>";

    //menghitung lembar 50000
    if($kembalian >= 50000){

        $lembar50k = floor(($kembalian / 50000));
        $kembalian = $kembalian % 50000;
    }

    //menghitung lembar 20000
    if($kembalian >= 20000 && $kembalian < 50000){

        $lembar20k = floor(($kembalian / 20000));
        $kembalian = $kembalian % 20000;
    }

    //menghitung lembar 10000
    if($kembalian >= 10000 && $kembalian < 20000){

        $lembar10k = floor(($kembalian / 10000));
        $kembalian = $kembalian % 10000;
    }

    //menghitung lembar 5000
    if($kembalian >= 5000 && $kembalian < 10000){

        $lembar5k = floor(($kembalian / 5000));
        $kembalian = $kembalian % 5000;
    }
    
    if($kembalian < 5000){
    //hitung sisa dari total
        $sisa = $kembalian % 50000;
    }
    
    //cek apakah uang yang dimasukan kurang dari total bayar
    if($sisa >= 0){
    echo "$lembar50k Rp.50000";
    echo "<br>";
    echo "$lembar20k Rp.20000";
    echo "<br>";
    echo "$lembar10k Rp.10000";
    echo "<br>";
    echo "$lembar5k Rp.5000";
    echo "<br><br>";
    echo "Sisa Kembalian Akan Disumbangkan Sebesar Rp.$sisa";
    }else{
        echo "Uang yang anda masukan kurang";
    }

}

//masukan parameter pertama total belanja parameter kedua uang yang dibayar
echo hitungKembalian(37500,100000);

?>
<?php

function hitungParkir($jam){
    //cek apakah nilai value adalah bilangan bulat
    if(is_int($jam)){

        //jika lama parkir kurang dari 3jam
        if($jam <= 3){
            echo "Lama Parkir $jam jam <br>";
            $biaya = 2000 * $jam;
            echo "Biaya Parkir Rp.$biaya";
        }else{
            $biaya = ( 2000 * 3 ) + 1000*($jam - 3);
            
            //jika total biaya lebih dari 10000
            if($biaya > 10000){
                
                $biaya = 10000;
                return "Lama Parkir $jam jam <br> Biaya Parkir Rp.$biaya";
            }
            //jika tidak lebih dari 10000 dan lebih dari 3 jam
            return "Lama Parkir $jam jam <br> Biaya Parkir Rp.$biaya";
        }

    }else{
        echo "Tolong Masukan Nilai Bulat";
    }
}

// isi parameter dengan value lama parkir

echo hitungParkir(3);

?>
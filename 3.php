<?php

function drawImage($value){

if($value % 2 == 1){    

// onehalf_var nantinya nilainya bisa bertambah / berkurang, sedangkan half tetap
$onehalf 	 = floor($value / 2);
$onehalf_var = $onehalf;
$samadengan  = '=';
$add 		 = '@';

echo '<div style="font:bold 50px ; line-height:50px; letter-spacing : 25px">';


for ($baris = 1; $baris <= $value; $baris++){
    for($kolom = 1; $kolom <= $value; $kolom++){

        if($kolom > $onehalf_var && $kolom <=($value - $onehalf_var)){
            $char = $add;
        }else{
            $char = $samadengan;
      }

        echo $char;
    }

	if($baris <= $onehalf){
        $onehalf_var--;
    }else{
        $onehalf_var++;
    }

	echo '<br/>';
        }
    echo '</div>';
    }else{
        echo"Nilai Parameter Harus Ganjil";
    }
}
//masukan parameter panjang horizontal vertikal
echo drawImage(5);


?>
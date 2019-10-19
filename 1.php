<?php

$keys = ['dumb','ways','the','best'];
$word = '';
$text = 'the';
for( $i = 0; $i < count($keys); $i++ ){
    
    
    if($text == $keys[$i]){
        echo "$keys[$i] => true<br>";
    }else{
        echo "$keys[$i] => false<br>";
    }
}



?>
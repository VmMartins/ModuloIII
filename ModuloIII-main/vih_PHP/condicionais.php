<?php
$nome= "Maria";
$idade="";

if($idade >= 18 && $idade < 70){
   echo"{$nome} vota!<br>";
}else if($idade < 16){
    echo"{$nome} não vota!<br>";
}else{
    echo"{$nome} voto facultativo! <br>";
}

if($idade <= 12){
    echo"{$nome} é criança<br>";
}else if($idade > 12 && $idade < 18){
    echo"{$nome} é adolescente!<br>";
}//else{
   // echo"{$nome} é adulta <br>";
//}

?>
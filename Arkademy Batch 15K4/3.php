<?php
function kelipatan($k){
    for($i=1; $i <=$k ;$i++)
    if($i % 3== 0 && $i % 7 == 0){
        echo "Arkademy, ";
    }else if($i % 3 == 0){
        echo "Arka, " ;
    }else if($i % 7 == 0){
        echo "Demy, ";
    }else{
        echo $i .",";
    }
}

kelipatan(43)
?>
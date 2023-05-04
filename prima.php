<?php
    $bil;
    $bilangan = $_GET['bilangan3'];
    for($i=1; $i<=$bilangan; $i++){
        $bil=0;
        for($j=1; $j<=$i; $j++){
            if($i%$j==0){
                $bil = $bil+1;
            }
        }
        if($bil==2)
        echo $i."<br>";
    }
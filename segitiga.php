<?php
    $bilangan = $_GET['bilangan'];
    
    for($i=0; $i<=$bilangan; $i++){
        for($j=0; $j<=$i; $j++){
            echo "*";
        }
        echo "<br>";
    }
    

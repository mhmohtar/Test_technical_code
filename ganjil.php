<?php
    $bilangan = $_GET['bilangan2'];
    
    for($x=1; $x<=$bilangan; $x++){
        if($x%2!=0){
            echo "Bilangan Ganjil : ". $x."<br>";
        }
    }
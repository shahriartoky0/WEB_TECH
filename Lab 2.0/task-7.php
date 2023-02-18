<?php

print( "PRINTING THE STAR PATTERN NOW \r\n");
function print_star (){
    for($i=1; $i<4 ;$i++){
        for ($j=1; $j<=$i ;$j++){
            echo "*";
        }
        echo "\r\n";
    }
    
}
print(print_star());
print( "PRINTING THE NUMERIC PATTERN NOW \r\n");
function print_number(){
    for($i=1; $i<4 ;$i++){
        $s=1;
        for ($j=4; $j>$i ;$j--){
            echo $s.' ';
            $s=$s+1;
        }
        echo "\r\n";
    }
    
}
print(print_number());

print( "PRINTING THE ALPHABETIC PATTERN NOW \r\n");
//printing letters now 
function print_letters (){
    $s='A';
    for($i=1; $i<4 ;$i++){
        for ($j=1; $j<=$i ;$j++){
            echo $s.' ';
            $s++;
        }
        echo "\r\n";
    }
    
}
print(print_letters());


?>
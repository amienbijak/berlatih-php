<?php

function papan_catur($angka) {
    $catur = "";
    for($y=0; $y<=$angka; $y++){
        for($x=0; $x <=$angka; $x++){
            if(($x+$y)%2==0){
                $catur.= " ";
            } else {
                $catur.= "#";
            }       
        }
        echo $catur."<br>";        
    }
    echo $catur."<br>";
}

// TEST CASES
echo papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/
echo papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
<?php

function palindrome_angka($angka) {
  
  
  
  $terbalik = "";
  $pjg = strlen($angka);
  for($i=($pjg-1); $i>=0;$i--){
      $terbalik .= $angka[$i];                
  }
  $cek = ($terbalik == $angka ? "True" : "False");
  echo "Palindrome Check : " . $cek . "<br>";}

// TEST CASES
echo palindrome_angka(8); // 9
echo palindrome_angka(10); // 11
echo palindrome_angka(117); // 121
echo palindrome_angka(175); // 181
echo palindrome_angka(1000); // 1001

?>
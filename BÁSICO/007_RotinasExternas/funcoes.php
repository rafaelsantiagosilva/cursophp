<?php 
function eh_par($n){
     if($n%2==0){
          echo "É par\n";
     } else {
          echo "É ímpar\n";
     }
}

function eh_primo($n){
     $status = 0;
     for($i=1; $i<=$n; $i++){
          if($n % $i == 0){
               $status++;
          }

          if($status > 2){
               break;
          }
     }

     if($status > 2){
          echo "Não é primo\n";
     } else {
          echo "É primo\n";
     }
}
?>
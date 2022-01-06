<?php
  function addnumbers($num){
      $number = 0;
      for($i = 1; $i <=$num; $i++){
          if($i%3 == 0 OR $i%5==0)
          $number +=$i;
      }
      echo "sum: ".$number;
  }
  addnumbers(1000)
?>



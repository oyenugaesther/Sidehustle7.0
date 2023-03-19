<?php
 $voter = "voter";
 $pvc = "pvc";
 $age = 18;
 $ward = 020;
  if ($voter >= $age && $pvc || $ward){
    echo "Voter eligible to vote";
  }
  else 
    echo "not eligable to vote";
  
?>
<?php 

function DNA_strand($dna) {

$dnaInitialArray = explode(",", $dna);
$dnaFinalArray = [];

var_dump($dnaInitialArray);

for($i=0;$i<sizeof($dnaInitialArray);$i+=1)
{  
  if($dnaInitialArray[$i] == 'A')
  {
    $dnaFinalArray[$i] = 'T';
  }
    if($dnaInitialArray[$i] = 'T')
  {
    $dnaFinalArray[$i] += 'A';
  }
    if($dnaInitialArray[$i] = 'C')
  {
    $dnaFinalArray[$i] = 'G';
  }
    if($dnaInitialArray[$i] == 'G')
  {
    $dnaFinalArray[$i] = 'C';
  }
  
}

var_dump($dnaFinalArray);
$dnaFinal = implode(' ',$dnaFinalArray);



return $dnaFinalArray;
  
}
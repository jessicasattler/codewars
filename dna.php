<?php 

function DNA_strand($dna) {

$dnaInitialArray = str_split($dna);
$dnaFinalArray = [];


 
for($i=0;$i<sizeof($dnaInitialArray);$i+=1)
{  
  if($dnaInitialArray[$i] == 'A')
  {
    $dnaFinalArray[$i] = 'T';
    continue;      
  }
    if($dnaInitialArray[$i] == 'T')
  {
    $dnaFinalArray[$i] = 'A';
    continue;
  }
    if($dnaInitialArray[$i] == 'C')
  {
    $dnaFinalArray[$i] = 'G';
    continue;
  }
    if($dnaInitialArray[$i] == 'G')
  {
    $dnaFinalArray[$i] = 'C';
    continue;
  }
  
}



$dnaFinal = implode('',$dnaFinalArray);

return $dnaFinal;
  
}



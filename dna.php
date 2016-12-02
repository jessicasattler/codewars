<?php 

function DNA_strand($dna) {

$dnaInitialArray = str_split($dna);
$dnaFinalArray = [];


function DNA_strand($dna) {

$dnaInitialArray = str_split($dna);
$dnaFinalArray = [];


 
for($i=0;$i<sizeof($dnaInitialArray);$i+=1)
{  
  if($dnaInitialArray[$i] == 'A')
  {
    $dnaFinalArray[$i] = 'T';
       
  }else if($dnaInitialArray[$i] == 'T')
  {
    $dnaFinalArray[$i] = 'A';
  
  }else if($dnaInitialArray[$i] == 'C')
  {
    $dnaFinalArray[$i] = 'G';
  }else if($dnaInitialArray[$i] == 'G')
  {
    $dnaFinalArray[$i] = 'C';
    
  }
  
}



$dnaFinal = implode('',$dnaFinalArray);

return $dnaFinal;



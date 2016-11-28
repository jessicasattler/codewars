<?php 

//Buying a car:

function nbMonths($startPriceOld, $startPriceNew, $savingPerMonth, $percentLossByMonth) {
    // we want to know how many months it will take him to buy the new car
    //and how much money he will have left after he buys the new car
    
    if($startPriceOld > $startPriceNew){
      $monthsAndMoney = [0,0];
      
      $moneyLeftOver = $startPriceOld - $startPriceNew;
      
      $monthsToWait = 0;
      
      $monthsAndMoney[0] = $monthsToWait;
      
      $monthsAndMoney[1] = $moneyLeftOver;
      
      return $monthsAndMoney;
    }
    
    $oldCarPricePerMonth = $startPriceOld - ($startPriceOld * .015);
    
    $moneyToBuyNewCar = $savingPerMonth + $oldCarPricePerMonth;
    
    $newCarPriceOverTime = $startPriceNew - $moneyToBuyNewCar;
    
    
    
    
    
}

//speed control:

function gps($s, $x) {
  $secondsInAnHour = 3600;
  $hourlySpeedForEverySection = [];
  
  if(sizeof($x)<=1)
  {
    return 0;
  }
  
  for($i=0;$i<sizeof($x) - 1;$i+=1)
  {
    $distance = ($x[$i+1] - $x[$i]);
    $speedInSeconds = $distance/$s;
    $speedInHours = ($speedInSeconds * $secondsInAnHour);
    
    $hourlySpeedForEverySection[$i] = $speedInHours;
  }
  
  
    return floor(max($hourlySpeedForEverySection));
}

//median fun fun:

function median($a) {
  // Work your magic here. Make sure you're calculating the median, NOT the mean!
  
  //puts array in order
  $a = asort($a);
  
  if(sizeof($a)==0)
  {
    return NULL;
  }
  //if array length is odd
  if(sizeof($a)%2==1)
  {
    $highestIndex = (sizeof($a) -1);
    $halfHighestIndex = $highestIndex / 2;
    $median = $a[$halfHighestIndex];
    
    return $median;
  }
  //if array length is even
  if(sizeof($a)%2==0)
  {
    $highestIndex = (sizeof($a) -1);
    $halfHighestIndex = $highestIndex /2;
    $lowestHalfIndex = floor($halfHighestIndex);
    $highestHalfIndex = $lowestHalfIndex + 1;
    $median = ($a[$highestHalfIndex] + $a[$lowestHalfIndex])/2;
    echo $median;
    
    return $median;
  }
}

 ?>
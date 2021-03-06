<?php 

// A traveling salesman has to visit clients. He got each client's address e.g. "432 Main Long Road St. Louisville OH 43071" as a list.

// The basic zipcode format usually consists of two capital letters followed by a white space and five digits. The list of clients to visit was given as a string of all addresses, each separated from the others by a comma, e.g. :

// "123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street Pollocksville NY 56432".

// To ease his travel he wants to group the list by zipcode.

// Task

// The function travel will take two parameters r (list of all clients' addresses) and zipcode and returns a string in the following format:

// zipcode:street and town,street and town,.../house number,house number,...

// The street numbers must be in the same order as the streets where they belong.

// If a given zipcode doesn't exist in the list of clients' addresses return "zipcode:/"

// Examples

// r = "123 Main Street St. Louisville OH 43071,432 Main Long Road St. Louisville OH 43071,786 High Street Pollocksville NY 56432"

// travel(r, "OH 43071") --> "OH 43071:Main Street St. Louisville,Main Long Road St. Louisville/123,432"

// travel(r, "NY 56432") --> "NY 56432:High Street Pollocksville/786"

// travel(r, "NY 5643") --> "NY 5643:/"
// Note: You can see the list of all addresses and zipcodes in the test cases.
function travel($r, $zipcode) {
    $street = "";
    $streetNumber = "";    
    
    if ($zipcode == NULL) {
      return ":/";
    }
    if (strlen($zipcode) != 8){
      return  "$zipcode:/";
    }
    if(strpos($r,$zipcode) === FALSE)//if zipcode doesn't exist in list of clients, return "zipcode:/"
    {
      return "$zipcode:/";
    }
    $rArray = explode(",", $r);
    
    foreach($rArray as $address)
    {
      if(strpos($address,$zipcode))
      {
        $noZip = substr($address, 0, strpos($address, $zipcode)-1);
        $i = 0;
        while(ctype_digit($noZip[$i]))
        {
          $streetNumber = $streetNumber.$noZip[$i];
          $i+=1;
          
        }
        $streetNumber = $streetNumber.",";
        
        $cityAndStreets = substr($noZip, $i + 1);
        
       
        $street = $street.$cityAndStreets.",";

      }
      
        
      
      
    }
          $streetNumber = rtrim($streetNumber, ",");
          $street = rtrim($street, ",");
      //extract the street(s) and street number(s) from the string ($r) and save them to 
      //variables: $street and $streetNumber
    
    echo $zipcode.":".$street."/".$streetNumber.PHP_EOL;
    return $zipcode.":".$street."/".$streetNumber;
}
 ?>
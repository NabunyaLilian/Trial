<?php

#if else

$salary = false;

if($salary == true){

	echo "Am gna pay rent";
}
 else{

 	echo "I will just wait<br/>";
 }


#if else if
 $date = date("D");  //method that returns the current day

 if($date == "Wed"){

	echo "I have to go for the movies<br/>";
}
 elseif($date == "Fri"){

 	echo "I have to go swimming";
 }
 else{
    echo "I will just stay in bed";

 }


#switch Statement

 Switch($date){

  case "Mon":
  echo "Today is a Monday";
  break;

  case "Tue":
  echo "Today is a Tuesday";
  break;
  
  case "Wed":
  echo "Today is a Wednesday";
  break;

  case "Thur":
  echo "Today is a Thursday";
  break;

  case "Fri":
  echo "Today is a Friday";
  break;

  default:
  echo "I wonder which is this";
 }

?>


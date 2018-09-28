<?php

#Data Types

 //integers
  $num1 = 14;
  $num1 = 15 + 6;
  print $num1;

 
// double
  $num2 = 14.0002;
  $num2 = 14.0002 *2;
  print $num2 ."\t";

 
// Booleans
  $tasha = true;

  if($tasha == true){

  	echo " goodmorning";
  }

  else{


  	echo "sleep tight";
  }

  //Strings

  $name = "Nabunya Lilian";
  $Age = 23;

  echo $name."\n".$Age;



  #Variables

//local variables
  function wake_up(){
    $awake = 0;
    $awake++ ;
    echo $awake;

  }

  wake_up();
  wake_up();
  wake_up();

//Global variables
  $hours = 0;

  function day(){
   GLOBAL $hours;
   $hours++;
   echo $hours;
  }

 day();
 day();
 day();


 //Static Variables
 function keep_track(){
   STATIC $count =0;
   $count++;

   echo $count;

 }

 keep_track();
 keep_track();
 keep_track();
 keep_track();

 
?>
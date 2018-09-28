<?php

#for loop 
#Used only when u know the exact number of times something has to be repeated

for ($i=0; $i <10 ; $i++) { 
	
 $a =$i;
  echo $a."<br/>";
}

#while loop
#As long as the condition is true the statement will be executed


$gpa = 0;
while($gpa < 5){
    
	$gpa = $gpa + 0.1;
	echo $gpa."<br/>";
}


#do while loop
#Executes the statement once and checks the condition 
$i =0;
do{

	$i++;
}

while($i < 10); 

	echo " $i ";


#foreach loop
#loop for Arrays

$numbers = array(1,2,3,4,5,6,7,8,9,10);	
 
foreach ($numbers as $value) {
 	
 	echo $value."<br/>";

}
 #break statement
 
 $i = 0; 
 
while( $i < 10) 
{ 
   $i++; 
   if( $i == 3 )break; 
} 
echo ("Loop stopped at i = $i" ); 	
 
	
#continue Statement

$array = array( 1, 2, 3, 4, 5); 
foreach( $array as $value ) 
{ 
  if( $value == 3 )continue; 
  echo "Value is $value <br />"; 
}

?>


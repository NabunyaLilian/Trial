<?php
#Numeric Arrays
#Arrays accessed using numbers

$numbers = array(1,2,3,4,5,6,7,8,9,10);
 
foreach ($numbers as $value) {
	echo "Value is $value <br/>";
}

# a second way of accessing the array
echo $numbers[0];
echo $numbers[1];
echo $numbers[2];
echo $numbers[3];
echo $numbers[4];
echo $numbers[5];
echo $numbers[6];
echo $numbers[7];
echo $numbers[8];
echo $numbers[9]."<br/>";


#Associative Arrays
#Arrays that have key and values

$jobs = array('Lia' => 'Software Developer', 'Tasha'=>'Photographer','Bridget'=>'Physcologist');
echo "Lia's job,Tahsa's job and Bridget's Job respectively";
foreach ($jobs as $key => $value) {
	echo "<li>$value</li>";
}

#a second way of accessing the array
echo " Lia work as a ".$jobs['Lia']." <br/>";
echo "Tasha works as a ". $jobs['Tasha']." <br/>";
echo "Bridget works as a ".$jobs['Bridget']."<br/>";



#Multidimensional Arrays
#Arrays with arrays with in other arrays
#good for accessing massive data

$houses = array('eddy_tenants'=>array('room1'=>'Betty','room2'=>'Douglas','room3'=>'Lia','room4'=>'Regan'),
               'talian_tenants'=>array('room1'=>'Nancy','room2'=>'Tasha','room3'=>'John'),
              );

echo "The tenant in Tasha's houses room 1 is ".$houses['eddy_tenants']['room1']."<br/>";
echo "The tenant in Lia's houses room 2 is ".$houses['talian_tenants']['room2']."<br/>";

?>
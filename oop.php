<?php

abstract class Employee{

	private $name;
	private $job;
	private $salary;
	private $department; 


   public function __construct($name,$job,$salary,$department){

    $this->name = $name;
    $this->job = $job;
    $this->salary = $salary;
    $this->department=$department;

   }

   
  abstract public function employee_details();
   

}

// $employee = new Employee('Lia','Software developer',25000,'IT department');
//   echo $employee->employee_details()."<br/>";

class Registration extends Employee{
	public $id;

 public function __construct($name,$job,$salary,$department,$id){
 parent::__construct($name,$job,$salary,$department);
    $this->id = $id;

}


public function employee_details(){

   	return $this->name;
   
   }
}

  
 $reg1 = new Registration('Lia','Software developer',25000,'IT department','2345') ;
 echo $reg1->employee_details();
?>
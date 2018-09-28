<?php

class User{
private $username;
private $password;
public static $password_length = 6;


public function get_password(){


	return self::$password_length;
}
}
 echo User::get_password();
?>
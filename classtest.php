<?php


class Member 
{

public $username = ""; 
public $password = "";
public $email = "";


}

$users = new Member();

$users->username='Payam';

$users->password='damavand81';

$users->email='payam49er@gmail.com';

echo $users->username."<br>";

echo $users->password."<br>";
echo $users->email."\n";







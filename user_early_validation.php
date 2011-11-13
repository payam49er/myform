<?php
$errors = array();//array for errors
if ($_POST){
//run the validation script
require_once('earlylibrary.php');
try{
	//main script goes here
	$email = new Zend_Validate_EmailAddress();
        if (!$email->isValid($_POST['email'])){
            $errors['email']='Please provide a valid email address';
        }        
        
        
}
catch (Exception $e){
	echo $e->getMessage();
}
}




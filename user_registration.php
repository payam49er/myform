<?php

$message = 'Please provide a valid email address'; //array for errors
$emailIsValid = TRUE;
$emailisinDB = FALSE;
$emailisValid = TRUE;
if ($_REQUEST) {
//run the validation script
    require_once('library.php');
    try {
        $val = new Zend_Validate_EmailAddress(
                        array(
                            'allow' => Zend_Validate_Hostname::ALLOW_DNS,
                            'mx' => TRUE,
                            'deep'=>TRUE
                        )
        );
        
        if (!$val->isValid($_REQUEST['validate'])) {
            //email is not valid, so generate error 
//            
            $emailisValid = FALSE;
            $notvalid = 'Please provide a valid email address';
             print json_encode(array('code' => 200, 'msg' => $notvalid));
            
            
        } else {
            //email is valid, so search the DB to see if there is a duplicate of the email 
           $sql = $dbRead->quoteInto('SELECT email FROM betaEmail WHERE email = ?',$_REQUEST['validate']);
           $result = $dbRead->fetchRow($sql);
           if($result){      //if the email does exist already an error is generated, if not, then it is sent to the db
               $errors=TRUE;
               $emailisinDB = TRUE;
               $doublereg =  $_REQUEST['validate']." ".'is already registered';
                print json_encode(array('code' => 200, 'msg' => $doublereg));
           }else{

            $emailAddress = array('email' => $_REQUEST['validate']);
            $dbWrite->insert('betaEmail', $emailAddress);
            $emailIsValid = TRUE;
            $thankyou = 'Thank you for joing Capucina';
             print json_encode(array('code' => 200, 'msg' => $thankyou));
            
        }





           }
//        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}








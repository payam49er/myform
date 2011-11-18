<?php


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
            
            $notvalid = 'Please provide a valid email address';
             print json_encode(array('code' => 200, 'msg' => $notvalid,'exist'=>0));
            
            
        } else {
            //email is valid, so search the DB to see if there is a duplicate of the email 
           $sql = $dbRead->quoteInto('SELECT email FROM betaEmail WHERE email = ?',$_REQUEST['validate']);
           $result = $dbRead->fetchRow($sql);
           if($result){      //if the email does exist already an error is generated, if not, then it is sent to the db
               
               $doublereg =  $_REQUEST['validate']." ".'is already registered';
                print json_encode(array('code' => 200, 'msg' => $doublereg,'exist'=>1));
           }else{

            $emailAddress = array('email' => $_REQUEST['validate']);
            $dbWrite->insert('betaEmail', $emailAddress);
        
            $thankyou = 'Thank you for joining Capucina';
             print json_encode(array('code' => 200, 'msg' => $thankyou,'exist'=>0));
             
             
//             $mailhost = 'smtp.capucina.com';
//             $mailconfig = array ('auth' => 'crammd5',
//                 'username'=>'welcome@capucina.com',
//                 'password'=>'pD,x-5RawGVd');
//             $transport = new Zend_Mail_Transport_Smtp($mailhost,$mailconfig);
//             Zend_Mail::setDefaultTransport($transport);
//             
//             $mail = new Zend_Mail('UTF-8');
//             $mail ->addTo($_REQUEST['validate'])
//                   ->setSubject('Welcome to Capucina Beta')
//                   ->setBodyText('Thank you for signing up with Capucina. The beta version will launch soon in Boston are. We will send you a formal invitation when we are ready.')
//                   ->setFrom('welcome@capucina.com') 
//                   ->send()  ;
             
             
            
        }





           }
//        
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}








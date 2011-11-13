<!--This code is written by Payam Shoghi to connect early registration to DB. 
This code is tested and it works. -->


<?php
$library = '/Users/payam/php_library/ZendFramework-1.11.8/library/';
set_include_path(get_include_path() . PATH_SEPARATOR . $library);
require_once('Zend/Loader/Autoloader.php');
try{
    Zend_Loader_Autoloader::getInstance();


    $earlywrity = array('host' =>'localhost',
                    'username' => 'writer',
                                    'password' => 'P@81S59sh&*',
                                    'dbname' => 'earlysignup');

   

    $dbearlyWrite = new Zend_Db_Adapter_Pdo_Mysql($earlywrity);
   
    
    
    
    
    
    
}
catch (Exception $e){
    echo $e->getMessage();
    
    }
    


//if ($dbearlyWrite->getConnection()){
//    echo 'Write OK<br />';
//}
//else {
//    echo'Write is not OK<br />';
//}
//

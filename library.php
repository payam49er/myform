<?php

$library = '/Users/payam/php_library/ZendFramework-1.11.8/library/';
set_include_path(get_include_path() . PATH_SEPARATOR . $library);
require_once('Zend/Loader/Autoloader.php');
try {
    Zend_Loader_Autoloader::getInstance();

    $earlywrite = array('host' => 'localhost',
        'username' => 'writer',
        'password' => 'damavand81',
        'dbname' => 'earlysignup');
    $dbWrite = new Zend_Db_Adapter_Pdo_Mysql($earlywrite);


    $earlyread = array('host' => 'localhost',
        'username' => 'read',
        'password' => 'damavand81',
        'dbname' => 'earlysignup');
    $dbRead = new Zend_Db_Adapter_Pdo_Mysql($earlyread);
} catch (Exception $e) {
    echo'$e->getMessage()';
}









//try{
//    Zend_Loader_Autoloader::getInstance();
//
//
//    $writy = array('host' =>'localhost',
//                    'username' => 'adminwrity',
//                                    'password' => 'IronF!st1981',
//                                    'dbname' => 'capucina');
//
//    $ready = array('host' => 'localhost',
//                    'username' => 'adminready',
//                                    'password' => 'TrojanHor$e1359',
//                                    'dbname' => 'capucina');
//
//    $dbWrite = new Zend_Db_Adapter_Pdo_Mysql($writy);
//    $dbRead = new Zend_Db_Adapter_Pdo_Mysql($ready);
//    
    
    
    
    
    
    
//}
//catch (Exception $e){
//    echo $e->getMessage();
//    
//}

//if ($dbWrite->getConnection()){
//    echo 'Write OK<br />';
//}
//if ($dbRead->getConnection()){
//    echo 'Read OK';
//}


<?php

if (isset($_REQUEST['email'])) {
    $email = $_REQUEST('email');
    if (!validate($email)) {
        print json_encode(array('code' == 500, 'msg' == 'invalid'));
    } else {
        print json_encode(array('code' == 200, 'msg' == 'valid'));
    }
}

        
?>
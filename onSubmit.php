<?php
require_once('user_registration.php');
?>

<html>
        <head>
            <title>Thank you for joining Capucina</title>
            <link rel="stylesheet" type="text/css" href="reset.css" />
            <link rel="stylesheet" type="text/css" href="earlysignup.css"/>
            <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'>


        </head>


        <body>

            <div class="css-grd">
                <div class="emailfeedback"> 
                    <?php
                    if (!$emailIsValid) {

                        echo 'Please provide a valid email address';
            
                    }
                    if ($emailisinDB){
                        echo $_POST['validate']." ".'is already registered, Thank you';
                    }
                    if(!$emailIsValid){
                        echo 'Thank you for joing Capucina';
                    }
                    
                    ?>

                </div>
            </div>




        </body>




    </html>





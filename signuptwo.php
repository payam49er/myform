<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Beta Sign up form </title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="earlysignup.css"/>
        <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'/>
        <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'/>
         <script LANGUAGE="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>
         <script LANGUAGE="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
         <SCRIPT LANGUAGE="JavaScript" SRC="/myform/js/ajax_login.js"></script>
         <SCRIPT LANGUAGE="JavaScript" SRC="/myform/js/validation.js"></script>
         
            
            
            
            <style>
                #validEmail
                {
                    margin-top: 15px;
                    margin-left: 10px;
                    position: absolute;
                    width: 16px;
                    height: 16px;
                    vertical-align: bottom;
                }
            </style>        
    
    </head>
       
       <div class="header">
                    <p>Capucina</p>
                </div>

<div id="form" class="emailform">
<input class="emailbox" id="validate" type="text" name ="validate"> </input><span id="validEmail"></span>
<button class ="button" id="submit" type="button">I'm in</button>
<span id="msg"></span>
</div>

    
    <div class="footer">
        <?php
        $date = date('Y');
        ?>
                <div class="col1">
                    <ul>
                        <li><a href="#"><span>About</span></a></li>
                        <li><a href="#"><span>Team</span></a></li>
                        <li><a href="#"><span>Contact</span></a></li>
                        <li><a href="#"><span>Jobs</span></a></li>
                    </ul>
                </div>
                <div class="col2">
                    <ul>
                        <li><a href="#"><span>Brands</span></a></li>
                        <li><a href="#"><span>Boutiques</span></a></li>
                        <li><a href="#"><span>PR</span></a></li>
                        <li><a href="#"><span>Promoters</span></a></li>
                    </ul>
                </div>
                <div class="col3">
                    <ul>
                        <li><a href="#"><span>Legal</span></a></li>
                        <li><a href="#"><span>Privacy</span></a></li>
                        <li><a href="#"><span>Investment</span></a></li>
                        <li><a href="#"><span>Partnership</span></a></li>
                    </ul>
                    <a style="color: black;font-size: 10px;position:absolute;right:
                       20px;bottom: 0">Capucina,All rights reserved <?php echo $date ?></a>
                </div>
                <!-- end .footer --></div>

       
    </body>
</html>

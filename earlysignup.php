<!--
To change this template, choose Tools | Templates
and open the template in the editor.
********************************************************************************
-->
<!DOCTYPE html>
<?php
require_once('user_registration.php');
?>


    <html>
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
            <title>Capucina, Join the fun</title>
            <link rel="stylesheet" type="text/css" href="reset.css" />
            <link rel="stylesheet" type="text/css" href="earlysignup.css"/>
            <link href='http://fonts.googleapis.com/css?family=Cabin+Sketch' rel='stylesheet' type='text/css'/>
            <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'/>

            <script LANGUAGE="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>
            <script LANGUAGE="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
            <SCRIPT LANGUAGE="JavaScript" SRC="/myform/js/ajax_login.js"></script>
            <script type="text/javascript"> 

                function isValidEmailAddress(emailAddress) {
                    var pattern = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);

                    return pattern.test(emailAddress);
                }
                

                $(document).ready(function() {

                    $("#_email").keyup(function(){
                        var email = $("#_email").val();

                        if(email.length > 0)
                        {
                            if(isValidEmailAddress(email))
                            {
                         
                                $("#validEmail").css({ "background-image": "url('/myform/logos/validyes.png')" });
                               
                    $('#submit').show();
                                

                            } else {

                        
                                $("#validEmail").css({ "background-image": "url('/myform/logos/validno.png')" });
                               
                    $('#submit').hide();
                    
                                

                            }

                        } else {

                            $("#validEmail").css({ "background-image": "none" });
                            
               
                            
                        }
                        
                         });
                    
    

                    
                    
                    
                    
                    
                    
                    
                });
            </script>

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
        


        <body>


            <div class="css-grd">



                <div class="header">
                    <p>Capucina</p>
                </div>

                <div class="emailform" id="emailform">
                    <form method="request"  class="next" id="regform">
                        <input class="emailbox" type="text" name="validate" id="_email" accept-charset='UTF-8'/><span id="validEmail"></span>






                        <button  class ="button"  type="submit" id="submit">I'm in</button>

                    </form>
                </div>



                <div class="launch">
                    <p>Capucina will launch in November 2011, stay tuned</p>
                </div>

                
                <div class="footer">
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
                       20px;bottom: 0">Capucina,All rights reserved 2011</a>
                </div>
                <!-- end .footer --></div>





        </body>
    </html> 
    
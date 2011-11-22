<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
        <title>Beta Sign up form </title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="earlysignup.css"/>
        <link href='http://fonts.googleapis.com/css?family=Ovo' rel='stylesheet' type='text/css'></link>
        <link href='http://fonts.googleapis.com/css?family=Rancho' rel='stylesheet' type='text/css'></link>
        <link href='http://fonts.googleapis.com/css?family=IM+Fell+Double+Pica' rel='stylesheet' type='text/css'></link>
        <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'></link>
        <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'></link>
        <script LANGUAGE="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.js"></script>
        <script LANGUAGE="javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.js"></script>
        <script LANGUAGE="JavaScript" SRC="/myform/js/ajax_login.js"></script>
        <script LANGUAGE="JavaScript" SRC="/myform/js/validation.js"></script>
        <script LANGUAGE="JavaScript" SRC="/myform/js/launchwindow.js"></script>



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


            <div class="wrapper">   <!-- main content section -->

                <!--     Header of the page-->

                <div class="header">                                                     
                    <p>Capucina</p>
                </div>



                <img src="/myform/logos/capucina_main.png" height="400" width="700"/>


                <div class="slogan">
                    <a>Making the local stores to reach you when you need them</a>
                </div>


                <div id="form2" class="emailform2">
                    <span id="msg"></span>
                </div>


                <div id="form" class="emailform">

                    <input class="emailbox" id="validate" type="text" name ="validate"> </input><span id="validEmail"></span>
                    <button class ="button" id="submit" type="button">I'm in</button>
                    <span id="msg"></span>
                </div>
              
                
            
</div> <!-- end of main content  wrapper-->

                <div class="footer">   <!-- the begining of footer -->
                    <div class="list">



                        <a href="#?w=500" rel="popup_name1" class="poplight"><span>About</span></a>
                        <a href="#?w=500" rel="popup_name2" class="poplight"><span>Team</span></a>
                        <a href="#?w=500" rel="popup_name3" class="poplight"><span>Contact</span></a>
                        <a href="#?w=500" rel="popup_name4" class="poplight"><span>Boutiques</span></a>
                        <a href="#?w=500" rel="popup_name5" class="poplight"><span>Investment</span></a>
                        <a href="#?w=500" rel="popup_name6" class="poplight"><span>Partnership</span></a>


                        <a style="color: black;font-size: 10px;position:absolute;right:
                           20px;bottom: 0">Capucina,All rights reserved <?php echo date('Y') ?></a>

                    </div>   <!-- end of the list -->
                </div>   <!--end of the footer -->

       

        </div> <!-- end of the css-grd -->



        <div id="popup_name1" class="popup_block">  <!-- pop up window div -->
            <p  style=" line-height: 200%">Capucina is a platform designed to intelligently connect local stores and services to local customers
                based on demand. Capcuina's smart engine bridges the gap between stores sale staff and customers who are looking 
                for a service or a product that can be provided. </p>
        </div>


        <div id="popup_name2" class="popup_block">  <!-- pop up window div -->
            <p style=" line-height: 200%">Capucina is invented by </p>
        </div>


        <div id="popup_name3" class="popup_block">  <!-- pop up window div -->
            <p style=" line-height: 200%">To contact us, please send an email to contact@capucina.com. </p>
        </div>



        <div id="popup_name4" class="popup_block">  <!-- pop up window div -->
            <p style=" line-height: 200%">Capucina is a very early stage startup. We have big dreams and big challenges ahead and we are looking for people who 
                are eager to join us for the journey ahead. </p>
        </div>


        <div id="popup_name5" class="popup_block">  <!-- pop up window div -->
            <p style=" line-height: 200%">We are looking to sign up brands. We believe that our product is invaluable to big and small brands alike. 
                To reach local customers with their unique needs, there is no better tool than Capucina. Give us a call, and let's find
                out how we can help each other.</p>
        </div>


        <div id="popup_name6" class="popup_block">  <!-- pop up window div -->
            <h2>Turtle Power</h2>
            <p style=" line-height: 200%">I  Turtles.</p>
        </div>



    </body>
</html>













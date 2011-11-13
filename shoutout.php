<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

    <head>
        <title>What do you need? Make a shout out!</title>
        <link rel="stylesheet" type="text/css" href="reset.css" />
        <link rel="stylesheet" type="text/css" href="main.css" />

        <!--        script to limit the number of characters in the shoutout box-->

        <script language="javascript" type="text/javascript">
            var limitNum ;
            var limitCount; 
            var limitField;
            limitNum = 0;
            limitCount = 200;
            limitField - 200;
            
            function limitText(limitField,limitCount,limitNum){
                if (limitField.value.length>limitNum){
                    limitField.value = limitField.value.substring(0,limitNum);
                }else{
                    limitCount.value = limitNum - limitField.value.length;
                }
            }
            
            onKeyUp = "limitText(this.form.shoutout_area,this.form.countdown,200);"
            
        </script>




    </head>



    <body>
        <div class="container">
            <div class="header">
                <h1 class="htitle">Capucina</h1>

            </div>

            <div class="content">
                <div class="messageform">
                    <form name ="shoutout">
                        <textarea name="shoutout_area" onKeyDown="limitText(this.form.shoutout_area,this.form.countdown,200);">

                        
                  
                        </textarea>
                        <br> <font size="2">(Maximum characters: 200)
                                    You have <input readonly="readonly" type="text" name="countdown" size="3" value="200">characters left.</input>
                                

                            </font></br> </form>
                    <div> <p>Tags</p></div>
                    <div><input id="shout_submit" type="submit" value="Submit"></input></div>

                </div>  
            </div>


            <div class="footer">



            </div>



        </div>










    </body>




</html>



<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

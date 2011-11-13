<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>

        <style type="text/css">
            #validEmail
            {
                margin-top: 4px;
                margin-left: 9px;
                position: absolute;
                width: 16px;
                height: 16px;
            }
            
            .text
            {
			font-family: Arial, Tahoma, Helvetica;
		}



        </style>
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript"></script>
        <script>
            
        
            function isValidEmailAddress(emailAddress) {
                var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
                return pattern.test(emailAddress);
            }
        </script>

        <script>
            $(document).ready(function() {
 
                $("#email_input").keyup(function(){
                    var email = $("#email_input").val();
 
                    if(email != 0)
                    {
                        if(isValidEmailAddress(email))
                        {
 
                            $("#validEmail").css({ "background-image": "url('/myform/logos/validYes.png')" });
 
                        } else {
 
                            $("#validEmail").css({ "background-image": "url('/myform/logos/validNo.png')" });
 
                        }
 
                    } else {
 
                        $("#validEmail").css({ "background-image": "none" });
 
                    }
                });
            });
    

        </script>

    </head>


    <body>



        <div><input type="text" id="email_input" width="30"><span id="validEmail"></span></div> 


    </body>










</html>





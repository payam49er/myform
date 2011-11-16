/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


      function isValidEmailAddress(emailAddress) {
                    var pattern = new RegExp(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]+$/);

                    return pattern.test(emailAddress);
                }
                

                $(document).ready(function() {

                    $("#validate").keyup(function(){
                        var email = $("#validate").val();

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
            

           
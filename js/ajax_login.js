//This Ajax code communicates with the PHP user_registration.php to pass the correct response regarding the user
//validity of email to the front end Code completed by Payam Shoghi and Yiwen 
function fade_msg(){
      $('#form2').fadeOut('slow', function() {
                            // Animation complete.
                            $('#form').show();
                            $("#validate").val('');
                        }) 
}

$(document).ready(function(){
    
    $("#submit").click(function(e){
        
        $("#msg").text('');
        var email=$("#validate").val();
        //  e.preventDefault();
        $.ajax({
            url:"/myform/user_registration.php",
            type:"post",
            dataType:"json",
            data:{
                'validate':email
            },
            success:function(data){
                if(data.code==200){  
                     
                    $("#form2").show();               
                     $("#msg").text(data.msg);
                    //code 200 is for valid email
                    if(data.internal_code==0){
                       
                        $("#form").remove();
                       // $("#msg").text(data.msg);
                        
                       

                    }else if(data.internal_code==-1) {
                     //    $("#msg").text(data.msg);
                       $("#form").hide();
                        
                      setTimeout("fade_msg()",2000);
//                 fade_msg();
                         
                    }else if (data.internal_code == 1){
                    $("#form").remove();      
                }
                
                }else{
                   
                    
                    $("#msg").text('try again');
                    
                
                
                }
            },
            error:function(x,y,z){
                $("#msg").text('not valid');
            
            }
        

        });
        return false;
    });

});



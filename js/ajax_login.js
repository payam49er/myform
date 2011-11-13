$(document).ready(function(){
    
    $("#submit").click(function(e){
        $("#msg").text('');
        var email=$("#validate").val();
  //  e.preventDefault();
    $.ajax({
        url:"/myform/user_registration.php",
        type:"post",
        dataType:"json",
        data:{'validate':email},
        success:function(data){
            if(data.code==200){  
                    
//code 200 is for valid email
              $("#msg").text(data.msg);
                
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



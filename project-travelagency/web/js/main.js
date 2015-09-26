jQuery(function(){

    $(window).load(function(){
        
        $("a#btn-login").click(function(e){         
            Login();
        }); 
        
    });
    
    function Login()
    {
        var username = $('#login-username').val();
        var password = $('#login-password').val();
        
        var responseToFailure = function()
        {
            $('.lbl-incorrect-login').text('Please enter a correct Username or Password.');
            $('.lbl-incorrect-login').css({display : 'block'});
            $('.lbl-incorrect-login').delay(3000).fadeOut();
        }
        
        if( !username.trim() || !password.trim() )
        {
            responseToFailure();
            return;
        }
        
        $.ajax({  
            type: "POST", 
            url: '/index.php/login/LoginAuth',      
            dataType: 'json',
            data: 'username='+username+'&password='+calcMD5(password),
            complete: function(data){  
                var response = $.parseJSON(data.responseText);
                if(!response.success){
                    responseToFailure();
                } else {
                   document.location.href = '/index.php/home/index'; 
                }
            }  
       });
    }
    
});
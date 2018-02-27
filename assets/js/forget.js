$(function () {

    'use strict';

    $(".cont_form_login .forget").on("click", function () {
   
        $(".cont_form_login > input, .btn_login").fadeOut("fast", function () {
            
            $(".cont_form_login .forget").fadeOut();
            $(".cont_form_login .forget_field, .cont_form_login .reset_btn").fadeIn("slow");
            
                
            
        });
        
        $(".cont_form_login > h2").html("Reset your password").css("fontSize", "24px");

    });

});
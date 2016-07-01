<!-- jQuery 2.2.0 -->
<script src="./plugins/jQuery/jQuery-2.2.0.min.js"></script>
<script src="./js/jquery.validate.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="./bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="./plugins/iCheck/icheck.min.js"></script>

<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });

  jQuery(function() { 

    jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
    }, "This field must contain only letters.");


    $("#signup_id").validate({ 
        rules: { 
            name: {
                required: true,
                alpha : true,
                minlength:3,
                maxlength:25
            },

            password: {
                required: true,
                minlength: 6,
                maxlength: 25
            },

            repassword: {
                required: true,
                minlength: 6,
                maxlength: 25,
                equalTo: "#password"
            },

            email: {
                required: true,
                email: true 
            }
        },
        messages: {
            name: {
                required: "Enter a Full name.",
                minlength:"Enter at least 3 characters.",
                maxlength:"The Name field can not exceed 25 characters in length.",
                alpha : "Must contain only letters"
            },

            password: {
                required: "Provide a password",
                maxlength:"The Name field can not exceed 25 characters in length.",
                minlength: "Enter at least 6 characters"
            },
            repassword: {
                required: "Repeat your password",
                minlength: "Enter at least 6 characters",
                maxlength:"The Name field can not exceed 25 characters in length.",
                equalTo: "Enter the same password as above"
            },

            email: {
                required: "Enter a Email.",
                email: "Enter a valid email address."
            }
        },
        onfocusout: false,
        onkeyup: false,
        errorElement: "em"
    });

    $("#signin_id").validate({ 
        rules: { 
           
            password: {
                required: true,
                minlength: 6,
                maxlength: 25
            },

            email: {
                required: true,
                email: true 
            }
        },
        messages: {
        
            password: {
                required: "Provide a password",
                maxlength:"The Name field can not exceed 25 characters in length.",
                minlength: "Enter at least 6 characters"
            },

            email: {
                required: "Enter a Email.",
                email: "Enter a valid email address."
            }
        },
        onfocusout: false,
        onkeyup: false,
        errorElement: "em"
    });
    
});
</script>

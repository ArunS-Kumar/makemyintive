
<!-- /.javascript files -->
<script src="./home/js/jquery.js"></script>
<script src="./home/js/bootstrap.min.js"></script>
<script src="./home/js/custom.js"></script>
<script src="./home/js/jquery.sticky.js"></script>
<script src="./home/js/wow.min.js"></script>
<script src="./home/js/owl.carousel.min.js"></script>
<script>
new WOW().init();
</script>

<script src="./js/jquery.validate.js"></script>
<script>
  jQuery(function() { 

    jQuery.validator.addMethod("alpha", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]+$/);
    }, "This field must contain only letters.");

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

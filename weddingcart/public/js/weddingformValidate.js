
    $(function() {

            jQuery.validator.addMethod("lettersonly", function(value, element) 
                {
                return this.optional(element) || /^[a-z ]+$/i.test(value);
                }, "Letters and spaces only please");
    // Setup form validation on the #register-form element
    $("#wedding_form").validate({
    
        // Specify the validation rules
        rules: {
            wedding_date:"required",
            bride_name:
            {
                required : true,
                minlength : 2,
                maxlength : 35,
            },
            groom_name: 
            {
                required: true,
                minlength: 2,
                maxlength: 35,
            },
         },
        
        // Specify the validation error messages
        messages: {
            wedding_date: "Please enter your wedding_date",
            bride_name:
            {
                required: "Please enter your bride_name",
                minlength: "Name must be atleast 2 characters",
                maxlength: "Name should be maximum 35 characters"
            },
            groom_name: 
            {
                required: "Please enter your groom_name",
                minlength: "Name must be at least 2 characters",
                maxlength: "Name should be maximum 35 characters"
            },
        },
        
        
    });

    $("#wedding_form").validate().form();

  });


   $(document).ready(function () {

                jQuery.validator.addMethod("lettersonly", function(value, element) 
                {
                return this.optional(element) || /^[a-z ]+$/i.test(value);
                }, "Letters and spaces only please");

    // initialize tooltipster on text input elements
    $('#wedding_form input[type="text"]').tooltipster({
        trigger: 'custom',
        onlyOne: false,
        position: 'bottom'
    });

    // initialize validate plugin on the form
    $('#wedding_form').validate({
        errorPlacement: function (error, element) {
            var lastError = $(element).data('lastError'),
                newError = $(error).text();

            $(element).data('lastError', newError);

            if(newError !== '' && newError !== lastError){
                $(element).tooltipster('content', newError);
                $(element).tooltipster('show');
            }
            //$(element).tooltipster('update', $(error).text());
            //$(element).tooltipster('show');
        },
        success: function (label, element) {
            $(element).tooltipster('hide');
        },
        rules: {
            wedding_date: {
                required:true
            },
            bride_name: {
                required: true,
                minlength: 3,
                maxlength: 35
            },
            groom_name: {
                required: true,
                minlength: 3,
                maxlength:35
            }
        },
       
    });
    //$('#wedding_form').validate().form();

});





  //   $(function() {

  //           jQuery.validator.addMethod("lettersonly", function(value, element) 
  //               {
  //               return this.optional(element) || /^[a-z ]+$/i.test(value);
  //               }, "Letters and spaces only please");
  //   // Setup form validation on the #register-form element
  //   $("#wedding_form").validate({
    
  //       // Specify the validation rules
  //       rules: {
  //           wedding_date:"required",
  //           bride_name:
  //           {
  //               required : true,
  //               minlength : 2,
  //               maxlength : 35,
  //           },
  //           groom_name: 
  //           {
  //               required: true,
  //               minlength: 2,
  //               maxlength: 35,
  //           },
  //        },
        
  //       // Specify the validation error messages
  //       messages: {
  //           wedding_date: "Please enter your wedding_date",
  //           bride_name:
  //           {
  //               required: "Please enter your bride_name",
  //               minlength: "Name must be atleast 2 characters",
  //               maxlength: "Name should be maximum 35 characters"
  //           },
  //           groom_name: 
  //           {
  //               required: "Please enter your groom_name",
  //               minlength: "Name must be at least 2 characters",
  //               maxlength: "Name should be maximum 35 characters"
  //           },
  //       },
        
        
  //   });

  //   $("#wedding_form").validate().form();

  // });

    @extends('app')

    @section('content')
    
    
		<section id="content" class="secbkgrnd">
            @include('errors.weddValidation')
			<div class="content-wrap">
				<div class="container clearfix">
                    {!! Form::open(['url'=>'/wedding', 'class'=>'form-horizontal nobottommargin', 'method'=>'post', 'id'=>'wedding_form', 'files'=>true]) !!}
    					<div class="heading-block center">
	    					<h2>Create your event</h2>
		    				<span class="divcenter">Please fill-up the details of the Bride and Groom.</span>
                            <div class="tab-container">
                                <div class="clearfix">
                          		    @include('wedding.weddingDateForWeddingForm')
                                </div>
                            </div>
						</div>

                        @include('wedding.brideDetailsForWeddingForm')

                        @include('wedding.groomDetailsForWeddingForm')
                        
                        <div class="center bottommargin-lg">
                            {!! Form::button('Save', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
                            <a href="{{ url('/home') }}" class="button button-rounded button-xlarge">Back</a>
                        </div>
                            {!! Form::close() !!}
                </div>
			</div>
		</section><!-- #content end -->
        <script>
        $(function() {
  
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
                digits : false
            },
            groom_name: 
            {
                required: true,
                minlength: 2,
                maxlength: 35,
                digits : false
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

  });
  
  </script>

        @stop

		
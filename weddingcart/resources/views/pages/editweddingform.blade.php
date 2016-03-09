    @extends('app')

    @section('content')

		<section id="content" class="secbkgrnd">

			<div class="content-wrap">

				<div class="container clearfix">
                
						<div class="heading-block center">
							<h2>Create your event</h2>
							<span class="divcenter">Please fill-up the details of the Bride and Groom.</span>
                            
                            <div class="tab-container">
    
                               <div class="clearfix">
                               		
								{!! Form::open(['action'=>'WeddingController@update', 'class'=>'form-horizontal nobottommargin', 'method'=>'post', 'files'=>true]) !!}
                               		<div class="row">
                                                <div class="input-daterange travel-date-group bottommargin-sm">
                                                    <div class="col-md-4 divcenter">
                                                        <label for="">Wedding Date</label>
                                                        <input class="sm-form-control" name="wedding_date" placeholder="MM/DD/YYYY" type="text" value="{{ $wedding_date }}">
                                                    </div>
                                                        <input type="hidden" name="wed_date" class="form-control" value="wdt">
                                                    
                                                </div>
                                            </div>
                                        
                                </div>
    
                            </div>
    
                            
                                                
						</div>

						<div class="col_half">
                                    
                            <!-- Contact Form Overlay
                            ============================================= -->
                            <div id="contact-form-overlay" class="clearfix">
                                <input id="bimg" name="bride_image" class="sm-form-control required" type="file" style="display: none">
                                        <input type="hidden" name="bride_img" class="form-control" value="bim">
								<div class="bride-image divcenter">
										<a href="" onclick="return selectimage('bimg')"><img src="{{ asset('../uploads/' . $bride_image) }}" id="bimg" alt="Groom"></a>
								</div>
                                <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>

                                <script>
    function selectimage(txt)
    {
         var imageId=txt;
        
        document.getElementById(imageId).click() 
        {
           
        $("#"+imageId).change(function(e){
            // get file name only
            //var fileName = e.target.files[0].name;
            // get complete path of local machine
            var fileName=URL.createObjectURL(e.target.files[0]); 

            $("img#"+imageId).fadeIn("fast").attr('src',fileName);
        });
    }
        return false;
    }
    </script>
                                
                                <!-- Contact Form
                                ============================================= -->
                               
                                    <div class="col_full">
                                    <center>
                                        <label for="template-contactform-service">Bride</label>
                                     </center>  
                                  	
            
                                    <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-name">Name <small>*</small></label>
                                        <input id="template-contactform-name" name="bride_name" class="sm-form-control required" type="text" value="{{ $bride_name }}">
                                        <input type="hidden" name="bride" class="form-control" value="bnm">
                                    </div>
            
                             <!--       <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-name">Father Name <small>*</small></label>
                                        <input id="template-contactform-name" name="template-contactform-name" class="sm-form-control required" type="text">
                                    </div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-name">Mother Name <small>*</small></label>
                                        <input id="template-contactform-name" name="template-contactform-name" class="sm-form-control required" type="text">
                                    </div>
            
                                    <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-subject">Address <small>*</small></label>
                                        <input id="template-contactform-subject" name="template-contactform-subject" class="required sm-form-control" type="text">
                                    </div>
                                    
                                    <div class="col_full">
                                        <label for="template-contactform-service">City</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">-- Select One --</option>
                                            <option value="Wordpress">New Delhi</option>
                                            <option value="PHP / MySQL">Bangalore</option>
                                            <option value="Wordpress">Mumbai</option>
                                            <option value="PHP / MySQL">Kolkata</option>
                                            <option value="Wordpress">Chandigarh</option>
                                            <option value="PHP / MySQL">Chennai</option>
                                            <option value="Wordpress">Jaipur</option>
                                            <option value="PHP / MySQL">Dehradun</option>
                                        </select>
                                    </div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-service">State</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">-- Select One --</option>
                                            <option value="Wordpress">NCR</option>
                                            <option value="PHP / MySQL">Karnataka</option>
                                            <option value="Wordpress">Maharashtra</option>
                                            <option value="PHP / MySQL">West Bengal</option>
                                            <option value="Wordpress">Punjab</option>
                                            <option value="PHP / MySQL">Tamil Nadu</option>
                                            <option value="Wordpress">Rajasthan</option>
                                            <option value="PHP / MySQL">Uttarakhand</option>
                                        </select>
                                    </div>  -->
            
                              </div>
            
                            </div><!-- Contact Form Overlay End -->
            
						</div>
                        
						<div class="col_half col_last">
                                    
                            <!-- Contact Form Overlay
                            ============================================= -->
                            <div id="contact-form-overlay" class="clearfix">
                                <input id="gimg" name="groom_image" class="sm-form-control required" type="file" style="display: none">

                                <input type="hidden" name="groom_img" class="form-control" value="gim">

								<div class="bride-image divcenter">
										<a href="" onclick="return selectimage('gimg')"><img src="{{ asset('../uploads/' . $groom_image) }}" id="gimg" alt="Groom"></a>
								</div>
                                <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>
                                
                                <!-- Contact Form
                                ============================================= -->
                                
            
                                    <div class="col_full">
                                    	<center>
                                        <label for="template-contactform-service">Groom</label>
                                       	</center>
                                    
                                    <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-name">Name <small>*</small></label>
                                        <input id="template-contactform-name" name="groom_name" class="sm-form-control required" type="text" value="{{ $groom_name }}">
                                        <input type="hidden" name="groom" class="form-control" value="gnm">
                                    </div>
            
                          <!--          <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-name">Father Name <small>*</small></label>
                                        <input id="template-contactform-name" name="template-contactform-name" class="sm-form-control required" type="text">
                                    </div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-name">Mother Name <small>*</small></label>
                                        <input id="template-contactform-name" name="template-contactform-name" class="sm-form-control required" type="text">
                                    </div>
            
                                    <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-subject">Address <small>*</small></label>
                                        <input id="template-contactform-subject" name="template-contactform-subject" class="required sm-form-control" type="text">
                                    </div>
                                    
                                    <div class="col_full">
                                        <label for="template-contactform-service">City</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">-- Select One --</option>
                                            <option value="Wordpress">New Delhi</option>
                                            <option value="PHP / MySQL">Bangalore</option>
                                            <option value="Wordpress">Mumbai</option>
                                            <option value="PHP / MySQL">Kolkata</option>
                                            <option value="Wordpress">Chandigarh</option>
                                            <option value="PHP / MySQL">Chennai</option>
                                            <option value="Wordpress">Jaipur</option>
                                            <option value="PHP / MySQL">Dehradun</option>
                                        </select>
                                    </div>
            
                                    <div class="col_full">
                                        <label for="template-contactform-service">State</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">-- Select One --</option>
                                            <option value="Wordpress">NCR</option>
                                            <option value="PHP / MySQL">Karnataka</option>
                                            <option value="Wordpress">Maharashtra</option>
                                            <option value="PHP / MySQL">West Bengal</option>
                                            <option value="Wordpress">Punjab</option>
                                            <option value="PHP / MySQL">Tamil Nadu</option>
                                            <option value="Wordpress">Rajasthan</option>
                                            <option value="PHP / MySQL">Uttarakhand</option>
                                        </select>
                                    </div>  -->
            
                               
            
                            </div><!-- Contact Form Overlay End -->
            
						</div>
                                                
				</div>

				<div class="center bottommargin-lg">

					{!! Form::button('Update', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
					<a href="#" class="button button-rounded button-xlarge">Back</a>
					</form>

				</div>

			</div>

		</section><!-- #content end -->

		@stop
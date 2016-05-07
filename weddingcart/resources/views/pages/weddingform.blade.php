    @extends('app')

    @section('content')
    
    
		<section id="content" class="secbkgrnd">
            @include('errors.weddValidation')
			<div class="content-wrap">
				<div class="container clearfix">
                    {!! Form::open(['url'=>'/wedding', 'class'=>'form-horizontal nobottommargin', 'method'=>'post', 'files'=>true]) !!}
    					<div class="heading-block center">
	    					<h2>Create your event</h2>
		    				<span class="divcenter">Please fill-up the details of the Bride and Groom.</span>
                            <div class="tab-container">
                                <div class="clearfix">
                          		    <div class="row">
                                        <div class="bottommargin-sm">
                                            <div class="col-md-2 divcenter center" style="z-index: 10">
                                                <label for="">Wedding Date</label>
                                                <input class="sm-form-control" id="weddate" name="wedding_date" placeholder="MM/DD/YYYY" type="text">
                                            </div>
                                            <input type="hidden" name="wed_date" class="form-control" value="wdt">
                                        </div>
                                    </div>
                                </div>
                            </div>
						</div>

						<div class="col_half">
                            <div id="bride-details" class="clearfix">
                                <input id="bimg" name="bride_image" class="sm-form-control required" type="file" value="" style="display: none">
                                <input type="hidden" name="bride_img" class="form-control" value="bim">
								<div class="bride-image divcenter">
										<a href="" onclick="return selectimage('bimg')"><img src="images/favatar.png" id="bimg" alt="Groom" class="img-rounded img-responsive" style="object-fit: cover;"></a>
								</div>
                                <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>
                                <div class="col_full">
                                    <center>
                                        <label for="template-contactform-service">Bride</label>
                                    </center>
                                    <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="bride-name">Name <small>*</small></label>
                                        <input id="bride-name" name="bride_name" class="sm-form-control required" type="text">
                                        <input type="hidden" name="bride" class="form-control" value="bnm">
                                    </div>

                                    <div class="col-full">
                                        <label for="bride-about">About</label>
                                        <textarea id="bride-about" name="bride_about" class="sm-form-control fixed-textarea" rows="5" placeholder="About the Bride..."></textarea>
                                        <input type="hidden" name="brideAbout" class="form-control" value="bab">
                                    </div>

                              </div>
            
                            </div><!-- Contact Form Overlay End -->
            
						</div>
                        
						<div class="col_half col_last">
                            <div id="groom-details" class="clearfix">
                                <input id="gimg" name="groom_image" class="sm-form-control required" type="file" style="display: none">
                                <input type="hidden" name="groom_img" class="form-control" value="gim">

								<div class="bride-image divcenter">
										<a href="" onclick="return selectimage('gimg')"><img src="images/mavatar.png" id="gimg" alt="Groom" class="img-responsive" style="object-fit: cover;"></a>
								</div>
                                <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>

                                    <div class="col_full">
                                    	<center>
                                        <label for="template-contactform-service">Groom</label>
                                       	</center>
                                    
                                    <div class="clear"></div>
            
                                    <div class="col_full">
                                        <label for="groom_name">Name <small>*</small></label>
                                        <input id="groom_name" name="groom_name" class="sm-form-control required" type="text">
                                        <input type="hidden" name="groom" class="form-control" value="gnm">
                                    </div>

                                    <div class="col-full">
                                        <label for="groom-about">About</label>
                                        <textarea id="groom-about" name="groom_about" class="sm-form-control fixed-textarea" rows="5" placeholder="About the Groom..."></textarea>
                                        <input type="hidden" name="groomAbout" class="form-control" value="gab">
                                    </div>
                                </div><!-- Contact Form Overlay End -->
    						</div>
				        </div>

                        <div class="center bottommargin-lg">
                            {!! Form::button('Save', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
                            <a href="#" class="button button-rounded button-xlarge">Back</a>
                        </div>
                    {!! Form::close() !!}
                </div>
			</div>
		</section><!-- #content end -->

        @stop
		
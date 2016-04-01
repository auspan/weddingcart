	@extends('app')

	@section('content')
		<!-- Content
		============================================= -->
		<section class="sectionmar" id="content">

			<div class="content-wrap">

				<div class="container clearfix">

						<div class="col_half">
						<div class="feature-box fbox-center fbox-effect fbox-bg fbox-light fbox-border fbox-effect">
						
								<div class="fbox-icon">
									<a href="#"><i class="icon-line-paper"></i></a>
								</div>
								<h1>Wedding</h1>
								<p>Lorem ipsum dolor sit onsectetur adipiscing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
minim veniam, quis nostrud exercitation ullamco</p>
                                <a href="{{ url('weddingdetails') }}" class="button button-border button-rounded button-xlarge topmargin" id="wedding_plan">Plan</a>

							</div>
						</div>
                        
						<div class="col_half col_last">
						<div class="feature-box fbox-center fbox-effect fbox-bg fbox-light fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line2-present"></i></a>
								</div>
								<h1>Wish List</h1>
								<p>Lorem ipsum dolor sit onsectetur adipiscing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
minim veniam, quis nostrud exercitation ullamco</p>
                                <a href="{{ url('makewishlist') }}" class="button button-border button-rounded button-xlarge topmargin">Creat</a>
							</div>
						</div>
                        
						<div class="col_half">
						<div class="feature-box fbox-center fbox-effect fbox-bg fbox-light fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="{{ url('/contacts') }}"><i class="icon-magic"></i></a>
								</div>
								<h1>Invite</h1>
								<p>Lorem ipsum dolor sit onsectetur adipiscing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
minim veniam, quis nostrud exercitation ullamco</p>
                                <a href="{{ url('/contacts') }}" class="button button-border button-rounded button-xlarge topmargin">Contacts</a>

							</div>
						</div>

						<div class="col_half col_last">
						<div class="feature-box fbox-center fbox-effect fbox-bg fbox-light fbox-border fbox-effect">
								<div class="fbox-icon">
									<a href="#"><i class="icon-line2-envelope-letter"></i></a>
								</div>
								<h1>Send</h1>
								<p>Lorem ipsum dolor sit onsectetur adipiscing elit, sed do 
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
minim veniam, quis nostrud exercitation ullamco</p>
                                <a href="#" class="button button-border button-rounded button-xlarge topmargin">Send</a>
							</div>
						</div>


					</div>


			</div>
			

		</section><!-- #content end -->

		@stop
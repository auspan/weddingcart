	@extends('app')

	@section('content')
		<!-- Content
		============================================= -->
		<section class="sectionmar" id="content">

			<div class="content-wrap">

				<div class="container clearfix">
						<div class="col_full">
						<div class="feature-box fbox-center fbox-effect fbox-bg fbox-light fbox-border fbox-effect">
						
								<div class="fbox-icon">
									<a href="{{ url('createwedding') }}"><i class="icon-line-paper"></i></a>
								</div>
								<h1>Wedding</h1>
								<p>Lorem ipsum dolor sit onsectetur adipiscing elit, sed do
eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
minim veniam, quis nostrud exercitation ullamco</p>
                                <a href="{{ url('createwedding') }}" class="button button-border button-rounded button-xlarge topmargin" id="wedding_plan">Plan</a>

							</div>
						</div>


					</div>


			</div>
			

		</section><!-- #content end -->

		@stop
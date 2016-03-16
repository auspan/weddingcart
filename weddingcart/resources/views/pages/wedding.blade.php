    @extends('app')

    @section('content')

		<section class="sectionmar" id="content">

			<div class="content-wrap">
            
                <div class="container clearfix divcon">
                	<div class="col_half">
						<img class="img-circle img-responsive" src="{{ asset('../uploads/' . $groom_image) }}" alt="Bryant Kellam" style="width: 150px; height: 150px; object-fit: cover;">
					</div>
					<div class="col_half col_last">
						<img class="img-circle img-responsive" src="{{ asset('../uploads/' . $bride_image) }}" alt="Bryant sdfg" style="width: 150px; height: 150px; object-fit: cover;">
					</div>
                </div>

				<div class="container clearfix">            
            				
                        <div class="center divcentr	">

                            <div class="wedding-head clearfix">
                              <div class="first-name divgrnm">{{ $groom_name }}</div>
                               
                                <div class="and">&amp;</div>
                                <div class="last-name divgrnm">{{  $bride_name  }}</span></div>
                            </div>
            
                            <div class="divider divider-short divider-center"><i class="icon-heart-empty"></i></div>
            
                            <p class="lead">Getting <strong>Hitched</strong> on:</p>
            
                             <div id="countdown-ex1" class="countdown countdown-large divcenter is-countdown divcount">
                             	<span class="countdown-row countdown-show4">
                             		<span class="countdown-section">
                             			<span class="countdown-amount">{{ $days }}</span>
                             			<span class="countdown-period">Days</span>
                             		</span>
                             		<span class="countdown-section">
                             			<span class="countdown-amount">{{ $hours }}</span>
                             			<span class="countdown-period">Hours</span>
                             		</span>
                             		<span class="countdown-section">
                             			<span class="countdown-amount">{{ $minutes }}</span>
                             			<span class="countdown-period">Minutes</span>
                             		</span>
                             		<span class="countdown-section">
                             			<span class="countdown-amount">{{ $seconds }}</span>
                             			<span class="countdown-period">Seconds</span>
                             		</span>
                             	</span>
                             </div>

                            <div class="divider divider-short divider-center"><i class="icon-heart-empty"></i></div>
                             
                                <div class="first-name h3">
                                	{{ $groom_name }} 
                                </div>
                                <div class="and h1">&amp;</div>
                                <div class="last-name h3">
                                	{{ $bride_name }}
                                </div>
                            
							<div class="center">
                                <a href="#" class="button button-border button-rounded topmargin">Edit</a>

                            </div>
            
                        </div>
            
            
                       
                                                
				</div>
                
				<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

				<div class="center bottommargin-lg">

					<a href="#" class="button button-rounded button-xlarge">Wish List</a>
					<a href="#" class="button button-rounded button-xlarge">Invite</a>

				</div>

			</div>

		</section><!-- #content end -->

		@stop
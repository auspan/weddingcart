	@extends('app')

	@section('content')

		<section class="sectionmar" id="content">

			<div class="content-wrap clearfix">
            
				<div class="container clearfix bottommargin-lg">
                
                    <div class="heading-block center">

						<span class="divcenter">Please see your wishlist and Messages.</span>
                            
					</div>
					
            
				<ul class="skills col-lg-8 divcenter">
				@foreach($Wishlist_Items as $items)
							<li data-percent="80">
								<span>{{ $items }}</span>
								<div  class="progress skills-animated divprogress">
									<div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div>
								</div>
							</li>
							@endforeach
							

				
						</ul>
                
				</div>	
                
				<div class="container clearfix bottommargin-lg">

					<h3 class="center">Messages</h3>

					<div id="oc-testi" class="owl-carousel testimonials-carousel owl-theme owl-loaded">

				<div class="owl-stage-outer"><div class="owl-stage owl_display"><div class="owl-item active owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<div class="testi-meta">
										Rahul Dev
									</div>
								</div>
							</div>
						</div></div><div class="owl-item active owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Abhishek Rai
									</div>
								</div>
							</div>
						</div></div><div class="owl-item active owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/4.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<div class="testi-meta">
										Mahesh Kapoor
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Tanvi Saxena
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/5.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<div class="testi-meta">
										Manoj Sharma
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<div class="testi-meta">
										Rahul Dev
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Abhishek Rai
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/6.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<div class="testi-meta">
										Mahesh Kapoor
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Tanvi Saxena
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/4.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<div class="testi-meta">
										Manoj Sharma
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/1.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!</p>
									<div class="testi-meta">
										Rahul Dev
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/2.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
									<div class="testi-meta">
										Abhishek Rai
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/5.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Fugit officia dolor sed harum excepturi ex iusto magnam asperiores molestiae qui natus obcaecati facere sint amet.</p>
									<div class="testi-meta">
										Mahesh Kapoor
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/3.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
									<div class="testi-meta">
										Tanvi Saxena
									</div>
								</div>
							</div>
						</div></div><div class="owl-item owl_display2"><div class="oc-item">
							<div class="testimonial">
								<div class="testi-image">
									<a href="#"><img src="images/6.jpg" alt="Customer Testimonails"></a>
								</div>
								<div class="testi-content">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, perspiciatis illum totam dolore deleniti labore.</p>
									<div class="testi-meta">
										Manoj Sharma
									</div>
								</div>
							</div>
						</div></div></div></div><div class="owl-controls with-carousel-dots"><div class="owl-nav"><div style="" class="owl-prev"><i class="icon-angle-left"></i></div><div style="" class="owl-next"><i class="icon-angle-right"></i></div></div><div class="owl-dots" style=""><div class="owl-dot active"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div><div class="owl-dot"><span></span></div></div></div></div>

					

				</div>


				<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

				<div class="center bottommargin-lg">

					<a href="{{ url('/wedding') }}" class="button button-rounded button-xlarge">Wedding</a>
					<a href="#" class="button button-rounded button-xlarge">Invite</a>

				</div>

			</div>

		</section><!-- #content end -->

		@stop
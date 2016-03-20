@extends('app')

@section('content')
		<!-- Content
		============================================= -->
		<section id="content" style="background-color: rgb(255, 247, 207); margin-bottom: 0px;">
		
		@if(Session::has('message'))
		<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		{{ Session::get('message') }}
		</div>
		
		@endif
		
			<div class="content-wrap">

				<div class="container clearfix">
                
					<div class="heading-block center">
						<h2>Create your wish list</h2>
						
					</div>
						
						<div id="shop" class="clearfix bottommargin-lg">
							@foreach($Products as $product)
							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="{{ asset('../uploads/Products/' . $product['product_image']) }} " alt="Checked Short Dress"></a>
									<div class="sale-flash">14% Off*</div>
									<div class="product-overlay">
									{!! Form::open(['action'=>'WishlistController@store_product_into_wishlist', 'class'=>'form-horizontal nobottommargin', 'method'=>'post']) !!}
									
										<input type="hidden" class="form-control" name="productId" id="productId" value="{{ $product['id'] }}">
										<input type="hidden" class="form-control" name="productPrice" id="productPrice" value="{{ $product['product_price'] }}">
										<i class="icon-line2-present"></i><span><button type="submit" id="submit_product" name="submit_product" class="add-to-cart btn-btn-sm">Add to Wishlist</button></span>
										</form>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">{{ $product['product_description'] }}</a></h3></div>
									<div class="product-price"> <ins>Rs {{ $product['product_price'] }}</ins></div>
									<!--<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>-->
								</div>
							</div>
								@endforeach
							
							
						<!--	<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/fridge1.jpg" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="images/fridge2.jpg" alt="Slim Fit Chinos style="object-fit: cover;""></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-line2-present"></i><span>Add to Wishlist</span></a>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Refrigerator 340L</a></h3></div>
									<div class="product-price">Rs 31,990</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/washing1.jpg" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="images/washing2.jpg" alt="Slim Fit Chinos"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-line2-present"></i><span>Add to Wishlist</span></a>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Washing Machine</a></h3></div>
									<div class="product-price">Rs 32,990</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/oven1.jpg" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="images/oven2.jpg" alt="Slim Fit Chinos"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-line2-present"></i><span>Add to Wishlist</span></a>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">28L Microwave Oven</a></h3></div>
									<div class="product-price">Rs 15,490</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>
								</div>
							</div>
                            
							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/sofa1.jpg" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="images/sofa2.jpg" alt="Slim Fit Chinos"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-line2-present"></i><span>Add to Wishlist</span></a>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Fabric 3 Seater Sofa</a></h3></div>
									<div class="product-price">Rs 32,990</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/bed1.jpg" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="images/bed2.jpg" alt="Slim Fit Chinos"></a>
									<div class="sale-flash">45% Off*</div>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-line2-present"></i><span>Add to Wishlist</span></a>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Wooden Queen Bed</a></h3></div>
									<div class="product-price"><del>Rs 58,091</del> <ins>Rs 31,625</ins></div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
										<i class="icon-star-empty"></i>
									</div>
								</div>
							</div>

							<div class="product clearfix">
								<div class="product-image">
									<a href="#"><img src="images/chair1.jpg" alt="Slim Fit Chinos"></a>
									<a href="#"><img src="images/chair2.jpg" alt="Slim Fit Chinos"></a>
									<div class="product-overlay">
										<a href="#" class="add-to-cart"><i class="icon-line2-present"></i><span>Add to Wishlist</span></a>
										<a href="#" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span>View Details</span></a>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">4 Seater Dining Set</a></h3></div>
									<div class="product-price">Rs 31,349</div>
									<div class="product-rating">
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star3"></i>
										<i class="icon-star-half-full"></i>
									</div>
								</div>
							</div>

						</div>-->
                        
						<div class=" col_full">
                        
                            <!-- Contact Form Overlay
                            ============================================= -->
                           <!-- <div id="contact-form-overlay" class="clearfix">
                            
                                <!-- Contact Form
                                ============================================= -->
                              <!--  <form class="nobottommargin" id="template-contactform" name="template-contactform" action="" method="post">
        
                                    <div class="form-process"></div>
                                    
									<h3 class=" col_full center">Add some more items</h3>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Image</label>
										<button class="button nomargin" type="open">Add Image</button>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <input id="template-contactform-email" name="template-contactform-email" class="required email sm-form-control" type="email">
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">Rs</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                  						<div class="input-group-addon">.00</div>
               							</div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Image</label>
										<button class="button nomargin" type="open">Add Image</button>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <input id="template-contactform-email" name="template-contactform-email" class="required email sm-form-control" type="email">
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">Rs</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                  						<div class="input-group-addon">.00</div>
               							</div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Image</label>
										<button class="button nomargin" type="open">Add Image</button>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <input id="template-contactform-email" name="template-contactform-email" class="required email sm-form-control" type="email">
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">Rs</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                  						<div class="input-group-addon">.00</div>
               							</div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Image</label>
										<button class="button nomargin" type="open">Add Image</button>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <input id="template-contactform-email" name="template-contactform-email" class="required email sm-form-control" type="email">
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">Rs</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                  						<div class="input-group-addon">.00</div>
               							</div>

                                    </div>
        
                                    <div class="clear"></div>
        
									
        
                                </form>

                            </div><!-- Contact Form Overlay End -->

                            <div class="center">
      		                          <a href="#" class="button button-border button-rounded topmargin">Add</a>
      		                          <a href="{{ url('wishlist') }}" class="button button-border button-rounded topmargin">View Wishlist</a>
          			                </div>

            
						</div>
                                                
				</div>

				<!--<div class="center bottommargin-lg">

					<a href="#" class="button button-rounded button-xlarge">Save</a>
					<a href="#" class="button button-rounded button-xlarge">Back</a>

				</div>-->

			</div>

		</section><!-- #content end -->

		@stop
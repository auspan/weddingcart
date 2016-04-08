@extends('app')

@section('content')


		<section id="content" class="secstyle">

			<div class="content-wrap">

				<div class="container clearfix">
                
					<div class="heading-block center">
						<h2>Create your wish list</h2>
						
					</div>
                    
                    <div id="posts" class="events small-thumbs">
                     
                      {!! Form::model($product,['method'=>'PATCH','url'=>'wishlist/update/'.$product->id, 'class'=>'form-horizontal','files'=>true]) !!}
                       
                       
                        <div id="product" class="entry clearfix">
                            <div class="col-md-2">
                              
                                <div class="entry-title">
                                  <input required aria-required="true" class="required form-control" id="productName" name="productName" placeholder="Product Name" type="text" value="">
                                   
                                </div>
                                <div class="clear"></div>

                                <a href="#">
                                    <img src="" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage" name="productImage" required>
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
                                  <div class="input-group col_two_third">
                                          <input required aria-required="true" class="required form-control" id="productDescription" name="productDescription" placeholder="Item Description" type="text" value="">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input required aria-required="true" class="required form-control email" id="productPrice" name="productPrice" placeholder="Amount" type="text" value="">
                                      </div>
                                      
                                      <textarea aria-required="true" class="required form-control short-textarea" id="message" name="message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                     
      
                              </div>
                              
                            </div>
                            <div class="col-md-1 col_last tright">
                                {!! Form::button('Update', ['class'=>'btn btn-primary', 'type'=>'submit'] ) !!}
                                
                            </div>
                            {!! Form::close() !!}
                        </div>
                        </div>
                        </div>
                        </section>
                        @stop
                        
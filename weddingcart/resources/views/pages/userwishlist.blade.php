@extends('app')

@section('content')

  
		<section id="content" class="secstyle">

			<div class="content-wrap">

				<div class="container clearfix">
                
					<div class="heading-block center">
						<h2>Create your wish list</h2>
						
					</div>
                    
                    <div id="posts" class="events small-thumbs">
                      <?php $count=1 ?>
                       @foreach($Products as $product)
                      
                       
                       
                        <div id="product{{ $count }}" class="entry clearfix">
                            <div class="col-md-2">
                              
                                <div class="entry-title">
                                  <span>{{ $product['product_name'] }}</span>
                                   
                                </div>
                                <div class="clear"></div>

                                <a href="#">
                                    <img src="{{ asset('../uploads/Products/' . $product['product_image']) }}" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage{{ $count }}" name="productImage{{ $count }}" required>
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
                                  <div class="input-group col_two_third">
                                          <span>{{ $product['product_description'] }}</span>
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <span>{{ $product['product_price'] }}</span>
                                      </div>
                                      
                                      <span></span>
      
                                      <input type="hidden" id="hiddenValue{{ $count }}" name="hiddenProductValue{{ $count }}" value="0">
      
                              </div>
                              <div class="skills">
                                <li data-percent="0">
                                    <div class="progress skills-animated divsty">
                                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div>
                                    </div>
                                </li>
                              </div>
                            </div>
                            <div class="col-md-1 col_last tright">
                                {!! Form::open(['url'=>'wishlist/destroy', 'class'=>'form-horizontal nobottommargin quick-contact-from']) !!}
                                {{ Form::hidden('id',$product->id) }}
                                {!! Form::button('delete', ['class'=>'btn btn-danger', 'type'=>'submit'] ) !!}
                                {!! Form::close() !!}
                                <br>
                                
                                <a href="{{ url('wishlist/'.$product['id'].'/edit') }}" class="btn btn-primary">Edit</a>
                                
                                
                            </div>
                        </div>
                        <?php $count++  ?>
                        @endforeach
                        
                        <div style="display: none;" id="totalProduct">{{ $count }}</div>
                        {!! Form::open(['action'=>'WishlistController@store', 'class'=>'form-horizontal nobottommargin quick-contact-from', 'method'=>'post', 'files'=>true]) !!}
                        <div id="newProductContainer">
                        </div>
                    </div>
                    <div id="productModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-body">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title" id="myModalLabel">Select Item</h4>
                                    </div>
                                    <div class="modal-body">
                                      @foreach($MasterProducts as $masterProducts)
                                        <p class="nobottommargin"><input name="#" value="{{ $product['product_name'] }}" type="checkbox">  {{ $masterProducts['product_name'] }}</p>
                                         @endforeach
                                  <!--      <p class="nobottommargin"><input name="#" value="Refrigerator" type="checkbox"> Refrigerator</p>
                                        <p class="nobottommargin"><input name="#" value="Washing" type="checkbox"> Washing Machine</p>
                                        <p class="nobottommargin"><input name="#" value="Microwave" type="checkbox"> Microwave Oven</p>
                                        <p class="nobottommargin"><input name="#" value="Sofa" type="checkbox"> Sofa</p>
                                        <p class="nobottommargin"><input name="#" value="Bed" type="checkbox"> Bed</p>
                                        <p class="nobottommargin"><input name="#" value="Dining" type="checkbox"> Dining Set</p>-->
                                        <p class="nobottommargin"><input name="addNewProduct" id="addNewProduct" value="Custom" type="checkbox"> Custom</p>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" checked="false">Close</button>
                                        <button type="button" id="saveChanges" class="btn btn-success" onclick="return addProduct()">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                
				<div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

				<div class="center bottommargin-lg">

        

					{!! Form::button('Save', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
          {!! Form::close() !!}
					<a href="{{ url('/home') }}" class="button button-rounded button-xlarge">Back</a>
          <div class="center">
                        <button class="button button-border button-rounded topmargin" data-toggle="modal" data-target=".bs-example-modal-sm">Add More</button>
                    </div>


				</div>

			</div>

		</section><!-- #content end -->

		@stop
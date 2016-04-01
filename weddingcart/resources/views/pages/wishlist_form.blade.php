@extends('app')

@section('content')

  <script>

  
    
     function addProduct()
      {
      var counter=$("#totalProduct").html();

     
      var ifCheckedOrNot=$("#addNewProduct").is(':checked');
      if(ifCheckedOrNot==true)
      {
      $("#newProductContainer").append('<div id="product'+counter+'" class="entry clearfix"><div class="col-md-2"><div class="entry-title"><input required aria-required="true" class="required form-control" id="productName'+counter+'" name="productName'+counter+'" placeholder="Product Name" type="text" value=""></div><div class="clear"></div><div><input id="newProductImage" name="newProductImage" class="sm-form-control required" type="file" style="display: none"><a href="javascript::void(0)" id="openDialog"><img src="images/fridge2.jpg" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage'+counter+'" name="productImage'+counter+'" required></a></div></div><div class="col-md-9"><div class="quick-contact-widget clearfix"><div class="input-group col_two_third"><input required aria-required="true" class="required form-control" id="productDescription'+counter+'" name="productDescription'+counter+'" placeholder="Item Description" type="text"></div><div class="input-group col_one_third col_last"><input required aria-required="true" class="required form-control email" id="productPrice'+counter+'" name="productPrice'+counter+'" placeholder="Amount" type="text"></div><textarea aria-required="true" class="required form-control short-textarea" id="message'+counter+'" name="message'+counter+'" rows="2" cols="30" placeholder="Message"></textarea><input type="hidden" id="hiddenValue'+counter+'" name="hiddenProductValue'+counter+'" value="dfgds"></div><div class="skills"><li data-percent="0"><div class="progress skills-animated divsty"><div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div></div></li></div></div><div class="col-md-1 col_last tright"><a href="javascript::void(0)" id="remove" class="btn btn-danger" onclick="return removeContainer(product'+counter+')">Remove</a></div></div>');
        $("#addNewProduct").attr('checked',false);
        $("#saveChanges").attr('data-dismiss',"modal");
        counter++;
        $("#totalProduct").html(counter++);
        }
    }
    function removeContainer(divid)
    {
      var divId=divid;
      $(divId).hide(1000, function () {
      $(divId).remove();
    });
    }
  </script>
		<section id="content" class="secstyle">

			<div class="content-wrap">

				<div class="container clearfix">
                
					<div class="heading-block center">
						<h2>Create your wish list</h2>
						
					</div>
                    
                    <div id="posts" class="events small-thumbs">
                      <?php $count=1 ?>
                      {!! Form::open(['action'=>'WishlistController@store', 'class'=>'form-horizontal nobottommargin quick-contact-from', 'method'=>'post', 'files'=>true]) !!}
                       
                        @foreach($Products as $product)
                        <div id="product{{ $count }}" class="entry clearfix">
                            <div class="col-md-2">
                             
                                <div class="entry-title">
                                  <input required aria-required="true" class="required form-control" id="productName{{ $count }}" name="productName{{ $count }}" placeholder="Product Name" type="text" value="{{ $product['product_name'] }}">
                                   
                                </div>
                                <div class="clear"></div>

                                <a href="#">
                                    <img src="{{ asset('../uploads/Products/' . $product['product_image']) }}" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage{{ $count }}" name="productImage{{ $count }}" required>
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
                                  <div class="input-group col_two_third">
                                          <input required aria-required="true" class="required form-control" id="productDescription{{ $count }}" name="productDescription{{ $count }}" placeholder="Item Description" type="text" value="{{ $product['product_description'] }}">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input required aria-required="true" class="required form-control email" id="productPrice{{ $count }}" name="productPrice{{ $count }}" placeholder="Amount" type="text" value="{{ $product['product_price'] }}">
                                      </div>
                                      
                                      <textarea aria-required="true" class="required form-control short-textarea" id="message{{ $count }}" name="message{{ $count }}" rows="2" cols="30" placeholder="Message"></textarea>
      
                                      <input type="hidden" id="hiddenValue{{ $count }}" name="hiddenProductValue{{ $count }}" value="{{ $product['id'] }}">
      
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
                                <a href="javascript::void(0)" id="remove" class="btn btn-danger" onclick="return removeContainer(product{{$count}})">Remove</a>
                            </div>
                        </div>
                        <?php $count++  ?>
                        @endforeach
                        
                        <div style="display: none;" id="totalProduct">{{ $count }}</div>

                        <div id="newProductContainer">
                        </div>
                    
             <!--           <div class="entry clearfix">
                            <div class="col-md-2">
                                <div class="entry-title">
                                    <span>Refrigerator</span>
                                </div>
                                <div class="clear"></div>
                                <a href="#">
                                    <img src="images/wishlist/2.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
      
                                  <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
      
                                      <div class="input-group col_two_third">
                                          <input class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" placeholder="Item Description" type="text">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" placeholder="Amount" type="text">
                                      </div>
                                      <textarea class="required form-control short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                  </form>
      
                                  
      
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
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    
                        <div class="entry clearfix">
                            <div class="col-md-2">
                                <div class="entry-title">
                                    <span>Washing Machine</span>
                                </div>
                                <div class="clear"></div>
                                <a href="#">
                                    <img src="images/wishlist/3.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
      
                                  <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
      
                                      <div class="input-group col_two_third">
                                          <input class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" placeholder="Item Description" type="text">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" placeholder="Amount" type="text">
                                      </div>
                                      <textarea class="required form-control short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                  </form>
      
                                  
      
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
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    
                        <div class="entry clearfix">
                            <div class="col-md-2">
                                <div class="entry-title">
                                    <span>Microwave Oven</span>
                                </div>
                                <div class="clear"></div>
                                <a href="#">
                                    <img src="images/wishlist/4.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
      
                                  <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
      
                                      <div class="input-group col_two_third">
                                          <input class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" placeholder="Item Description" type="text">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" placeholder="Amount" type="text">
                                      </div>
                                      <textarea class="required form-control short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                  </form>
      
                                  
      
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
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    
                        <div class="entry clearfix">
                            <div class="col-md-2">
                                <div class="entry-title">
                                    <span>Sofa</span>
                                </div>
                                <div class="clear"></div>
                                <a href="#">
                                    <img src="images/wishlist/5.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
      
                                  <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
      
                                      <div class="input-group col_two_third">
                                          <input class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" placeholder="Item Description" type="text">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" placeholder="Amount" type="text">
                                      </div>
                                      <textarea class="required form-control short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                  </form>
      
                                  
      
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
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    
                        <div class="entry clearfix">
                            <div class="col-md-2">
                                <div class="entry-title">
                                    <span>Bed</span>
                                </div>
                                <div class="clear"></div>
                                <a href="#">
                                    <img src="images/wishlist/6.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
      
                                  <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
      
                                      <div class="input-group col_two_third">
                                          <input class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" placeholder="Item Description" type="text">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" placeholder="Amount" type="text">
                                      </div>
                                      <textarea class="required form-control short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                  </form>
      
                                  
      
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
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>
                    
                        <div class="entry clearfix">
                            <div class="col-md-2">
                                <div class="entry-title">
                                    <span>Dining Set</span>
                                </div>
                                <div class="clear"></div>
                                <a href="#">
                                    <img src="images/wishlist/7.jpg" alt="Nemo quaerat nam beatae iusto minima vel">
                                </a>
                            </div>
                            <div class="col-md-9">
                              <div class="quick-contact-widget clearfix">
      
                                  <form id="quick-contact-form" name="quick-contact-form" action="#" method="post" class="quick-contact-form nobottommargin">
      
                                      <div class="input-group col_two_third">
                                          <input class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" placeholder="Item Description" type="text">
                                      </div>
                                      <div class="input-group col_one_third col_last">
                                          <input class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" placeholder="Amount" type="text">
                                      </div>
                                      <textarea class="required form-control short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="2" cols="30" placeholder="Message"></textarea>
      
                                  </form>
      
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
                                <a href="#" class="btn btn-danger">Remove</a>
                            </div>
                        </div>    -->
                    
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
                                      @foreach($Products as $product)
                                        <p class="nobottommargin"><input name="#" value="{{ $product['product_name'] }}" type="checkbox">  {{ $product['product_name'] }}</p>
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
					<a href="#" class="button button-rounded button-xlarge">Back</a>
          <div class="center">
                        <button class="button button-border button-rounded topmargin" data-toggle="modal" data-target=".bs-example-modal-sm">Add More</button>
                    </div>


				</div>

			</div>

		</section><!-- #content end -->

		@stop
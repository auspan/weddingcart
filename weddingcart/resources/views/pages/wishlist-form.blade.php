@extends('app')

@section('content')

<meta name="_token" content="{{ csrf_token() }}">
      

    <section id="content" class="secstyle">
      <div class="content-wrap">
        <div class="container clearfix">

        @if($x==1)
               
          <div class="heading-block center">
            <h2>Create your wish list</h2>
          </div>
                    
          <div id="posts" class="events small-thumbs">
              <?php $count=1 ?>
              @foreach($Products as $product)
                <div id="formdiv{{$count}}">
                    <div id="product{{ $count }}" class="entry clearfix">
                        <div class="col-md-2">
                            <div class="entry-title">
                                <input required aria-required="true"
                                       class="required form-control"
                                       id="productName{{ $count }}"
                                       name="productName{{ $count }}"
                                       placeholder="Product Name"
                                       type="text" value="{{ $product['product_name'] }}">
                            </div>

                            <div class="clear"></div>
                                <img src="{{ asset('../uploads/Products/' . $product['product_image']) }}" alt="Product_Image" id="productImage{{ $count }}" name="productImage{{ $count }}" required>
                                    <input type="text" value="{{ $product['product_image'] }}" id="imgsrc{{ $count }}" name="imgname{{ $count }}" style="display: none;">
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
      
                                      <input type="hidden" id="countervalue" name="countervalue" value="{{ $count }}">
                                      <div id="product_id_{{$count}}" class="hiddenproductId" style="display: none">NULL</div>

      
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
                                <button type="button" class="btn btn-danger btn-removewishlist" value="add" id="btn-removewishlist-{{$count}}">Remove</button>
                                <br><br>
                                <button type="button" class="btn btn-primary btn-addtowishlist" value="add" id="btn-addwishlist-{{ $count }}">Add</button>
                                <button type="button" class="btn btn-primary btn-editwishlist" value="edit" id="btn-editwishlist-{{ $count }}" style="display: none">Edit</button>
                                <button type="button" class="btn btn-primary btn-updatewishlist" value="update" id="btn-updatewishlist-{{ $count }}" style="display: none">Update</button>
                                <button type="button" class="btn btn-primary btn-canceltoupdatewishlist" value="cancel" id="btn-canceltoupdatewishlist-{{ $count }}" style="display: none">Cancel</button>
                                <button type="button" class="btn btn-primary btn-deletewishlist" value="delete" id="btn-deletewishlist-{{ $count }}" style="display: none">Delete</button>
                                
                            </div>
                            
                        </div>
                        </div>
                        <?php $count++  ?>
                        @endforeach
                        
                        <div style="display: none;" name="totalproduct" id="totalProduct">{{ $count }}</div>


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
                                      @foreach($Products as $product)
                                        <p class="nobottommargin"><input name="#" value="{{ $product['product_name'] }}" type="checkbox" class="chk" id="{{$product['id']}}">  {{ $product['product_name'] }}</p>
                                        <input type="hidden" class="productHiddenId" id="productHiddenId-{{$product['id']}}" value="{{ $product['product_name'] }}-{{ $product['product_description'] }}-{{ $product['product_price'] }}-{{ $product['product_image'] }}">
                                         @endforeach
                                  
                                        <p class="nobottommargin"><input name="addNewProduct" id="addNewProduct" value="Custom" type="checkbox" class="chk" id="0"> Custom</p>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" checked="false">Close</button>
                                        <button type="button" id="saveChanges" class="btn btn-success" onclick="return addProduct()">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                
        <div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

        <div class="center bottommargin-lg">

        

          
          
          <a href="{{ url('/home') }}" class="button button-rounded button-xlarge">Back</a>
          <div class="center">
                        <button class="button button-border button-rounded topmargin" data-toggle="modal" data-target=".bs-example-modal-sm">Add More</button>
                    </div>
          </div>

          @endif

          @if($x==0)
        
          <div class="heading-block center">
            <h2>Your Wishlist</h2>
            
          </div>
                    
                    <div id="posts" class="events small-thumbs">
                      <?php $count=1 ?>
                      <div class="alert alert-success" id="success" style="display: none;">
                      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      
                      </div>
                      @foreach($Products as $product)
                      <div id="formdiv{{$count}}">
                       
                        
                        <div id="product{{ $count }}" class="entry clearfix">
                            <div class="col-md-2">
                              
                                <div class="entry-title">
                                  <input required aria-required="true" class="required form-control" id="productName{{ $count }}" name="productName{{ $count }}" placeholder="Product Name" type="text" value="{{ $product['product_name'] }}">
                                   
                                </div>
                                <div class="clear"></div>
                                 
                                    <img src="{{ asset('../uploads/Products/' . $product['product_image']) }}" alt="Product_Image" id="productImage{{ $count }}" name="productImage{{ $count }}" required>
                                
                                    <input type="text" value="{{ $product['product_image'] }}" id="imgsrc{{ $count }}" name="imgname{{ $count }}" style="display: none;">
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
      
                                      <input type="hidden" id="countervalue" name="countervalue" value="{{ $count }}">
                                      <div id="product_id_{{$count}}" class="hiddenproductId" style="display: none">{{ $product['id'] }}</div>
                                      
      
                              </div>
                              <div class="skills">
                                <li data-percent="0">
                                    <div class="progress skills-animated divsty">
                                        <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" id="progressbar_{{$count}}" class="progressbar"  data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div>
                                    </div>
                                </li>
                              </div>
                            </div>
                            <div class="col-md-1 col_last tright">
                                
                                <button type="button" class="btn btn-danger btn-removewishlist" value="add" id="btn-removewishlist-{{$count}}">Remove</button>
                                <br><br>
                                <button type="button" class="btn btn-primary btn-addtowishlist" value="add" id="btn-addwishlist-{{ $count }}">Add</button>
                                <button type="button" class="btn btn-primary btn-editwishlist" value="edit" id="btn-editwishlist-{{ $count }}" style="display: none">Edit</button>
                                <button type="button" class="btn btn-primary btn-updatewishlist" value="update" id="btn-updatewishlist-{{ $count }}" style="display: none">Update</button>
                                <button type="button" class="btn btn-primary btn-canceltoupdatewishlist" value="cancel" id="btn-canceltoupdatewishlist-{{ $count }}" style="display: none">Cancel</button>
                                <button type="button" class="btn btn-primary btn-deletewishlist" value="delete" id="btn-deletewishlist-{{ $count }}" style="display: none">Delete</button>
                                
                            </div>
                            
                        </div>
                        </div>

                        <?php $count++  ?>
                        @endforeach
                        
                        <div style="display: none;" name="totalproduct" id="totalProduct">{{ $count }}</div>


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
                                      @foreach($MasterProducts as $product)
                                        <p class="nobottommargin"><input name="#" value="{{ $product['product_name'] }}" type="checkbox" class="chk" id="{{$product['id']}}">  {{ $product['product_name'] }}</p>
                                        <input type="hidden" class="productHiddenId" id="productHiddenId-{{$product['id']}}" value="{{ $product['product_name'] }}-{{ $product['product_description'] }}-{{ $product['product_price'] }}-{{ $product['product_image'] }}">
                                         @endforeach
                                  
                                        <p class="nobottommargin"><input name="addNewProduct" id="addNewProduct" value="Custom" type="checkbox" class="chk"> Custom</p>
                                       
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal" checked="false">Close</button>
                                        <button type="button" id="saveChanges" class="btn btn-success" onclick="return addProduct()">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        
                
        <div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

        <div class="center bottommargin-lg">

        

          
          
          <a href="{{ url('/home') }}" class="button button-rounded button-xlarge">Back</a>
          <div class="center">
                        <button class="button button-border button-rounded topmargin" data-toggle="modal" data-target=".bs-example-modal-sm">Add More</button>
                    </div>
          </div>

        

          @endif
       
        </div>

      </div>

    </section>
     
  @stop
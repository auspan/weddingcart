  @extends('app')

  @section('content')
    <section id="content" class="secstyle">

      <div class="content-wrap">

        <div class="container clearfix">
                
       
          <div class="heading-block center">
            <h2>Contribute</h2>
            
          </div>
                    
          <div id="posts" class="events small-thumbs">
              
               <div class="entry clearfix">
                    
                    <div class="col-md-2">

                      
                        
                       <div class="entry-title">
                          @foreach($Wishlist_Items as $productDetails)
                            <center><label>Product Name</label>
                            <div>{{ $productDetails['product_name'] }}</div>
                            </center>
                        <!--    <input required aria-required="true" class="required form-control" id="productName" name="productName" placeholder="Product Name" type="text" value="{{ $productDetails['product_name'] }}"> -->
                        </div>
                          <div class="clear"></div>
                                 
                            <img src="{{ asset('../uploads/Products/' .$productDetails['product_image'] ) }}" alt="Product_Image" id="productImage" name="productImage" required>
                                
                      </div>
                      
                      <div class="col-md-9">
                          <div class="quick-contact-widget clearfix">
                              <div class="input-group col_two_third">
                                    <center><label>Product Description</label>
                                    <div>{{ $productDetails['product_description'] }}</div>  
                                    </center>
                            <!--        <input required aria-required="true" class="required form-control" id="productDescription" name="productDescription" placeholder="Item Description" type="text" value="{{ $productDetails['product_description'] }}"> -->
                              </div>
                              <div class="input-group col_one_third col_last">
                                    <center><label>Product Price</label>
                                    <div>{{ $productDetails['product_price'] }} Rs.</div>
                                    </center>
                            <!--        <input required aria-required="true" class="required form-control email" id="productPrice" name="productPrice" placeholder="Contribute Amount" type="text" value="{{ $productDetails['product_price'] }}">  -->
                              </div>
                                 <div class="col-md-9 div-for-message"> 
                                    {{ $productDetails['message'] }}
                                 </div>
                                
                                <center>
                                <a href="{{ url('product/'.$productDetails['id']) }}" class="btn btn-success">Gift</a>
                                </center>
                          </div>
                        @endforeach
                             
                        </div>
              </div>
              
          </div>
        </div> 
        </form> 
      </div>
   </section>

 @stop
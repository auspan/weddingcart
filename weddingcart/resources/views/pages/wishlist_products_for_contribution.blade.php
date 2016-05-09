  @extends('app')

  @section('content')
    <section id="content" class="secstyle">

      <div class="content-wrap">

        <div class="container clearfix">
       
          <div class="heading-block center">
            <h2>Wishlist For Your Contribution</h2>
          </div>
                    
          <div id="posts" class="events small-thumbs">
              
                <div class="entry container clearfix">
                    
                  @foreach($Wishlist_Items as $productDetails)
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="entry-title">
                          <center>
                            <label>Product Name</label>
                            <div>{{ $productDetails['product_name'] }}</div>
                          </center>
                      </div>
                      <div class="clear"></div>
                      <img src="{{ asset('../uploads/Products/' .$productDetails['product_image'] ) }}" alt="Product_Image" id="productImage" name="productImage" required>
                    </div>
                      
                  <div class="col-md-9">
                      <div class="quick-contact-widget clearfix">
                        <div class="input-group col_two_third">
                          <center>
                            <label>Product Description</label>
                            <div>{{ $productDetails['product_description'] }}</div>  
                          </center>
                        </div>
                        <div class="input-group col_one_third col_last">
                          <center>
                            <label>Product Price</label>
                            <div>{{ $productDetails['product_price'] }} Rs.</div>
                          </center>
                        </div>
              
                        <div class="col-md-12 div-for-message"> 
                                    {{ $productDetails['message'] }}
                        </div>
                                    
                        <center>
                        <a href="{{ url('product/'.$productDetails['id']) }}" class="btn btn-success">Gift</a>
                        </center>
                      </div>
                    </div>
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
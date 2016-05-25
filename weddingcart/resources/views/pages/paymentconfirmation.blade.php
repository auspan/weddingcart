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
                  <center>
                    <label>Product Name </label>
                    <div>{{ $productDetails['product_name'] }}</div>
                  </center>
                </div>
                <div class="clear"></div>
                <img src="{{ asset('../uploads/Products/' .$productDetails['product_image'] ) }}" alt="Product_Image" id="productImage" name="productImage" required>
                  <br>
                    <div>
                      <center>
                        <label style="margin-top: 10px ">Your Gift Amount : </label>
                            &#8377 {{ $productDetails['contribution_amount'] }}
                        </center>
                    </div>
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
                        	<div class="row">
                          	 <div class="col-md-3">
                          	   Message : 
                          	 </div>
                             <div class="col-md-9 div-for-message"> 
                                {{ $productDetails['message'] }}
                             </div>
                           </div>
                           
                           <div class="row">
                             <div class="col-md-3">
                             Your Message :
                             </div> 
                             <div class="col-md-9 div-for-message"> 
                             {{ $productDetails['guest_message'] }}
                             </div>
                           </div>
                          <center>
                          
                          <a href="" class="btn btn-success">Confirm</a>
                          <a href="" class="btn btn-success">Back</a>
                          </center>
                          </div>
                             
                      </div>
              </div>
             
          </div>
        </div> 
        </form> 
      </div>
   </section>

  

 @stop
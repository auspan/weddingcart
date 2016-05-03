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
                    @foreach($ProductDetails as $productDetails)
                       {{ Form::open(['url' => 'contribution/'.$productDetails->id , 'method'=>'post']) }}     
                       <div class="entry-title">
                          
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
                                 <input required aria-required="true" class="required form-control email" id="contributionproductPrice" name="contributionproductPrice" placeholder="Your Contribution" type="text" value="">     
                                <textarea aria-required="true" class="required form-control short-textarea" id="contributionmessage" name="contributionmessage" rows="2" cols="30" placeholder="Message"></textarea>
                                <center>
                                {!! Form::button('Gift', ['class'=>'btn btn-success', 'type'=>'submit'] ) !!}
                                
                                <a href="{{ url('/invites') }}" class="btn btn-success">Back</a>
                                </center>
                          </div>
                        {!! Form::close() !!}  
                             
                        </div>
              </div>
              @endforeach
          </div>
        </div> 
        </form> 
      </div>
   </section>

 @stop
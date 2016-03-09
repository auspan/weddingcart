    @extends('app')

    @section('content')

        <section id="content" class="secstyle">

            <div class="content-wrap">

                <div class="container clearfix">
                
                    <div class="heading-block center">
                        <h2>Create your wish list</h2>
                        <span class="divcenter">Select The Products.</span>
                    </div>

                        <div class=" col_full">
                                    
                            <!-- Contact Form Overlay
                            ============================================= -->
                            <div id="contact-form-overlay" class="clearfix">
                            
                                <!-- Contact Form
                                ============================================= -->
                                {!! Form::open(['action'=>'WishlistController@store', 'class'=>'form-horizontal nobottommargin', 'method'=>'post']) !!}
                                <!--<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">-->
        
                                    <div class="form-process"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                         <select id="template-contactform-email" name="product1" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                       <select id="template-contactform-email" name="product2" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product3" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product4" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product5" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                       <select id="template-contactform-email" name="product6" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product7" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product8" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product9" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product10" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
                                    <div class="col_one_fifth">
                                        <label for="template-contactform-service">Priority</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option selected="selected" value="">Select</option>
                                            <option value="01">01</option>
                                            <option value="02">02</option>
                                            <option value="03">03</option>
                                            <option value="04">04</option>
                                            <option value="05">05</option>
                                            <option value="06">06</option>
                                            <option value="07">07</option>
                                            <option value="08">08</option>
                                            <option value="09">09</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth">
                                        <label for="template-contactform-email">Item </label>
                                        <select id="template-contactform-email" name="product11" class="required sm-form-control">
                                            <option selected="selected" value="Select">Select</option>
                                            @foreach($Products as $product)
                                            <option value="{{ $product['id'] }}">{{ $product['product_description'] }}
                                            @endforeach
                                            </option>
                                            
                                        </select>
                                    </div>
        
                                    <div class="col_two_fifth col_last">
                                        <label for="template-contactform-phone">Price </label>
                                        <div class="input-group">
                                        <div class="input-group-addon">₹</div>
                                        <input id="template-contactform-phone" name="template-contactform-phone" class="sm-form-control" type="text">                
                                        <div class="input-group-addon">.00</div>
                                        </div>

                                    </div>
        
                                    <div class="clear"></div>
        
        
        
                              

                            </div><!-- Contact Form Overlay End -->
            
                        </div>
                                                
                </div>

                <div class="center bottommargin-lg">

                    {!! Form::button('Save', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
                    <a href="#" class="button button-rounded button-xlarge">Back</a>

                </div>

            </div>

        </section><!-- #content end -->

       @stop
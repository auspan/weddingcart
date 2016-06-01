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

                            {{ Form::open(['url' => 'contribution/'.$wishlistItem->id , 'method'=>'post']) }}
                                <div class="col-md-2">

                                    <div class="entry-title">
                                        <center><label>Product Name</label>
                                            <div>{{ $wishlistItem['product_name'] }}</div>
                                        </center>
                                    </div>
                                    <div class="clear"></div>

                                    <img src="{{ asset('../uploads/Products/' .$wishlistItem['product_image'] ) }}"
                                         alt="Product_Image" id="productImage" name="productImage" required>
                                </div>

                                <div class="col-md-9">
                                    <div class="quick-contact-widget clearfix">
                                        <div class="input-group col_two_third">
                                            <center>
                                                <label>Product Description</label>
                                                <div>{{ $wishlistItem['product_description'] }}</div>
                                            </center>
                                        </div>
                                        <div class="input-group col_one_third col_last">
                                            <center>
                                                <label>Product Price</label>
                                                <div>{{ $wishlistItem['product_price'] }} Rs.</div>
                                            </center>
                                        </div>
                                        <div class="col-md-12 div-for-message">
                                            {{ $wishlistItem['message'] }}
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-addon">&#8377</i></div>
                                            <input required aria-required="true" class="required form-control email"
                                                   id="contributionproductPrice" name="contributionproductPrice"
                                                   placeholder="Gift Amount" type="text" value="">
                                            <div class="input-group-addon">.00</div>
                                        </div>
                                        <textarea aria-required="true" class="required form-control short-textarea"
                                          id="contributionmessage" name="contributionmessage" rows="2" cols="30"
                                          placeholder="Message">
                                        </textarea>
                                        <input type="hidden" name="user_event_id" value="{{ $wishlistItem['id'] }}">
                                        <center>
                                            {!! Form::button('Gift', ['class'=>'btn btn-success', 'type'=>'submit'] ) !!}

                                            <a href="{{ url('/invites') }}" class="btn btn-success">Back</a>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </section>
@stop
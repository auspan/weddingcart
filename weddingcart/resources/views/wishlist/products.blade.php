  @foreach($wishListItems as $product)
    <div id="formdiv{{$count}}">
      <div id="product{{ $count }}" class="entry clearfix">
        <div class="col-md-2">
          <div class="entry-title">
            <input required aria-required="true" class="required form-control" id="productName{{ $count }}" name="productName{{ $count }}" placeholder="Product Name" type="text" value="{{ $product['product_name'] }}">
          </div>
          <div class="clear"></div>
            <img src="{{ asset('../uploads/Products/' . $product['product_image']) }}" alt="Product_Image" id="productImage{{ $count }}" name="productImage{{ $count }}" required>
            <input type="text" class="hide-content" value="{{ $product['product_image'] }}" id="imgsrc{{ $count }}" name="imgname{{ $count }}">
        </div>
        <div class="col-md-9">
          <div class="quick-contact-widget clearfix">
            <div class="input-group col_two_third">
              <input required aria-required="true" class="required form-control" id="productDescription{{ $count }}" name="productDescription{{ $count }}" placeholder="Item Description" type="text" value="{{ $product['product_description'] }}">
            </div>
            <div class="input-group col_one_third col_last">
              <div class="input-group">
                <div class="input-group-addon">&#8377</i></div>
                <input required aria-required="true" class="required form-control email" id="productPrice{{ $count }}" name="productPrice{{ $count }}" placeholder="Amount" type="text" value="{{ $product['product_price'] }}">
                <div class="input-group-addon">.00</div>
              </div>
            </div>
            <textarea aria-required="true" class="required form-control short-textarea" id="message{{ $count }}" name="message{{ $count }}" rows="2" cols="30" placeholder="Message" value="{{ $product['message'] }}">{{ $product['message'] }}</textarea>
            
            <input type="hidden" id="countervalue" name="countervalue" value="{{ $count }}">
            <div id="product_id_{{$count}}" class="hiddenproductId hide-content">{{$product['id']}}</div>
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
          <a href="javascript::void(0)" id="btn-removewishlist-{{$count}}" class="btn-removewishlist" data-toggle="tooltip" title="Delete" data-placement="bottom"><i class="icon-trash icon-color-red"></i></a>
          <div class="clear"></div>
            <a href="javascript::void(0)" id="btn-addwishlist-{{ $count }}" class=" btn-addtowishlist" data-toggle="tooltip" title="Add" data-placement="bottom"><i class="icon-plus icon-color-blue"></i></a>
            <div class="clear"></div>
            <a href="javascript::void(0)" class="hide-content btn-editwishlist" data-toggle="tooltip" title="Edit" data-placement="bottom" id="btn-editwishlist-{{ $count }}">
              <i class="icon-pencil icon-color-blue"></i>
            </a>
            <div class="clear"></div>
            <a href="javascript::void(0)" id="btn-updatewishlist-{{ $count }}" class="hide-content btn-updatewishlist" data-toggle="tooltip" title="Update" data-placement="bottom"><i class="icon-refresh icon-color-blue"></i></a>
            <div class="clear"></div>
            <a href="javascript::void(0)" id="btn-canceltoupdatewishlist-{{ $count }}" class="hide-content btn-canceltoupdatewishlist" data-toggle="tooltip" title="Cancel" data-placement="bottom"><i class="icon-remove icon-color-red"></i></a>
            <div class="clear"></div>
            <a href="javascript::void(0)" id="btn-deletewishlist-{{ $count }}" class="hide-content btn-deletewishlist" data-toggle="tooltip" title="Delete" data-placement="bottom"><i class="icon-trash icon-color-red"></i></a>
          </div>
        </div>
      </div>
         <?php $count++  ?>
      @endforeach

        <div class="hide-content" name="totalproduct" id="totalProduct">{{ $count }}</div>
        
        <div id="newProductContainer">
        </div>
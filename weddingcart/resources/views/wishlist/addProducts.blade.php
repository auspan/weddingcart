  <div id="productModal" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-body">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title" id="myModalLabel">Select Item</h4>
            </div>
            <div class="modal-body">
              @foreach($masterProducts as $product)
                <p class="nobottommargin"><input name="#" value="{{ $product['product_name'] }}" type="checkbox" class="chk" id="{{$product['id']}}">  {{ $product['product_name'] }}</p>
                  <input type="hidden" class="productHiddenId" id="productHiddenId-{{$product['id']}}" value="{{ $product['product_name'] }}-{{ $product['product_description'] }}-{{ $product['product_price'] }}-{{ $product['product_image'] }}-{{ $product['message'] }}">
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
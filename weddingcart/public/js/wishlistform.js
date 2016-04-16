      function addProduct()
      {
      var counter=$("#totalProduct").html();


     
      var ifCheckedOrNot=$("#addNewProduct").is(':checked');
      if(ifCheckedOrNot==true)
      {
      $("#newProductContainer").append('<div id="formdiv'+counter+'"><div id="product'+counter+'" class="entry clearfix"><div class="col-md-2"><div class="entry-title"><input required aria-required="true" class="required form-control" id="productName'+counter+'" name="productName'+counter+'" placeholder="Product Name" type="text" value=""></div><div class="clear"></div><input id="productImage'+counter+'" name="productImage'+counter+'" class="sm-form-control required" type="file" value="" style="display: none"><a href="javascript::void(0)" onclick="return selectimage(&quot;productImage'+counter+'&quot;)"><img src="uploads/products/fridge2.jpg" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage'+counter+'" name="productImage'+counter+'" required></a><input type="text" value="fridge2.jpg" id="imgsrc'+counter+'" name="imgname'+counter+'" style="display: none;"></div><div class="col-md-9"><div class="quick-contact-widget clearfix"><div class="input-group col_two_third"><input required aria-required="true" class="required form-control" id="productDescription'+counter+'" name="productDescription'+counter+'" placeholder="Item Description" type="text"></div><div class="input-group col_one_third col_last"><input required aria-required="true" class="required form-control email" id="productPrice'+counter+'" name="productPrice'+counter+'" placeholder="Amount" type="text"></div><textarea aria-required="true" class="required form-control short-textarea" id="message'+counter+'" name="message'+counter+'" rows="2" cols="30" placeholder="Message"></textarea><input type="hidden" id="hiddenValue'+counter+'" name="hiddenProductValue'+counter+'" value="0"><div id="product_id'+counter+'" class="productId" style="display: none">NULL</div></div><div class="skills"><li data-percent="0"><div class="progress skills-animated divsty"><div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div></div></li></div></div><div class="col-md-1 col_last tright"><a href="javascript::void(0)" id="remove" class="btn btn-danger" onclick="return removeContainer(product'+counter+')">Remove</a><br><br><button type="button" class="btn btn-primary btn-addtowishlist" value="add" id="btn-addwishlist-'+counter+'">Add</button><button type="button" class="btn btn-primary btn-editwishlist" value="edit" id="btn-editwishlist-'+counter+'" style="display: none">Edit</button><button type="button" class="btn btn-primary btn-updatewishlist" value="update" id="btn-updatewishlist-'+counter+'" style="display: none">Update</button><button type="button" class="btn btn-primary btn-canceltoupdatewishlist" value="cancel" id="btn-canceltoupdatewishlist-'+counter+'" style="display: none">Cancel</button><button type="button" class="btn btn-primary btn-deletewishlist" value="delete" id="btn-deletewishlist-'+counter+'" style="display: none">Delete</button></div></div></div>');
        $("#addNewProduct").attr('checked',false);

        $("#saveChanges").attr('data-dismiss',"modal");
        counter++;
        $("#totalProduct").html(counter++);
        
        }
        //document.write('<script type="text/javascript" src="js/wishlist_ajax.js"></script>');
    }
    function removeContainer(divid)
    {
      var divId=divid;
      $(divId).hide(1000, function () {
      $(divId).remove();
    });
    }

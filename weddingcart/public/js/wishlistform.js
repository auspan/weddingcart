      function addProduct()
      {
        var counter=$("#totalProduct").html();
        alert(counter);
        $("input:checkbox[class=chk]:checked").each(function () {
          var id=$(this).attr("id");
          if(id!="addNewProduct")
          {
          var value=$("#productHiddenId-"+id).attr("value");
          var splitvalue=value.split(/[-]/);
          $("#newProductContainer").append('<div id="formdiv'+counter+'"><div id="product'+counter+'" class="entry clearfix"><div class="col-md-2"><div class="entry-title"><input required aria-required="true" class="required form-control" id="productName'+counter+'" name="productName'+counter+'" placeholder="Product Name" type="text" value="'+splitvalue[0]+'"></div><div class="clear"></div><img src="uploads/products/'+splitvalue[3]+'" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage'+counter+'" name="productImage'+counter+'" required><input type="text" value="'+splitvalue[3]+'" id="imgsrc'+counter+'" name="imgname'+counter+'" style="display: none;"></div><div class="col-md-9"><div class="quick-contact-widget clearfix"><div class="input-group col_two_third"><input required aria-required="true" class="required form-control" id="productDescription'+counter+'" name="productDescription'+counter+'" placeholder="Item Description" type="text" value="'+splitvalue[1]+'"></div><div class="input-group col_one_third col_last"><input required aria-required="true" class="required form-control email" id="productPrice'+counter+'" name="productPrice'+counter+'" placeholder="Amount" type="text" value="'+splitvalue[2]+'"></div><textarea aria-required="true" class="required form-control short-textarea" id="message'+counter+'" name="message'+counter+'" rows="2" cols="30" placeholder="Message"></textarea><input type="hidden" id="countervalue'+counter+'" name="countervalue'+counter+'" value="'+counter+'"><div id="product_id_'+counter+'" class="hiddenproductId" style="display: none">NULL</div></div><div class="skills"><li data-percent="0"><div class="progress skills-animated divsty"><div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div></div></li></div></div><div class="col-md-1 col_last tright"><button type="button" class="btn btn-danger btn-removewishlist" value="remove" id="btn-removewishlist-'+counter+'">Remove</button><br><br><button type="button" class="btn btn-primary btn-addtowishlist" value="add" id="btn-addwishlist-'+counter+'">Add</button><button type="button" class="btn btn-primary btn-editwishlist" value="edit" id="btn-editwishlist-'+counter+'" style="display: none">Edit</button><button type="button" class="btn btn-primary btn-updatewishlist" value="update" id="btn-updatewishlist-'+counter+'" style="display: none">Update</button><button type="button" class="btn btn-primary btn-canceltoupdatewishlist" value="cancel" id="btn-canceltoupdatewishlist-'+counter+'" style="display: none">Cancel</button><button type="button" class="btn btn-primary btn-deletewishlist" value="delete" id="btn-deletewishlist-'+counter+'" style="display: none">Delete</button></div></div></div>');
           
            $(this).attr("checked",false);
            
          }
          if(id=="addNewProduct")
          {
            $("#newProductContainer").append('<div id="formdiv'+counter+'"><div id="product'+counter+'" class="entry clearfix"><div class="col-md-2"><div class="entry-title"><input required aria-required="true" class="required form-control" id="productName'+counter+'" name="productName'+counter+'" placeholder="Product Name" type="text" value=""></div><div class="clear"></div><form files="true"><input id="productImage'+counter+'" name="productImage'+counter+'" class="sm-form-control required" type="file" value="" style="display: none"><a href="javascript::void(0)" onclick="return selectimage(&quot;productImage'+counter+'&quot;)"><img src="uploads/products/fridge2.jpg" alt="Nemo quaerat nam beatae iusto minima vel" id="productImage'+counter+'" name="productImage'+counter+'" required></a></form><input type="text" value="fridge2.jpg" id="imgsrc'+counter+'" name="imgname'+counter+'" style="display: none;"></div><div class="col-md-9"><div class="quick-contact-widget clearfix"><div class="input-group col_two_third"><input required aria-required="true" class="required form-control" id="productDescription'+counter+'" name="productDescription'+counter+'" placeholder="Item Description" type="text"></div><div class="input-group col_one_third col_last"><input required aria-required="true" class="required form-control email" id="productPrice'+counter+'" name="productPrice'+counter+'" placeholder="Amount" type="text"></div><textarea aria-required="true" class="required form-control short-textarea" id="message'+counter+'" name="message'+counter+'" rows="2" cols="30" placeholder="Message"></textarea><input type="hidden" id="countervalue'+counter+'" name="countervalue'+counter+'" value="'+counter+'"><div id="product_id_'+counter+'" class="hiddenproductId" style="display: none">NULL</div></div><div class="skills"><li data-percent="0"><div class="progress skills-animated divsty"><div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div></div></li></div></div><div class="col-md-1 col_last tright"><button type="button" class="btn btn-danger btn-removewishlist" value="remove" id="btn-removewishlist-'+counter+'">Remove</button><br><br><button type="button" class="btn btn-primary btn-addtowishlist" value="add" id="btn-addwishlist-'+counter+'">Add</button><button type="button" class="btn btn-primary btn-editwishlist" value="edit" id="btn-editwishlist-'+counter+'" style="display: none">Edit</button><button type="button" class="btn btn-primary btn-updatewishlist" value="update" id="btn-updatewishlist-'+counter+'" style="display: none">Update</button><button type="button" class="btn btn-primary btn-canceltoupdatewishlist" value="cancel" id="btn-canceltoupdatewishlist-'+counter+'" style="display: none">Cancel</button><button type="button" class="btn btn-primary btn-deletewishlist" value="delete" id="btn-deletewishlist-'+counter+'" style="display: none">Delete</button></div></div></div>');
            $(this).attr("checked",false);
          }
          $("#totalProduct").html(counter++);
        });
        $("#totalProduct").html(counter++);
        $("#saveChanges").attr('data-dismiss',"modal");
        
        
    

      
      
        //document.write('<script type="text/javascript" src="js/wishlist_ajax.js"></script>');
    }
    
    function removeContainer(divid)
    {
      var divId=divid;
      $(divId).hide(1000, function () {
      $(divId).remove();
    });
    }

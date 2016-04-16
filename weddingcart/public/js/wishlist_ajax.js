
    $(document).ready(function(){
      
      $('.btn-addtowishlist').click(function(){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        // alert(counter);
       $.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        
        var productName=$("#productName"+counter).val();
        var productImage=$("#imgsrc"+counter).val();
        var productDescription=$("#productDescription"+counter).val();
        var productPrice=$("#productPrice"+counter).val();
        
        // alert(productName);


        $.ajax({
          type:"POST",
          url:"/ajaxwishlist",
          data:{
              productName:productName,
              productImage:productImage,
              productDescription:productDescription,
              productPrice:productPrice
              
            },
          
          success:function(data){

            var result=data;
            var productid=result['1'];
            if(result['0']==1)
            {
              
              alert("Added To Wishlist");
              $("#success").css("display","inherit");
              $("#success").append("Item Added Succesfully");
              $("#product_id"+counter).html(productid);
              $("#btn-editwishlist-"+counter).css("display","inherit");
              $("#btn-deletewishlist-"+counter).css("display","inherit");
              $("#btn-addwishlist-"+counter).css("display","none");
              $('#productName'+counter).attr("disabled", "disabled");
              $('#productDescription'+counter).attr("disabled", "disabled");
              $('#productPrice'+counter).attr("disabled", "disabled");
              $('#message'+counter).attr("disabled", "disabled");
              
               //$(".btn-addtowishlist").replaceWith( $( ".btn-editwishlist" ) );



            }
          },
          error:function(data)
          {
            alert(data);
          }
        })
      })

      $('.btn-deletewishlist').click(function(){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        // alert(counter);
       $.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        var productid=$("#product_id"+counter).html();
        $.ajax({
          type:"POST",
          url:"/deletewishlist",
          data:{
              productid:productid
            },
          
          success:function(data){
            var result=data;
            if(result==1)
            {
              alert("Product Removed Succesfully");
              $("#product_id"+counter).html("NULL");
              $("#btn-editwishlist-"+counter).css("display","none");
              $("#btn-deletewishlist-"+counter).css("display","none");
              $("#btn-addwishlist-"+counter).css("display","inherit");
              $("#btn-updatewishlist-"+counter).css("display","none");
              $('#productName'+counter).removeAttr("disabled");
              $('#productDescription'+counter).removeAttr("disabled");
              $('#productPrice'+counter).removeAttr("disabled");
              $('#message'+counter).removeAttr("disabled");
            }
            if(result==0)
            {
              alert("Some Error Ocured");
            }
          },
          error:function(data)
          {
            alert(data);
          }
        })
      })

      $('.btn-editwishlist').click(function(){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        
              $("#btn-editwishlist-"+counter).css("display","none");
              $("#btn-deletewishlist-"+counter).css("display","none");
              $("#btn-addwishlist-"+counter).css("display","none");
              $("#btn-updatewishlist-"+counter).css("display","inherit");
              $("#btn-canceltoupdatewishlist-"+counter).css("display","inherit");
              $('#productName'+counter).removeAttr("disabled");
              $('#productDescription'+counter).removeAttr("disabled");
              $('#productPrice'+counter).removeAttr("disabled");
              $('#message'+counter).removeAttr("disabled");
            
      })

      $('.btn-canceltoupdatewishlist').click(function(){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];

              $('#productName'+counter).attr("disabled", "disabled");
              $('#productDescription'+counter).attr("disabled", "disabled");
              $('#productPrice'+counter).attr("disabled", "disabled");
              $('#message'+counter).attr("disabled", "disabled");
        
              $("#btn-editwishlist-"+counter).css("display","inherit");
              $("#btn-deletewishlist-"+counter).css("display","inherit");
              $("#btn-addwishlist-"+counter).css("display","none");
              $("#btn-updatewishlist-"+counter).css("display","none");
              $("#btn-canceltoupdatewishlist-"+counter).css("display","none");
              $('#productName'+counter).attr("disabled", "disabled");
              $('#productDescription'+counter).attr("disabled", "disabled");
              $('#productPrice'+counter).attr("disabled", "disabled");
              $('#message'+counter).attr("disabled", "disabled");
            
      })

      $('.btn-updatewishlist').click(function(){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        
       $.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        
        var productid=$("#product_id"+counter).html();
        var productName=$("#productName"+counter).val();
        var productImage=$("#imgsrc"+counter).val();
        var productDescription=$("#productDescription"+counter).val();
        var productPrice=$("#productPrice"+counter).val();
        $.ajax({
          type:"POST",
          url:"/updatewishlist",
          data:{
              productid:productid,
              productName:productName,
              productImage:productImage,
              productDescription:productDescription,
              productPrice:productPrice
            },
          
          success:function(data){
            var result=data;
            if(result==1)
            {
              alert("Product Updated Succesfully");
              $("#btn-editwishlist-"+counter).css("display","inherit");
              $("#btn-deletewishlist-"+counter).css("display","inherit");
              $("#btn-addwishlist-"+counter).css("display","none");
              $("#btn-updatewishlist-"+counter).css("display","none");
              $("#btn-canceltoupdatewishlist-"+counter).css("display","none");
              $('#productName'+counter).attr("disabled", "disabled");
              $('#productDescription'+counter).attr("disabled", "disabled");
              $('#productPrice'+counter).attr("disabled", "disabled");
              $('#message'+counter).attr("disabled", "disabled");
            }
            if(result==0)
            {
              alert("Some Error Ocured");
            }
          },
          error:function(data)
          {
            alert(data);
          }
        })
      })
     
     
    })
    
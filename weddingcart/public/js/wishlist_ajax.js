  
    $(document).ready(function(){

      var values = $('.hiddenproductId').map(function (index, el) {
       return $(el).attr('id'); 
      }).get();                 // get the value of all div having this id 
      var contributionvalues = $('.progressbar').map(function (index, el) {
       return $(el).attr('id'); 
      }).get(); 

      
      var totaldiv = values.length;
      var i;
      for(i=0;i<totaldiv;i++)
      {
        var hiddenProductId=values[i];
        var progressBarId=contributionvalues[i];
        if($("#"+hiddenProductId).html()!="NULL")
        {
          var splitId=values[i].split(/[_]/);
          var getOnlyIdNumber=splitId[2];
          $("#btn-editwishlist-"+getOnlyIdNumber).css("display","inherit");
          $("#btn-removewishlist-"+getOnlyIdNumber).css("display","inherit");
          $("#btn-addwishlist-"+getOnlyIdNumber).css("display","none");
          $("#btn-updatewishlist"+getOnlyIdNumber).css("display","none");
          $("#btn-canceltoupdatewishlist"+getOnlyIdNumber).css("display","none");
          $('#productName'+getOnlyIdNumber).attr("disabled", "disabled");
          $('#productDescription'+getOnlyIdNumber).attr("disabled", "disabled");
          $('#productPrice'+getOnlyIdNumber).attr("disabled", "disabled");
          $('#message'+getOnlyIdNumber).attr("disabled", "disabled");
          
        }
        if($("#"+progressBarId).attr('data-to')>0)
        {
          var splitProgressBarId=contributionvalues[i].split(/[_]/);
          var lastindex=splitProgressBarId[1];
          $("#btn-removewishlist-"+lastindex).attr("disabled","disabled");
          
        }
        }

        
      
      $('#posts').on('click', '.btn-addtowishlist', function(event){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        // alert(counter);
       $.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        var changedImage=$("#productImage"+counter).val();
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
              productPrice:productPrice,
              changedImage:changedImage

              
            },
          
          success:function(data){

            var result=data;
            var productid=result['1'];
            if(result['0']==1)
            {
              
              alert("Added To Wishlist");
              $("#success").css("display","inherit");
              $("#success").append("Item Added Succesfully");
              $("#product_id_"+counter).html(productid);
              $("#btn-editwishlist-"+counter).css("display","inherit");
              $("#btn-removewishlist-"+counter).css("display","inherit");
              //$("#remove_"+counter).css("display","none");
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

      $('#posts').on('click', '.btn-removewishlist', function(event){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        // alert(counter);
        if($("#product_id_"+counter).html()!="NULL")
        {

       $.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        var productid=$("#product_id_"+counter).html();

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
              $("#product_id_"+counter).html("NULL");
              $("#btn-editwishlist-"+counter).css("display","none");
              $("#btn-deletewishlist-"+counter).css("display","none");
              $("#btn-addwishlist-"+counter).css("display","inherit");
              $("#btn-updatewishlist-"+counter).css("display","none");
              $('#productName'+counter).removeAttr("disabled");
              $('#productDescription'+counter).removeAttr("disabled");
              $('#productPrice'+counter).removeAttr("disabled");
              $('#message'+counter).removeAttr("disabled");
              $('#formdiv'+counter).remove();
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
      }
      else
      {
        $("#formdiv"+counter).hide(1000, function(){
          $(this).remove();
        })
      }
      })

      $('#posts').on('click', '.btn-editwishlist', function(event){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        
              $("#btn-editwishlist-"+counter).css("display","none");
              $("#btn-removewishlist-"+counter).css("display","inherit");
              $("#btn-addwishlist-"+counter).css("display","none");
              $("#btn-updatewishlist-"+counter).css("display","inherit");
              $("#btn-canceltoupdatewishlist-"+counter).css("display","inherit");
              $('#productName'+counter).removeAttr("disabled");
              $('#productDescription'+counter).removeAttr("disabled");
              $('#productPrice'+counter).removeAttr("disabled");
              $('#message'+counter).removeAttr("disabled");
            
      })

      $('#posts').on('click', '.btn-canceltoupdatewishlist', function(event){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];

              $('#productName'+counter).attr("disabled", "disabled");
              $('#productDescription'+counter).attr("disabled", "disabled");
              $('#productPrice'+counter).attr("disabled", "disabled");
              $('#message'+counter).attr("disabled", "disabled");
              $("#btn-editwishlist-"+counter).css("display","inherit");
              $("#btn-removewishlist-"+counter).css("display","inherit");
              $("#btn-addwishlist-"+counter).css("display","none");
              $("#btn-updatewishlist-"+counter).css("display","none");
              $("#btn-canceltoupdatewishlist-"+counter).css("display","none");
              $('#productName'+counter).attr("disabled", "disabled");
              $('#productDescription'+counter).attr("disabled", "disabled");
              $('#productPrice'+counter).attr("disabled", "disabled");
              $('#message'+counter).attr("disabled", "disabled");
            
      })

      $('#posts').on('click', '.btn-updatewishlist', function(event){

        var id = $(this).attr('id');
        var idfields=id.split(/[-]/);
        var counter=idfields[2];
        
       $.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        
        var productid=$("#product_id_"+counter).html();
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
              $("#btn-removewishlist-"+counter).css("display","inherit");
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
    

$(document).ready(function(){
	$(".btn-wishlist-product").click(function(){
		var product_id = $(this).attr('id');
		var split_product_id = product_id.split(/[-]/);
		var last_index = split_product_id[2];
		$.ajaxSetup({
          headers:{
            'X-CSRF-Token':$('meta[name="_token"]').attr('content')
          }
        })
        $.ajax({
        	type:'POST',
        	url:'/productdetails',
        	data:{ id:last_index },
        	dataType:'json',
        	success:function(data)
        	{
        		
        		var responseobj = JSON.stringify(data);
        		alert(responseobj);
        		
        		
        	},

        	error:function(data)
        	{
        		console.log(data);
        		alert(data);
        	}
        })
	})
})
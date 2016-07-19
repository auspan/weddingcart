$('#events').on('click', '.btn-addtoevent', function(event)
  {
    var id = $(this).attr('id');
    var idfields=id.split(/[-]/);
    var counter=idfields[2];
   $.ajaxSetup({
      headers:{
        'X-CSRF-Token':$('meta[name="_token"]').attr('content')
      }
    })
    var eventId=$("#weddingEventId"+counter).val();
    var eventVenue=$("#venue"+counter).val();
    $.ajax({
      type:"POST",
      url:"/addevents",
      data:{
          eventId:eventId,
          eventVenue:eventVenue,
        },
      
      success:function(data)
      {
        var productid=data.id;
        if(data.status==1)
        {
          showAlert(data.title, data.message, data.level);
        }
      },
      error:function(data)
      {
        alert(data);
      }
    })
  })
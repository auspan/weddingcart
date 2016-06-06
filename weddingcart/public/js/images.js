$(document).ready(function() {
 
  $( "#weddate" ).datepicker({
      autoclose:true,
      format: "dd/mm/yyyy",
      startDate: "+1m",
      toggleActive: true
  });

    $("#wedding_date").mask('00/00/0000');
    //$("#wedding_date").focusout(alert("Hello"));

});

 function selectimage(txt)
    {
         var imageId=txt;
        
        document.getElementById(imageId).click() 
        {
           
        $("#"+imageId).change(function(e){
            // get file name only
            //var fileName = e.target.files[0].name;
            // get complete path of local machine
            var fileName=URL.createObjectURL(e.target.files[0]); 

            $("img#"+imageId).fadeIn("fast").attr('src',fileName);
        });
    }
        return false;
    }


    







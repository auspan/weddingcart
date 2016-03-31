$(document).ready(function() {
 
  $( "#weddate" ).datepicker();
 
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


    







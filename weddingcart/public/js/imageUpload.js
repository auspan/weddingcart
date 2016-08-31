
var imgSrc = null;
var imgName = null;
var jcropOptions = {
    setSelect: [10,10,150,150],
    minSize: [150,150],
    maxSize: [150,150],
    canResize: false,
    onSelect: showCoords,
    onChange: showCoords,
    onRelease: showCoords
}
var jcropApi;

Dropzone.options.snapDropzone = {
//            maxFiles: 1,
    maxFilesize: 2,
    dictDefaultMessage: 'Click to Add Photo or Drag and Drop Photo Here',
    previewsContainer: '#dropzonePreview',
    clickable: '#dropzonePreview',
    addRemoveLinks: true,
//            createImageThumbnails: 'false',
    addedfile: function(file) { console.log(file); },
    success: function(file, response){
        imgName = response;
        imgSrc =  window.location.origin + "/uploads/" + imgName;
        console.log("Response: " + response);
        console.log("Base URL " + window.location.origin);
        console.log("Image Src: " + imgSrc);
        $('#uploaded-image').attr('src', imgSrc);

        if(jcropApi){
            jcropApi.destroy();
        }
        $('#uploaded-image').Jcrop(jcropOptions, function(){
            jcropApi = this;
        })

        //$('#uploaded-image').Jcrop({
        //    setSelect: [10,10,150,150],
        //    minSize: [150,150],
        //    maxSize: [150,150],
        //    canResize: false,
        //    onSelect: showCoords,
        //    onChange: showCoords,
        //    onRelease: showCoords
        //});

        $("#dropzonePreview").hide();
        $("#cropbox").show();
    }
}

$(document).ready(function(){

    $("#cropbox").hide();
    $("#croppedbox").hide();


    $("#submit-crop").click(function(e){
        e.preventDefault();

        $.ajaxSetup({
            headers:{
                'X-CSRF-Token':$('meta[name="_token"]').attr('content')
            }
        })

        $.ajax({
            type: "POST",
            url: "/cropImage",
            data: {
                imgSrc: imgSrc,
                cropx: $('#cropx').val(),
                cropy: $('#cropy').val(),
                cropw: $('#cropw').val(),
                croph: $('#croph').val(),
            },
            success: function(data){
                console.log(data);
                showCroppedImage(data);
            }
        })
    });


    $('#uploaded-image').Jcrop({
        setSelect: [10,10,150,150],
        minSize: [150,150],
        maxSize: [150,150],
        canResize: false,
        onSelect: showCoords,
        onChange: showCoords,
        onRelease: showCoords
    });


    $("#change-image").click(function(e){
        e.preventDefault();
        $("#croppedbox").hide();
        $("#dropzonePreview").show();

    });

//            console.log("JCrop API" + jcrop_api);
//            $('#uploaded-image').on('onSelect onChange onRelease',function(e,s,c) {
//                console.log(e, s, c);
//            });
//              $('#uploadedImage').on('cropstart cropmove cropend', function(e,s,c){
//                console.log(e,s,c);

//            });

});

function showCroppedImage(imageName){
    var cropImgSrc =  window.location.origin + "/uploads/" + imageName;
    $("#cropbox").hide();
    $("#croppedbox").show();
    $('#cropped-image').attr('src', cropImgSrc);
}

function showCoords(c)
{
    console.log(c);
    $('#cropx').val(c.x);
    $('#cropy').val(c.y);
    $('#cropw').val(c.w);
    $('#croph').val(c.h);
};

function enableCropping(imageName){
    imgName = imageName;
    imgSrc =  window.location.origin + "/uploads/" + imgName;
    console.log("Response: " + imageName);
    console.log("Base URL " + window.location.origin);
    console.log("Image Src: " + imgSrc);
    $('#uploaded-image').attr('src', imgSrc);

    if(jcropApi){
        jcropApi.destroy();
    }
    $('#uploaded-image').Jcrop(jcropOptions, function(){
        jcropApi = this;
    })

    $("#dropzonePreview").hide();
    $("#cropbox").show();

}
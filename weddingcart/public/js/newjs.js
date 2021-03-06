jQuery(document).ready(function($)
{
    var swiperSlider = new Swiper('.swiper-parent',{
        paginationClickable: false,
        slidesPerView: 1,
        grabCursor: true,
        autoplay: 7000,
        speed: 650,
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        createPagination: true,
        onSwiperCreated: function(swiper){
            $('[data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var toAnimateDelay = $(this).attr('data-caption-delay');
                var toAnimateDelayTime = 0;
                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                if( !$toAnimateElement.hasClass('animated') ) {
                    $toAnimateElement.addClass('not-animated');
                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                    setTimeout(function() {
                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                    }, toAnimateDelayTime);
                }
            });
            SEMICOLON.slider.swiperSliderMenu();
        },
        onSlideChangeStart: function(swiper){
            $('#slide-number-current').html(swiper.activeLoopIndex + 1);
            $('[data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
            });
            SEMICOLON.slider.swiperSliderMenu();
        },
        onSlideChangeEnd: function(swiper){
            $('#slider').find('.swiper-slide').each(function(){
                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                if($(this).find('.yt-bg-player').length > 0) { $(this).find('.yt-bg-player').pauseYTP(); }
            });
            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                if($(this).find('video').length > 0) {
                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                }
                if($(this).find('.yt-bg-player').length > 0) {
                    $(this).find('.yt-bg-player').getPlayer().seekTo( $(this).find('.yt-bg-player').attr('data-start') );
                }
            });
            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 )
            {
                $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play();
            }
            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').length > 0 )
            {
                $('#slider').find('.swiper-slide.swiper-slide-active').find('.yt-bg-player').playYTP();
            }

            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                var $toAnimateElement = $(this);
                var toAnimateDelay = $(this).attr('data-caption-delay');
                var toAnimateDelayTime = 0;
                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                if( !$toAnimateElement.hasClass('animated') ) {
                    $toAnimateElement.addClass('not-animated');
                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                    setTimeout(function() {
                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                    }, toAnimateDelayTime);
                }
            });
        }
    });

                    

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });

                    $('#slide-number-current').html(swiperSlider.activeLoopIndex + 1);
                    $('#slide-number-total').html($('#slider').find('.swiper-slide:not(.swiper-slide-duplicate)').length);
                });


                                     $("#widget-subscribe-form").validate({
                                    submitHandler: function(form) {
                                        $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                        $(form).ajaxSubmit({
                                            target: '#widget-subscribe-form-result',
                                            success: function() {
                                                $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                                $('#widget-subscribe-form').find('.form-control').val('');
                                                $('#widget-subscribe-form-result').attr('data-notify-msg', $('#widget-subscribe-form-result').html()).html('');
                                                SEMICOLON.widget.notifications($('#widget-subscribe-form-result'));
                                            }
                                        });
                                    }
                                });



jQuery(document).ready( function($){
    var weddate=$("#dates").html();

    if(weddate != null)
    {
        var dateFields=weddate.split(/[/]/);
        
        var newDate = new Date(dateFields[2], dateFields[1]-1, dateFields[0]-1);
        //alert(newDate);
        $('#countdown-ex1').countdown({until: newDate});
    }

    $('#uls').click(function(){
        $('#lis').css("display","inherit");
    });
});

jQuery(window).load(function()
{
    var t=setTimeout(function()
    {
        $('.flexslider .slide').resize();

    },500);
});


jQuery(document).ready(function($)
 {

        var ocTesti = $("#oc-testi");

        ocTesti.owlCarousel({
            margin: 20,
            nav: true,
            navText: ['<i class="icon-angle-left"></i>','<i class="icon-angle-right"></i>'],
            dots: true,
            responsive:{
                0:{ items:1 },
                768:{ items:2 },
                992:{ items:3 }
            }
            });

         $("#quick-contact-form").validate({
                      submitHandler: function(form) {
                          $(form).animate({ opacity: 0.4 });
                          $(form).find('.form-process').fadeIn();
                          $(form).ajaxSubmit({
                              target: '#quick-contact-form-result',
                              success: function() {
                                  $(form).animate({ opacity: 1 });
                                  $(form).find('.form-process').fadeOut();
                                  $(form).find('.form-control').val('');
                                  $('#quick-contact-form-result').attr('data-notify-msg', $('#quick-contact-form-result').html()).html('');
                                  SEMICOLON.widget.notifications($('#quick-contact-form-result'));
                              }
                          });
                      }
                  });

                  $('#quick-contact-form-nophone').hide();


                $("#widget-subscribe-form").validate({
                    submitHandler: function(form) {
                        $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                        $(form).ajaxSubmit({
                            target: '#widget-subscribe-form-result',
                            success: function() {
                                $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                $('#widget-subscribe-form').find('.form-control').val('');
                                $('#widget-subscribe-form-result').attr('data-notify-msg', Rs ('#widget-subscribe-form-result').html()).html('');
                                SEMICOLON.widget.notifications(Rs ('#widget-subscribe-form-result'));
                            }
                        });
                    }
                });
                            

                     });

function showAlert(title, message, level){

    swal({
        title: title,
        text: message,
        type: level,
        timer: 1500,
        showConfirmButton: false
    });
}

function displayErrors(errorList){
    clearErrors();
    $.each(errorList, function(index, error){
        $("#error-list").append('<li><i class="fa-li fa fa-exclamation-circle"></i>'+ error+ '</li>');
    });
    $(".message-div").show();

}

function clearErrors() {
    $("#error-list li").remove();
    $(".message-div").hide();
}

function resetForm($form) {
    $form.find('input:text, input:password, input:file, select, textarea').val('');
    $form.find('input:text, input:password, input:file, select, textarea').removeClass('error');
    $form.find('input:radio, input:checkbox')
        .removeAttr('checked').removeAttr('selected');
}

function highlightErrors(errorList){
    $.each(errorList, function(index, errors){
        $.each(errors, function(index, elements){
            if(index == 'element')
            {
                    console.log("Index: " + index + "Highlight: " + elements);
                    console.log("ATTR: " + $(elements).addClass('error'));
                //$.each(elements, function(index, values){

                //});
            }
        });
    });
}



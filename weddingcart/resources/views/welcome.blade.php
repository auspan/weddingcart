@extends('app')

@section('content')       
        
        @include('welcome.header')
        <section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
            @include('welcome.slider') 
        </section>        
        
        <!-- Content
        ============================================= -->
        <section id="content" class="sectionmar">

            <div class="content-wrap">
            @include('welcome.infoLinks')

                <div class="section parallax dark nobottommargin divsecbackground" data-stellar-background-ratio="0.4">
                    @include('welcome.clientSlider')
                </div>

                {{--<div class="container clearfix divcontainer">--}}
                    {{--@include('welcome.aboutTeam')--}}
                {{--</div>--}}
            </div>
        </section><!-- #content end -->
   </div><!-- #wrapper end -->
</body>
</html>
@stop
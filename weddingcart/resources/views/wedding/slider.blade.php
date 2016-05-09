<section id="slider" class="slider-parallax full-screen page-section dark clearfix">
    <div class="fslider divtopstyl" data-speed="2000" data-pause="6000" data-animation="fade" data-arrows="false" data-pagi="false">
        <div class="flexslider" style="height: 100% !important;">
            <div class="slider-wrap divslidr">
                <div class="slide divslidflex"></div>
                <div class="slide divslidflex1"></div>
                <div class="slide divslidflex2"></div>
            </div>
        </div>
    </div>
    <div class="container vertical-middle dark center clearfix divconverticl">
        <div class="wedding-head clearfix">
            <div class="first-name">
                @for($i = 0; $i < count($groom_name); ++$i )
                    @if($i == 0)
                        {{ $groom_name[$i] }}
                    @else
                        <span>{{ $groom_name[$i] }}</span>
                    @endif
                @endfor
            </div>
            <div class="and">&amp;</div>
            <div class="first-name">
                @for($i = 0; $i < count($bride_name); ++$i )
                    @if($i == 0)
                        {{ $bride_name[$i] }}
                    @else
                        <span>{{ $bride_name[$i] }}</span>
                    @endif
                @endfor
            </div>
        </div>

        <div class="divider divider-short divider-center"><i class="icon-heart3"></i></div>
        <p class="lead">Getting <strong>Hitched</strong> on:</p>

        <div id="countdown-ex1" class="countdown countdown-large coming-soon divcenter">
            <div id="dates" style="display: none">{{ $wdt }}</div>
        </div>
    </div>
</section>
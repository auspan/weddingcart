<div id="section-couple" class="heading-block title-center page-section">
    <h2>The Couple</h2>
    <span>Meet the Bride &amp; the Groom</span>
</div>

<div class="col-md-6 bottommargin">
    <div class="team team-list clearfix">
        <div class="team-image" style="width: 150px;">
            <img class="img-circle" src="{{ asset('../uploads/'.$bim) }}" alt="Bride Image">
       
        </div>
        <div class="team-desc">
            <div class="team-title"><h4>{{ $bnm }}</h4><span>Bride</span></div>
            <div class="team-content">{{ $bab or ' '}}</div>
            <div class="line topmargin-sm nobottommargin"></div>
            <a href="http://www.facebook.com/{{ $bfu or ' ' }}" class="social-icon si-borderless si-small si-facebook" title="Facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>
            <a href="http://www.twitter.com/{{ $btu or ' ' }}" class="social-icon si-borderless si-small si-linkedin" title="Linkedin">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
            </a>
            <a href="http://www.instagram.com/{{ $biu or ' ' }}" class="social-icon si-borderless si-small si-instagram" title="Instagram">
                <i class="icon-instagram"></i>
                <i class="icon-instagram"></i>
            </a>
        </div>
    </div>
</div>

<div class="col-md-6 bottommargin">
    <div class="team team-list clearfix">
        <div class="team-image" style="width: 150px;">
        
            <img class="img-circle" src="{{ asset('../uploads/'.$gim) }}" alt="Groom Image">
        
        </div>
        <div class="team-desc">
            <div class="team-title"><h4>{{ $gnm }}</h4><span>Groom</span></div>
            <div class="team-content">{{ $gab or ' ' }}</div>
            <div class="line topmargin-sm nobottommargin"></div>
            <a href="http://www.facebook.com/{{ $gfu or ' ' }}" class="social-icon si-borderless si-small si-facebook" title="Facebook">
                <i class="icon-facebook"></i>
                <i class="icon-facebook"></i>
            </a>
            <a href="http://www.twitter.com/{{ $gtu or ' ' }}" class="social-icon si-borderless si-small si-linkedin" title="Linkedin">
                <i class="icon-linkedin"></i>
                <i class="icon-linkedin"></i>
            </a>
            <a href="http://www.instagram.com/{{ $giu or ' ' }}" class="social-icon si-borderless si-small si-twitter" title="Twitter">
                <i class="icon-twitter"></i>
                <i class="icon-twitter"></i>
            </a>
        </div>
    </div>
</div>

<div class="col-md-8 col-md-offset-2 bottommargin">
    <div class="team-desc">
        <div class="team-title">
            <h4>Our Story</h4>
        </div>
        <div class="team-content">{{ $ost or ' '}}</div>
    </div>
</div>

<div class="col-md-12 center bottommargin-lg">
    <a href="{{ url('wedding/'.Auth::user()->id.'/edit') }}" class="button button-rounded button-xlarge">EDIT</a>
</div>
{{--<div class="center bottommargin-lg">--}}
    {{--<a href="{{ url('showAddPhotoPage') }}" class="button button-rounded button-xlarge">ADD PHOTO</a>--}}
{{--</div>--}}
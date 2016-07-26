<div id="section-events" class="heading-block title-center topmargin-lg page-section">
    <h2>Events Schedule</h2>
    <span>List of all the Scheduled Events for your Information</span>
</div>
    <div class="col-lg-8 divcenter bottommargin-lg">
    </div>



@foreach($user_wedding_events as $userWeddingEvent)
<div class="col_one_third">
    <div class="feature-box center media-box fbox-bg">
        <div class="fbox-media">
            <img src="{{$userWeddingEvent->event_image}}" alt="Mehndi">
        </div>
        <div class="fbox-desc">
            <h3>{{$userWeddingEvent->event_name}}<span class="subtitle">{{$userWeddingEvent->venue}}, 25th May</span></h3>
        </div>
    </div>
</div>
@endforeach
</div>
<div class="center bottommargin-lg">
    <a href="{{ url('createWeddingEvent') }}" class="button button-rounded button-xlarge">Manage Events</a>
</div>

<!-- <div class="col_one_third">
    <div class="feature-box center media-box fbox-bg">
        <div class="fbox-media">
            <img src="../images/wedding.jpg" alt="Wedding">
        </div>
        <div class="fbox-desc">
            <h3>Wedding Ceremony<span class="subtitle">Vivanta by Taj, 31st May</span></h3>
        </div>
    </div>
</div>

<div class="col_one_third col_last">
    <div class="feature-box center media-box fbox-bg">
        <div class="fbox-media">
            <img src="../images/reception.jpg" alt="Reception">
        </div>
        <div class="fbox-desc">
            <h3>Reception Party<span class="subtitle">Le Meridien Hotel, 2nd June</span></h3>
        </div>
    </div>
</div>
 -->
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

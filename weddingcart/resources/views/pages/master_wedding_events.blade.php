@extends('app')

@section('content')

<meta name="_token" content="{{ csrf_token() }}">
    <section id="content" class="secstyle">
      <div class="content-wrap">
        <div class="container clearfix">
          <div class="heading-block center">
            <h2>Wedding Events</h2>
          </div>
          <div class="events small-thumbs">
          		<div>
			      <div class="entry clearfix">
			        <div class="col-md-2">
			          <div class="entry-title">
			            <input required aria-required="true" class="required form-control" id="eventName" name="eventName" placeholder="Event Name" type="text" value="Mehndi Ceremony">
			          </div>
			          <div class="clear"></div>
			            <img src="" alt="Event_Image" id="eventImage" name="eventImage">
			        </div>
			        <div class="col-md-9">
			          <div class="quick-contact-widget clearfix">
			            <div class="input-group col_two_third">
			              <input required aria-required="true" class="required form-control" id="venue" name="venue" placeholder="Venue" type="text">
			            </div>
			            
			            <textarea aria-required="true" class="required form-control short-textarea" id="venueAddress" name="venueAddress" rows="2" cols="30" placeholder="Venue Address"></textarea>
			            
			          </div>
			        </div>
			        <div class="col-md-1 col_last tright">
			            <a href="javascript::void(0)" id="btn-addevent" class=" btn-addtoevent"><i class="icon-plus icon-color-blue"></i></a>
			          </div>
			        </div>
      </div>
          </div>
         </div>
       </div>
      </section>
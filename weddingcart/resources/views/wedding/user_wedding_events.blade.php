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
          <?php $count = 1 ?>
          <div id="events">
          @foreach($UserWeddingEvents as $userWeddingEvent)
			      <div class="entry clearfix" id="event{{$count}}">
			        <div class="col-md-2">
			        	<input type="hidden" id="weddingEventId{{$count}}" name="weddingEventId{{$count}}" value="{{$userWeddingEvent['id']}}">
			        	<input type="hidden" id="userWeddingEventId{{$count}}" class="userWeddingEventId" name="userWeddingEventId{{$count}}" value="{{$userWeddingEvent['user_wedding_event_id']}}">
			            <img src="{{$userWeddingEvent['event_image']}}" alt="Event_Image" id="eventImage{{$count}}" name="eventImage{{$count}}">
			            <input type="hidden" class="hide-content" value="{{$userWeddingEvent['event_image']}}" id="eventImgName{{ $count }}" name="eventImgName{{ $count }}">
			            <div class="clear"></div>
			            <div class="entry-title">
			            <input required aria-required="true" class="required form-control" id="eventName{{$count}}" name="eventName{{$count}}" placeholder="Event Name" type="text" value="{{$userWeddingEvent['event_name']}}">
			          </div>
			        </div>
			        <div class="col-md-9">
			          <div class="quick-contact-widget clearfix">
			            
			            <textarea aria-required="true" class="required form-control short-textarea" id="venue{{$count}}" name="venue{{$count}}" rows="2" cols="30" placeholder="Venue">{{$userWeddingEvent['venue']}}</textarea>

			            <div id="weddate" class="input-group date">
			                <input  name="wedding_date{{$count}}" type="text" id="wedding_date{{$count}}" class="form-control" placeholder="DD/MM/YYYY">
			                <div class="input-group-addon">
			                    <span class="glyphicon glyphicon-th"></span>
			                </div>
            			</div>
        				<input type="hidden" name="wed_date" class="form-control" value="wdt">

			          </div>
			        </div>
			        <div class="col-md-1 col_last tright">
			            <a href="javascript::void(0)" id="btn-addevent-{{$count}}" class="btn-addtoevent"><i class="icon-plus icon-color-blue"></i></a>
			            <a href="javascript::void(0)" id="btn-addevent-{{$count}}" class="btn-updateevent" style="display:none"><i class="icon-refresh icon-color-blue"></i></a>
			          </div>
			        </div>
      <?php $count++ ?>
      @endforeach
      </div>
          </div>
         </div>
       </div>
      </section>

      <script>
      	$(document).ready(function(){

      var values = $('.userWeddingEventId').map(function (index, el) {
       return $(el).attr('value'); 
      }).get();
      console.log(values);
      var totaldiv = values.length;
      var i;
      for(i=0;i<totaldiv;i++)
      {
      	if(values[i]!="")
      {
      	$(".btn-addtoevent").css("display","none");
      	$(".btn-updateevent").css("display","inherit");
      }
      }
  });
      </script>

      @stop
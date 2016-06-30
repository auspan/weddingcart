@extends('app')
@section('content')

	<section id="content" class="secbkgrnd">
		<div class="content-wrap">
			<div class="container clearfix">
				{!! Form::open(['url'=>'/weddingEvent', 'class'=>'form-horizontal nobottommargin', 'method'=>'post', 'id'=>'wedding_event']) !!}

					<div class="form-group">
					    <label for="weddingEvent" class="col-sm-2 control-label">Wedding Event</label>
					    <div class="col-sm-10">
					      	<select class="form-control" id="weddingEvent" name="weddingEvent">
							  <option>Mehandi Ceremony</option>
							  <option>Wedding Ceremony</option>
							  <option>Reception Party</option>
							</select>
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="Venue" class="col-sm-2 control-label">Venue</label>
					    <div class="col-sm-10">
					      	<input type="text" class="form-control" id="venue" name="venue" placeholder="Venue">
					    </div>
					  </div>
					  <div class="form-group">
					      <label for="eventDate" class="col-sm-2 control-label">Event Date</label>
					    <div class="col-sm-10">
					    <div id="weddate" class="input-group date">
		                <input  name="wedding_date" type="text" id="wedding_date" class="form-control" placeholder="DD/MM/YYYY">
		                <div class="input-group-addon">
		                    <span class="glyphicon glyphicon-th"></span>
                		</div>
            		</div>
					    </div>
					  </div>
					  <center>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      {!! Form::button('Save', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
					    </div>
					  </div>
					  </center>
					
				{!! Form::close() !!}
			</div>
		</div>	
	</section>

@stop
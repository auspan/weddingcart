@extends('app')

@section('content')
    <section id="content" class="secbkgrnd">
	   <div class="content-wrap">
		  <div class="container clearfix">
			<div class="heading-block center">
			     <h2>Create your event</h2>
			     <span class="divcenter">Please fill-up the details of the Bride and Groom.</span>
                <div class="tab-container">
                    <div class="clearfix">

                        @include('errors.weddValidation');
                               
                        {!! Form::open(['action'=>['WeddingController@update',$user_event_id], 'class'=>'form-horizontal nobottommargin', 'method'=>'post', 'files'=>true]) !!}
                      @include('wedding.weddingDate');
                    </div>
                </div>
			</div>
            @include('wedding.brideDetails')

            @include('wedding.groomDetails')

		      <div class="center bottommargin-lg">
			         {!! Form::button('Update', ['class'=>'button button-rounded button-xlarge', 'type'=>'submit'] ) !!}
				<a href="#" class="button button-rounded button-xlarge">Back</a>
					{!! Form::close() !!}
		</div>
	</div>
</section>

	@stop
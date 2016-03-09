@extends('app')

@section('content')

		<center>
		<br><br><br><br>
			<hr style="width: 100%; height: 10px; color: blue">
				<h2 style="color: red">
					Plese firstly plan wedding
				</h2>
				<br>
				<a href="{{ url('/weddingdetails') }}" class="button button-border button-rounded button-xlarge topmargin" id="wedding_plan">Plan Wedding</a>
			<hr style="width: 100%; height: 50px; color: blue">
		<center>
	@stop
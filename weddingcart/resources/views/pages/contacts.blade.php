                                {{ $i=1 }}
    @extends('app')

    @section('content')

		<section class="sectionmar" id="content">

			<div class="content-wrap">
				<div class="container clearfix">

                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($people as $person)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $person['name'] }}</td>
                                        <td>{{ $person['email'] }}</td>
                                        <td>{{ $person['phone'] }}</td>
                                    </tr>
                                @endforeach

                            </tbody>

                        </table>
                    </div>

                </div>
			</div>

		</section><!-- #content end -->

		@stop
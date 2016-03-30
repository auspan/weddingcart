@if($errors->any())
    <ul class="alert alert-danger">
  	   @foreach($errors->all() as $error)
            <li type="1"> {{ $error }} </li>
         @endforeach
    </ul>
@endif
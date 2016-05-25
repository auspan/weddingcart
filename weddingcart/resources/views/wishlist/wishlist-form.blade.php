@extends('app')

@section('content')

<meta name="_token" content="{{ csrf_token() }}">
    <section id="content" class="secstyle">
      <div class="content-wrap">
        <div class="container clearfix">
          <div class="heading-block center">
            <h2>Wishlist</h2>
          </div>
          <div id="posts" class="events small-thumbs">
            <?php $count=1 ?>
              @include('wishlist.products');
          </div>
             @include('wishlist.addProducts');       
      <div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a></div>

      <div class="center bottommargin-lg">
      
        <a href="{{ url('/home') }}" class="button button-rounded button-xlarge">Back</a>
          <div class="center">
            <button class="button button-border button-rounded topmargin" data-toggle="modal" data-target=".bs-example-modal-sm">Add More</button>
          </div>
      </div>
    </div>
  </div>
</section>
     
  @stop
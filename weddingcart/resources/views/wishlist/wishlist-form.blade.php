@extends('app')

@section('content')

    <section id="content" class="secstyle">
        <div class="content-wrap">
            <div class="container clearfix">
                <div class="heading-block center">
                    <h2>Wishlist</h2>
                </div>
                <div id="posts" class="events small-thumbs">
                    <?php $count = 1 ?>
                    @include('wishlist.products')
                </div>
                @include('wishlist.addProducts')
                <div class="divider divider-center"><a href="#" data-scrollto="#header"><i class="icon-chevron-up"></i></a>
                </div>

                <div class="center bottommargin-lg">
                    <div class="center">
                        <button class="button button-border button-rounded" data-toggle="modal"
                                data-target=".bs-example-modal-sm">Add More
                        </button>
                    </div>
                    <a href="{{ url('/home') }}" class="button button-rounded button-xlarge topmargin">Done</a>
                </div>

            </div>
        </div>
    </section>

@stop
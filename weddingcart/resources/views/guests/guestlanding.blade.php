@extends('app')

@section('content')

    <div id="most-toppest"></div>

    @include('wedding.slider')

    @include('guests.header')

    <section id="content" class="sectionmar">
        <div class="content-wrap">
            <div class="container clearfix">
                @include('guests.couple')
                <div class="clear"></div>
                @include('guests.wishlist')
                <div class="clear"></div>
                @include('guests.events')
                <div class="clear"></div>
            </div>
        </div>
    </section>

@stop
@extends('app')

@section('content')

    <div id="most-toppest"></div>

    @include('wedding.slider')

    @include('wedding.header')

    <section id="content" class="sectionmar">
        <div class="content-wrap">
            <div class="container clearfix">
                @include('wedding.couple')
                <div class="clear"></div>
                @include('wedding.wishlist')
                <div class="clear"></div>
                @include('wedding.events')
                <div class="clear"></div>
                @include('wedding.guests')
                <div class="clear"></div>
            </div>
        </div>
    </section>

@stop
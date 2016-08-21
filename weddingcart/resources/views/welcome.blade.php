@extends('home')

@section('content')       
        
        @include('welcome.header')
        @include('welcome.slider')
        <section id="content" class="sectionmar">
        {{--@include('welcome.infoLinks')--}}
        @include('welcome.aboutUs')
        @include('welcome.faq')
        </section>


@stop
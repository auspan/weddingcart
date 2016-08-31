@extends('app')

@section('content')

    <div class="content-wrap">
        <div class="container clearfix">

            <div class="row">

                <div class="col-md-4">
                    <img src="{{ asset('../uploads/'.$imageName) }}" alt="">
                </div>
            </div>
        </div>
    </div>

    <script>
        Dropzone.options.brideDropzone = {
            maxFiles: 1,
            dictDefaultMessage: 'Click to Add Photo or Drag and Drop Photo Here'
        }
    </script>
@stop
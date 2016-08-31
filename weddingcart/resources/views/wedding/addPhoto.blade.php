@extends('app')

@section('content')

    <div class="content-wrap">
        <div class="container clearfix">

            <div id="section-couple" class="heading-block title-center page-section">
                <h2>Add Photograph</h2>
            </div>

            <div class="row">

                {{--<div class="col-md-8">--}}
                    {{--<h2>Upload Image</h2>--}}

                    <div id = "dropzonePreview" class="dropzone-previews dz-default img-frame">
                        <form action="/uploadBrideImage" class="dropzone" id="snap-dropzone" method="POST">
                            {{ csrf_field() }}
                            <div class="fallback">
                                <input name="file" type="file" multiple />
                            </div>
                        </form>
                    </div>
                {{--</div>--}}

                {{--<div class="col-md-4 clearfix">--}}
                        <div id="cropbox" class="img-frame">
                        {{--<h2>View And Crop Image</h2>--}}
                            <img id="uploaded-image" src="" alt="">
                        <form action="">
                            <input type="hidden" name="cropx" id="cropx" value="0" />
                            <input type="hidden" name="cropy" id="cropy" value="0" />
                            <input type="hidden" name="cropw" id="cropw" value="0" />
                            <input type="hidden" name="croph" id="croph" value="0" />
                            <button id="submit-crop" class="button button-rounded">Crop</button>
                        </form>
                    </div>
                {{--</div>--}}

                {{--<div class="col-md-4 clearfix">--}}
                    {{--<h2>Cropped Image</h2>--}}
                    <div id="croppedbox" class="img-frame">
                        <img id="cropped-image" alt="">
                        <button id="change-image" class="button button-rounded">Change Image</button>
                    </div>
                {{--</div>--}}
            </div>

        </div>
    </div>

    <script type="text/javascript" src="js/imageUpload.js"></script>
@stop
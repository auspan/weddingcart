<div class="col_half col_last">

    <div id="contact-form-overlay" class="clearfix">
        <input id="gimg" name="groom_image" class="sm-form-control required" type="file" style="display: none">

        <input type="hidden" name="groom_img" class="form-control" value="gim">

        <div class="bride-image divcenter">
    	   <a href="" onclick="return selectimage('gimg')"><img src="{{ asset('../uploads/' . $gim) }}" id="gimg" alt="Groom" style="width: 150px; height: 150px; object-fit: cover;"></a>
            <input type="text" value="{{ $gim }}" id="groomImage" name="groomImage" style="display: none;">
        </div>
        <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>

        <div class="col_full">
            <center>
                <label for="template-contactform-service">Groom</label>
            </center>
                            
            <div class="clear"></div>
        
            <div class="col_full">
                <label for="template-contactform-name">Name <small>*</small></label>
                <input id="template-contactform-name" name="groom_name" class="sm-form-control required" type="text" value="{{ $gnm }}">
                <input type="hidden" name="groom" class="form-control" value="gnm">
            </div>

            <div class="col-full">
                <label for="groom-about">About</label>
                <textarea id="groom-about" name="groom_about" class="sm-form-control fixed-textarea" rows="5" placeholder="About the Groom...">{{ $gab }}</textarea>
                <input type="hidden" name="groomAbout" class="form-control" value="gab">
            </div>

        </div>
    </div>
</div>
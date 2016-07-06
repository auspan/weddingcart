<div class="col_half">
    <div id="contact-form-overlay" class="clearfix">
        <input id="bimg" name="bride_image" class="sm-form-control required" value="" type="file" style="display: none">
                    
        <input type="hidden" name="bride_img" class="form-control" value="bim">
		<div class="bride-image divcenter">
			<a href="" onclick="return selectimage('bimg')"><img src="{{ asset('../uploads/' . $bim) }}" id="bimg" alt="Groom" style="width: 150px; height: 150px; object-fit: cover;"></a>
            
            <input type="text" value="{{ $bim }}" id="brideImage" name="brideImage" style="display: none;">
		</div>
        <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>
                   
        <div class="col_full">
            <center>
                <label for="template-contactform-service">Bride</label>
            </center>  
                      	
        <div class="clear"></div>
            <div class="col_full">
                <label for="template-contactform-name">Name <small>*</small></label>
                <input id="bride_name" name="bride_name" class="sm-form-control required" type="text" value="{{ $bnm }}">
                <input type="hidden" name="bride" class="form-control" value="bnm">
            </div>
            <div class="col-full">
                <label for="bride-about">About</label>
                <textarea id="bride-about" name="bride_about" class="sm-form-control fixed-textarea" rows="5" placeholder="About the Bride...">{{ $bab }}</textarea>
                <input type="hidden" name="brideAbout" class="form-control" value="bab">
            </div>
        </div>
    </div>
</div>
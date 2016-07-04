	<div class="col_half">
        <div id="bride-details" class="clearfix">
            <input id="bimg" name="bride_image" class="sm-form-control required" type="file" value="" style="display: none">
            <input type="hidden" name="bride_img" class="form-control" value="bim">
			<div class="bride-image divcenter">
					<a href="" onclick="return selectimage('bimg')"><img src="images/favatar.png" id="bimg" alt="Groom" class="img-rounded img-responsive" style="object-fit: cover;"></a>
			</div>
            <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>
            <div class="col_full">
                <center>
                    <label for="template-contactform-service">Bride</label>
                </center>
                <div class="clear"></div>

                <div class="col_full">
                    <label for="bride-name">Name <small>*</small></label>
                    <input id="bride-name" name="bride_name" class="sm-form-control required lettersonly" type="text">
                    <input type="hidden" name="bride" class="form-control" value="bnm">
                </div>

                <div class="col-full">
                    <label for="bride-about">About</label>
                    <textarea id="bride-about" name="bride_about" class="sm-form-control fixed-textarea" rows="5" placeholder="About the Bride..."></textarea>
                    <input type="hidden" name="brideAbout" class="form-control" value="bab">
                </div>

          </div>

        </div>

	</div>
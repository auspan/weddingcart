<div class="col_half col_last">
    <div id="groom-details" class="clearfix">
        <input id="gimg" name="groom_image" class="sm-form-control required" type="file" style="display: none">
        <input type="hidden" name="groom_img" class="form-control" value="gim">

        <div class="bride-image divcenter">
            <a href="" onclick="return selectimage('gimg')"><img src="images/mavatar.png" id="gimg" alt="Groom"
                                                                 class="img-responsive" style="object-fit: cover;"></a>
        </div>
        <div class="col_full center bottommargin">Minimum size 300 x 300 pixel.</div>

        <div class="col_full">
            <center>
                <label for="template-contactform-service">Groom</label>
            </center>

            <div class="clear"></div>

            <div class="col_full">
                <label for="groom_name">Name
                    <small>*</small>
                </label>
                <input id="groom_name" name="groom_name" class="sm-form-control required lettersonly" type="text">
                <input type="hidden" name="groom" class="form-control" value="gnm">
            </div>

            <div class="col_full">
                <label for="groom-about">About</label>
                <textarea id="groom-about" name="groom_about" class="sm-form-control fixed-textarea" rows="5"
                          placeholder="About the Groom..."></textarea>
                <input type="hidden" name="groomAbout" class="form-control" value="gab">
            </div>

            <div class="col_full">
                <label for="">Social Media Links</label>
            </div>

            <div class="col_full">
                <div class="col_one_fourth">
                    <label for="facebook-url">Facebook</label>
                </div>
                <div class="col_three_fourth col_last">
                    <input id="groom-facebook-url" name="groom_facebook_url" class="sm-form-control" type="text">
                </div>
                <input type="hidden" name="groomFacebookUrl" class="form-control" value="gfu">

                <div class="col_one_fourth">
                    <label for="facebook-url">Twitter</label>
                </div>
                <div class="col_three_fourth col_last">
                    <input id="groom-twitter-url" name="groom_twitter_url" class="sm-form-control" type="text">
                </div>
                <input type="hidden" name="groomTwitterUrl" class="form-control" value="gtu">

                <div class="col_one_fourth">
                    <label for="facebook-url">InstaGram</label>
                </div>
                <div class="col_three_fourth col_last">
                    <input id="groom-instagram-url" name="groom_instagram_url" class="sm-form-control" type="text">
                </div>
                <input type="hidden" name="groomInstagramUrl" class="form-control" value="giu">

            </div>

        </div>
    </div>
</div>
<div id="section-list" class="heading-block center topmargin page-section">
    <h2>Wish List</h2>
    {{--<span>Check out the Wish List of the Couple</span>--}}
</div>

<div class="col-lg-8 divcenter bottommargin-lg">
    <ul class="skills">
        @foreach($wishlist_items as $items)
            <li data-percent="0">
                <span>&nbsp;&nbsp;&nbsp;&nbsp;{{ $items }}</span>
                <div class="progress skills-animated divprogress">
                    <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="0" data-refresh-interval="30" data-speed="1100">0</span>%</div></div>
                </div>
            </li>
        @endforeach
    </ul>
</div>

<div class="center bottommargin-lg">
    <a href="{{ url('/showWishlist') }}" class="button button-rounded button-xlarge">Manage</a>
</div>


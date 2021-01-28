@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('Partners')

    <section class="all-partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4">
                    <div class="filters partner-bottom">
                        <div class="filter-heading">
                            <h3>Filters</h3>
                        </div>
                        <div class="accordion" id="accordionone">
                            <div class="location">
                                <button class="filter-dropdown" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Location
                                </button>
                                <div id="collapseOne" class="collapse show" data-parent="#accordionone">
                                    <div class="search-area">
                                        <form>
                                            <input class="search-area-input" name="search" type="text"
                                                   placeholder="Search your area">
                                            <div class="icon-btn">
                                                <div class="cross-area-icon">
                                                    <i class="fas fa-crosshairs"></i>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="filter-checkbox">
                                        <p>
                                            <input type="checkbox" id="c1" name="cb">
                                            <label for="c1">All</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c2" name="cb">
                                            <label for="c2">Canterbury-Bankstown</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c3" name="cb">
                                            <label for="c3">Central Business District</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c4" name="cb">
                                            <label for="c4">Eastern Suburbs</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c5" name="cb">
                                            <label for="c5">Forest District</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c6" name="cb">
                                            <label for="c6">Greater Western Sydney</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c7" name="cb">
                                            <label for="c7">Hills District</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c8" name="cb">
                                            <label for="c8">Inner West</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c9" name="cb">
                                            <label for="c9"> Macarthur</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c10" name="cb">
                                            <label for="c10">Central Business</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c11" name="cb">
                                            <label for="c11">Main Market</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c12" name="cb">
                                            <label for="c12">Eastern</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordiontwo">
                            <div class="location">
                                <button class="filter-dropdown" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Categories
                                </button>
                                <div id="collapseTwo" class="collapse" data-parent="#accordiontwo">
                                    <div class="filter-checkbox">
                                        <p>
                                            <input type="checkbox" id="c13" name="cb">
                                            <label for="c13"> Breakfast</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c14" name="cb">
                                            <label for="c14">Lunch</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c15" name="cb">
                                            <label for="c15"> Dinner</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c16" name="cb">
                                            <label for="c16">Cafe's</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c17" name="cb">
                                            <label for="c17">Delivery</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionthree">
                            <div class="location">
                                <button class="filter-dropdown" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Cuisine
                                </button>
                                <div id="collapseThree" class="collapse" data-parent="#accordionthree">
                                    <div class="filter-checkbox">
                                        <p>
                                            <input type="checkbox" id="c18" name="cb">
                                            <label for="c18">Pizza</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c19" name="cb">
                                            <label for="c19">Drinks & Beer Restaurants</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c20" name="cb">
                                            <label for="c20">Cakes & Desserts</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c21" name="cb">
                                            <label for="c21">Sushi</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c22" name="cb">
                                            <label for="c22">Fast Food</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c23" name="cb">
                                            <label for="c23">Shawarma</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c24" name="cb">
                                            <label for="c24">Fish</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c25" name="cb">
                                            <label for="c25">Lunch</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c26" name="cb">
                                            <label for="c26">Coffee Cafe’s</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c27" name="cb">
                                            <label for="c27">Cheese Tika</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c28" name="cb">
                                            <label for="c28">Samosa and Pakodas</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c29" name="cb">
                                            <label for="c29">Chinese</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionfour">
                            <div class="location">
                                <button class="filter-dropdown" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Establish Type
                                </button>
                                <div id="collapseFour" class="collapse" data-parent="#accordionfour">
                                    <div class="filter-checkbox">
                                        <p>
                                            <input type="checkbox" id="c30" name="cb">
                                            <label for="c30">Cafe’s</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c31" name="cb">
                                            <label for="c31">Dhaba’s</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c32" name="cb">
                                            <label for="c32">Sweet Shopst</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c33" name="cb">
                                            <label for="c33">Fine Dinings</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c34" name="cb">
                                            <label for="c34">Casual Dinings</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c35" name="cb">
                                            <label for="c35">Bakeries</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c36" name="cb">
                                            <label for="c36">Bars</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c37" name="cb">
                                            <label for="c37">Vine Shops</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c38" name="cb">
                                            <label for="c38">Halls</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionfive">
                            <div class="location">
                                <button class="filter-dropdown" type="button" data-toggle="collapse"
                                        data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Restaurants offers
                                </button>
                                <div id="collapseFive" class="collapse" data-parent="#accordionfive">
                                    <div class="filter-checkbox">
                                        <p>
                                            <input type="checkbox" id="c39" name="cb">
                                            <label for="c39">10% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c40" name="cb">
                                            <label for="c40">20% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c41" name="cb">
                                            <label for="c41">30% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c42" name="cb">
                                            <label for="c42">40% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c43" name="cb">
                                            <label for="c43">50% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c44" name="cb">
                                            <label for="c44">60% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c45" name="cb">
                                            <label for="c45">70% off</label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c46" name="cb">
                                            <label for="c46">80% off</label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion" id="accordionsix">
                            <div class="location">
                                <button class="filter-dropdown" type="button" data-toggle="collapse"
                                        data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Rating
                                </button>
                                <div id="collapseSix" class="collapse" data-parent="#accordionsix">
                                    <div class="filter-checkbox">
                                        <p>
                                            <input type="checkbox" id="c47" name="cb">
                                            <label for="c47" class="rating-color"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c48" name="cb">
                                            <label for="c48" class="rating-color"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c49" name="cb">
                                            <label for="c49" class="rating-color"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i><i class="fas fa-star"></i></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c50" name="cb">
                                            <label for="c50" class="rating-color"><i class="fas fa-star"></i><i
                                                    class="fas fa-star"></i></label>
                                        </p>
                                        <p>
                                            <input type="checkbox" id="c51" name="cb">
                                            <label for="c51" class="rating-color"><i class="fas fa-star"></i></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-8">
                    <div class="partner-section">
                        <div class="partner-bar">
                            <div class="partner-topbar">
                                <div class="partner-dt">
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/img-1.jpg') }}" alt=""></a>
                                    <div class="partner-name">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name </h4></a>
                                        <div class="country">Hill District, Sydney Australia</div>
                                        <p><span><i class="fas fa-map-marker-alt"></i></span>Sco 123 Main Road, Hill
                                            District.</p>
                                        <div class="bagde-dt">
                                            <div class="partner-badge">
                                                Partner
                                            </div>
                                            <p>Casual Dining</p>
                                        </div>
                                    </div>
                                    <div class="online-offline">
                                        <p><span class="span-1 active"><i class="fas fa-circle"></i></span>Online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-subbar">
                                <div class="detail-text">
                                    <ul>
                                        <li>Open - Close : 9.00AM to 12PM (Mon-Sun)</li>
                                        <li>Cuisines : Lunch, Breakfast, Dinner</li>
                                        <li>Featured : Treading</li>
                                        <li>Discount : 20% of on all orders</li>
                                        <li>Reviews :
                                            <div class="review-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bookmark">
                                    <span><i class="far fa-bookmark"></i>Bookmark</span>
                                </div>
                            </div>
                            <div class="partner-bottombar">
                                <ul class="bottom-partner-links">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Call Now"><i
                                                class="fas fa-phone"></i>Call Now</a></li>
                                    <li class="line-lr"><a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Order Now"><i class="fas fa-shopping-cart"></i>Order
                                            Now</a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="View Menu"><i
                                                class="fas fa-book"></i>View Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="partner-section">
                        <div class="partner-bar">
                            <div class="partner-topbar">
                                <div class="partner-dt">
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/img-2.jpg') }}" alt=""></a>
                                    <div class="partner-name">
                                        <a href="restaurant_detail.html"><h4>Cafe Name </h4></a>
                                        <div class="country">Hill District, Sydney Australia</div>
                                        <p><span><i class="fas fa-map-marker-alt"></i></span>Sco 123 Main Road, Hill
                                            District.</p>
                                        <div class="bagde-dt">
                                            <div class="partner-badge">
                                                Partner
                                            </div>
                                            <p>Casual Dining</p>
                                        </div>
                                    </div>
                                    <div class="online-offline">
                                        <p><span class="span-1"><i class="fas fa-circle"></i></span>Offline</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-subbar">
                                <div class="detail-text">
                                    <ul>
                                        <li>Open - Close : 9.00AM to 11PM (Mon-Sat)</li>
                                        <li>Cuisines : Cafe</li>
                                        <li>Featured : N/A</li>
                                        <li>Discount : 20% of on all orders</li>
                                        <li>Reviews : No Review</li>
                                    </ul>
                                </div>
                                <div class="bookmark">
                                    <span><i class="far fa-bookmark"></i>Bookmark</span>
                                </div>
                            </div>
                            <div class="partner-bottombar">
                                <ul class="bottom-partner-links">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Call Now"><i
                                                class="fas fa-phone"></i>Call Now</a></li>
                                    <li class="line-lr"><a href="#" class="not-active" data-toggle="tooltip"
                                                           data-placement="top" title="Order Now"><i
                                                class="fas fa-shopping-cart"></i>Order Now</a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="View Menu"><i
                                                class="fas fa-book"></i>View Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="partner-section">
                        <div class="partner-bar">
                            <div class="partner-topbar">
                                <div class="partner-dt">
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/img-3.jpg') }}" alt=""></a>
                                    <div class="partner-name">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name </h4></a>
                                        <div class="country">Hill District, Sydney Australia</div>
                                        <p><span><i class="fas fa-map-marker-alt"></i></span>Sco 123 Main Road, Hill
                                            District.</p>
                                        <div class="bagde-dt">
                                            <div class="partner-badge">
                                                Partner
                                            </div>
                                            <p>Cafe’s</p>
                                        </div>
                                    </div>
                                    <div class="online-offline">
                                        <p><span class="span-1 active"><i class="fas fa-circle"></i></span>Online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-subbar">
                                <div class="detail-text">
                                    <ul>
                                        <li>Open - Close : 9.00AM to 12PM (Mon-Sun)</li>
                                        <li>Cuisines : Chinese</li>
                                        <li>Featured : Treading</li>
                                        <li>Discount : 10% of on all orders</li>
                                        <li>Reviews :
                                            <div class="review-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bookmark">
                                    <span><i class="far fa-bookmark"></i>Bookmark</span>
                                </div>
                            </div>
                            <div class="partner-bottombar">
                                <ul class="bottom-partner-links">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Call Now"><i
                                                class="fas fa-phone"></i>Call Now</a></li>
                                    <li class="line-lr"><a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Order Now"><i class="fas fa-shopping-cart"></i>Order
                                            Now</a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="View Menu"><i
                                                class="fas fa-book"></i>View Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="partner-section">
                        <div class="partner-bar">
                            <div class="partner-topbar">
                                <div class="partner-dt">
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/img-4.jpg') }}" alt=""></a>
                                    <div class="partner-name">
                                        <a href="restaurant_detail.html"><h4>Bestro Bar </h4></a>
                                        <div class="country">Hill District, Sydney Australia</div>
                                        <p><span><i class="fas fa-map-marker-alt"></i></span>Sco 123 Main Road, Hill
                                            District.</p>
                                        <div class="bagde-dt">
                                            <div class="partner-badge">
                                                Partner
                                            </div>
                                            <p>Bekaries</p>
                                        </div>
                                    </div>
                                    <div class="online-offline">
                                        <p><span class="span-1 active"><i class="fas fa-circle"></i></span>Online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-subbar">
                                <div class="detail-text">
                                    <ul>
                                        <li>Open - Close : 9.00AM to 12PM (Mon-Sun)</li>
                                        <li>Cuisines : Chinese</li>
                                        <li>Featured : Treading</li>
                                        <li>Discount : 10% of on all orders</li>
                                        <li>Reviews :
                                            <div class="review-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bookmark">
                                    <span><i class="far fa-bookmark"></i>Bookmark</span>
                                </div>
                            </div>
                            <div class="partner-bottombar">
                                <ul class="bottom-partner-links">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Call Now"><i
                                                class="fas fa-phone"></i>Call Now</a></li>
                                    <li class="line-lr"><a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Order Now"><i class="fas fa-shopping-cart"></i>Order
                                            Now</a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="View Menu"><i
                                                class="fas fa-book"></i>View Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="partner-section">
                        <div class="partner-bar">
                            <div class="partner-topbar">
                                <div class="partner-dt">
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/img-5.jpg') }}" alt=""></a>
                                    <div class="partner-name">
                                        <a href="restaurant_detail.html"><h4>Hot Chilli Restaurant </h4></a>
                                        <div class="country">Hill District, Sydney Australia</div>
                                        <p><span><i class="fas fa-map-marker-alt"></i></span>Sco 123 Main Road, Hill
                                            District.</p>
                                        <div class="bagde-dt">
                                            <div class="partner-badge">
                                                Partner
                                            </div>
                                            <p>Casual Dining</p>
                                        </div>
                                    </div>
                                    <div class="online-offline">
                                        <p><span class="span-1 active"><i class="fas fa-circle"></i></span>Online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-subbar">
                                <div class="detail-text">
                                    <ul>
                                        <li>Open - Close : 9.00AM to 12PM (Mon-Sun)</li>
                                        <li>Cuisines : Lunch, Breakfast, Dinner, Chinese</li>
                                        <li>Featured : Treading</li>
                                        <li>Discount : 20% of on all orders</li>
                                        <li>Reviews :
                                            <div class="review-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bookmark">
                                    <span><i class="far fa-bookmark"></i>Bookmark</span>
                                </div>
                            </div>
                            <div class="partner-bottombar">
                                <ul class="bottom-partner-links">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Call Now"><i
                                                class="fas fa-phone"></i>Call Now</a></li>
                                    <li class="line-lr"><a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Order Now"><i class="fas fa-shopping-cart"></i>Order
                                            Now</a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="View Menu"><i
                                                class="fas fa-book"></i>View Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="partner-section">
                        <div class="partner-bar">
                            <div class="partner-topbar">
                                <div class="partner-dt">
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/img-6.jpg') }}" alt=""></a>
                                    <div class="partner-name">
                                        <a href="restaurant_detail.html"><h4>Barbecue Restaurant </h4></a>
                                        <div class="country">Hill District, Sydney Australia</div>
                                        <p><span><i class="fas fa-map-marker-alt"></i></span>Sco 123 Main Road, Hill
                                            District.</p>
                                        <div class="bagde-dt">
                                            <div class="partner-badge">
                                                Partner
                                            </div>
                                            <p>Casual Dining</p>
                                        </div>
                                    </div>
                                    <div class="online-offline">
                                        <p><span class="span-1 active"><i class="fas fa-circle"></i></span>Online</p>
                                    </div>
                                </div>
                            </div>
                            <div class="partner-subbar">
                                <div class="detail-text">
                                    <ul>
                                        <li>Open - Close : 9.00AM to 12PM (Mon-Sun)</li>
                                        <li>Cuisines : Chinese</li>
                                        <li>Featured : Treading</li>
                                        <li>Discount : 10% of on all orders</li>
                                        <li>Reviews :
                                            <div class="review-stars">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="bookmark">
                                    <span><i class="far fa-bookmark"></i>Bookmark</span>
                                </div>
                            </div>
                            <div class="partner-bottombar">
                                <ul class="bottom-partner-links">
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="Call Now"><i
                                                class="fas fa-phone"></i>Call Now</a></li>
                                    <li class="line-lr"><a href="#" data-toggle="tooltip" data-placement="top"
                                                           title="Order Now"><i class="fas fa-shopping-cart"></i>Order
                                            Now</a></li>
                                    <li><a href="#" data-toggle="tooltip" data-placement="top" title="View Menu"><i
                                                class="fas fa-book"></i>View Menu</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="main-p-pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                <li class="page-item"><a class="page-link" href="#">24</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="show-map-result">
                        <a href="#">Show result on map</a>
                    </div>
                    <div class="popular-restaurants">
                        <h4>Popular Restaurents </h4>
                        <div class="popular-restaurants-items">
                            <ul class="list-unstyled">
                                <li>
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/logo-1.jpg') }}"
                                                                          class="img-responsive" alt="image" title="image"></a>
                                    <div class="caption">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name</h4></a>
                                        <p>Sydney, Australia</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/logo-2.jpg') }}"
                                                                          class="img-responsive" alt="image" title="image"></a>
                                    <div class="caption">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name</h4></a>
                                        <p>Sydney, Australia</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/logo-3.jpg') }}"
                                                                          class="img-responsive" alt="image" title="image"></a>
                                    <div class="caption">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name</h4></a>
                                        <p>Sydney, Australia</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/logo-4.jpg') }}"
                                                                          class="img-responsive" alt="image" title="image"></a>
                                    <div class="caption">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name</h4></a>
                                        <p>Sydney, Australia</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="restaurant_detail.html"><img src="{{asset('frontend/images/partners/logo-5.jpg') }}"
                                                                          class="img-responsive" alt="image" title="image"></a>
                                    <div class="caption">
                                        <a href="restaurant_detail.html"><h4>Restaurant Name</h4></a>
                                        <p>Sydney, Australia</p>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                            <span>4.5</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="google-ads">
                        <a href="#"><img src="{{asset('frontend/images/partners/google-ad.jpg') }}" alt="image" title="Google Ads"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

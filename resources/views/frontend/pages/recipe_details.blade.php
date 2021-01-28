@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('recipe_details')

    <section class="video-detail-recipes">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 ">
                    <div class="profile-toolbar padding-b">
                        <div class="user-details">
                            <div class="user-picy">
                                <a href="#"><img src="{{asset('frontend/images/recipe-details/user-dp.png')}}" alt=""></a>
                            </div>
                            <div class="name-location">
                                <a href="#"><h4>John Doe</h4></a>
                                <p><span><i class="fas fa-map-marker-alt"></i></span>Sidney, Australia</p>
                            </div>
                        </div>
                        <div class="right-side-btns">
                            <button><i class="fas fa-bell"></i></button>
                            <div class="follow-btn">
                                <button> Follow</button>
                            </div>
                            <div class="btn-group ellipsis">
                                <i class="fas fa-ellipsis-v dropdown-toggle-no-caret" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false" role="main"></i>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <button class="dropdown-item" type="button">Report</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="full-video padding-b">
                        <iframe width="770" height="315" src="https://www.youtube.com/embed/6CFJhTKcGJ4"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    </div>

                    <div class="title-share">
                        <div class="title">
                            <h4>Red Sauce Pasta Recipe</h4>
                        </div>
                        <div class="share">
                            <div class="btn-group social-share">
                            <span class="dropdown-toggle-no-caret" data-toggle="dropdown" aria-haspopup="true"
                                  aria-expanded="false" role="main"><i class="fas fa-share-alt"></i>Share </span>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i>Google+</a>
                                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="published-like-comments">
                        <div class="published-time">
                            <span><i class="far fa-calendar-alt"></i>Published 2 days ago</span>
                        </div>
                        <div class="like-comments">
                            <ul>
                                <li>
<span class="views" data-toggle="tooltip" data-placement="top" title="Likes">
<i class="fas fa-heart"></i>
<ins>562</ins>
</span>
                                </li>
                                <li>
<span class="views" data-toggle="tooltip" data-placement="top" title="Comments">
<i class="fas fa-comment-alt"></i>
<ins>5</ins>
</span>
                                </li>
                                <li>
<span class="views" data-toggle="tooltip" data-placement="top" title="Views">
<i class="fas fa-eye"></i>
<ins>1.5k</ins>
</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="all-tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#comments" class="nav-link active" data-toggle="tab">05 Comments</a>
                            </li>
                            <li class="nav-item">
                                <a href="#reviews" class="nav-link" data-toggle="tab">03 Reviews</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="comments">
                                <div class="comment-post">
                                    <div class="post-items">
                                        <div class="img-dp">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <form>
                                            <input type="text" class="post-input" name="post" placeholder="Write a comment">
                                            <input class="submit-btn btn-link" type="submit" value="Post Comment">
                                        </form>
                                    </div>
                                </div>
                                <div class="main-comments">
                                    <div class="comment-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-1.png')}}" alt=""></a>
                                            <h4> Rock Smith</h4>
                                        </div>
                                        <div class="reply-time">
                                            <a href="#reply-comment">Reply</a>
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                    <div class="reply-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/reply-1.png')}}" alt=""></a>
                                            <h4> Rock Smith</h4>
                                        </div>
                                        <div class="reply-time">
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p><a href="#">@RockSmith</a> Thank you</p>
                                        </div>
                                    </div>
                                    <div class="reply-comment">
                                        <div class="post-items">
                                            <div class="reply-dp">
                                                <a href="#"><img src="{{asset('frontend/images/recipe-details/reply-1.png')}}" alt=""></a>
                                            </div>
                                            <form>
                                                <input type="text" class="reply-input" name="post"
                                                       placeholder="Write a reply">
                                                <input class="reply-btn btn-link" type="submit" value="Reply">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comments">
                                    <div class="comment-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-2.png')}}" alt=""></a>
                                            <h4> Jassica William</h4>
                                        </div>
                                        <div class="reply-time">
                                            <a href="#reply-comment">Reply</a>
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comments">
                                    <div class="comment-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-3.png')}}" alt=""></a>
                                            <h4> Jass Singh</h4>
                                        </div>
                                        <div class="reply-time">
                                            <a href="#reply-comment">Reply</a>
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comments">
                                    <div class="comment-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-4.png')}}" alt=""></a>
                                            <h4> Johnson Smith</h4>
                                        </div>
                                        <div class="reply-time">
                                            <a href="#reply-comment">Reply</a>
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comments">
                                    <div class="comment-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-5.png')}}" alt=""></a>
                                            <h4> Joy Cutler</h4>
                                        </div>
                                        <div class="reply-time">
                                            <a href="#reply-comment">Reply</a>
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-pagination">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="fas fa-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="fas fa-chevron-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="tab-pane" id="reviews">
                                <div class="comment-post">
                                    <div class="post-items">
                                        <div class="img-dp">
                                            <i class="fas fa-user"></i>
                                        </div>
                                        <div class="select-rating">
                                            <h4>Your Rating :</h4>
                                            <ul class="rating-stars">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                        <form>
                                            <input type="text" class="rating-input" name="post"
                                                   placeholder="Please describe the reason for your rating to help the author">
                                            <input class="rating-btn btn-link" type="submit" value="Save Review">
                                        </form>
                                    </div>
                                </div>
                                <div class="main-comments">
                                    <div class="rating-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-5.png')}}"
                                                                                  alt=""></a>
                                            <h4> Joy Cutler</h4><br>
                                            <div class="rate-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="reply-time">
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="main-comments bm-margin">
                                    <div class="rating-1">
                                        <div class="user-detail-heading">
                                            <a href="#"><img src="{{asset('frontend/images/recipe-details/comment-3.png')}}"
                                                                                  alt=""></a>
                                            <h4> Jass Singh</h4><br>
                                            <div class="rate-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>4.5</span>
                                            </div>
                                        </div>
                                        <div class="reply-time">
                                            <p><i class="far fa-clock"></i>12 hours ago</p>
                                        </div>
                                        <div class="comment-description">
                                            <p>Morbi hendrerit ipsum vel feugiat maximus. Duis posuere justo neque, sit amet
                                                efficitur quam aliquam non. Integer gravida ex quis lacinia consectetur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col">
                    <div class="right-side">
                        <div class="right-rating">
                            <h4> Rating</h4>
                            <div class="star">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>4.5</span>
                            </div>
                        </div>
                        <div class="about-recipe">
                            <h4> About Recipe</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi malesuada libero ex,
                                scelerisque suscipit orci tincidunt non. Nulla magna urna, accumsan ac turpis eget, tempor
                                scelerisque sapien. Vivamus porttitor a enim id mattis. Duis volutpat felis sed massa
                                dignissim luctus. Pellentesque a elit quis lacus finibus pellentesque.<span
                                    id="dots">..</span><span id="more">Cras fringilla sollicitudin libero, eu commodo erat aliquet at. Donec euismod odio vitae venenatis blandit. Cras ut purus imperdiet massa viverra pellentesque. Curabitur feugiat luctus feugiat.</span>
                            </p>
                            <a href="javascript:;" onclick="myFunction()" id="readBtn">See All</a>
                        </div>
                        <div class="Tags">
                            <h4> Tags </h4>
                            <div class="group-tags">
                                <a href="#" class="tag-r">Fast Food</a>
                                <a href="#" class="tag-r">Junk Food</a>
                                <a href="#" class="tag-r">Egg</a>
                                <a href="#" class="tag-r">Gravey</a>
                                <a href="#" class="tag-r">Healthy Food</a>
                                <a href="#" class="tag-r">Italian Food</a>
                            </div>
                        </div>
                        <div class="recomended-items">
                            <h4> Recomended For You </h4>
                            <div class="recommended-meal">
                                <ul class="list-unstyled">
                                    <li>
                                        <img src="{{asset('frontend/images/recipe-details/meal-1.jpg')}}" class="img-responsive" alt="image"
                                             title="image">
                                        <div class="caption">
                                            <a href="#"><h4>Veh Haka Noodles Recipe</h4></a>
                                            <p>Published 5 March 2019</p>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>4.5</span>
                                                <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend/images/recipe-details/meal-2.jpg')}}" class="img-responsive" alt="image"
                                             title="image">
                                        <div class="caption">
                                            <a href="#"><h4>Veg Double Tikki Burgur</h4></a>
                                            <p>Published 5 March 2019</p>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>4.5</span>
                                                <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend/images/recipe-details/meal-3.jpg')}}" class="img-responsive" alt="image"
                                             title="image">
                                        <div class="caption">
                                            <a href="#"><h4>Potato French Fries Recipe</h4></a>
                                            <p>Published 5 March 2019</p>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>4.5</span>
                                                <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{asset('frontend/images/recipe-details/meal-4.jpg')}}" class="img-responsive" alt="image"
                                             title="image">
                                        <div class="caption">
                                            <a href="#"><h4>Cheese Pizza Recipe</h4></a>
                                            <p>Published 5 March 2019</p>
                                            <div class="star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <span>4.5</span>
                                                <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="over-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="restaurants-links">
                        <h1>Choose From Over 15,000 Restaurants</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent rhoncus urna nec justo
                            suscipit,id congue justo dictum.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="view-restaurants">
                        <a href="#" class="m-btn r-btn-link">View Restaurants</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection

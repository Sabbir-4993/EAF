@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('recipes')

    <section class="recipe-block-preview">
        <div class="recipe-banner" style="background-image: url({{asset('frontend/images/find-recipes/banner.jpg')}})"></div>
        <div class="container">
            <div class="find-recipes">
                <div class="row">
                    <div class="col-md-12">
                        <div class="new-heading">
                            <h1> Find Recipes </h1>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <p>Aenean tellus ligula, pellentesque sit amet luctus eget, posuere eget sapien. Proin ultricies
                            vestibulum sem non lobortis.</p>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <form>
                            <input class="input-recipes" name="find-recipes" type="text" placeholder="Find recipes...">
                            <div class="find-recipes-btn">
                                <div class="f-r-btn">
                                    <button class="find-recipe-btn btn-link"><i class="fas fa-search"></i>Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="or">
                            <span> or </span>
                        </div>
                        <div class="upload">
                            <a href="#" class="upload-btn btn-link">Upload Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="category-recipes">
        <div class="container">
            <div class="owl-carousel testimonial-carousel">
                <div class="item">
                    <div class="recipe-item">
                        <img src="{{asset('frontend/images/homepage/recipes/recipe_01.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="recipes-title">
                                <h6>North Indian</h6>
                                <p>75 Videos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recipe-item">
                        <img src="{{asset('frontend/images/homepage/recipes/recipe_02.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="recipes-title">
                                <h6>Fast Food</h6>
                                <p>105 Videos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recipe-item">
                        <img src="{{asset('frontend/images/homepage/recipes/recipe_03.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="recipes-title">
                                <h6>Italian Food</h6>
                                <p>35 Videos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recipe-item">
                        <img src="{{asset('frontend/images/homepage/recipes/recipe_04.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="recipes-title">
                                <h6>Chinese Food</h6>
                                <p>60 Videos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recipe-item">
                        <img src="{{asset('frontend/images/homepage/recipes/recipe_05.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="recipes-title">
                                <h6>Street Food</h6>
                                <p>45 Videos</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recipe-item">
                        <img src="{{asset('frontend/images/homepage/recipes/recipe_06.jpg') }}" alt="">
                        <div class="overlay">
                            <div class="recipes-title">
                                <h6>Bakery</h6>
                                <p>20 Videos</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main-video">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="video-9">
                        <div class="top-img">
                            <div class="bg-gradient"></div>
                            <img src="{{asset('frontend/images/find-recipes/main-video.jpg') }}" alt="">
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="bottom-items">
                                <div class="video-title">
                                    <a href="{{route('recipe_details')}}"><h4>Learn to cook easy egg gravey dishes</h4></a><br>
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                        <span>4.5</span>
                                    </div>
                                </div>
                                <div class="published">
                                    <p>Published 5 March 2018</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-4 ">
                    <div class="suggested-peoples">
                        <div class="suggestions full-width">
                            <div class="sd-title">
                                <h3>Suggested Peoples</h3>
                                <i class="la la-ellipsis-v"></i>
                            </div>
                            <div class="suggestions-list">
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-1.png') }}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Johnson</h4></a>
                                        <span>7 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-2.png') }}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Jassia William</h4></a>
                                        <span>5 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-3.png') }}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Rock</h4></a>
                                        <span>0 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-4.png') }}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Davil Smith</h4></a>
                                        <span>10 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-5.png') }}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Ricky Doe</h4></a>
                                        <span>3 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="recomended">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-heading">
                        <h1> Recomended For You </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-1.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy vegetarian noodles</h4></a>
                                <div class="v-published">Published 25 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-2.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy tandoori chicken</h4></a>
                                <div class="v-published">Published 20 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-3.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy vegetarian Burgur</h4></a>
                                <div class="v-published">Published 10 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-4.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy non veg Tangdi kabab</h4></a>
                                <div class="v-published">Published 15 June 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-5.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy italian pasta</h4></a>
                                <div class="v-published">Published 5 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-6.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy street food pani puri</h4></a>
                                <div class="v-published">Published 21 July 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-7.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook potato french fries at home</h4></a>
                                <div class="v-published">Published 28 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-8.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy cheese pizza</h4></a>
                                <div class="v-published">Published 20 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="recent-uploaded">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="new-heading">
                        <h1> Recent Uploaded </h1>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-1.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy vegetarian noodles</h4></a>
                                <div class="v-published">Published 25 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-2.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i> 2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy tandoori chicken</h4></a>
                                <div class="v-published">Published 20 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-3.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy vegetarian Burgur</h4></a>
                                <div class="v-published">Published 10 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-4.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy non veg Tangdi kabab</h4></a>
                                <div class="v-published">Published 15 June 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-5.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy italian pasta</h4></a>
                                <div class="v-published">Published 5 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-6.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy street food pani puri</h4></a>
                                <div class="v-published">Published 21 July 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-7.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook potato french fries at home</h4></a>
                                <div class="v-published">Published 28 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                    <div class="recipe-vdo">
                        <div class="top">
                            <div class="top-img">
                                <div class="bg-gradient"></div>
                                <img src="{{asset('frontend/images/find-recipes/video-8.jpg') }}" alt="">
                            </div>
                            <div class="top-items">
                                <div class="views">
                                    <p><i class="fas fa-eye"></i>2m views</p>
                                </div>
                                <div class="video-time">
                                    <p><i class="far fa-clock"></i>12.08</p>
                                </div>
                            </div>
                            <div class="middle">
                                <a href="{{route('recipe_details')}}">
                                    <div class="play-btn"><i class="fas fa-play"></i></div>
                                </a>
                            </div>
                        </div>
                        <div class="video-bottom">
                            <div class="bottom-text">
                                <a href="{{route('recipe_details')}}"><h4>Learn to cook easy cheese pizza</h4></a>
                                <div class="v-published">Published 20 March 2019</div>
                                <div class="star">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span>4.5</span>
                                    <div class="comments"><a href="#"><i class="fas fa-comment-alt"></i>05</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-see-btn">
                <a href="#" class="m-btn btn-link">Show All</a>
            </div>
        </div>
    </section>


    <section class="over-restaurants">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8">
                    <div class="restaurants-links">
                        <h1>Choose From Over 15,000 Restaurants</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam augue justo, euismod at purus
                            quis, dictum iaculis lorem. Sed dictum, dolor sit amet feugiat posuere, ante arcu iaculis
                            tortor</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="view-restaurants">
                        <a href="partners.html" class="m-btn r-btn-link">View Restaurants</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

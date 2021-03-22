@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('blog_details')

    <section class="all-partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="event-picy-view">
                        <img src="{{asset('frontend/images/blogs/big-img.jpg')}}" alt="">
                    </div>
                    <div class="blog-published-like-comments">
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
                                <li>
                                    <div class="btn-group social-share">
                                    <span class="dropdown-toggle-no-caret views" data-toggle="dropdown"
                                          aria-haspopup="true" aria-expanded="false" role="main" title=""><i
                                            class="fas fa-share-alt"></i>Share</span>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                                            <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                                            <a href="#"><i class="fab fa-google-plus-g"></i>Google+</a>
                                            <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                                            <a href="#"><i class="fab fa-pinterest-p"></i>Pinterest</a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i>LinkedIn</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="event-details">
                        <div class="event-name-dt">
                            <div class="event-title">
                                <h1>Blog Title Here</h1>
                                <p>By Admin</p>
                            </div>
                        </div>
                    </div>
                    <div class="event-description">
                        <h4>Description</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vestibulum commodo mauris, ut
                            volutpat lacus. Curabitur ac dui nisl. Duis iaculis interdum nulla ut ultricies. Nam porta ante
                            orci, in tincidunt dolor eleifend eu. Phasellus massa ligula, vulputate sit amet ligula et,
                            faucibus aliquam ligula. Morbi rhoncus metus sit amet mollis molestie. Morbi pretium sapien
                            vitae ex porttitor pulvinar. Mauris quis congue lacus. In elementum, urna vel laoreet laoreet,
                            nulla lacus congue est, in pharetra nulla justo id lorem. Sed sed purus velit. Sed lacinia ante
                            eu erat convallis, non rhoncus neque auctor.</p>
                        <p>Suspendisse pellentesque diam sem, eu sollicitudin ipsum interdum quis. Maecenas luctus eu augue
                            ac tempor. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque habitant
                            morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed convallis iaculis
                            lacus a facilisis. Nullam dapibus quam at velit blandit porta. Ut sed metus sit amet libero
                            maximus fringilla at eget mauris. Proin sit amet est sed ipsum varius tempor. Proin a interdum
                            ex, eget tincidunt tortor. Donec viverra, urna porttitor bibendum viverra, orci mi fringilla
                            neque, vitae semper nunc arcu vitae lacus. Etiam efficitur nisl a justo ornare consectetur. Sed
                            consequat eros eu nisl tristique, eu pretium sem placerat. Sed egestas, urna tincidunt ornare
                            aliquam, sapien augue faucibus erat, at lobortis arcu mi sed mi. Quisque condimentum mattis
                            risus, id vulputate elit luctus sed. Nullam volutpat enim ut accumsan interdum. Curabitur eu
                            nunc et nibh posuere vestibulum.</p>
                    </div>
                    <div class="orgnizar-dt">
                        <div class="profile-toolbar padding-b padding-t">
                            <div class="user-details">
                                <div class="user-picy">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/recipe-details/user-dp.png')}}"
                                                                          alt=""></a>
                                </div>
                                <div class="name-location">
                                    <a href="user_profile_view.html"><h4>John Doe</h4></a>
                                    <p>Orgnaizer</p>
                                </div>
                            </div>
                            <div class="right-side-btn">
                                <button class="follow-btn-o btn-link" title="Order Now">Follow</button>
                            </div>
                        </div>
                    </div>
                    <div class="event-comments">
                        <div class="comment-post">
                            <div class="post-items">
                                <a href="https://www.gambolthemes.net/natto-new-demo/my_dashboard.html">
                                    <div class="img-dp">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </a>
                                <form>
                                    <input type="text" class="event-input" name="post" placeholder="Write a comment">
                                    <input class="submit-btn btn-link" type="submit" value="Post Comment">
                                </form>
                            </div>
                        </div>
                        <div class="main-comments">
                            <div class="comment-1">
                                <div class="user-detail-heading">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/recipe-details/comment-1.png')}}" alt=""></a>
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
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/recipe-details/reply-1.png')}}"
                                                                          alt=""></a>
                                    <h4> Rock Smith</h4>
                                </div>
                                <div class="reply-time">
                                    <p><i class="far fa-clock"></i>12 hours ago</p>
                                </div>
                                <div class="comment-description">
                                    <p><a href="user_profile_view.html">@RockSmith</a>Thank you</p>
                                </div>
                            </div>
                            <div class="reply-comment" id="reply-comment">
                                <div class="post-items">
                                    <div class="reply-dp">
                                        <a href="https://www.gambolthemes.net/natto-new-demo/my_dashboard.html"><img
                                                src="{{asset('frontend/images/recipe-details/reply-1.png')}}" alt=""></a>
                                    </div>
                                    <form>
                                        <input type="text" class="reply-input" name="post" placeholder="Write a reply">
                                        <input class="reply-btn btn-link" type="submit" value="Reply">
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="main-comments">
                            <div class="comment-1">
                                <div class="user-detail-heading">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/recipe-details/comment-2.png')}}" alt=""></a>
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
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="suggested-people">
                        <div class="sd-title">
                            <h3>Suggested Peoples</h3>
                        </div>
                        <div class="suggestions full-width">
                            <div class="suggestions-list">
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-1.png')}}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Johnson</h4></a>
                                        <span>7 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-2.png')}}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Jassia William</h4></a>
                                        <span>5 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-3.png')}}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Rock</h4></a>
                                        <span>0 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-4.png')}}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Davil Smith</h4></a>
                                        <span>10 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                                <div class="suggestion-usd">
                                    <a href="user_profile_view.html"><img src="{{asset('frontend/images/find-recipes/user-5.png')}}" alt=""></a>
                                    <div class="sgt-text">
                                        <a href="user_profile_view.html"><h4>Ricky Doe</h4></a>
                                        <span>3 Reviews</span>
                                    </div>
                                    <button><i class="fas fa-user-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="google-ads">
                        <a href="#"><img src="{{asset('frontend/images/partners/google-ad.jpg')}}" alt="image" title="Google Ads"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

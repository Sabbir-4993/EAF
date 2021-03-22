@extends('frontend.layouts.master')
@include('frontend.layouts.partials.breadcrumbs')

@section('content')

    @yield('blog')

    <section class="blog-news">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="main-blog">
                        <div class="blog-picy">
                            <a href="{{route('blog.details')}}"><img src="{{asset('frontend/images/blogs/img-1.jpg')}}" alt=""></a>
                        </div>
                        <div class="blog-dt">
                            <div class="blog-date"><i class="far fa-calendar-alt"></i>Published 2 days ago</div>
                            <a href="{{route('blog.details')}}"><h4>Blog Title here</h4></a>
                            <span>By Admin</span>
                            <p>Etiam rutrum enim at felis pharetra aliquet. Donec elementum augue non congue.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pagination-all">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12 ">
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
                </div>
            </div>
        </div>
    </section>
@endsection

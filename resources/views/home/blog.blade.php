@extends('home.layouts.master')

@section('homepage')


<section class="th-blog-wrapper space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">


                @foreach ($sekret as $sek)
                <div class="th-blog blog-single has-post-thumbnail">
                    <div class="blog-img">
                        <a href="blog-details.html"><img src="{{ $sek->foto1 }}" alt="Blog Image" style="width: 100%; height: 600px; object-fit: cover; object-position: center"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-meta">
                                <a class="author" href="{{ route('home.blog') }}"><img src="{{asset('img/blog/author-1-1.png')}}" alt="avater">{{ $sek->penulis }}</a>
                            <a href="blog.html"><i class="fa-light fa-calendar-days"></i>21 June, 2024</a>
                            <a href="blog-details.html"><i class="fa-regular fa-comments"></i>Comments (3)</a>
                            </div>
                            <h2 class="blog-title"><a href="{{route('home.blogdetails')}}">{{ $sek->judul }}</a>
                        </h2>
                        <p class="blog-text">{{ $sek->description1 }}</p>
                        <a href="{{route('home.blogdetails', )}}" class="line-btn">Read More</a>
                    </div>
                </div>
                @endforeach
                

                <div class="th-pagination text-center">
                    <ul>
                        <li><a href="blog.html">1</a></li>
                        <li><a href="blog.html">2</a></li>
                        <li><a href="blog.html">3</a></li>
                        <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
                        </ul>
                        </div>
                        </div>
                        <div class="col-xxl-4 col-lg-5">
                <aside class="sidebar-area">
                    <div class="widget widget_search   ">
                        <form class="search-form">
                            <input type="text" placeholder="Enter Keyword">
                            <button type="submit"><i class="far fa-search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget_categories  ">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li>
                                <a href="blog.html">IT Solution</a>
                            </li>
                            <li>
                                <a href="blog.html">SEO Marketing</a>
                            </li>
                            <li>
                                <a href="blog.html">Web Development</a>
                            </li>
                            <li>
                                <a href="blog.html">Cloud Solution</a>
                            </li>
                            <li>
                                <a href="blog.html">Network Marketing</a>
                            </li>
                            <li>
                                <a href="blog.html">UI/UX Design</a>
                            </li>
                        </ul>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Recent Posts</h3>
                        <div class="recent-post-wrap">
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('img/blog/recent-post-1-1.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>21 June, 2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('img/blog/recent-post-1-2.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">Regional Manager limited time management.</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>22 June, 2024</a>
                                    </div>
                                </div>
                            </div>
                            <div class="recent-post">
                                <div class="media-img">
                                    <a href="blog-details.html"><img src="{{asset('img/blog/recent-post-1-3.jpg')}}" alt="Blog Image"></a>
                                </div>
                                <div class="media-body">
                                    <h4 class="post-title"><a class="text-inherit" href="blog-details.html">What’s the Holding Back It Solution Industry?</a></h4>
                                    <div class="recent-post-meta">
                                        <a href="blog.html"><i class="fal fa-calendar-days"></i>23 June, 2024</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget  ">
                        <h3 class="widget_title">Gallery Post</h3>
                        <div class="sidebar-gallery">
                            <div class="gallery-thumb">
                                <img src="{{asset('img/widget/gallery_1_1.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('img/widget/gallery_1_1.jpg')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{asset('img/widget/gallery_1_2.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('img/widget/gallery_1_2.jpg')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{asset('img/widget/gallery_1_3.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('img/widget/gallery_1_3.jpg')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{asset('img/widget/gallery_1_4.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('img/widget/gallery_1_4.jpg')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{asset('img/widget/gallery_1_5.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('img/widget/gallery_1_5.jpg')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                            <div class="gallery-thumb">
                                <img src="{{asset('img/widget/gallery_1_6.jpg')}}" alt="Gallery Image">
                                <a href="{{asset('img/widget/gallery_1_6.jpg')}}" class="gallery-btn popup-image"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="blog.html">Technology</a>
                            <a href="blog.html">Advice</a>
                            <a href="blog.html">Solution</a>
                            <a href="blog.html">Consultion</a>
                            <a href="blog.html">Business</a>
                            <a href="blog.html">Services</a>
                            <a href="blog.html">Start Up</a>
                            <a href="blog.html">Agency</a>
                            <a href="blog.html">Software</a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
    
@endsection
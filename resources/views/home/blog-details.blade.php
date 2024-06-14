@extends('home.layouts.master')

@section('homepage')

<section class="th-blog-wrapper blog-details space-top space-extra-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xxl-8 col-lg-7">
                <div class="th-blog blog-single">
                    <div class="blog-img">
                        <img src="{{$blogs->foto1}}" alt="Blog Image" style="width: 100%; height: 800px; object-fit: cover; object-position: center">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <a class="author" href="#">{{$blogs->penulis}}</a>
                            <a href="#"><i class="fa-light fa-calendar-days"></i>{{ $blogs->created_at->format('d-m-Y') }}</a>
                            <a href="#"><i class="fa-regular fa-comments"></i>Comments (3)</a>
                        </div>
                        <h2 class="blog-title">{{$blogs->judul}}.</h2>
                        <p>{{ $blogs->description1 }}</p>
                        @isset($blogs->quotes)
                        <blockquote>
                            <p>“{{ $blogs->quotes }}”</p>
                            <cite>{{$blogs->quotesby}}Mia</cite>
                        </blockquote>
                        @endisset
                        <p>{{ $blogs->description2 }}</p>
                        <h3 class="h4 mt-40">{{ $blogs->subjudul }}</h3>
                        <div class="row mt-15">
                            <div class="col-md-6 mb-4">
                                <img class="w-100 rounded-3" src="{{ $blogs->subfoto1 }}" alt="Blog Image" style="width: 100%; height: 400px; object-fit: cover; object-position: center">
                                </div>
                                <div class="col-md-6 mb-4">
                                    <img class="w-100 rounded-3" src="{{ $blogs->subfoto2 }}" alt="Blog Image" style="width: 100%; height: 400px; object-fit: cover; object-position: center">
                            </div>
                            </div>
                        <p>{{ $blogs->description3 }}</p>
                    </div>
                    <div class="share-links clearfix ">
                        <div class="row justify-content-between">
                            <div class="col-sm-auto">
                                <span class="share-links-title">Tags:</span>
                                <div class="tagcloud">
                                    <a href="blog.html">{{ $blogs->tags1 }}</a>
                                    <a href="blog.html">{{ $blogs->tags2 }}</a>
                                </div>
                            </div>
                            {{-- <div class="col-sm-auto text-xl-end">
                                <span class="share-links-title">Share:</span>
                                <ul class="social-links">
                                    <li><a href="https://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="https://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="https://instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- End Social Share -->
                            </div><!-- Share Links Area end --> --}}
                        </div>
                    </div>
                </div>
                {{-- <div class="th-comments-wrap ">
                    <h2 class="blog-inner-title h3"><i class="far fa-comments"></i> Comments (03)</h2>
                    <ul class="comment-list">
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="{{asset('img/blog/comment-author-1.jpg')}}" alt="Comment Author">
                                </div>
                                <div class="comment-content">
                                    <span class="commented-on"><i class="fal fa-calendar-alt"></i>14 March, 2024</span>
                                    <h3 class="name">David Malan</h3>
                                    <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets.</p>
                                    <div class="reply_and_edit">
                                        <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                            <ul class="children">
                                <li class="th-comment-item">
                                    <div class="th-post-comment">
                                        <div class="comment-avater">
                                            <img src="{{asset('img/blog/comment-author-2.jpg')}}" alt="Comment Author">
                                        </div>
                                        <div class="comment-content">
                                            <span class="commented-on"><i class="fal fa-calendar-alt"></i>15 March, 2024</span>
                                            <h3 class="name">Tara sing</h3>
                                            <p class="text">Competently provide access to fully researched methods of empowerment
                                                without sticky models.</p>
                                            <div class="reply_and_edit">
                                                <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="th-comment-item">
                            <div class="th-post-comment">
                                <div class="comment-avater">
                                    <img src="{{asset('img/blog/comment-author-3.jpg')}}" alt="Comment Author">
                                </div>
                                <div class="comment-content">
                                    <span class="commented-on"><i class="fal fa-calendar-alt"></i>16 March, 2024</span>
                                    <h3 class="name">Anadi Juila</h3>
                                    <p class="text">Collaboratively empower multifunctional e-commerce for prospective applications. Seamlessly productivate plug and play markets.</p>
                                    <div class="reply_and_edit">
                                        <a href="blog-details.html" class="reply-btn"><i class="fas fa-reply"></i>Reply</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div> <!-- Comment end --> <!-- Comment Form --> --}}
                {{-- <div class="th-comment-form ">
                    <div class="form-title">
                        <h3 class="blog-inner-title mb-2"><i class="fa-solid fa-reply"></i> Leave a Comment</h3>
                        <p class="form-text">Your email address will not be published. Required fields are marked *</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Name*" class="form-control">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="col-md-6 form-group">
                            <input type="text" placeholder="Your Email*" class="form-control">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="col-12 form-group">
                            <input type="text" placeholder="Website" class="form-control">
                            <i class="fal fa-globe"></i>
                        </div>
                        <div class="col-12 form-group">
                            <textarea placeholder="Write a Comment*" class="form-control"></textarea>
                            <i class="fal fa-pencil"></i>
                        </div>
                        <div class="col-12 form-group mb-0">
                            <button class="th-btn">Post Comment</button>
                        </div>
                    </div>
                </div> --}}
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
                        <h3 class="widget_title">Gallery Post</h3>
                        <div class="sidebar-gallery" style="height: 90px">
                            <div class="gallery-thumb customBefore">
                                <img src="{{ $blogs->foto1 }}" alt="Gallery Image" style="height: 100% !important; object-fit: cover;">
                                <a href="{{ $blogs->foto1 }}" class="gallery-btn popup-image" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;"><i class="fas fa-eyes"></i></a>
                            </div>
                            <div class="gallery-thumb customBefore">
                                <img src="{{ $blogs->subfoto1 }}" alt="Gallery Image" style="height: 100% !important; object-fit: cover;">
                                <a href="{{ $blogs->subfoto1 }}" class="gallery-btn popup-image" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;"><i class="fas fa-eyes"></i></a>
                            </div>
                            <div class="gallery-thumb customBefore">
                                <img src="{{ $blogs->subfoto2 }}" alt="Gallery Image" style="height: 100% !important; object-fit: cover;">
                                <a href="{{ $blogs->subfoto2 }}" class="gallery-btn popup-image" style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;"><i class="fas fa-eyes"></i></a>
                            </div>
                            {{-- <div class="gallery-thumb">
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
                            </div> --}}
                        </div>
                    </div>
                    {{-- <div class="widget  ">
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
                    </div> --}}
                    <div class="widget widget_tag_cloud   ">
                        <h3 class="widget_title">Popular Tags</h3>
                        <div class="tagcloud">
                            <a href="#">{{ $blogs->tags1 }}</a>
                            <a href="#">{{ $blogs->tags2 }}</a>
                            {{-- <a href="blog.html">Solution</a> --}}
                            {{-- <a href="blog.html">Consultion</a>
                            <a href="blog.html">Business</a>
                            <a href="blog.html">Services</a>
                            <a href="blog.html">Start Up</a>
                            <a href="blog.html">Agency</a>
                            <a href="blog.html">Software</a> --}}
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>
    
@endsection
@extends('home.layouts.master')

@section('homepage')

<div class="breadcumb-wrapper " data-bg-src="{{asset('img/bg/breadcumb-bg.jpg')}}">
    <div class="container">
        <div class="breadcumb-content">
            <h1 class="breadcumb-title">Gallery</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Gallery</li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
Gallery Area  
==============================-->
<div class="space-top space-extra-bottom">
    <div class="container">
        <div class="row gy-4">
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-4">
                <div class="gallery-card">
                    <div class="gallery-img">
                        <img src="{{asset('img/gallery/gallery_1_1.jpg')}}" alt="gallery image">
                        <a href="{{asset('img/gallery/gallery_1_1.jpg')}}" class="play-btn style3 popup-image"><i class="far fa-plus"></i></a>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="th-pagination mt-5 text-center">
            <ul>
                <li><a href="blog.html">1</a></li>
                <li><a href="blog.html">2</a></li>
                <li><a href="blog.html">3</a></li>
                <li><a href="blog.html"><i class="far fa-arrow-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>
    
@endsection
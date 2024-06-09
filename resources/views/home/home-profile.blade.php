@extends('home.layouts.master')

@section('homepage')

<div class="breadcumb-wrapper" data-bg-src="{{asset('img/bg/fotobersama.jpg')}}" style="filter:brightness(60%); padding-bottom: 350px">
    <!-- <div class="container">
        <div class="breadcumb-content" style="color: white;">
            <h1 class="breadcumb-title">Services</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Services</li>
                <li>Services</li>
            </ul>
        </div>
    </div> -->
</div><!--==============================
Service Area
==============================-->

<section class="service-area4 th-radius5 space" id="service-sec">
<div class="container th-container4">
    <div class="row justify-content-betweennt-center">
        <div class="col-lg-6">
            <div class="title-area text-center me-xl-5 ms-xl-5">
                <span class="sub-title sub-title3">Our Services</span>
                <h2 class="sec-title">Layanan Untuk Masyarakat</h2>
            </div>
        </div>
    </div>
    <div class="row gy-3 justify-content-between align-items-center">

        {{-- Layanan --}}
        <div class="col-md-6 col-xl-3">
            <div class="service-box2 wow fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_1.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pembuatan Kartu Keluarga</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 wow fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_2.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Kartu Tanda Penduduk</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 wow fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_3.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pendaftaran Akta Kelahiran</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 wow fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_4.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pendaftaran Akta Kematian</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_5.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pengajuan Surat Pindah</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_6.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Permohonan Tidak Mampu</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_7.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Rekomendasi Surat Izin Usaha</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_8.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pembaharuan Kependudukan</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_8.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pelayanan Bantuan Sosial</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_8.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pengaduan Masyarakat</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_8.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pelayanan NCR</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-xl-3">
            <div class="service-box2 fadeInRight">
                <div class="service-box2_shape" data-bg-src="{{asset('img/shape/ser_shape_1.png')}}"></div>
                <div class="service-box2_content">
                    <div class="service-box2_icon">
                        <img src="{{asset('img/icon/service_3_8.svg')}}" alt="Icon">
                    </div>
                    <h3 class="box-title"><a href="service-details.html">Pelayanan Perizinan Lainnya</a></h3>
                    <p class="service-box2_text">Building a cybersecurity culture within organizations is essential to promoting security.</p>
                    <a href="service-details.html" class="icon-btn"><i class="fa-regular fa-arrow-right"></i></a>
                </div>
            </div>
        </div>

    </div>
</div>
</section>

<!--==============================
Cta Area
==============================-->
<section class="position-relative space">
    <div class="th-bg-img" data-bg-src="{{asset('img/bg/papuma.jpg')}}" style="filter: brightness(50%)">
    </div>
    <div class="container z-index-common">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7 col-md-9 text-center">
                <div class="title-area mb-35">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{asset('img/theme-img/title_shape_2.svg')}}"></span>
                        </div>
                        CONTACT US
                    </span>
                    <h2 class="sec-title text-white">Need Any Kind Of IT Solution For <span class="text-theme fw-normal">Your Business?</span></h2>
                </div>
                <a href="contact.html" class="th-btn style6">Get In Touch</a>
            </div>
        </div>
    </div>
</section>

<section class="bg-top-right overflow-hidden space" id="blog-sec" data-bg-src="{{asset('img/bg/blog_bg_1.png')}}">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{asset('img/theme-img/title_shape_1.svg')}}"></span>
                    <img src="{{asset('img/theme-img/title_shape_1.svg')}}" alt="shape">
                </div>
                NEWS & ARTICLES
            </span>
            <h2 class="sec-title">Artikel Wisata <span class="text-theme">Wuluhan</span></h2>
        </div>

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="blogSlider1" data-slider-options='{"loop":true,"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">

                    {{-- tempat wisata --}}
                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <div class="blog-bottom">
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <div class="blog-bottom">
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <div class="blog-bottom">
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <div class="blog-bottom">
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="blog image">
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="fal fa-calendar-days"></i>15 Jan, 2024</a>
                                    <a href="blog.html"><i class="fal fa-comments"></i>2 Comments</a>
                                </div>
                                <h3 class="box-title"><a href="blog-details.html">Unsatiable entreaties may collecting Power.</a></h3>
                                <div class="blog-bottom">
                                    <a href="blog-details.html" class="line-btn">Read More<i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <button data-slider-prev="#blogSlider1" class="slider-arrow style3 slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#blogSlider1" class="slider-arrow style3 slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
    <div class="shape-mockup" data-bottom="0" data-left="0">
        <div class="particle-2 small" id="particle-4"></div>
    </div>
</section>

<section class="project-area-5 th-radius3 m-4 mt-0 mb-0 overflow-hidden space" id="project-sec">
    <div class="container th-container4">
        <div class="row justify-content-lg-between justify-content-center align-items-center">
            <div class="col-lg-6 mb-n2 mb-lg-0">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title style1 text-white">Artikel</span>
                    <h2 class="sec-title text-white">Dokumen Publik Wuluhan</h2>
                </div>
            </div>
            <div class="col-auto">
                <div class="sec-btn">
                    <a href="project.html" class="th-btn style3 style-radius">View All Project</a>
                </div>
            </div>
        </div> <!-- / Title row -->

        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="projectSlider5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="project-card5">
                            <div class="project-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="project image">
                            </div>
                            <div class="project-content">
                                <h3 class="box-title"><a href="project-details.html">Major Insurance Provider Saves $750k per Month With Big Data Migration Month</a></h3>
                                <p class="project-card5_desc">The company needed to complete a complex migration on a tight deadline to avoid millions of dollars in post-contract fees and fines.</p>
                                <a href="project-details.html" class="line-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-card5">
                            <div class="project-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="project image">
                            </div>
                            <div class="project-content">
                                <h3 class="box-title"><a href="project-details.html">Major insurance provider to a big data cost savings of $750,000 is a significant</a></h3>
                                <p class="project-card5_desc">Project Success is a broad term that can be interpreted in various ways depending on the context and the goals of a specific project.</p>
                                <a href="project-details.html" class="line-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-card5">
                            <div class="project-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="project image">
                            </div>
                            <div class="project-content">
                                <h3 class="box-title"><a href="project-details.html">That's a significant achievement! Saving $750,000 per month through a big data migration</a></h3>
                                <p class="project-card5_desc">Project Success is a term that generally refers to the achievement of the goals and objectives set for a specific project.</p>
                                <a href="project-details.html" class="line-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-card5">
                            <div class="project-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="project image">
                            </div>
                            <div class="project-content">
                                <h3 class="box-title"><a href="project-details.html">The headline Major Insurance Provider Saves $750k per Month With Big Data Migration</a></h3>
                                <p class="project-card5_desc">Project Success" is a broad term that can be interpreted in various ways depending on the context and the goals of a particular project</p>
                                <a href="project-details.html" class="line-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-card5">
                            <div class="project-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="project image">
                            </div>
                            <div class="project-content">
                                <h3 class="box-title"><a href="project-details.html">Major Insurance Provider Saves $750k per Month With Big Data Migration Month</a></h3>
                                <p class="project-card5_desc">The company needed to complete a complex migration on a tight deadline to avoid millions of dollars in post-contract fees and fines.</p>
                                <a href="project-details.html" class="line-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="project-card5">
                            <div class="project-img">
                                <img src="{{asset('img/fotowisata/1.jpg')}}" alt="project image">
                            </div>
                            <div class="project-content">
                                <h3 class="box-title"><a href="project-details.html">That's a significant achievement! Saving $750,000 per month through a big data migration</a></h3>
                                <p class="project-card5_desc">Project Success is a term that generally refers to the achievement of the goals and objectives set for a specific project.</p>
                                <a href="project-details.html" class="line-btn">Learn More<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <button data-slider-prev="#projectSlider5" class="slider-arrow slider-prev"><i class="far fa-arrow-left"></i></button>
            <button data-slider-next="#projectSlider5" class="slider-arrow slider-next"><i class="far fa-arrow-right"></i></button>
        </div>
    </div>
</section>

{{-- <div class="space">
    <div class="container">
        <div class="row gy-4">
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-location-dot"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Alamat</h4>
                        <span class="contact-info_text">Jl. Ambulu, Purwojari<br> Kecamatan Wuluhan</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">No Telepon</h4>
                        <span class="contact-info_text">
                            <a href="tel:+65485965789">(+65) - 48596 - 5789</a>
                            <a href="tel:+65485965789">+65-48596-5789</a>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="contact-info">
                    <div class="contact-info_icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="media-body">
                        <h4 class="box-title">Email</h4>
                        <span class="contact-info_text">
                            <a href="mailto:info.example@gmail.com">wuluhan@gmail.com</a>
                            <a href="mailto:info@webteck.com">wuluhan@gmail.com</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--==============================
Contact Area
==============================-->
{{-- <div class="bg-smoke space" id="contact-sec">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="title-area mb-35 text-xl-start text-center">
                    <span class="sub-title">
                        <div class="icon-masking me-2">
                            <span class="mask-icon" data-mask-src="{{asset('img/theme-img/title_shape_2.svg')}}"></span>
                            <img src="{{asset('img/theme-img/title_shape_2.svg')}}" alt="shape">
                        </div>contact with us!
                    </span>
                    <h2 class="sec-title">Kritik dan Saran</h2>
                    <p class="sec-text">Kami sangat menghargai kunjungan Anda ke website kami. Untuk terus meningkatkan kualitas layanan dan informasi yang kami sediakan, kami mohon kesediaan Anda memberikan kritik dan saran. Silakan sampaikan pendapat Anda di kolom komentar atau melalui formulir yang tersedia. Terima kasih atas masukan Anda!</p>
                </div>
                <form action="mail.php" method="POST" class="contact-form ajax-contact">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                            <i class="fal fa-user"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address">
                            <i class="fal fa-envelope"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <select name="subject" id="subject" class="form-select">
                                <option value="" disabled selected hidden>Select Subject</option>
                                <option value="#">Masalah 1</option>
                                <option value="#">Masalah 2</option>
                                <option value="#">Masalah 3</option>
                                <option value="#">Masalah 4</option>
                            </select>
                            <i class="fal fa-chevron-down"></i>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="tel" class="form-control" name="number" id="number" placeholder="Phone Number">
                            <i class="fal fa-phone"></i>
                        </div>
                        <div class="form-group col-12">
                            <textarea name="message" id="message" cols="30" rows="3" class="form-control" placeholder="Your Message"></textarea>
                            <i class="fal fa-comment"></i>
                        </div>
                        <div class="form-btn text-xl-start text-center col-12">
                            <button class="th-btn">Send Message<i class="fa-regular fa-arrow-right ms-2"></i></button>
                        </div>
                    </div>
                    <p class="form-messages mb-0 mt-3"></p>
                </form>
            </div>
        </div>
    </div>
</div> --}}


<div class="map mb-5 mt-5" style="height: 800px">
    <iframe height="100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126319.71459821571!2d113.45383307415831!3d-8.353254933051847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6837b1ab28437%3A0x4027a76e3530e20!2sKec.%20Wuluhan%2C%20Kabupaten%20Jember%2C%20Jawa%20Timur!5e0!3m2!1sid!2sid!4v1716481411623!5m2!1sid!2sid" allowfullscreen="" loading="lazy"></iframe>
</div>

@endsection

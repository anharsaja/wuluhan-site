@extends('home.layouts.master')

@section('homepage')
    
<div class="th-hero-wrapper hero-7" id="hero">
    <div class="hero-inner">
        {{-- <div class="th-hero-bg" data-bg-src="/img/hero/hero_bg_7_1.png"> --}}
        </div>
        <div class="container th-container4">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="hero-style7 text-center">
                        <!-- <span class="sub-title style1">We’re Leading Startup Agency</span>  -->
                        <h1 class="hero-title"> We Help To Get <span class="text-theme">Happines</span> Solution Ever </h1>
                        <p class="hero-text">Elevate your quality of life through responsive and reliable community services.</p>
                        {{-- <div class="btn-group mt-35 justify-content-center">
                            <a href="service.html" class="th-btn style-radius">Get Started Now</a>
                            <a href="service.html" class="th-btn style6 style-radius">View Demo</a>
                        </div> --}}
                    </div>
                </div>
            </div>
            <div class="th-hero-thumb">
                <img src="/img/pelayanan.png" alt="img pelayanan" style="filter: brightness(60%)">
            </div>
        </div>
    </div>
</div>

<!--==============================
Process Area  
==============================-->
<section class="process-area-3 overflow-hidden space-bottom">
    <div class="container th-container4">
        <div class="title-area text-xl-start text-center">
            <span class="sub-title">Stockie Operation Across the world</span>
            <h2 class="sec-title">Our Solution for your business</h2>
            <p class="sec-text mt-25">We strive for excellence. Let us know how we can serve you better.</p>
            <div style="height: 130px"></div>
            {{-- <a href="contact.html" class="th-btn style-radius">Get Started Now</a> --}}
        </div>
        <div class="process-card-area3">
            <div class="process-line position-top">
                <img src="/img/bg/process_line_3.svg" alt="line">
            </div>
            <div class="row gy-40 justify-content-xl-between justify-content-center">
                <div class="col-md-6 col-xl-auto process-card-wrap">
                    <div class="process-card style3">
                        <div class="process-card_icon">
                            <img src="/img/icon/process_box_3_1.svg" alt="icon">
                        </div>
                        <div class="process-card_number">
                            1 </div>
                        <h2 class="box-title">Pelayanan Surat</h2>
                        <p class="process-card_text">Untuk Pelayanan Surat-surat / Dokumen Admindukcapil melalui Aplikasi Lahbako Kecamatan oleh Operator/Petugas Kecamatan</p>
                        {{-- <a href="service-details.html" class="link-btn">Learn More<i class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto process-card-wrap">
                    <div class="process-card style3">
                        <div class="process-card_icon">
                            <img src="/img/icon/process_box_3_2.svg" alt="icon">
                        </div>
                        <div class="process-card_number">
                            2 </div>
                        <h2 class="box-title">Emergency</h2>
                        <p class="process-card_text">Melayani warga masyarakat yang mengajukan Dokdukcapil emergency</p>
                        {{-- <a href="service-details.html" class="link-btn">Learn More<i class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
                <div class="col-md-6 col-xl-auto process-card-wrap">
                    <div class="process-card style3">
                        <div class="process-card_icon">
                            <img src="/img/icon/process_box_3_3.svg" alt="icon">
                        </div>
                        <div class="process-card_number">
                            3 </div>
                        <h2 class="box-title">Pelayanan Difabel</h2>
                        <p class="process-card_text">Pelayanan difabel diprioritaskan dengan bukti data dukung tambahan yang menunujukkan betul-betul emergency (petugas/operator Kecamatan berkoordinasi dengan pejabat Dispendukcapil yang membidangi)</p>
                        {{-- <a href="service-details.html" class="link-btn">Learn More<i class="fas fa-arrow-right"></i></a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--==============================
About Area  
==============================-->
<div class="overflow-hidden " data-bg-src="/img/bg/about_bg_7_1.png" id="about-sec">
    <div class="container th-container4">
        <div class="row justify-content-between align-items-center flex-row-reverse">
            <div class="col-xl-7">
                <div class="img-box9 pt-xl-0 space-top mb-xl-0 mb-n5">
                    <div class="img1">
                        <img src="/img/pelayanan2.png" alt="About" style="filter: brightness(70%)"> 
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="space">
                    <div class="title-area">
                        <h2 class="sec-title">Help You Find The Best Analysis For Your Complaint</h2>
                    </div>
                    <div class="about-feature style2">
                        <div class="about-feature_icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="about-feature_title">Kepuasan No. 1</h3>
                            <p class="about-feature_text">Tim kami berkomitmen untuk memberikan pelayanan yang cepat dan ramah untuk memastikan kepuasan Anda</p>
                        </div>
                    </div>
                    <div class="about-feature style2">
                        <div class="about-feature_icon">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="about-feature_title">Komunikasi Efektif</h3>
                            <p class="about-feature_text">Kami mengutamakan komunikasi yang jelas dan bantuan yang proaktif untuk memenuhi kebutuhan Anda secara efektif</p>
                        </div>
                    </div>
                    <div class="about-feature style2">
                        <div class="about-feature_icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <div class="media-body">
                            <h3 class="about-feature_title">Preferensi Personal</h3>
                            <p class="about-feature_text">Kami berusaha melampaui harapan dengan memberikan dukungan personal yang disesuaikan dengan preferensi Anda.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
About Area  
==============================-->
<div class=" overflow-hidden space">
    <div class="container th-container4">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="title-area text-center">
                    <span class="sub-title">Wuluhan Services</span>
                    <h2 class="sec-title">Get The Best Result And Make More Revenue To Apply These Features</h2>
                </div>
            </div>
        </div>
        <div class="feature-wrap7">
            <div class="feature-bg-line">
                <img src="/img/bg/feature_line.svg" alt="img">
            </div>
            <div class="row gy-80 justify-content-center justify-content-lg-between align-items-center">
                <div class="col-lg-6">
                    <div class="feature-thumb7-1">
                        <img src="/img/pelayanan4.png" alt="img" style="filter: brightness(60%); border-radius: 3%">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="feature-content me-xl-5">
                        <h4 class="feature-content-title mb-25">We Find Your Problem <br class="d-xl-block d-none"> And Solution It!</h4>
                        <p class="mb-25">Integrate analytics tools such as Google Analytics to track visitor behavior, monitor performance metrics, and make data-driven decisions for continuous improvement.</p>
                        <div class="two-column mb-35">
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-check"></i> Faster Response Time</li>
                                    <li><i class="fas fa-check"></i> Top Audiences</li>
                                </ul>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-check"></i> Automation builder</li>
                                    <li><i class="fas fa-check"></i> Safe and Private</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            {{-- <a href="about.html" class="th-btn style-radius">Get Started Now</a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-4">
                    <div class="feature-thumb7-1">
                        <img src="/img/pelayanan3.png" alt="img" style="filter: brightness(60%); border-radius: 3%;">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="feature-content left-content me-xl-5">
                        <h4 class="feature-content-title mb-25">We Are Manage Your <br class="d-xl-block d-none"> Projects Fast</h4>
                        <p class="mb-25">Integrate analytics tools such as Google Analytics to track visitor behavior, monitor performance metrics, and make data-driven decisions for continuous improvement.</p>
                        <div class="two-column mb-35">
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-check"></i> Create a project</li>
                                    <li><i class="fas fa-check"></i> Make it done on-time</li>
                                </ul>
                            </div>
                            <div class="checklist">
                                <ul>
                                    <li><i class="fas fa-check"></i> Assign related people</li>
                                </ul>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            {{-- <a href="about.html" class="th-btn style-radius">Discover More</a> --}}
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div><!--==============================
Testimonial Area  
==============================-->
{{-- <section class="overflow-hidden bg-top-center space" id="testi-sec" data-bg-src="/img/bg/testimonial_bg_7.jpg">
    <div class="container th-container4">
        <div class="row justify-content-lg-between justify-content-center align-items-end">
            <div class="col-xl-6">
                <div class="title-area text-center text-lg-start">
                    <span class="sub-title style1">Customer Feedbacks</span>
                    <h2 class="sec-title">See what our clients have to say</h2>
                </div>
            </div>
            <div class="col-lg-auto d-none d-xl-block">
                <div class="sec-btn">
                    <div class="icon-box">
                        <button data-slider-prev="#testiSlider5" class="slider-arrow style3 default"><i class="far fa-arrow-left"></i></button>
                        <button data-slider-next="#testiSlider5" class="slider-arrow style3 default"><i class="far fa-arrow-right"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-area">
            <div class="swiper th-slider has-shadow" id="testiSlider5" data-slider-options='{"breakpoints":{"0":{"slidesPerView":1},"576":{"slidesPerView":"1"},"768":{"slidesPerView":"2"},"992":{"slidesPerView":"2"},"1200":{"slidesPerView":"3"}}}'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“Lectus volpat faucibus placerat eget nulla sodales aliquam molestie ante, himenaeos fames reinvent prospective suscipit arcu cras cenas penatibus vivamus, aenean primis enim”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_1.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Andrew D. Smith</h3>
                                        <span class="testi-box5_desig">Manager</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“Objectively visualize error-free technology for B2B alignment. Monotonectally harness reinvent prospective an expanded array of models via effective collaboration in the success.”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_2.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Brooklyn Simmons</h3>
                                        <span class="testi-box5_desig">CTO of Portfolio</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“Completely drive innovative value reinvent prospective whereas out-of-the-box paradigms. Interactively pursue stand-alone markets after global say that they results..”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_3.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Savannah Nguyen</h3>
                                        <span class="testi-box5_desig">CEO at Rimasu</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“The best service reinvent prospective metrics before granular schema. Professionally metrics before expedite client-centric or analyzing before expedite methods ”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_4.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Cameron Williamson</h3>
                                        <span class="testi-box5_desig">Founder CEO</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“I've had the pleasure of working with Webteck for the past year, and I can confidently say that they have been instrumental say that they in the success.”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_2.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Brooklyn Simmons</h3>
                                        <span class="testi-box5_desig">Project Manager</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“Phosfluorescently reinvent prospective metrics before granular schema. Professionally metrics before expedite client-centric before expedite methods .”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_3.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Savannah Nguyen</h3>
                                        <span class="testi-box5_desig">Head Manager</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="testi-box5 th-ani">
                            <div class="testi-box5_image">
                                <img src="/img/testimonial/testi_img_1.png" alt="image">
                            </div>
                            <p class="testi-box5_text">“If you have specific questions about gathering or analyzing customer feedback, or if you're looking for general information or analyzing feel free reinvent prospective to ask.”</p>
                            <div class="testi-box5_wrapper">
                                <div class="testi-box5_profile">
                                    <div class="testi-box5_author">
                                        <img src="/img/testimonial/testi_2_1.png" alt="Avater">
                                    </div>
                                    <div class="testi-box5_info">
                                        <h3 class="box-title">Cameron Williamson</h3>
                                        <span class="testi-box5_desig">UI/UX Designer</span>
                                    </div>
                                </div>
                                <div class="testi-quote">
                                    <img src="/img/icon/quote.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
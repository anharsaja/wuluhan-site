@extends('home.layouts.master')

@section('homepage')

<section class="space-top">
    <div class="container">
        <div class="row gy-40 align-items-center">
            <div class="col-xl-5">
                <div class="team-featured-img" style="width: 494px; height: 468px;">
                    {{-- <img src="{{asset('img/team/team_featured.jpg')}}" alt="Team">   --}}
                    <img src="{{asset('img/model_sementara/model1.jpeg')}}" alt="Team">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="team-featured">
                    <h2 class="team-title">Rachna Sheth</h2>
                    <p class="team-desig">CEO, of Webteck Company</p>
                    <p class="team-bio">Enthusiastically parallel task 2.0 niches wherea end-to-end strategic theme area. Dramatically harness e-business ROI and granular service. Quickly target enabled internal organic sources after cross-unit methods of empowerment. Seamlessly e-enable intuitive applications before end-to-end applications. Uniquely matrix seamless supply chains for resource-leveling.</p>
                    <div class="team-contact-wrap">
                        <div class="team-contact">
                            <div class="icon-btn">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="team-contact_label">Phone Number</h6>
                                <a class="team-contact_link" href="tel:+19356542587">+1 935-654-2587</a>
                            </div>
                        </div>
                        <div class="team-contact">
                            <div class="icon-btn">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="team-contact_label">Email Address</h6>
                                <a class="team-contact_link" href="mailto:info@rachna.com">info@rachna.com</a>
                            </div>
                        </div>
                        <div class="team-contact">
                            <div class="icon-btn">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="team-contact_label">Phone Number</h6>
                                <span class="team-contact_link">10:00AM - 4:00PM</span>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('home.teamdetails')}}" class="th-btn">MAKE AN APPOINTMENT<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Team Cards --}}
<section class="space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">
                <div class="icon-masking me-2">
                    <span class="mask-icon" data-mask-src="{{asset('img/theme-img/title_shape_1.svg')}}"></span>
                    <img src="{{asset('img/theme-img/title_shape_1.svg')}}" alt="shape">
                </div>
                ALL MEMBERS
            </span>
            <h2 class="sec-title">See Our Skilled Expert <span class="text-theme">Team</span></h2>
        </div>
        <div class="row gy-40">
            <!-- Single Item -->

            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{asset('img/model_sementara/model2.jpeg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">Name</a></h3>
                        <span class="team-desig">Posisi</span>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>

    
@endsection
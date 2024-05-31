@extends('home.layouts.master')

@section('homepage')

<section class="space-top">
    <div class="container">
        <div class="row gy-40 align-items-center">
            <div class="col-xl-5">
                <div class="team-featured-img">
                    <img src="{{asset('img/team/team_featured.jpg')}}" alt="Team">
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
                    <a href="about.html" class="th-btn">MAKE AN APPOINTMENT<i class="fa-regular fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

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
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_1.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Rayan Athels</a></h3>
                        <span class="team-desig">Founder & CEO</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_2.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p2"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Alex Furnandes</a></h3>
                        <span class="team-desig">Project Manager</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_3.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p3"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Mary Crispy</a></h3>
                        <span class="team-desig">Cheif Expert</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_4.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p4"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Henry Joshep</a></h3>
                        <span class="team-desig">Product Manager</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_5.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p5"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Sanjida Carlose</a></h3>
                        <span class="team-desig">IT Consultant</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_6.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p6"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Marian Widjya</a></h3>
                        <span class="team-desig">Head Manager</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_7.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p7"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Peter Parker</a></h3>
                        <span class="team-desig">Web Developer</span>
                    </div>
                </div>
            </div>

            <!-- Single Item -->
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img">
                        <img src="{{asset('img/team/team_1_8.jpg')}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p8"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="team-details.html">Grayson Gabriel</a></h3>
                        <span class="team-desig">UI/UX Designer</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

    
@endsection
@extends('home.layouts.master')

@section('homepage')

<section class="space">
    <div class="container">
        <div class="about-card">
            <div class="about-card_img">
                <img class="w-100" src="{{asset('img/team/team_details.jpg')}}" alt="team image">
            </div>
            <div class="about-card_box">
                <div class="about-card_top">
                    <div class="media-body">
                        <h2 class="about-card_title">Rayan Athels</h2>
                        <p class="about-card_desig">UI/UX Designer</p>
                    </div>
                    <div class="header-social">
                        <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                        <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                        <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <p class="about-card_text">Continually utilize 24/365 bandwidth before real-time interfaces. Credibly grow team core competencies with pandemic commerce. Objectively initiate pandemic users with deliver bricks clicks meta services for bricks-and-clicks innovation streamline front end aradigms expedite granular human capital rather than intuitive testing.</p>
                <div class="team-info-wrap">
                    <div class="contact-feature">
                        <div class="icon-btn">
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">Experience</p>
                            <span class="contact-feature_link">More Than 10 Yearsn</span>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="icon-btn">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">Phone</p>
                            <a href="tel:+19088006987" class="contact-feature_link">+(190)-8800-6987</a>
                        </div>
                    </div>
                    <div class="contact-feature">
                        <div class="icon-btn">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">Email</p>
                            <a href="mailto:info@webteck.com" class="contact-feature_link">info@webteck.com</a>
                        </div>
                    </div>
                    {{-- <div class="contact-feature">
                        <div class="icon-btn">
                            <i class="fa-solid fa-calendar-days"></i>
                        </div>
                        <div class="media-body">
                            <p class="contact-feature_label">Fax</p>
                            <span class="contact-feature_link">+265478962</span>
                        </div>
                    </div> --}}
                </div>
                {{-- <a href="about.html" class="th-btn">GET IN TOUCH<i class="fa-regular fa-arrow-right ms-2"></i></a> --}}
            </div>
        </div>
        {{-- <div class="row mt-5 pt-10">
            <div class="col-xl-6 mb-xl-0">
                <h4 class="border-title">Personal Biography</h4>
                <p class="mb-40">Conveniently innovate professional initiatives whereas virtual information. Compellingly network resource maximizing materials without premier benefits. Phosfluorescently synthesize wireless solutions with robust e-business. Monotonectally implement functionalized ideas with technically sound process improvements. Dramatically disseminate vertical systems after.</p>

                <h5 class="border-title">Professional Skills</h5>
                <p class="mb-40">Credibly scale plug-and-play customer service after high-payoff idea. Monotonectall incentivize installed base intellectual capital whereas flexible process improvement. Conveniently. Distinctively negotiate front-end customer service rather. Process tonectall incentivize installed base intellectual flexible.</p>
                <div class="skill-feature style2">
                    <h5 class="skill-feature_title">Wedding Planning</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width: 95%;">
                            <div class="progress-value">95%</div>
                        </div>
                    </div>
                </div>
                <div class="skill-feature style2">
                    <h5 class="skill-feature_title">Event Management</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width: 90%;">
                            <div class="progress-value">90%</div>
                        </div>
                    </div>
                </div>
                <div class="skill-feature style2">
                    <h5 class="skill-feature_title">Stage Decoration</h5>
                    <div class="progress">
                        <div class="progress-bar" style="width: 85%;">
                            <div class="progress-value">85%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-5 mt-xl-0">
                <h4 class="border-title">Activities</h4>
                <p class="mb-20">Energistically myocardinate parallel market with co effective channel. Competently e-enable proactive relationships with stand-alone infomediaries.</p>
                <div class="two-column mb-40">
                    <div class="checklist">
                        <ul>
                            <li><i class="fas fa-badge-check"></i> Experienced Attorneys Professional.</li>
                            <li><i class="fas fa-badge-check"></i> Experienced Attorneys Approach.</li>
                        </ul>
                    </div>
                    <div class="checklist">
                        <ul>
                            <li><i class="fas fa-badge-check"></i> Independence Makes Difference.</li>
                            <li><i class="fas fa-badge-check"></i> Committed To Helping Our Clients.</li>
                        </ul>
                    </div>
                </div>

                <h5 class="border-title">Educational Qualification</h5>
                <p class="mb-40">Credibly scale plug-and-play customer service after high-payoff idea. Monotonectall incentivize installed base intellectual capital whereas flexible process improvement. Conveniently. Distinctively negotiate front-end customer service rather.</p>
                <div class="experience-box-wrap">
                    <div class="experience-box">
                        <span class="experience-box_num">1st</span>
                        <h6 class="experience-box_title">IT Consultant</h6>
                        <p class="experience-box_text">2016 - Present (Webteck.Inc)</p>
                    </div>
                    <div class="experience-box">
                        <span class="experience-box_num">2nd</span>
                        <h6 class="experience-box_title">Softwer Developer</h6>
                        <p class="experience-box_text">2010 - 2015 (Lazmi Trade)</p>
                    </div>
                    <div class="experience-box">
                        <span class="experience-box_num">3rd</span>
                        <h6 class="experience-box_title">Junior Inovator</h6>
                        <p class="experience-box_text">2006 - 2009 (Onium Plan)</p>
                    </div>
                    <div class="experience-box">
                        <span class="experience-box_num">4th</span>
                        <h6 class="experience-box_title">Junior Developer</h6>
                        <p class="experience-box_text">2000 - 2005 (Grages.Ltd)</p>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</section>
    
@endsection
@extends('home.layouts.master')

@section('homepage')

<section class="space-top">
    <div class="container">
        <div class="row gy-40 align-items-center">
            <div class="col-xl-5">
                <div class="team-featured-img" style="width: 494px; height: 468px;">
                    <img src="{{$superadmin->foto}}" alt="Team">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="team-featured">
                    <h2 class="team-title">{{ $superadmin->name }}</h2>
                    <p class="team-desig">
                        @foreach ($superadmin->roles as $role)
                            {{ $role->name }}
                        @endforeach
                    </p>
                    <p class="team-bio">{{ $superadmin->description }}</p>
                    <div class="team-contact-wrap">
                        <div class="team-contact">
                            <div class="icon-btn">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="team-contact_label">Phone Number</h6>
                                {{-- <a class="team-contact_link" href="tel:+19356542587">{{Auth::guard('admin')->user()->nip}}</a> --}}
                            </div>
                        </div>
                        <div class="team-contact">
                            <div class="icon-btn">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            <div class="media-body">
                                <h6 class="team-contact_label">Email Address</h6>
                                {{-- <a class="team-contact_link" href="mailto:info@rachna.com">{{Auth::guard('admin')->user()->email}}</a> --}}
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

            @foreach ($admins as $admin)
            <div class="col-lg-3 col-md-6">
                <div class="th-team team-card">
                    <div class="team-img" style="width: 287px; height: 320px;">
                        <img src="{{$admin->foto}}" alt="Team">
                    </div>
                    <div class="team-content">
                        <div class="box-particle" id="team-p1"></div>
                        <div class="team-social">
                            <a target="_blank" href="https://facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a target="_blank" href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
                            <a target="_blank" href="https://instagram.com/"><i class="fab fa-instagram"></i></a>
                            <a target="_blank" href="https://linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                        <h3 class="box-title"><a href="{{route('home.teamdetails')}}">{{ $admin-> name }}</a></h3>
                        <span class="team-desig">
                            @foreach ($admin->roles as $role)
                                {{$role->name}}
                            @endforeach
                        </span>
                    </div>
                </div>
            </div>
                
            @endforeach


        </div>
    </div>
</section>

    
@endsection
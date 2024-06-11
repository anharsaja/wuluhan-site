<div class="sticky-wrapper">
    <!-- Main Menu Area -->
    <div class="menu-area">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <div class="header-logo">
                        <a class="icon-masking" href="{{ route('home') }}"><span data-mask-src="{{asset('img/wuluhan.png')}}"></span><img src="{{asset('img/wuluhan.png')}}" style="width: 180px"></a>
                    </div>
                </div>
                <div class="col-auto">
                    <nav class="main-menu d-none d-lg-inline-block">
                        <ul>
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li class="menu-item-has-children">
                                <a href="#">Pages</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('home.team') }}">Team</a></li>
                                    <li><a href="project.html">Project</a></li>
                                    <li><a href="project-details.html">Project Details</a></li>
                                    <li><a href="{{route('home.gallery')}}">Gallery</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
                                    <li><a href="faq.html">Faq Page</a></li>
                                    <li><a href="error.html">Error Page</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('home.blog') }}">Blog Sekretariat</a></li>
                                    <li><a href="{{ route('home.blog') }}">Blog Pelum</a></li>
                                    <li><a href="{{ route('home.blog') }}">Blog Pemerintahan</a></li>
                                    <li><a href="{{ route('home.blog') }}">Blog PMKS</a></li>
                                    <li><a href="{{ route('home.blog') }}">Blog Trantib</a></li>
                                    <li><a href="{{route('home.blogdetails')}}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('home.contact')}}">Contact</a>
                            </li>
                        </ul>
                    </nav>

                    {{-- mobile menu --}}
                    <div class="header-button">
                        {{-- <a type="button"  href="{{route('admin.dashboard')}}" class="" style="width: 56px;
                        height: 56px;
                        padding: 0;
                        font-size: 20px;
                        border: none;
                        background-color: var(--theme-color);
                        color: var(--white-color);
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        border-radius: 4px;"><i class="fa-solid fa-right-to-bracket"></i></a> --}}

                        {{-- <button type="button" class="th-menu-toggle d-inline-block d-lg-none"><i class="fa-solid fa-right-to-bracket"></i></button> --}}
                        <button type="button" class="icon-btn th-menu-toggle d-inline-block d-lg-none">
                            <i class="far fa-bars"></i>
                        </button>
                    </div>
                </div>
                <div class="col-auto d-none d-lg-block">
                    <div class="header-button">
                        @auth('admin')
                            <a href="{{route('admin.dashboard')}}" class="th-btn style3 shadow-none">{{Auth::guard('admin')->user()->name}}<i class="fas fa-arrow-right ms-1"></i></a>
                            @else
                            <a href="{{route('admin.dashboard')}}" class="th-btn style3 shadow-none">Login<i class="fas fa-arrow-right ms-1"></i></a>
                        @endauth
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="logo-bg"></div>
    </div>
</div>
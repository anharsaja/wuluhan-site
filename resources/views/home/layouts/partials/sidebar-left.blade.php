<div class="th-menu-wrapper">
    <div class="th-menu-area text-center">
        <button class="th-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo" style="background: white; padding-bottom: 0px;">
        </div>
        <div class="th-mobile-menu">
            <ul>
                <li class="menu-item-has-children mega-menu-wrap">
                    <a href="#">Home</a>
                </li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="about.html">Services</a></li>
                <li class="menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('home.team')}}">Team</a></li>
                        {{-- <li><a href="{{route('home.teamdetails')}}">Team Details</a></li> --}}
                    </ul>
                </li>
                <li class="menu-item-has-children">
                    <a href="#">Blog</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('home.blog')}}">Blog</a></li>
                        <li><a href="{{route('home.blogdetails')}}">Blog Details</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('home.contact')}}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>
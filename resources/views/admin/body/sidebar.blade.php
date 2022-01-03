<aside class="sidebar">
    <div class="scroll-sidebar">
        <div class="user-profile">
            <div class="dropdown user-pro-body">
                <div class="profile-image">
                    <img src="{{asset('backend/plugins/images/users/hanna.jpg')}}" alt="user-img" class="img-circle">
                    <a href="javascript:void(0);" class="dropdown-toggle u-dropdown text-blue" data-toggle="dropdown"
                        role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-danger">
                            <i class="fa fa-angle-down"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated flipInY">
                        <li><a href="javascript:void(0);"><i class="fa fa-user"></i> Profile</a></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-inbox"></i> Inbox</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="fa fa-cog"></i> Account Settings</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href=""><i class="fa fa-power-off"></i> Logout</a></li>
                    </ul>
                </div>
                <p class="profile-text m-t-15 font-16"><a href="javascript:void(0);"> Shailly Dixit</a></p>
            </div>
        </div>
        <nav class="sidebar-nav">
            <ul id="side-menu">
                <li>
                    <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                            class="icon-home fa-fw"></i> <span class="hide-menu"> Home Page</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="{{route('welcome.message')}}">Welcome Message</a> </li>
                        <li> <a href="{{route('people.believe')}}">People Believe In Us</a> </li>
                        <li> <a href="{{route('whatwedo')}}">What We Do</a> </li>
                        <li> <a href="{{route('our.team')}}">Our Team</a> </li>

                    </ul>
                </li>

                <li>
                    <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                            class="icon-notebook fa-fw"></i> <span class="hide-menu"> About Page</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="index.html">About Us Details</a> </li>
                        <li> <a href="{{route('our.services')}}">Our Services</a> </li>
                        <li> <a href="index3.html">Our Gallary</a> </li>
                    </ul>
                </li>

                <li>
                    <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                            class="icon-equalizer fa-fw"></i> <span class="hide-menu"> Services Page</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="index.html">Our Services</a> </li>
                        <li> <a href="index2.html">Client Testimonials</a> </li>
                    </ul>
                </li>

                <li>
                    <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                            class="icon-grid fa-fw"></i> <span class="hide-menu"> Blog Page </span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="index.html">Blog Deatils</a> </li>
                        <li> <a href="index.html">Blog Comment</a> </li>

                    </ul>
                </li>

                <li>
                    <a class="active waves-effect" href="javascript:void(0);" aria-expanded="false"><i
                            class="icon-envelope-letter fa-fw"></i> <span class="hide-menu"> Contact Page</span></a>
                    <ul aria-expanded="false" class="collapse">
                        <li> <a href="index.html">Contact Details</a> </li>
                        <li> <a href="index2.html">Contact Message</a> </li>
                    </ul>
                </li>
            </ul>
        </nav> 
    </div>
</aside>

<div class="left-side-menu mm-show">

    <!-- LOGO -->
    <a href="index.html" class="logo text-center logo-dark">
        <span class="logo-lg">
            <img src="{{asset('images/logo-dark.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('images/logo-dark.png')}}" alt="" height="16">
        </span>
    </a>
    <a href="index.html" class="logo text-center logo-light">
        <span class="logo-lg">
            <img src="{{asset('images/logo-dark.png')}}" alt="" height="16">
        </span>
        <span class="logo-sm">
            <img src="{{asset('images/logo-dark.png')}}" alt="" height="16">
        </span>
    </a>

    <div class="h-100 mm-active" id="left-side-menu-container" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: 0px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden;">
                        <div class="simplebar-content" style="padding: 0px; height: 95%">
                            <!--- Sidemenu -->
                            <ul class="metismenu side-nav mm-show">
                                <li class="side-nav-title side-nav-item">Navigation</li>
                                <li class="side-nav-item">
                                    <a href="{{route('admin.welcome')}}" class="side-nav-link">
                                        <i class="mdi mdi-view-dashboard"></i>
                                        <span> Dashboards </span>
                                    </a>

                                </li>


                                <li class="side-nav-title side-nav-item">Manage</li>

                                <li class="side-nav-item">
                                    <a href="{{route('admin.users.index')}}" class="side-nav-link">
                                        <i class="uil-user"></i>
                                        <span> Users </span>
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a href="{{route('admin.plans.index')}}" class="side-nav-link">
                                        <i class="mdi mdi-notebook-outline"></i>
                                        <span> Plans </span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('admin.plans.index')}}" class="side-nav-link">
                                        <i class="uil-plus-circle"></i>
                                        <span> User Subscription</span>
                                    </a>
                                </li>

                                <li class="side-nav-item">
                                    <a href=""
                                       {{--                                  route('admin.posts.index')--}}
                                       class="side-nav-link">
                                        <i class="mdi mdi-post"></i>
                                        <span> Posts </span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="" class="side-nav-link">
                                        <i class="uil-home-alt"></i>
                                        <span> Properties </span>
                                    </a>
                                </li>
                                <li class="side-nav-item">
                                    <a href="{{route('homepage')}}" class="btn btn-block btn-primary bottom-0">
                                        <i class="uil-home-alt"></i>
                                        <span> Back to home page </span>
                                    </a>
                                </li>

                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 100px;"><a href=""></a></div>
        </div>
    </div>

    <!-- Sidebar -left -->
</div>

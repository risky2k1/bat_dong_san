<div class="navbar-custom">
    <ul class="list-unstyled topbar-right-menu float-right mb-0">
        <li class="dropdown notification-list d-lg-none">
            <a class="nav-link dropdown-toggle arrow-none" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <i class="dripicons-search noti-icon"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-animated dropdown-lg p-0">
                <form class="p-3">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                </form>
            </div>
        </li>


        <li class="dropdown notification-list">
            <a class="nav-link dropdown-toggle nav-user arrow-none mr-0" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="false" aria-expanded="false">
                <span class="account-user-avatar">
{{--                    <img src="{{ auth()->user()->avatar }}" alt="user-image" class="rounded-circle">--}}
                </span>
                <span>
                    <span class="account-user-name">{{auth()->user()->name}}</span>
                    <span class="account-position">Founder</span>
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated topbar-dropdown-menu profile-dropdown"
                 style="">
                <!-- item-->
                <div class=" dropdown-header noti-title">
                    <h6 class="text-overflow m-0">Welcome !</h6>
                </div>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item">
                    <i class="mdi mdi-account-circle mr-1"></i>
                    <span>My Account</span>
                </a>
                <!-- item-->
                <a href="{{route('logout')}}" class="dropdown-item notify-item">
                    <i class="mdi mdi-logout mr-1"></i>
                    <span>Logout</span>
                </a>

            </div>
        </li>

    </ul>
    <button class="button-menu-mobile open-left">
        <i class="mdi mdi-menu"></i>
    </button>
    <div class="app-search dropdown d-none d-lg-block">
        <form>
            <div class="input-group">
                <input type="text" class="form-control dropdown-toggle" placeholder="Search..." id="top-search">
                <span class="mdi mdi-magnify search-icon"></span>
                <button class="input-group-text btn-primary" type="submit">Search</button>
            </div>
        </form>

{{--        <div class="dropdown-menu dropdown-menu-animated dropdown-lg" id="search-dropdown">--}}
{{--            <!-- item-->--}}
{{--            <div class="dropdown-header noti-title">--}}
{{--                <h5 class="text-overflow mb-2">Found <span class="text-danger">17</span> results</h5>--}}
{{--            </div>--}}

{{--            <!-- item-->--}}
{{--            <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                <i class="uil-notes font-16 me-1"></i>--}}
{{--                <span>Analytics Report</span>--}}
{{--            </a>--}}

{{--            <!-- item-->--}}
{{--            <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                <i class="uil-life-ring font-16 me-1"></i>--}}
{{--                <span>How can I help you?</span>--}}
{{--            </a>--}}

{{--            <!-- item-->--}}
{{--            <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                <i class="uil-cog font-16 me-1"></i>--}}
{{--                <span>User profile settings</span>--}}
{{--            </a>--}}

{{--            <!-- item-->--}}
{{--            <div class="dropdown-header noti-title">--}}
{{--                <h6 class="text-overflow mb-2 text-uppercase">Users</h6>--}}
{{--            </div>--}}

{{--            <div class="notification-list">--}}
{{--                <!-- item-->--}}
{{--                <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                    <div class="d-flex">--}}
{{--                        <img class="d-flex me-2 rounded-circle" src=""--}}
{{--                             alt="Generic placeholder image" height="32">--}}
{{--                        <div class="w-100">--}}
{{--                            <h5 class="m-0 font-14">Erwin Brown</h5>--}}
{{--                            <span class="font-12 mb-0">UI Designer</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}

{{--                <!-- item-->--}}
{{--                <a href="javascript:void(0);" class="dropdown-item notify-item">--}}
{{--                    <div class="d-flex">--}}
{{--                        <img class="d-flex me-2 rounded-circle" src=""--}}
{{--                             alt="Generic placeholder image" height="32">--}}
{{--                        <div class="w-100">--}}
{{--                            <h5 class="m-0 font-14">Jacob Deo</h5>--}}
{{--                            <span class="font-12 mb-0">Developer</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>
</div>

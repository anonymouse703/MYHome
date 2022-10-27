<nav id="mainnav-container" class="mainnav">
    <div class="mainnav__inner">
        <!-- Navigation menu -->
        <div class="mainnav__top-content scrollable-content pb-5">

            <!-- Profile Widget -->
            <div class="mainnav__profile mt-3 d-flex3">

                <div class="mt-2 d-mn-max"></div>

                <!-- Profile picture  -->
                <div class="mininav-toggle text-center py-2">
                    <img class="mainnav__avatar img-md rounded-circle border mx-auto d-block" src="assets/img/profile-photos/1.png" alt="Profile Picture">
                </div>

                <div class="mininav-content collapse d-mn-max">
                    <div class="d-grid">

                        <!-- User name and position -->
                        <button class="d-block btn shadow-none p-2" data-bs-toggle="collapse" data-bs-target="#usernav" aria-expanded="false" aria-controls="usernav">
                            <span class="dropdown-toggle d-flex justify-content-center align-items-center">
                                <h6 class="mb-0 me-3">{{ Auth()->user()->last_name ?? '' }},{{ Auth()->user()->first_name ?? '' }} </h6>
                            </span>
                            <small class="text-muted">Administrator</small>
                        </button>

                        <!-- Collapsed user menu -->
                        <div id="usernav" class="nav flex-column collapse">
                            <a href="#" class="nav-link">
                                <i class="fa-solid fa-user-tie fs-5 me-2" style="height:15px; width:15px"></i>
                                <span class="ms-1">Profile</span>

                                <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="demo-pli-unlock fs-5 me-2"></i> Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                        </div>
                    </div>
                </div>

            </div>
            <!-- End - Profile widget -->

            <!-- Navigation Category -->
            <div class="mainnav__categoriy py-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Admin Panel</h6>
                <ul class="mainnav__menu nav flex-column">

                    <!-- Regular menu link -->
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link mininav-toggle"><i class="fa-solid fa-house fs-5 me-2" style="height:15px; width:15px"></i>

                            <span class="nav-label mininav-content ms-1">Dashboard</span>
                        </a>
                    </li>
                    <!-- END : Regular menu link -->

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="fa-solid fa-users-gear fs-5 me-2" style="height:15px; width:15px"></i>
                            <span class="nav-label ms-1">User Management</span>
                        </a>

                        <!-- Layouts submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="{{route('user')}}" class="nav-link">Users</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts/minimal-navigation/index.html" class="nav-link">Users Logs</a>
                            </li>
                        </ul>
                        <!-- END : Layouts submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                    <!-- Regular menu link -->
                    <li class="nav-item">
                        <a href="{{route('client')}}" class="nav-link mininav-toggle"><i class="fa-solid fa-table-list fs-5 me-2" style="height:15px; width:15px"></i>

                            <span class="nav-label mininav-content ms-1">Client Record Management</span>
                        </a>
                    </li>
                    <!-- END : Regular menu link -->

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="fa-solid fa-tag fs-5 me-2" style="height:15px; width:15px"></i>
                            <span class="nav-label ms-1">Real Estate Management</span>
                        </a>

                        <!-- Layouts submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="{{route('company')}}" class="nav-link">Real Estate Company</a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">House/Unit Profile</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('location')}}" class="nav-link">Locations</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('accomodation')}}" class="nav-link">Accomodations</a>
                            </li>
                        </ul>
                        <!-- END : Layouts submenu list -->

                    </li>
                    <!-- END : Link with submenu -->


                </ul>
            </div>
            <!-- END : Navigation Category -->

            <!-- Miscellaneous Category -->
            <div class="mainnav__categoriy py-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Miscellaneous</h6>
                <ul class="mainnav__menu nav flex-column">

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="fa-solid fa-gears fs-5 me-2" style="height:15px; width:15px"></i>
                            <span class="nav-label ms-1">Authentication Settings</span>
                        </a>

                        <!-- Forms submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="forms/general/index.html" class="nav-link">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms/tags/index.html" class="nav-link">Permission</a>
                            </li>
                        </ul>
                        <!-- END : Forms submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="fa-solid fa-gears fs-5 me-2" style="height:15px; width:15px"></i>
                            <span class="nav-label ms-1">Real Estate Settings</span>
                        </a>

                        <!-- Forms submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="{{route('real-estate-type')}}" class="nav-link">Real Estate Type</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms/tags/index.html" class="nav-link">Permission</a>
                            </li>
                        </ul>
                        <!-- END : Forms submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                </ul>
            </div>
            <!-- END : Miscellaneous Category -->

            <!-- Reports -->
            <div class="mainnav__categoriy py-3">
                <h6 class="mainnav__caption mt-0 px-3 fw-bold">Reports</h6>
                <ul class="mainnav__menu nav flex-column">

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="fa-solid fa-clipboard-user fs-5 me-2" style="height:15px; width:15px"></i>
                            <span class="nav-label ms-1">User Reports</span>
                        </a>

                        <!-- Ui Elements submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="ui-elements/buttons/index.html" class="nav-link">User Logs</a>
                            </li>

                        </ul>
                        <!-- END : Ui Elements submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                    <!-- Link with submenu -->
                    <li class="nav-item has-sub">

                        <a href="#" class="mininav-toggle nav-link collapsed"><i class="fa-solid fa-clipboard-user fs-5 me-2" style="height:15px; width:15px"></i>
                            <span class="nav-label ms-1">Real Estate Reports</span>
                        </a>

                        <!-- Ui Elements submenu list -->
                        <ul class="mininav-content nav collapse">
                            <li class="nav-item">
                                <a href="ui-elements/buttons/index.html" class="nav-link">Sales Report</a>
                            </li>

                        </ul>
                        <!-- END : Ui Elements submenu list -->

                    </li>
                    <!-- END : Link with submenu -->

                </ul>
            </div>
            <!-- END : Reports-->

        </div>
        <!-- End - Navigation menu -->

        <!-- Bottom navigation menu -->
        <div class="mainnav__bottom-content border-top pb-2">
            <ul id="mainnav" class="mainnav__menu nav flex-column">
                <li class="nav-item has-sub">
                    <a href="#" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                        <i class="fa-solid fa-unlock-keyhole fs-5 me-2" style="height:15px; width:15px"></i>
                        <span class="nav-label ms-1">Logout</span>
                    </a>
                    <ul class="mininav-content nav flex-column collapse">
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                This device only
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">All Devices</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- End - Bottom navigation menu -->

    </div>
</nav>
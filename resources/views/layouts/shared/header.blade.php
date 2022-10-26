<header class="header">
    <div class="header__inner">

        <!-- Brand -->
        <div class="header__brand">
            <div class="brand-wrap">

                <!-- Brand logo -->
                <a href="index.html" class="brand-img stretched-link">
                    <img src="assets/img/logo.svg" alt="Nifty Logo" class="Nifty logo" width="40" height="40">
                </a>

                <!-- Brand title -->
                <div class="brand-title">Nifty</div>

                <!-- You can also use IMG or SVG instead of a text element. -->

            </div>
        </div>
        <!-- End - Brand -->

        <div class="header__content">

            <!-- Content Header - Left Side: -->
            <div class="header__content-start">

                <!-- Navigation Toggler -->
                <button type="button" class="nav-toggler header__btn btn btn-icon btn-sm" aria-label="Nav Toggler">
                    <i class="demo-psi-view-list"></i>
                </button>

                <!-- Searchbox -->
                <div class="header-searchbox">

                    <!-- Searchbox toggler for small devices -->
                    <label for="header-search-input" class="header__btn d-md-none btn btn-icon rounded-pill shadow-none border-0 btn-sm" type="button">
                        <i class="demo-psi-magnifi-glass"></i>
                    </label>

                    <!-- Searchbox input -->
                    <form class="searchbox searchbox--auto-expand searchbox--hide-btn input-group">
                        <input id="header-search-input" class="searchbox__input form-control bg-transparent" type="search" placeholder="Type for search . . ." aria-label="Search">
                        <div class="searchbox__backdrop">
                            <button class="searchbox__btn header__btn btn btn-icon rounded shadow-none border-0 btn-sm" type="button" id="button-addon2">
                                <i class="demo-pli-magnifi-glass"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- End - Content Header - Left Side -->

            <!-- Content Header - Right Side: -->
            <div class="header__content-end">

                <!-- User dropdown -->
                <div class="dropdown">

                    <!-- Toggler -->
                    <button class="header__btn btn btn-icon btn-sm" type="button" data-bs-toggle="dropdown" aria-label="User dropdown" aria-expanded="false">
                        <i class="demo-psi-male"></i>
                    </button>

                    <!-- User dropdown menu -->
                    <div class="dropdown-menu dropdown-menu-end w-md-250px">

                        <!-- User dropdown header -->
                        <div class="d-flex align-items-center border-bottom px-3 py-2">
                            <div class="flex-shrink-0">
                                <img class="img-sm rounded-circle" src="assets/img/profile-photos/1.png" alt="Profile Picture" loading="lazy">
                            </div>
                            <div class="flex-grow-1 ms-3">
                                <h5 class="mb-0">{{ Auth()->user()->first_name ?? '' }}
                                    {{ Auth()->user()->last_name ?? '' }}
                                </h5>
                                <span class="text-muted fst-italic"><a href="https://themeon.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="5f3e3e2d3031003c373e293a251f3a273e322f333a713c3032">[email&#160;protected]</a></span>
                            </div>
                        </div>

                        <div class="row" style="display:flex; justify-content:center">

                            <div class="col-md-5">
                                <!-- User menu link -->
                                <div class="list-group list-group-borderless h-100 py-3">
                                    <a href="{{ route('logout') }}" class="list-group-item list-group-item-action" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="demo-pli-unlock fs-5 me-2" style="display:flex; justify-content:center"></i> Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End - User dropdown -->

            </div>
        </div>
    </div>
</header>
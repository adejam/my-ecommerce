<header class="header bb_block">
    <nav class="navbar d-flex flex-row pos-relative container-fluid">
        <section class="logo-section d-flex align-center">
            <a href="{{ url('/') }}" class="d-block pos-relative">
                <img src="{{ asset('images/tradehub.png') }}" class="logo-img" />
            </a>
        </section>
            <section class="search-bar-result-cont w-full pos-relative d-lg-block d-none">
                <form method="GET" action="#" class="search-bar-form d-flex w-full" id="search-bar-section">
                    @csrf
                    <div class="search-input-div d-flex flex-1">
                        <div class="search-div d-flex flex-1">
                            <input type="search" class="search-input b-none d-flex" name="search" id="search"
                                data-parent_to_target="search-bar-section" data-box="suggestion-section"
                                data-close_searchbox="close-suggestion-box" />
                        </div>
                        <button type="reset" class="clear-btn-div d-none align-stretch flex-row" id="close-suggestion-box"
                            data-parent_to_target="search-bar-section" data-box="suggestion-section">
                            <div class="clear-btn-inner d-flex pointer align-center b-none">
                                <span class="clear-btn-span h-full d-inline-block pos-relative">
                                    <svg focusable="false" class="d-block w-full h-full" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path
                                            d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                        </path>
                                    </svg>
                                </span>
                                <span class="clear-btn-border-left"></span>
                            </div>
                        </button>
                    </div>
                    <button class="search-btn b-none pointer" aria-label="Search">
                        <div class="search-btn-div m-auto">
                            <span class="search-btn-span d-inline-block pos-relative">
                                <svg focusable="false" class="d-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path
                                        d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                    </button>
                </form>
                <section class="suggestion-section d-none pos-absolute w-full ta-left" aria-label="suggestion section" id="suggestion-section">
                    <div class="suggestion-div d-flex flex-column overflow-hidden">
                        <div class="suggestion-divider"></div>
                        <ul class="suggestion-list flex-auto">
                            <li class="suggestion-list-item d-flex align-center">
                                <div class="suggestion-item-div d-flex flex-auto align-center">
                                    <div class="suggestion-div-option d-flex flex-auto flex-column">
                                        <span>
                                            <b>Iphone 12 pro</b>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="suggestion-list-item d-flex align-center">
                                <div class="suggestion-item-div d-flex flex-auto align-center">
                                    <div class="suggestion-div-option d-flex flex-auto flex-column">
                                        <span>
                                            <b>Iphone 12 pro</b>
                                        </span>
                                    </div>
                                </div>
                            </li>
                            <li class="suggestion-list-item d-flex align-center">
                                <div class="suggestion-item-div d-flex flex-auto align-center">
                                    <div class="suggestion-div-option d-flex flex-auto flex-column">
                                        <span>
                                            <b>Iphone 12 pro</b>
                                        </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </section>
           <div class="navbar-content d-flex w-full  mr-2">
                <ul class="navbar-list d-flex w-full justify-flex-end">
                    <li class="navbar-item d-lg-none d-flex justify-center">
                        <button type="button"
                            class="d-flex align-center pointer flex-column justify-center pos-relative tt-capitalize navbar-btn  ">
                            <div class="search-btn-div m-auto d-flex justify-center align-center">
                                <span class="search-btn-span d-inline-block pos-relative">
                                    <svg focusable="false" class="d-block" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                        </path>
                                    </svg>
                                </span>
                            </div>
                        </button>
                    </li>
                    <li class="navbar-item d-none d-sm-flex justify-center">
                        <a href="{{ url('/home') }}"
                            class="{{ request()->routeIs('home') ? 'navbar-link-active' : 'navbar-link-inactive' }} d-flex align-center pointer flex-column justify-center pos-relative tt-capitalize navbar-link ">
                            <div class="nav-link-logo-cont pos-relative d-inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" class="nav-link-logo" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z" />
                                </svg>
                            </div>
                            <span class="nav-link-text d-md-flex d-none tt-capitalize align-center">home</span>
                        </a>
                    </li>
                    <li class="navbar-item d-none d-sm-flex justify-center">
                        <a href="{{ url('/profile') }}"
                            class="{{ request()->routeIs('profile') ? 'navbar-link-active' : 'navbar-link-inactive' }} d-flex align-center pointer flex-column justify-center pos-relative tt-capitalize navbar-link  ">
                            <div class="nav-link-logo-cont pos-relative d-inline-block">
                                <span class="badge-cont ta-center bg-danger d-flex align-center justify-center pos-absolute">
                                    <span class="badge-text text-white d-block pos-relative">18</span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="nav-link-logo" viewBox="0 0 448 512">
                                    <path fill="currentColor"
                                        d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z" />
                                </svg>
                            </div>
                            <span class="nav-link-text d-md-flex d-none tt-capitalize align-center">notifications</span>
                        </a>
                    </li>
                    <li class="navbar-item d-flex justify-center">
                        <a href="{{ url('/profile') }}"
                            class="{{ request()->routeIs('profile') ? 'navbar-link-active' : 'navbar-link-inactive' }} d-flex align-center pointer flex-column justify-center pos-relative tt-capitalize navbar-link  ">
                            <div class="nav-link-logo-cont pos-relative d-inline-block">
                                <span class="badge-cont ta-center bg-danger d-flex align-center justify-center pos-absolute">
                                    <span class="badge-text text-white d-block pos-relative">18</span>
                                </span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="nav-link-logo" viewBox="0 0 576 512">
                                    <path fill="currentColor"
                                        d="M504.717 320H211.572l6.545 32h268.418c15.401 0 26.816 14.301 23.403 29.319l-5.517 24.276C523.112 414.668 536 433.828 536 456c0 31.202-25.519 56.444-56.824 55.994-29.823-.429-54.35-24.631-55.155-54.447-.44-16.287 6.085-31.049 16.803-41.548H231.176C241.553 426.165 248 440.326 248 456c0 31.813-26.528 57.431-58.67 55.938-28.54-1.325-51.751-24.385-53.251-52.917-1.158-22.034 10.436-41.455 28.051-51.586L93.883 64H24C10.745 64 0 53.255 0 40V24C0 10.745 10.745 0 24 0h102.529c11.401 0 21.228 8.021 23.513 19.19L159.208 64H551.99c15.401 0 26.816 14.301 23.403 29.319l-47.273 208C525.637 312.246 515.923 320 504.717 320zM403.029 192H360v-60c0-6.627-5.373-12-12-12h-24c-6.627 0-12 5.373-12 12v60h-43.029c-10.691 0-16.045 12.926-8.485 20.485l67.029 67.029c4.686 4.686 12.284 4.686 16.971 0l67.029-67.029c7.559-7.559 2.205-20.485-8.486-20.485z" />
                                </svg>
                            </div>
                            <span class="nav-link-text d-md-flex d-none tt-capitalize align-center">cart</span>
                        </a>
                    </li>
                    <li class="navbar-item d-md-flex d-none justify-center">
                        <button type="button"
                            class="{{ request()->routeIs('profile') ? 'navbar-link-active' : 'navbar-link-inactive' }} d-flex align-center pointer flex-column justify-center pos-relative tt-capitalize  navbar-btn ">
                            @if (Auth::user()->profile_photo_path)
                                <img width="24" src="#" height="24" alt="{{ Auth::user()->username }}" id="ember34"
                                    class="nav-link-photo overflow-hidden">

                            @else
                                <span
                                    class="nav-link-photo nav-photo-alt bg-primary text-white d-flex align-center justify-center">{{ strToUpper(Auth::user()->username[0]) }}</span>
                            @endif
                            <span class="nav-link-text d-md-flex d-none tt-capitalize align-center">me</span>
                        </button>
                    </li>
                    <li class="navbar-item d-lg-none d-flex justify-sm-center justify-flex-end">
                        <button type="button"
                            class="d-flex align-center pointer flex-column justify-center pos-relative tt-capitalize navbar-btn">
                            <div class="search-btn-div m-auto d-flex justify-center align-center">
                                <span class="search-btn-span d-inline-block pos-relative">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="d-block" viewBox="0 0 448 512">
                                        <path d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"/></svg>
                                </span>
                            </div>
                        </button>
                    </li>
                </ul>
            </div>
    </nav>
</header>

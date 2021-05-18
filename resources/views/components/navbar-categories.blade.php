
    <a href="#"
        class="d-flex category-nav p-1 w-full ta-left pointer align-center pos-relative tt-capitalize navbar-btn">
        <div class="nav-link-logo-cont pos-relative d-flex justify-space-between align-center w-full">
            <span class="d-flex align-center mr-1">
             <svg class="nav-link-logo" viewBox="0 0 24 24">
                <path fill="currentColor"
                    d="M6,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM6,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM12,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM16,6c0,1.1 0.9,2 2,2s2,-0.9 2,-2 -0.9,-2 -2,-2 -2,0.9 -2,2zM12,8c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,14c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2zM18,20c1.1,0 2,-0.9 2,-2s-0.9,-2 -2,-2 -2,0.9 -2,2 0.9,2 2,2z">
                </path>
            </svg>
            <span class="nav-link-text ">Categories</span>
            </span>
            
            <span class="d-flex align-center">
                <svg class="caret" viewBox="0 0 320 512">
                <path fill="currentColor"
                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z" />
            </svg>
            </span>
            
        </div>
    </a>
    <div class="dropdown w-full d-none d-lg-block" id="dropdown-{{ $dropdownId }}">
        <ul class="dropdown-menu pos-relative">
            <li class="{{ $dropdownType }}" id="id{{ $dropdownId }}" data-toggle="mega-dropdown-{{ $dropdownId }}" data-classname="d-none" data-isparentchild="yes">
                <a class="dropdown-item d-flex d-flex justify-space-between align-center w-full" href="#" data-target="category-modal">
                    <span class="d-flex align-center mr-1">
                    <svg viewBox="0 0 640 512" class="caret">
                        <path fill="currentColor"
                            d="M624 416H381.54c-.74 19.81-14.71 32-32.74 32H288c-18.69 0-33.02-17.47-32.77-32H16c-8.8 0-16 7.2-16 16v16c0 35.2 28.8 64 64 64h512c35.2 0 64-28.8 64-64v-16c0-8.8-7.2-16-16-16zM576 48c0-26.4-21.6-48-48-48H112C85.6 0 64 21.6 64 48v336h512V48zm-64 272H128V64h384v256z" />
                    </svg>
                    <span>Computers and Accessories</span>
                    </span>
                    <span class="d-flex align-center">
                    <svg viewBox="0 0 192 512" class="caret align-self-flex-end">
                        <path fill="currentColor"
                            d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" />
                    </svg>
                    </span> 
                </a>
                <div class="dropdown mega-dropdown w-full d-none d-lg-block" id="mega-dropdown-{{ $dropdownId }}">
                    <div class="dropdown-menu d-flex category-section h-full">
                        <div class=" d-flex flex-column h-full">
                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 d-flex flex-column mt-1 pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>

                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 d-flex flex-column pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>

                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 d-flex flex-column pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>

                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 d-flex flex-column pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>
                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 pt-1 d-flex flex-column bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>
                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 pt-1 d-flex flex-column bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>
                        </div>
                        {{-- /////////////////////////////////////////////////// --}}
                        <div class="d-flex flex-column h-full">
                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>

                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>
                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>
                            <article class="ml-1 p-1 category-div" aria-label="category-div">
                                <h5 class="dropdown-title ml-1">Fashion</h5>
                                <div class=" ml-1 mt-1 pt-1 bt_block">
                                    <a class="mega-dropdown-item py-1">Concealers & Color Correctors</a>
                                    <a class="mega-dropdown-item py-1">Herbs, Spices & Seasoning</a>
                                    <a class="mega-dropdown-item py-1">Champagne & Sparkling Wine</a>
                                </div>
                            </article>
                        </div>
                        {{-- ////////////////////////////////////////////////// --}}
                    </div>
                </div>
            </li>
            <li class="">
                <a class="dropdown-item " href="#">Electronics</a>
            </li>
            <li class="">
                <a class="dropdown-item dropdown-toggle" href="#">Electronics</a>
            </li>
            <li class="">
                <a class="dropdown-item dropdown-toggle" href="#">Electronics</a>
            </li>
        </ul>
    </div>
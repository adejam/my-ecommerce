<nav class="navbar bb_block">
    <section class="logo-section">
        <a href="{{ url('/') }}" class="logo-link">
            <img src="{{ asset('images/tradehub.png') }}" class="logo-img" />
        </a>
    </section>
    <ul class="navbar-list">
        <li class="navbar-item">
            <a href="{{ url('/home') }}"
                class="{{ request()->routeIs('home') ? 'navbar-link-active' : 'navbar-link-inactive' }} navbar-link ">Home</a>
        </li>
    </ul>
    <div class="search-bar-result-cont">
        <div class="search-bar-section" id="search-bar-section">
            <div class="search-input-div">
                <div class="search-div">
                    <input type="search" class="search-input" name="search" id="search"
                        data-parent_to_target="search-bar-section" data-box="suggestion-section" data-close_searchbox="close_searchbox"/>
                </div>
                <div class="clear-btn-div d-none" id="close_searchbox" data-parent_to_target="search-bar-section" data-box="suggestion-section">
                    <div class="clear-btn-inner">
                        <span class="clear-btn-span">
                            <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path
                                    d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z">
                                </path>
                            </svg>
                        </span>
                        <span class="clear-btn-border-left"></span>
                    </div>
                </div>
            </div>
            <button class="search-btn" aria-label="Search">
                <div class="search-btn-div">
                    <span class="search-btn-span">
                        <svg focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5 6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                            </path>
                        </svg>
                    </span>
                </div>
            </button>
        </div>
        <section class="suggestion-section d-none" aria-label="suggestion section" id="suggestion-section">
            <div class="suggestion-div">
                <div class="suggestion-divider"></div>
                <ul class="suggestion-list">
                    <li class="suggestion-list-item">
                        <div class="suggestion-item-div">
                            <div class="suggestion-div-option">
                                <span>
                                    <b>Iphone 12 pro</b>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </div>
</nav>

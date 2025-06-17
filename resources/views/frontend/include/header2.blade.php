  <header id="site-header" class="header-front-page style-1">
            <div id="site-header-inner" class="container">
              <div class="wrap-inner">
                <div id="site-logo" class="clearfix">
                  <div id="site-logo-inner">
                    <a
                      href="home-hero-slideshow.html"
                      title="Arelic Homes"
                      rel="home"
                      class="main-logo"
                    >
                      <img
                        src="{{asset('frontend/assets/img/logo.png')}}"
                        alt="Arelic Home"
                        data-width="180"
                        data-height="25"
                      />
                    </a>
                  </div>
                </div>
                <!-- /#site-logo -->

                <div class="mobile-button"><span></span></div>
                <!-- //mobile menu button -->

                <nav id="main-nav" class="main-nav">
                  <ul class="menu">
                    <li class="menu-item current-menu-item">
                      <a href="/">Home</a>
                    </li>
                    <li class="menu-item">
                      <a href="/projects">Projects</a>
                    </li>
                    <li class="menu-item menu-item-has-children">
                      <a href="/services">Services</a>
                      <ul class="sub-menu">
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','commercial') }}">Commercial Services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','residential') }}">Residential Services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','interior') }}">Interiors Services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','maintenance') }}">Maintenance Services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','renovation') }}">Renovations Services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','architectural') }}"
                            >Architectural Services</a
                          >
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','engineering') }}">Engineering Services</a>
                        </li>
                        <li class="menu-item">
                          <a href="{{ route('servicedetails','contractor') }}">Contractor Services</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item menu-item-has-children">
                      <a href="javascript:void(0);">Resources</a>
                      <ul class="sub-menu">
                        <li class="menu-item">
                          <a href="/galleries">Galleries</a>
                        </li>
                        <li class="menu-item">
                          <a href="/partners">Partners</a>
                        </li>
                        <li class="menu-item">
                          <a href="/about">About Us</a>
                        </li>
                      </ul>
                    </li>
                    <li class="menu-item">
                      <a href="/prices">Pricing</a>
                    </li>
                    <li class="menu-item">
                      <a href="/contacts">Contact</a>
                    </li>
                  </ul>
                </nav>
                <!-- /#main-nav -->
              </div>
            </div>
            <!-- /#site-header-inner -->
          </header>
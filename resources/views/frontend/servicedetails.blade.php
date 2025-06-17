@extends('frontend.include.app3')
@section('content')

        <div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">SERVICE DETAILS</h1>
              </div>
              <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                  <div class="breadcrumb-trail">
                    <a
                      href="home.html"
                      title="Home"
                      rel="home"
                      class="trail-begin"
                      >Home</a
                    >
                    <span class="sep">/</span>
                    <span class="trail-end">Service Detail</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="main-content" class="site-main clearfix ">
          <div id="content-wrap" class="container">
            <div id="site-content" class="site-content clearfix">
              <div id="inner-content" class="inner-content-wrap">
                <div class="row">
                  <div class="col-md-12">
                    <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                     <h3 class="line-height-normal margin-bottom-10">WHAT IS INCLUDED</h3>
                    <div class="wprt-lines style-1 custom-3">
                      <div class="line-1"></div>
                      <div class="line-2"></div>
                    </div>

                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>
                        <p class="margin-bottom-0">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Quisque nec erat erat. Integer blandit nulla quis
                        fermentum hendrerit. Vestibulum eu libero volutpat, portas
                        quam acc, tempus sem. Donec sodales quam id lorem
                        lobortis, vitae interdum nisl vehicula. Pellentesque
                        habitant morbi tristique senectus et netus et malesuada
                        fames ac turpis egestas. Etiam suscipit, elit quis
                        facilisis dictum, diam justo volutpat dui. Cras id justo
                        eget sapien scelerisque lacinia non a eros.
                        </p>

                    <div class="wprt-spacer" data-desktop="35" data-mobi="35" data-smobi="35"></div>

                    <div class="wprt-toggle style-1">
                      <h3 class="toggle-title">
                        We use technology to do the job more quickly
                      </h3>
                      <div class="toggle-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In a metus pellentesque, scelerisque ex sed, volutpat
                        nisi. Curabitur tortor mi, eleifend ornare lobortis non.
                        Nulla porta purus quis iaculis ultrices. Proin aliquam
                        sem at nibh hendrerit sagittis. Nullam ornare odio eu
                        lacus tincidunt malesuada. Sed eu vestibulum elit.
                        Curabitur tortor mi, eleifend ornare.
                      </div>
                    </div>

                    <div class="wprt-toggle active style-1">
                      <h3 class="toggle-title">
                        Quality construction continues after the project
                      </h3>
                      <div class="toggle-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In a metus pellentesque, scelerisque ex sed, volutpat
                        nisi. Curabitur tortor mi, eleifend ornare lobortis non.
                        Nulla porta purus quis iaculis ultrices. Proin aliquam
                        sem at nibh hendrerit sagittis. Nullam ornare odio eu
                        lacus tincidunt malesuada. Sed eu vestibulum elit.
                        Curabitur tortor mi, eleifend ornare.
                      </div>
                    </div>

                    <div class="wprt-toggle style-1">
                      <h3 class="toggle-title">
                        Employees are continually trained on safety issues
                      </h3>
                      <div class="toggle-content">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        In a metus pellentesque, scelerisque ex sed, volutpat
                        nisi. Curabitur tortor mi, eleifend ornare lobortis non.
                        Nulla porta purus quis iaculis ultrices. Proin aliquam
                        sem at nibh hendrerit sagittis. Nullam ornare odio eu
                        lacus tincidunt malesuada. Sed eu vestibulum elit.
                        Curabitur tortor mi, eleifend ornare.
                      </div>
                    </div>

                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                  </div>
                  <!-- /.col-md-12 -->

                  <div class="col-md-12">
                    <h3 class="line-height-normal margin-bottom-10">
                      @if($service->name === 'commercial')
                                        Commercial Service
                                    @elseif($service->name === 'residential')
                                        Residential Service
                                    @elseif($service->name === 'interior')
                                        Interior Service
                                    @elseif($service->name === 'maintenance')
                                        Maintenance Service
                                    @elseif($service->name === 'renovation')
                                        Renovation Service
                                    @elseif($service->name === 'architectural')
                                        Architectural Service
                                    @elseif($service->name === 'engineering')
                                        Engineering Service
                                    @elseif($service->name === 'contractor')
                                        Contractor Service
                                    @else
                                        {{ $service->name }}
                                    @endif
                    </h3>
                    <div class="wprt-lines style-1 custom-3">
                      <div class="line-1"></div>
                      <div class="line-2"></div>
                    </div>

                    <div
                      class="wprt-spacer"
                      data-desktop="25"
                      data-mobi="25"
                      data-smobi="25"
                    ></div>

                    <p class="margin-bottom-0">
                      {!! $service->details !!}
                    </p>

                    <div
                      class="wprt-spacer"
                      data-desktop="30"
                      data-mobi="30"
                      data-smobi="30"
                    ></div>

                    <div
                      class="wprt-galleries-grid arrow-style-1 has-arrows arrow60 arrow-position-2"
                      data-layout="slider"
                      data-column="2"
                      data-column2="2"
                      data-column3="1"
                      data-column4="1"
                      data-gaph="10"
                      data-gapv="10"
                    >
                      <div id="images-wrap" class="cbp">
                        <div class="cbp-item">
                          <div class="item-wrap">
                            <a class="zoom" href="{{ asset('storage/' . $service->image) }}"
                              ><i class="fa fa-arrows-alt"></i
                            ></a>
                            <img src="{{ asset('storage/' . $service->image) }}" alt="image" />
                          </div>
                        </div>
                        <!--/.cbp-item -->

                        <div class="cbp-item">
                          <div class="item-wrap">
                            <a class="zoom" href="{{ asset('storage/' . $service->pconimage) }}"
                              ><i class="fa fa-arrows-alt"></i
                            ></a>
                            <img src="{{ asset('storage/' . $service->pconimage) }}" alt="image" />
                          </div>
                        </div>
                        <!--/.cbp-item -->

                        <div class="cbp-item">
                          <div class="item-wrap">
                            <a class="zoom" href="{{ asset('storage/' . $service->postconimage) }}"
                              ><i class="fa fa-arrows-alt"></i
                            ></a>
                            <img src="{{ asset('storage/' . $service->postconimage) }}" alt="image" />
                          </div>
                        </div>
                        <!--/.cbp-item -->
                      </div>
                      <!-- /#images-wrap -->
                    </div>
                    <!-- /.wprt-galleries-grid -->
                  </div>
                  <!-- /.col-md-12 -->

                  <div class="col-md-6">
                    <div
                      class="wprt-spacer"
                      data-desktop="60"
                      data-mobi="40"
                      data-smobi="40"
                    ></div>

                    <h3 class="line-height-normal margin-bottom-10">
                      PRECONSTRUCTION
                    </h3>
                    <div class="wprt-lines style-1 custom-3">
                      <div class="line-1"></div>
                      <div class="line-2"></div>
                    </div>

                    <div
                      class="wprt-spacer"
                      data-desktop="25"
                      data-mobi="25"
                      data-smobi="25"
                    ></div>

                    <p class="margin-bottom-25">
                     {!! $service->pcondetails !!}
                    </p>
                  </div>
                  <!-- /.col-md-6 -->

                  <div class="col-md-6">
                    <div
                      class="wprt-spacer"
                      data-desktop="60"
                      data-mobi="40"
                      data-smobi="40"
                    ></div>

                    <h3 class="line-height-normal margin-bottom-10">
                      AFTER THE PROJECT
                    </h3>
                    <div class="wprt-lines style-1 custom-3">
                      <div class="line-1"></div>
                      <div class="line-2"></div>
                    </div>

                    <div
                      class="wprt-spacer"
                      data-desktop="25"
                      data-mobi="25"
                      data-smobi="25"
                    ></div>

                    <p>
                     {!! $service->postcondetails !!}
                    </p>
                  </div>
                  <!-- /.col-md-6 -->

                  <div class="col-md-12">
                    <div
                      class="wprt-spacer"
                      data-desktop="80"
                      data-mobi="40"
                      data-smobi="40"
                    ></div>
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.inner-content-wrap -->
            </div>
            <!-- /#site-content -->

            <div id="sidebar">
              <div
                class="wprt-spacer"
                data-desktop="80"
                data-mobi="40"
                data-smobi="40"
              ></div>

              <div id="inner-sidebar" class="inner-content-wrap">
                <div class="widget widget_nav_menu">
                  <div class="menu-service-menu-container">
                    <ul id="menu-service-menu" class="menu">
                    @foreach($services as $service)
                      <li class="menu-item {{ $currentService->name === $service->name ? 'current_page_item' : '' }}">
                        <a href="{{ route('servicedetails',$service->name) }}"> @if($service->name === 'commercial')
                                        COMMERCIAL SERVICE
                                    @elseif($service->name === 'residential')
                                        RESIDENTIAL SERVICE
                                    @elseif($service->name === 'interior')
                                        INTERIOR SERVICE
                                    @elseif($service->name === 'maintenance')
                                        MAINTENANCE SERVICE
                                    @elseif($service->name === 'renovation')
                                        RENOVATION SERVICE
                                    @elseif($service->name === 'architectural')
                                        ARCHITECTURAL SERVICE
                                    @elseif($service->name === 'engineering')
                                        ENGINEERING SERVICE
                                    @elseif($service->name === 'contractor')
                                        CONTRACTOR SERVICE
                                    @else
                                        {{ $service->name }}
                                    @endif</a>
                      </li>
                      
                      @endforeach
                    </ul>
                  </div>
                </div>
                <!-- /.widget_nav_menu -->
              </div>
              <!-- /#inner-sidebar -->
            </div>
            <!-- /#sidebar -->
          </div>
          <!-- /#content-wrap -->
        </div>
@endsection
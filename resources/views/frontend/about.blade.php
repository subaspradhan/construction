@extends('frontend.include.app2')
@section('content')
<div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">ABOUT US</h1>
              </div>
              <div id="breadcrumbs">
                <div class="breadcrumbs-inner">
                  <div class="breadcrumb-trail">
                    <a
                      href="/"
                      title="Home"
                      rel="home"
                      class="trail-begin"
                      >Home</a
                    >
                    <span class="sep">/</span>
                    <span class="trail-end">About Us</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div id="main-content" class="site-main clearfix">
          <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
              <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                  <!-- GALLERY -->
                  <section class="wprt-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="100"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                          <h2 class="text-center margin-bottom-20">
                            OUR HISTORY & FACTS
                          </h2>
                          <div class="wprt-lines style-2 custom-1">
                            <div class="line-1"></div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="36"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>

                          <p class="wprt-subtitle">
                            Founded with a vision to innovate and inspire, our
                            journey began with a commitment to excellence and a
                            passion for delivering meaningful solutions. Over
                            the years, we’ve grown through dedication,
                            collaboration, and a relentless drive to exceed
                            expectations. Today, we proudly serve our community
                            and partners with integrity, creativity, and a
                            continued focus on impact.
                          </p>

                          <div
                            class="wprt-spacer"
                            data-desktop="40"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-6">
                          <h3 class="line-height-normal margin-bottom-10">
                            WHY CHOOSE US
                          </h3>
                          <div class="wprt-lines style-1 custom-3">
                            <div class="line-1"></div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="25"
                            data-mobi="25"
                            data-smobi="25"
                          ></div>

                          <p class="margin-bottom-25">
                            At the heart of our mission is a commitment to
                            excellence, reliability, and customer satisfaction.
                            We bring years of experience, a highly skilled team,
                            and a passion for delivering top-quality results
                            tailored to your needs. Our focus on innovation,
                            transparency, and personalized service ensures that
                            every client receives unmatched attention and value.
                            We pride ourselves on building long-term
                            relationships grounded in trust and performance.
                          </p>

                          <p>
                            Whether you're looking for expert guidance,
                            efficient solutions, or a partner who genuinely
                            cares about your success, we're here to make a
                            difference—every step of the way.
                          </p>

                          <a
                            class="wprt-button small rounded-3px"
                            href="contact.html"
                            >GET A QOUTE</a
                          >

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-6">
                          <div
                            class="wprt-galleries galleries w-570px"
                            data-width="135"
                            data-margin="10"
                          >
                            <div id="wprt-slider" class="flexslider">
                              <ul class="slides">
                                @foreach($gallery as $item)
                                <li class="flex-active-slide">
                                  <a
                                    class="zoom"
                                    href="{{ asset('storage/' . $item->image) }}"
                                    ><i class="fa fa-arrows-alt"></i
                                  ></a>
                                  <img
                                    src="{{ asset('storage/' . $item->image) }}"
                                    alt="image"
                                  />
                                </li>
                                @endforeach
                              </ul>
                            </div>

                            <div id="wprt-carousel" class="flexslider">
                              <ul class="slides">
                                @foreach($gallery as $items)
                                <li>
                                  <img
                                    src="{{ asset('storage/' . $items->image) }}"
                                    alt="image"
                                  />
                                </li>
                                @endforeach
                               
                              </ul>
                            </div>
                          </div>
                        </div>
                        <!-- /.col-md-6 -->

                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="110"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>

                  <!-- FACTS -->
                  <section class="wprt-section about-page parallax">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="120"
                            data-mobi="60"
                            data-smobi="60"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-3">
                          <div class="wprt-counter text-center accent-type">
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="240"
                              data-in-viewport="yes"
                            >
                              240
                            </div>
                            <div class="text">PROJECT COMPLETED</div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-3 -->

                        <div class="col-md-3">
                          <div
                            class="wprt-counter text-center accent-type has-plus"
                          >
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="450"
                              data-in-viewport="yes"
                            >
                              450
                            </div>
                            <div class="text">HAPPY CLIENTS</div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-3 -->

                        <div class="col-md-3">
                          <div class="wprt-counter text-center accent-type">
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="984"
                              data-in-viewport="yes"
                            >
                              984
                            </div>
                            <div class="text">WORKERS EMPLOYED</div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-3 -->

                        <div class="col-md-3">
                          <div class="wprt-counter text-center accent-type">
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="96"
                              data-in-viewport="yes"
                            >
                              96
                            </div>
                            <div class="text">AWARDS WON</div>
                          </div>
                        </div>
                        <!-- /.col-md-3 -->

                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="120"
                            data-mobi="60"
                            data-smobi="60"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>

                  <!-- TEAM -->
                 
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@extends('frontend.include.app2')
@section('content')
<div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">GALLERIES</h1>
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
                    <span class="trail-end">Galleries</span>
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
                  <section class="wprt-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="50"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>

                          <h3>GALLERY IMAGES</h3>
                          <div class="wprt-lines style-1 custom-3">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                          </div>
                          <div
                            class="wprt-spacer"
                            data-desktop="30"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>

                          <div
                            class="wprt-galleries-grid"
                            data-layout="grid"
                            data-column="3"
                            data-column2="2"
                            data-column3="2"
                            data-column4="1"
                            data-gaph="10"
                            data-gapv="10"
                          >
                            <div id="images-wrap" class="cbp">
                                @foreach($gallery as $gallery)
                              <div class="cbp-item">
                                <div class="item-wrap">
                                  <a
                                    class="zoom"
                                    href="{{ asset('storage/' . $gallery->image) }}"
                                    ><i class="fa fa-arrows-alt"></i
                                  ></a>
                                  <img
                                    src="{{ asset('storage/' . $gallery->image) }}"
                                    alt="image"
                                  />
                                </div>
                              </div>
                              @endforeach
                              <!--/.cbp-item -->

                            </div>
                            <!-- /#images-wrap -->
                          </div>
                          <!--/.wprt-galleries-grid -->

                          <div
                            class="wprt-spacer"
                            data-desktop="70"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                        </div>
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
@extends('frontend.include.app2')
@section('content')
<div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">PARTNERS</h1>
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
                    <span class="trail-end">Partners</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
          <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
              <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                  <!-- TOP - SIMPLE -->
                  <section class="wprt-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="70"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>

                          <h3 class="text-center margin-bottom-10">
                            Banking Partners
                          </h3>
                          <div class="wprt-lines style-2 custom-1">
                            <div class="line-1"></div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="43"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->
                        @foreach($partnerbanking as $partnerbanking)
                        <div class="col-md-3">
                          <div class="wprt-icon-box">
                            <div class="icon-wrap font-size-60">
                              <span
                                ><img src="{{ asset('storage/' . $partnerbanking->image) }}" alt=""
                              /></span>
                            </div>
                            <h3 class="dd-title font-size-18">{{$partnerbanking->name}}</h3>
                            <p>
                              {!! $partnerbanking->details !!}
                            </p>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        @endforeach
                        <!-- /.col-md-3 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>
                  <!-- RIGHT - GREY BACKGROUND -->
                  <section class="wprt-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="70"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                          <h3 class="text-center margin-bottom-10">
                            Construction Partners
                          </h3>
                          <div class="wprt-lines style-2 custom-1">
                            <div class="line-1"></div>
                          </div>
                          <div
                            class="wprt-spacer"
                            data-desktop="43"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->
                        @foreach($partnerconstruction as $partnerconstruction)
                        <div class="col-md-4">
                          <div class="wprt-icon-box">
                            <div class="icon-wrap font-size-60">
                              <span
                                ><img src="{{ asset('storage/' . $partnerconstruction->image) }}" alt=""
                              /></span>
                            </div>
                            <div class="content-wrap">
                              <h3 class="dd-title font-size-18">
                                {{$partnerconstruction->name}}
                              </h3>
                              <p>
                               {!! $partnerconstruction->details !!}
                              </p>
                            </div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        @endforeach
                        <!-- /.col-md-4 -->

                        

                        
                        <!-- /.col-md-4 -->

                        <div class="col-md-12">
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
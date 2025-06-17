  
@extends('frontend.include.app2')
@section('content')
  <div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">PROJECT DETAILS</h1>
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
                    <a
                      href="/projects"
                      title="Projects"
                      rel="projects"
                      class="trail-begin"
                      >Projects</a
                    >
                    <span class="sep">/</span>
                    <span class="trail-end">Project Details</span>
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
                            data-desktop="80"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-8">
                          <div
                            class="wprt-galleries galleries w-770px"
                            data-width="142"
                            data-margin="15"
                          >
                            <div id="wprt-slider" class="flexslider">
                              <ul class="slides">
                                <li class="flex-active-slide">
                                  <a
                                    class="zoom"
                                    href="{{ asset('storage/' . $project->image) }}"
                                    ><i class="fa fa-arrows-alt"></i
                                  ></a>
                                  <img
                                    src="{{ asset('storage/' . $project->image) }}"
                                    alt="image"
                                  />
                                </li>
                              </ul>
                            </div>

                          </div>
                        </div>
                        <!-- /.col-md-8 -->

                        <div class="col-md-4">
                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>

                          <h4 class="line-height-normal margin-bottom-10">
                            {{$project->name}}
                          </h4>
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
                           {!! $project->details !!}
                          </p>

                          <div class="wprt-lines style-1 custom-4">
                            <div class="line-1"></div>
                          </div>

                          <ul
                            class="wprt-list style-2 accent-color margin-top-30 margin-bottom-30"
                          >
                            <li>
                              <strong>Client:</strong> {{$project->cname}}
                            </li>
                            <li>
                              <strong>Architect:</strong> {{$project->aname}}
                            </li>
                            <li>
                              <strong>Builder:</strong> {{$project->bname}}
                            </li>
                            <li><strong>Budget:</strong> {{$project->price}}</li>
                          </ul>

                          <a href="#" class="wprt-button small rounded-3px"
                            >CONTACT US</a
                          >
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="80"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection
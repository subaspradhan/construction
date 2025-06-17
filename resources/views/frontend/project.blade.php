@extends('frontend.include.app2')
@section('content')
<style>
    /* Normal page buttons */
.page-link {
    color: black;
    background-color:rgb(230, 233, 236);
    border: 1px solidrgb(196, 198, 201);
}

/* On hover */
.page-link:hover {
    color: #fff;
    background-color: #ffc925;
    border-color: #ffc925;
}

/* Active page button */
.page-item.active .page-link {
    color: #fff;
    background-color: #ffc925;
    border-color: #ffc925;
}

/* Disabled button */
.page-item.disabled .page-link {
    background-color: #e9ecef;
    color: #6c757d;
}
</style>

<div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">PROJECTS</h1>
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
                    <span class="trail-end">Projects</span>
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
                  <!-- WORKS -->
                  <section class="wprt-section">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="70"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>

                          <h2 class="text-center font-size-28 margin-bottom-10">
                            PROJECTS
                          </h2>
                          <div class="wprt-lines style-2 custom-1">
                            <div class="line-1"></div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="25"
                            data-mobi="25"
                            data-smobi="25"
                          ></div>

                          <p class="wprt-subtitle">
                            We don’t just complete projects — we bring visions
                            to life. From concept to construction, every project
                            we undertake is guided by precision, passion, and
                            purpose.
                          </p>

                          <div
                            class="wprt-spacer"
                            data-desktop="43"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-12">
                          <div
                            class="wprt-project"
                            data-layout="grid"
                            data-column="4"
                            data-column2="3"
                            data-column3="2"
                            data-column4="1"
                            data-gaph="15"
                            data-gapv="15"
                          >

                            <div id="projects" class="cbp">
                                @foreach($project as $projects)
                                <div class="cbp-item architecture interior workspace">
                                    <div class="project-item">
                                    <div class="inner">
                                        <div class="grid">
                                        <figure class="effect-zoe">
                                            <img
                                            src="{{ asset('storage/' . $projects->image) }}"
                                            alt="image"
                                            />
                                            <figcaption>
                                            <div>
                                                <h2>
                                                <a
                                                    target="_blank"
                                                    href="{{ route('projectdetails',$projects->id) }}"
                                                    >LUXURY BUILDINGS</a
                                                >
                                                </h2>
                                                <p>Construction</p>
                                            </div>
                                            </figcaption>
                                        </figure>
                                        </div>

                                        <a
                                        class="project-zoom cbp-lightbox"
                                        href="{{ asset('storage/' . $projects->image) }}"
                                        data-title="LUXURY BUILDINGS"
                                        >
                                        <i class="fa fa-arrows-alt"></i>
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            <!-- /#projects -->
                          </div>
                          <!--/.wprt-project -->
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-12">
                            <div class="wprt-pagination clearfix">
                                {{ $project->links('pagination::bootstrap-5') }}
                            </div>

                            <div class="wprt-spacer" data-desktop="80" data-mobi="40" data-smobi="40"></div>
                        </div>
                        <!-- /.col-md-12 -->
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
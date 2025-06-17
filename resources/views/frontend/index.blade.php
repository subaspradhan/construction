@extends('frontend.include.app')
@section('content')
<div class="rev_slider_wrapper fullwidthbanner-container">
          <div id="rev-slider1" class="rev_slider fullwidthabanner">
            <ul>
                @foreach($banner as $banner)
              <li
                data-transition="fade"
                data-slotamount="default"
                data-easein="Power3.easeInOut"
                data-easeout="Power3.easeInOut"
                data-masterspeed="1500"
                data-thumb="{{ asset('storage/' . $banner->image) }}"
                data-rotate="0"
                data-saveperformance="off"
                data-title="CONSTRUCTION"
              >
                <!-- Main Image -->
                <img
                  src="{{ asset('storage/' . $banner->image) }}"
                  alt=""
                  data-bgposition="center center"
                  data-bgfit="cover"
                  data-bgrepeat="no-repeat"
                  data-no-retina
                />
                <!-- Layers -->
                <div
                  class="tp-caption tp-resizeme text-white font-family-heading text-shadow font-weight-500"
                  data-x="['center','center','center','center']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']"
                  data-voffset="['-50','-40','-30','-20']"
                  data-fontsize="['60','50','40','30']"
                  data-lineheight="['70','60','50','40']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="z:0;rX:0deg;rY:0;rZ:0;sX:1.5;sY:1.5;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                >
                  {{ strtoupper($banner->title) }}
                </div>
                <div
                  class="tp-caption tp-resizeme text-white text-shadow letter-spacing-7px"
                  data-x="['center','center','center','center']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']"
                  data-voffset="['20','20','20','20']"
                  data-fontsize="['28','24','20','18']"
                  data-lineheight="['38','34','30','28']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;"
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;"
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                  data-start="1000"
                  data-splitin="none"
                  data-splitout="none"
                  data-responsive_offset="on"
                  data-lasttriggerstate="reset"
                >
                  {{$banner->sub_title}}
                </div>
                <div
                  class="tp-caption"
                  data-x="['center','center','center','center']"
                  data-hoffset="['0','0','0','0']"
                  data-y="['middle','middle','middle','middle']"
                  data-voffset="['120','110','100','90']"
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);cursor:pointer;"
                  data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;"
                  data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;"
                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
                  data-start="1250"
                  data-splitin="none"
                  data-splitout="none"
                  data-actions='[{"event":"click","action":"scrollbelow","offset":"20px"}]'
                  data-responsive="on"
                >
                  <a href="/contacts" class="wprt-button big rounded-3px"
                    >CONTACT US</a
                  >
                </div>
              </li>
              @endforeach
              <!-- End Slide -->
            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
          </div>
        </div>

        <!-- Main Content -->
        <div id="main-content" class="site-main clearfix">
          <div id="content-wrap">
            <div id="site-content" class="site-content clearfix">
              <div id="inner-content" class="inner-content-wrap">
                <div class="content">
                  <!-- Intro -->
                  <section class="wprt-section intro">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div class="wprt-spacer" data-desktop="110" data-mobi="40" data-smobi="40"></div>
                        </div>
                        @foreach($service as $service)
                        <div class="col-md-4">
                          <div class="service-item clearfix text-center">
                            <div class="thumb">
                              <img src="{{ asset('storage/' . $service->image) }}" alt="image"/>
                            </div>
                            <div class="service-item-wrap">
                              <h3 class="title font-size-18">
                                <a href="{{ route('servicedetails',$service->name) }}">
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
                                </a>
                              </h3>
                              <p class="desc">
                                {!! \Illuminate\Support\Str::words(strip_tags($service->details), 10, '...') !!}

                              </p>
                              <div class="link">
                                <a
                                  href="{{ route('servicedetails',$service->name) }}"
                                  class="wprt-button small rounded-3px"
                                  >READ MORE</a
                                >
                              </div>
                            </div>
                          </div>
                        </div>

                        @endforeach

                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="110"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <!-- FACTS -->
                  <section id="facts" class="wprt-section parallax">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="100"
                            data-mobi="60"
                            data-smobi="60"
                          ></div>
                        </div>

                        <div class="col-md-3">
                          <div class="wprt-counter text-center accent-type">
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="{{$award->projects}}"
                              data-in-viewport="yes"
                            >
                              {{$award->projects}}
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

                        <div class="col-md-3">
                          <div
                            class="wprt-counter text-center accent-type"
                          >
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="{{$award->client}}"
                              data-in-viewport="yes"
                            >
                              {{$award->client}}
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

                        <div class="col-md-3">
                          <div class="wprt-counter text-center accent-type">
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="{{$award->worker}}"
                              data-in-viewport="yes"
                            >
                              {{$award->worker}}
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

                        <div class="col-md-3">
                          <div class="wprt-counter text-center accent-type">
                            <div
                              class="number"
                              data-speed="5000"
                              data-to="{{$award->award}}"
                              data-in-viewport="yes"
                            >
                              {{$award->award}}
                            </div>
                            <div class="text">AWARDS WON</div>
                          </div>
                        </div>

                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="103"
                            data-mobi="60"
                            data-smobi="60"
                          ></div>
                        </div>
                      </div>
                    </div>
                  </section>

                  <!-- WORKS -->
                  <section id="works" class="wprt-section">
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
                            RECENT WORKS
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
                        </div>
                      </div>
                    </div>

                    <div
                      class="wprt-project"
                      data-layout="grid"
                      data-column="4"
                      data-column2="3"
                      data-column3="2"
                      data-column4="1"
                      data-gaph="0"
                      data-gapv="0"
                    >
                      <!-- <div id="project-filter">
                        <div data-filter="*" class="cbp-filter-item">
                          <span>All</span>
                        </div>
                        <div data-filter=".architecture" class="cbp-filter-item">
                          <span>Architecture</span>
                        </div>
                        <div data-filter=".building" class="cbp-filter-item">
                          <span>Residential</span>
                        </div>
                        <div data-filter=".garden" class="cbp-filter-item">
                          <span>Commercial</span>
                        </div>
                        <div data-filter=".interior" class="cbp-filter-item">
                          <span>Interior</span>
                        </div>
                        <div data-filter=".office" class="cbp-filter-item">
                          <span>Office</span>
                        </div>
                      </div> -->
                      <!-- /#project-filter -->

                      <div id="projects" class="cbp">
                        @foreach($gallery as $gallery)
                        <div class="cbp-item architecture interior workspace">
                          <div class="project-item">
                            <div class="inner">
                              <div class="grid">
                                <figure class="effect-zoe">
                                    
                                  <img
                                    src="{{ asset('storage/' . $gallery->image) }}"
                                    alt="image"
                                  />
                                  <figcaption>
                                    <div>
                                      <h2>
                                        <a
                                          target="_blank"
                                          href="javascript:void(0);"
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
                                href="{{ asset('storage/' . $gallery->image) }}"
                                data-title="LUXURY BUILDINGS"
                              >
                                <i class="fa fa-arrows-alt"></i>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!--/.cbp-item -->
                        @endforeach
                      </div>
                      <!-- /#projects -->
                    </div>
                    <!--/.wprt-project -->
                  </section>

                  <!-- OFFER -->
                  <section id="features" class="wprt-section">
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
                            WHAT WE OFFER
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
                            We build with skill, renew with care — solid
                            foundations, inspired spaces, perfect structures.
                          </p>
                          <div
                            class="wprt-spacer"
                            data-desktop="40"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-2">
                          <div class="wprt-icon-text">
                            <div class="icon">
                              <i class="icon-o-helmet"></i>
                            </div>
                            <h3><a href="{{ route('servicedetails','commercial') }}">CONSTRUCTION</a></h3>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>

                        <div class="col-md-2">
                          <div class="wprt-icon-text">
                            <div class="icon">
                              <i class="icon-o-ruler-2"></i>
                            </div>
                            <h3><a href="{{ route('servicedetails','interior') }}">INTERIORS</a></h3>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>

                        <div class="col-md-2">
                          <div class="wprt-icon-text">
                            <div class="icon">
                              <i class="icon-o-paint-roller"></i>
                            </div>
                            <h3><a href="{{ route('servicedetails','renovation') }}">RENOVATION</a></h3>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>

                        <div class="col-md-2">
                          <div class="wprt-icon-text">
                            <div class="icon">
                              <i class="icon-o-drawing-1"></i>
                            </div>
                            <h3><a href="{{ route('servicedetails','architectural') }}">ARCHITECTURE</a></h3>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>

                        <div class="col-md-2">
                          <div class="wprt-icon-text">
                            <div class="icon">
                              <i class="icon-o-light-bulb-1"></i>
                            </div>
                            <h3><a href="{{ route('servicedetails','engineering') }}">ENGINEERING</a></h3>
                          </div>
                        </div>

                        <div class="col-md-2">
                          <div class="wprt-icon-text">
                            <div class="icon">
                              <i class="icon-o-tools-1"></i>
                            </div>
                            <h3><a href="{{ route('servicedetails','contractor') }}">CONTRACTOR</a></h3>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>

                        <div class="col-md-4">
                          <div
                            class="wprt-spacer"
                            data-desktop="118"
                            data-mobi="80"
                            data-smobi="50"
                          ></div>

                          <div
                            class="wprt-icon-box accent-background rounded icon-effect-2 icon-left"
                          >
                            <div class="icon-wrap font-size-45">
                              <span class="dd-icon icon-drill-2"></span>
                            </div>
                            <div class="content-wrap">
                              <h3 class="dd-title font-size-18">
                                <a href="#">Prepair Services</a>
                              </h3>
                              <p>
                                At Prepair Services, we believe in delivering
                                precision, reliability, and results. we bring
                                structure and timing together to meet your needs
                                seamlessly.
                              </p>
                            </div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="43"
                            data-mobi="30"
                            data-smobi="20"
                          ></div>

                          <div
                            class="wprt-icon-box accent-background rounded icon-effect-2 icon-left"
                          >
                            <div class="icon-wrap font-size-35">
                              <span class="dd-icon icon-tap-1"></span>
                            </div>
                            <div class="content-wrap">
                              <h3 class="dd-title font-size-18">
                                <a href="#">Creative Plumbing</a>
                              </h3>
                              <p>
                                Innovative plumbing solutions with reliable
                                service. From quick fixes to smart upgrades — we
                                keep things flowing smoothly.
                              </p>
                            </div>
                          </div>
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-4">
                          <div
                            class="wprt-spacer"
                            data-desktop="118"
                            data-mobi="30"
                            data-smobi="20"
                          ></div>

                          <div
                            class="wprt-icon-box accent-background rounded icon-effect-2 icon-left"
                          >
                            <div class="icon-wrap font-size-35">
                              <span class="dd-icon icon-paint-roller-1"></span>
                            </div>
                            <div class="content-wrap">
                              <h3 class="dd-title font-size-18">
                                <a href="#">Wall Painting</a>
                              </h3>
                              <p>
                                Give your space a fresh look with our
                                professional wall painting. Clean work, quality
                                finish, and colors that last — all delivered on
                                time.
                              </p>
                            </div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="43"
                            data-mobi="30"
                            data-smobi="20"
                          ></div>

                          <div
                            class="wprt-icon-box accent-background rounded icon-effect-2 icon-left"
                          >
                            <div class="icon-wrap font-size-35">
                              <span class="dd-icon icon-roof"></span>
                            </div>
                            <div class="content-wrap">
                              <h3 class="dd-title font-size-18">
                                <a href="#">Metal Roofing</a>
                              </h3>
                              <p>
                                Durable, weather-resistant, and built to last.
                                Our metal roofing solutions offer strength,
                                style, and long-term protection.
                              </p>
                            </div>
                          </div>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="30"
                            data-smobi="20"
                          ></div>
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-4">
                          <img src="{{asset('frontend/assets/img/man.png')}}" alt="image" />
                        </div>
                        <!-- /.col-md-4 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>

                  <!-- PROMOTION -->
                  <section id="promotion" class="wprt-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-8">
                          <div
                            class="wprt-spacer"
                            data-desktop="8"
                            data-mobi="0"
                            data-smobi="0"
                          ></div>
                          <h2
                            class="text-white text-center-mobile font-size-20 margin-bottom-0"
                          >
                            Contractors & Construction Managers Since 2023
                          </h2>
                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="20"
                            data-smobi="20"
                          ></div>
                        </div>
                        <!-- /.col-md-8 -->

                        <div class="col-md-4">
                          <div class="text-right text-center-mobile">
                            <a
                              href="/contacts"
                              class="wprt-button white rounded-3px"
                              >GET A QUOTE</a
                            >
                          </div>
                        </div>
                        <!-- /.col-md-4 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>

                  <!-- TESTIMONIALS -->
                  <section id="testimonials" class="wprt-section">
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
                            WHAT OTHER SAY ABOUT US
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
                            They delivered our project on time, on budget, and
                            with exceptional quality. Their engineering and
                            construction expertise really shows in the final
                            product.
                          </p>
                          <div
                            class="wprt-spacer"
                            data-desktop="40"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-12">
                          <div
                            class="wprt-testimonials style-1 has-bullets bullet-style-1 bullet50"
                            data-layout="slider"
                            data-column="3"
                            data-column2="3"
                            data-column3="2"
                            data-column4="1"
                            data-gaph="30"
                            data-gapv="30"
                          >
                            <div id="testimonials-wrap" class="cbp">
                            @foreach($testi as $testi)
                              <div class="cbp-item">
                                <div class="customer clearfix">
                                  <div class="inner">
                                    <div class="image">
                                      <img
                                        src="{{ asset('storage/' . $testi->image) }}"
                                        alt="image"
                                      />
                                    </div>
                                    <h4 class="name">{{$testi->name}}</h4>
                                    <div class="position">
                                      {{$testi->designation}}
                                    </div>
                                    <blockquote class="whisper">
                                      {{$testi->message}}
                                    </blockquote>
                                  </div>
                                </div>
                              </div>
                              @endforeach
                            </div>
                            <!-- /#service-wrap -->
                          </div>
                          <!-- /.wprt-testimonials -->

                          <div
                            class="wprt-spacer"
                            data-desktop="80"
                            data-mobi="40"
                            data-smobi="40"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>

                  <!-- PARTNERS -->
                  <section id="partners" class="wprt-section">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="50"
                            data-mobi="50"
                            data-smobi="40"
                          ></div>

                          <div class="wprt-partners">
                            <div class="owl-carousel">
                            @foreach($partner as $partner)
                              <div class="partner">
                                <a target="_blank" href="javascript:void(0);"
                                  ><img
                                    src="{{ asset('storage/' . $partner->image) }}"
                                    alt="image"
                                /></a>
                              </div>
                            @endforeach
                            </div>
                          </div>
                          <!-- /.wprt-partners -->

                          <div
                            class="wprt-spacer"
                            data-desktop="50"
                            data-mobi="50"
                            data-smobi="40"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.container -->
                  </section>
                </div>
                <!-- /.content -->
              </div>
            </div>
          </div>
        </div>
@endsection

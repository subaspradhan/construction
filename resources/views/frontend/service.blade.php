@extends('frontend.include.app2')
@section('content')
 <div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">SERVICES</h1>
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
                    <span class="trail-end">Services</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <section class="wprt-section">
          <!-- Top Spacer -->
          <div
            class="wprt-spacer"
            data-desktop="100"
            data-mobi="50"
            data-smobi="50"
          ></div>

          <div class="container">
            <!-- Row 1 -->
            <div class="row">
                @foreach($service as $service)
              <div class="col-md-3">
                <div class="service-item clearfix">
                  <div class="thumb">
                    <img src="{{ asset('storage/' . $service->image) }}" alt="image" />
                  </div>
                  <div class="service-item-wrap">
                    <h3 class="title font-size-18">
                      <a href="{{ route('servicedetails',$service->name) }}">@if($service->name === 'commercial')
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
                                    @endif</a>
                    </h3>
                    <p>
                      {!! \Illuminate\Support\Str::words(strip_tags($service->details), 30, '...') !!}
                    </p>
                    <a
                      href="{{ route('servicedetails',$service->name) }}"
                      class="wprt-button small rounded-3px"
                      >READ MORE</a
                    >
                  </div>
                </div>
              </div>


            @endforeach
              
              

              
            </div>
</div>
            <!-- Middle Spacer -->
            <div
              class="wprt-spacer"
              data-desktop="60"
              data-mobi="30"
              data-smobi="30"
            ></div>

            
          <!-- Bottom Spacer -->
          <div
            class="wprt-spacer"
            data-desktop="100"
            data-mobi="50"
            data-smobi="50"
          ></div>
        </section>
@endsection
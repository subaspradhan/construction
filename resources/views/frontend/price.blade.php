@extends('frontend.include.app2')
@section('content')
<div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">PRICING</h1>
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
                    <span class="trail-end">Pricing</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="pricing-container">
          <!-- Basic -->
           @foreach($price as $price)
          <div class="card">
            <h2>{{$price->name}}</h2>
            <p class="price">₹{{$price->price}}</p>
            <p class="desc">
              {!! $price->details !!}
            </p>
            @php
                $tags = json_decode($price->tags, true);
            @endphp
            
                @if(is_array($tags))
                    <ul>
                        @foreach ($tags as $tag)
                            <li>{{ $tag }}</li>
                     @endforeach
                    </ul>
                      @else
                          <div>No tags</div>
                      @endif
                
             
            <button onclick="window.location.href='{{ route('enquaryindex', $price->id) }}'">Learn More</button>
          </div>
            @endforeach
          
        </div>
@endsection
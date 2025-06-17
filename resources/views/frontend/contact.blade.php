@extends('frontend.include.app2')
@section('content')
{{-- ✅ Alert Messages --}}
@if(session('success'))
    <div id="success-alert" class="alert alert-success alert-dismissible d-flex align-items-center position-fixed top-10 end-0 me-3 shadow-lg" role="alert" style="z-index: 1050; width: auto; max-width: 400px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <iconify-icon icon="solar:check-read-line-duotone" class="fs-20 me-1"></iconify-icon>
        <div class="lh-1">
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div id="error-alert" class="alert alert-danger alert-dismissible d-flex align-items-center position-fixed top-10 end-0 me-3 shadow-lg mt-5" role="alert" style="z-index: 1050; width: auto; max-width: 400px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <iconify-icon icon="solar:danger-triangle-line-duotone" class="fs-20 me-1"></iconify-icon>
        <div class="lh-1">
            {{ session('error') }}
        </div>
    </div>
@endif

{{-- ✅ Auto-dismiss Script --}}
<script>
    ['success-alert', 'error-alert'].forEach(function(id) {
        setTimeout(function () {
            let alertBox = document.getElementById(id);
            if (alertBox) {
                alertBox.classList.add('fade-out');
                setTimeout(() => alertBox.style.display = "none", 500);
            }
        }, 3000);
    });
</script>

{{-- ✅ Include this in your CSS (e.g., layout file or <style> block) --}}
<style>
    .alert {
        display: flex;
        align-items: center;
        padding: 1rem 1.25rem;
        border-radius: 0.5rem;
        font-size: 0.875rem;
        font-weight: 500;
        color: #fff;
        opacity: 1;
        transition: opacity 0.5s ease-in-out, transform 0.3s ease-in-out;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
    }

    .position-fixed {
        position: fixed !important;
    }

    .top-10 {
        top: 3rem;
    }

    .end-0 {
        right: 0;
    }

    .btn-close {
        background: none;
        border: none;
        color: #fff;
        font-size: 1.2rem;
        margin-left: auto;
        opacity: 0.8;
    }

    .btn-close:hover {
        opacity: 1;
    }

    .alert-success {
        background-color: #198754;
        border: 2px solid #146c43;
    }

    .alert-danger {
        background-color: #dc3545;
        border: 2px solid #b02a37;
    }

    iconify-icon {
        font-size: 1.2rem;
        margin-right: 0.5rem;
    }

    .fade-out {
        opacity: 0 !important;
        transform: translateY(-10px);
    }
</style>
<div id="featured-title" class="clearfix featured-title-left">
          <div id="featured-title-inner" class="container clearfix">
            <div class="featured-title-inner-wrap">
              <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">CONTACT US</h1>
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
                    <span class="trail-end">Contact Us</span>
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
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d28789.15889504466!2d85.6125352266558!3d20.17625040191336!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1749289295618!5m2!1sen!2sin"
                      width="1400"
                      height="350"
                      style="border: 0"
                      allowfullscreen=""
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                    <div
                      class="wprt-spacer"
                      data-desktop="100"
                      data-mobi="60"
                      data-smobi="60"
                    ></div>

                    <div class="container">
                      <div class="row">
                        <div class="col-md-12">
                          <h2 class="text-center margin-bottom-20">
                            GET IN TOUCH WITH US
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
                            We’d love to hear from you. Whether you have a
                            question, feedback, our team is here to help. Fill
                            out the form below or reach us through any of the
                            contact methods provided.
                          </p>
                          <div
                            class="wprt-spacer"
                            data-desktop="40"
                            data-mobi="30"
                            data-smobi="30"
                          ></div>
                        </div>
                        <!-- /.col-md-12 -->

                        <div class="col-md-4">
                          <h5>Address</h5>
                          <p>
                            254/1102, Kalyan Nagar, Pallahat, Khordha Odisha -
                            752056
                            <br />
                            Odisha - 752056
                          </p>

                          <div
                            class="wprt-spacer"
                            data-desktop="15"
                            data-mobi="0"
                            data-smobi="0"
                          ></div>

                          <h5>Phone number</h5>
                          <p>06755 356 001</p>

                          <div
                            class="wprt-spacer"
                            data-desktop="15"
                            data-mobi="0"
                            data-smobi="0"
                          ></div>

                          <h5>E-mail address</h5>
                          <p>hello@arelic.com</p>

                          <div
                            class="wprt-spacer"
                            data-desktop="0"
                            data-mobi="10"
                            data-smobi="10"
                          ></div>
                        </div>
                        <!-- /.col-md-4 -->

                        <div class="col-md-8">
                          <form
                            class="wprt-contact-form"
                            method="post"
                            action="/contact-store"
                          >
                          @csrf
                            <div class="inner">
                              <div class="left-side">
                                <div class="input-wrap">
                                  <input
                                    type="text"
                                    value=""
                                    tabindex="1"
                                    placeholder="Name *"
                                    name="name"
                                    id="name"
                                    required
                                  />
                                </div>
                                <div class="input-wrap">
                                  <input
                                    type="email"
                                    value=""
                                    tabindex="2"
                                    placeholder="Email *"
                                    name="email"
                                    id="email"
                                    required
                                  />
                                </div>
                                <div class="input-wrap">
                                  <input
                                    type="text"
                                    value=""
                                    tabindex="4"
                                    placeholder="Phone *"
                                    name="phone"
                                    id="subject"
                                    required
                                  />
                                </div>
                                <div class="message-wrap">
                                  <textarea
                                    class=""
                                    tabindex="5"
                                    placeholder="Message *"
                                    name="message"
                                    id="message"
                                    required
                                  ></textarea>
                                </div>
                                <div class="send-wrap">
                                  <button type="submit" class="submit">SEND MESSAGE</button>
                                </div>
                              </div>
                            </div>
                          </form>
                          <!-- /.wprt-contact-form -->
                        </div>
                        <!-- /.col-md-8 -->

                        <div class="col-md-12">
                          <div
                            class="wprt-spacer"
                            data-desktop="100"
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
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection
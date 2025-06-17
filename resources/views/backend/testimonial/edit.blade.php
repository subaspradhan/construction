@extends('backend.include.app')
@section('content')
@if(session('success'))
    <div id="success-alert" class="alert alert-success alert-dismissible d-flex align-items-center border-2 border border-success position-fixed top-10 end-0 me-3 shadow-lg" role="alert" style="z-index: 1050; width: auto; max-width: 400px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <iconify-icon icon="solar:check-read-line-duotone" class="fs-20 me-1"></iconify-icon>
        <div class="lh-1">
            {{ session('success') }}
        </div>
    </div>
@endif

@if(session('error'))
    <div id="error-alert" class="alert alert-danger alert-dismissible d-flex align-items-center border-2 border border-danger position-fixed top-10 end-0 me-3 shadow-lg mt-5" role="alert" style="z-index: 1050; width: auto; max-width: 400px;">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <iconify-icon icon="solar:danger-triangle-line-duotone" class="fs-20 me-1"></iconify-icon>
        <div class="lh-1">
            {{ session('error') }}
        </div>
    </div>
@endif

<script>
    ['success-alert', 'error-alert'].forEach(function(id) {
        setTimeout(function () {
            let alertBox = document.getElementById(id);
            if (alertBox) {
                alertBox.style.transition = "opacity 0.5s";
                alertBox.style.opacity = "0";
                setTimeout(() => alertBox.style.display = "none", 500);
            }
        }, 3000);
    });
</script>

<div class="dashboard-main-body">

<div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Testimonial Edit From</h6>
</div>

<div class="row gy-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('testi.admin.update', $testi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gy-3">
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Client Name</label>
                    <input type="text" name="name" class="form-control" value="{{$testi->name}}">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Designation</label>
                    <input type="text" name="designation" class="form-control" value="{{$testi->designation}}">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Message</label>
                    <textarea type="text" name="message" class="form-control" value="{{$testi->message}}">{{$testi->message}}</textarea>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label for="banner_image" class="form-label">Image</label>
                    <div class="input-group">
                        <input type="file" name="image" id="banner_image" class="form-control" accept="image/*" value="{{$testi->image}}">
                    </div>
                </div>
                <img src="{{ asset('storage/' . $testi->image) }}"
                alt="testis Image" style="width: 100px;">
            </div>
            <div class="d-flex justify-content-end mt-5 ">
                <button type="submit" class="btn btn-primary me-3">Submit</button>
            </div>
        </form>
      </div>
    </div>

</div>

</div>
</div>
@endsection
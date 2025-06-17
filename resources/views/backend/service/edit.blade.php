@extends('backend.include.app')
@section('content')
<!-- Include Bootstrap CSS (required) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Include Summernote CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css" rel="stylesheet">
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
  <h6 class="fw-semibold mb-0">Service From</h6>
</div>

<div class="row gy-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('service.admin.update',$service->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gy-3">
                <div class="col-12 col-sm-6 col-md-6">
                   <label class="form-label">Service Name</label>
                    <select name="name" id="" class="form-control" required>
                        <option value="{{$service->name}}">{{$service->name}}</option>
                        <option value="commercial">Commercial Services</option>
                        <option value="residential">Residential Services</option>
                        <option value="interior">Interior Services</option>
                        <option value="maintenance">Maintenance Services</option>
                        <option value="renovation">Renovation Services</option>
                        <option value="architectural">Architectural Services</option>
                        <option value="engineering">Engineering Services</option>
                        <option value="contractor">Contractor Services</option>
                    </select>
                </div>
                <div class="col-12 col-sm-12 col-md-12">  
                    <label>Service Details</label>
                    <textarea id="summernote" name="details">{{ old('details', $service->details ?? '') }}</textarea>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for="media_upload" class="form-label fw-bold text-secondary">Upload Service Image</label>
                    <div class="input-group">
                        <label class="input-group-text bg-light text-dark" for="media_upload">
                        <i class="bi bi-upload"></i> Upload
                        </label>
                        <input type="file" name="image" id="media_upload" class="form-control" accept="image/*" value="{{$service->image}}">
                    </div>
                    <small class="form-text text-muted">
                        Accepted formats: JPG, PNG, WEBP Max size: 15MB.
                    </small>
                </div>
                <img src="{{ asset('storage/' . $service->image) }}"
                    alt="image Image" style="width: 200px;">
                <div class="col-12 col-sm-12 col-md-12">  
                    <label>Pre-construction Details</label>
                    <textarea id="summernote1" name="pcondetails">{{ old('pcondetails', $service->pcondetails ?? '') }}</textarea>
                </div>
                <div class="col-12 col-md-6 mb-4">
                    <label for="media_upload" class="form-label fw-bold text-secondary">Upload Pre-construction Image</label>
                    <div class="input-group">
                        <label class="input-group-text bg-light text-dark" for="media_upload">
                        <i class="bi bi-upload"></i> Upload
                        </label>
                        <input type="file" name="pconimage" id="media_upload" class="form-control" accept="image/*" value="{{$service->pconimage}}">
                    </div>
                    <small class="form-text text-muted">
                        Accepted formats: JPG, PNG, WEBP Max size: 15MB.
                    </small>
                </div>
                <img src="{{ asset('storage/' . $service->pconimage) }}"
                    alt="pconimage Image" style="width: 200px;">
                <div class="col-12 col-sm-12 col-md-12">  
                    <label>Post construction Details</label>
                    <textarea id="summernote2" name="postcondetails">{{ old('postcondetails', $service->postcondetails ?? '') }}</textarea>
                </div>
                 <div class="col-12 col-md-6 mb-4">
                    <label for="media_upload" class="form-label fw-bold text-secondary">Upload Post construction Image</label>
                    <div class="input-group">
                        <label class="input-group-text bg-light text-dark" for="media_upload">
                        <i class="bi bi-upload"></i> Upload
                        </label>
                        <input type="file" name="postconimage" id="media_upload" class="form-control" accept="image/*" value="{{$service->postconimage}}">
                    </div>
                    <small class="form-text text-muted">
                        Accepted formats: JPG, PNG, WEBP Max size: 15MB.
                    </small>
                </div>
                 <img src="{{ asset('storage/' . $service->postconimage) }}"
                    alt="postconimage Image" style="width: 200px;">
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
<!-- Include jQuery (required) -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Include Bootstrap JS (required) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      height: 200
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#summernote1').summernote({
      height: 200
    });
  });
</script>
<script>
  $(document).ready(function() {
    $('#summernote2').summernote({
      height: 200
    });
  });
</script>

@endsection

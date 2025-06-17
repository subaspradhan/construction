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
  <h6 class="fw-semibold mb-0">Project From</h6>
</div>

<div class="row gy-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="{{ route('project.admin.update', $project->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gy-3">
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Project Name</label>
                    <input type="text" name="name" class="form-control" value="{{$project->name}}">
                </div>
                <div class="col-12 col-sm-12 col-md-12">  
                    <label>Project Details</label>
                    <textarea id="summernote" name="details">{{ old('details', $project->details ?? '') }}</textarea>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Client Name</label>
                    <input type="text" name="cname" class="form-control" value="{{$project->cname}}">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Architech Name</label>
                    <input type="text" name="aname" class="form-control" value="{{$project->aname}}">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Builder Name</label>
                    <input type="text" name="bname" class="form-control" value="{{$project->bname}}">
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" value="{{$project->price}}">
                </div>
                 <div class="col-12 col-md-6 mb-4">
                    <label for="media_upload" class="form-label fw-bold text-secondary">Upload Project Image</label>
                    <div class="input-group">
                        <label class="input-group-text bg-light text-dark" for="media_upload">
                        <i class="bi bi-upload"></i> Upload
                        </label>
                        <input type="file" name="image" id="media_upload" class="form-control" accept="image/*" value="{{$project->image}}">
                    </div>
                    <small class="form-text text-muted">
                        Accepted formats: JPG, PNG, WEBP Max size: 15MB.
                    </small>
                </div>
                <img src="{{ asset('storage/' . $project->image) }}"
                alt="projects Image" style="width: 100px;">
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


@endsection

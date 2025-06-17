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
  <h6 class="fw-semibold mb-0">Price From</h6>
</div>

<div class="row gy-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form action="/price-store" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row gy-3">
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Price card name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter Price card name" required>
                </div>
                <div class="col-12 col-sm-6 col-md-6">
                    <label class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" placeholder="Enter Price" required>
                </div>
                <div class="col-12 col-sm-12 col-md-12">                              
                  <label for="blog-tags" class="form-label">Price Highlight Point</label>
                    <input type="text" id="tag-input" class="form-control" placeholder="Type and press enter to add Points" />
                    <div id="tag-container" class="mt-2"></div>
                    <input type="hidden" name="tags[]" id="tags-hidden">
                </div>
                <div class="col-12 col-sm-12 col-md-12">  
                    <label>Details</label>
                    <textarea id="summernote" name="details">{{ old('details', $yourModel->details ?? '') }}</textarea>
                </div>
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
    const tagInput = document.getElementById('tag-input');
    const tagContainer = document.getElementById('tag-container');
    const hiddenInput = document.getElementById('tags-hidden');
    
    let tags = [];

    tagInput.addEventListener('keypress', function (event) {
        if (event.key === 'Enter' && tagInput.value.trim() !== '') {
            event.preventDefault();
            const tag = tagInput.value.trim();
            
            if (!tags.includes(tag)) {
                tags.push(tag);
                updateTags();
                tagInput.value = ''; // Clear input field
            }
        }
    });

    function updateTags() {
        tagContainer.innerHTML = ''; // Clear current displayed tags
        tags.forEach((tag) => {
            const tagElement = document.createElement('span');
            tagElement.classList.add('badge', 'bg-primary', 'me-1');
            tagElement.textContent = tag;
            tagElement.onclick = () => removeTag(tag); // Add remove functionality
            tagContainer.appendChild(tagElement);
        });
        hiddenInput.value = tags.join(','); // Set hidden input value for form submission
    }

    function removeTag(tag) {
        tags = tags.filter(t => t !== tag);
        updateTags();
    }
</script>

<style>
    .badge {
        padding: 0.5em;
        border-radius: 0.5em;
        cursor: pointer;
    }
</style>
<script>
  $(document).ready(function() {
    $('#summernote').summernote({
      height: 200
    });
  });
</script>
@endsection

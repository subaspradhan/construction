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
        <h6 class="fw-semibold mb-0">Project Table</h6>
      </div>

      <div class="card basic-data-table">
        <div class="table-responsive card-body">
          <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
            <thead>
              <tr>
                <th scope="col">Happy&nbsp;Client</th>
                <th scope="col">Awards</th>
                <th scope="col">Completed&nbsp;Projects</th>
                <th scope="col">Workers</th>
              </tr>
            </thead>
            <tbody>
                <td><a href="{{ route('award.edit.admin', $award->id) }}">{{ $award->first()->client ?? 'No Client' }}</a></td>
                <td><a href="{{ route('award.edit.admin', $award->id) }}">{{ $award->first()->award ?? 'No award' }}</a></td>
                <td><a href="{{ route('award.edit.admin', $award->id) }}">{{ $award->first()->projects ?? 'No projects' }}</a></td>
                <td><a href="{{ route('award.edit.admin', $award->id) }}">{{ $award->first()->worker ?? 'No worker' }}</a></td>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        const confirmDeleteLink = document.getElementById('confirmDelete');

        deleteButtons.forEach(button => {
          button.addEventListener('click', function () {
            const id = this.getAttribute('data-id');
            const deleteUrl = "{{ url('/project-delete') }}/" + id;
            confirmDeleteLink.setAttribute('href', deleteUrl);
          });
        });
      });
    </script>

@endsection
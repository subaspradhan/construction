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
        <h6 class="fw-semibold mb-0">Price Table</h6>
      </div>

      <div class="card basic-data-table">
        <div class="d-flex justify-content-end align-items-center p-3">
          <a href="/price-create" class="btn btn-primary">
              + Add Data
          </a>
        </div>
        
        <div class="table-responsive card-body">
          <table class="table bordered-table mb-0" id="dataTable" data-page-length='10'>
            <thead>
              <tr>
                <th scope="col">SL</th>
                <th scope="col">Name</th>
                <th scope="col">Price</th>
                <th scope="col">Details</th>
                <th scope="col">Highlight</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
            @if ($price->count() > 0)
            @foreach ($price as $key => $prices)
              <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $prices->name}}</td>
                <td>{{ $prices->price }}</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#descModal{{ $prices->id }}">
                        View
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="descModal{{ $prices->id }}" tabindex="-1" aria-labelledby="descModalLabel{{ $prices->id }}" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="descModalLabel{{ $prices->id }}">Description</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    {!! $prices->details !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </td>


                  @php
                      $tags = json_decode($prices->tags, true);
                  @endphp

                  <td>
                      @if(is_array($tags))
                          <ul>
                              @foreach ($tags as $tag)
                                  <li>{{ $tag }}</li>
                              @endforeach
                          </ul>
                      @else
                          <div>No tags</div>
                      @endif
                </td>
                <td>
                  <a href="{{ route('price.admin.edit',$prices->id) }}"
                    class="w-32-px h-32-px bg-success-focus text-success-main rounded-circle d-inline-flex align-items-center justify-content-center">
                    <iconify-icon icon="lucide:edit"></iconify-icon>
                  </a>
                  <a href="javascript:void(0);"
                    data-id="{{ $prices->id }}"
                    class="delete-btn w-32-px h-32-px bg-danger-focus text-danger-main rounded-circle d-inline-flex align-items-center justify-content-center"
                    data-bs-toggle="modal" data-bs-target="#deleteModal">
                    <iconify-icon icon="mingcute:delete-2-line"></iconify-icon>
                  </a>
                  <!-- Delete Confirmation Modal -->
                  <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header bg-danger text-white">
                          <h6 class="modal-title" id="deleteModalLabel">Confirm Delete</h6>
                          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          Are you sure you want to delete this Price?
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                          <a href="#" class="btn btn-danger" id="confirmDelete">Delete</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            @else
            <tr>
                <td colspan="7">
                    <h6>No Data Yet</h6>
                </td>
            </tr>
            @endif
            </tbody>
          </table>
          <div class="mt-5">{{ $price->links('pagination::bootstrap-5') }}</div>
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
            const deleteUrl = "{{ url('/price-delete') }}/" + id;
            confirmDeleteLink.setAttribute('href', deleteUrl);
          });
        });
      });
    </script>

@endsection
@extends('backend.include.app')
@section('content')
<div class="dashboard-main-body">
    <div class="d-flex flex-wrap align-items-center justify-content-between gap-3 mb-24">
  <h6 class="fw-semibold mb-0">Dashboard</h6>
  
</div>

    <div class="row row-cols-xxxl-5 row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-4">
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-1 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Projects</p>
                <h6 class="mb-0">{{$project}}</h6>
              </div>
              <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="material-symbols:real-estate-agent" class="text-white text-2xl mb-0"></iconify-icon>
                
              </div>
            </div>
            <!-- <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +1</span> 
              Last 30 days register seller
            </p> -->
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-4 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Partner</p>
                <h6 class="mb-0">{{$partner}}</h6>
              </div>
              <div class="w-50-px h-50-px bg-success rounded-circle d-flex justify-content-center align-items-center">
                <!-- <iconify-icon icon="fa-solid:award" class="text-white text-2xl mb-0"></iconify-icon> -->
                <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <!-- <iconify-icon icon="bxs:down-arrow" class="text-xs"></iconify-icon> -->
            <!-- <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +34</span> 
              Last 30 days active seller
            </p> -->
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-5 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total no of Packeges</p>
                <h6 class="mb-0">{{$price}}</h6>
              </div>
              <div class="w-50-px h-50-px bg-danger rounded-circle d-flex justify-content-center align-items-center">
                <iconify-icon icon="mdi:tag-multiple" class="text-white text-2xl mb-0"></iconify-icon>

              </div>
            </div>
            <!-- <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-danger-main"><iconify-icon icon="bxs:down-arrow" class="text-xs"></iconify-icon> -5</span> 
              Last 30 days inactive seller
            </p> -->
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-4 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Enquary</p>
                <h6 class="mb-0">{{$enquary}}</h6>
              </div>
              <div class="w-50-px h-50-px bg-success-main rounded-circle d-flex justify-content-center align-items-center">
                <!-- <iconify-icon icon="solar:wallet-bold" class="text-white text-2xl mb-0"></iconify-icon> -->
                <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <!-- <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +5</span> 
              Last 30 days register buyer
            </p> -->
          </div>
        </div><!-- card end -->
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-2 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Contact</p>
                <h6 class="mb-0">{{$contact}}</h6>
              </div>
              <div class="w-50-px h-50-px bg-purple rounded-circle d-flex justify-content-center align-items-center">
             <iconify-icon icon="gridicons:multiple-users" class="text-white text-2xl mb-0"></iconify-icon>
              </div>
            </div>
            <!-- <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +7</span> 
              Last 30 days added Property
            </p> -->
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card shadow-none border bg-gradient-start-1 h-100">
          <div class="card-body p-20">
            <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
              <div>
                <p class="fw-medium text-primary-light mb-1">Total Testimonial</p>
                <h6 class="mb-0">{{$testi}}</h6>
              </div>
              <div class="w-50-px h-50-px bg-cyan rounded-circle d-flex justify-content-center align-items-center">
              <iconify-icon icon="mdi:format-quote-open" class="text-white text-2xl mb-0"></iconify-icon>

              </div>
            </div>
            <!-- <p class="fw-medium text-sm text-primary-light mt-12 mb-0 d-flex align-items-center gap-2">
              <span class="d-inline-flex align-items-center gap-1 text-success-main"><iconify-icon icon="bxs:up-arrow" class="text-xs"></iconify-icon> +44</span> 
              Last 30 days Upload
            </p> -->
          </div>
        </div><!-- card end -->
      </div>
    </div>

    <!-- <div class="row gy-4 mt-1">
      
      
      
      <div class="col-xxl-9 col-xl-12">
        <div class="card h-100">
            <div class="card-body p-24">

              <div class="d-flex flex-wrap align-items-center gap-1 justify-content-between mb-16">
                <ul class="nav border-gradient-tab nav-pills mb-0" id="pills-tab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex align-items-center active" id="pills-to-do-list-tab" data-bs-toggle="pill" data-bs-target="#pills-to-do-list" type="button" role="tab" aria-controls="pills-to-do-list" aria-selected="true">
                      Active Seller 
                      <span class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">4</span>
                    </button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link d-flex align-items-center" id="pills-recent-leads-tab" data-bs-toggle="pill" data-bs-target="#pills-recent-leads" type="button" role="tab" aria-controls="pills-recent-leads" aria-selected="false" tabindex="-1">
                      Inactive Seller 
                      <span class="text-sm fw-semibold py-6 px-12 bg-neutral-500 rounded-pill text-white line-height-1 ms-12 notification-alert">6</span>
                    </button>
                  </li>
                </ul>
                <a href="/seller" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                  View All
                  <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
                </a>
              </div>

              <div class="tab-content" id="pills-tabContent">   
                <div class="tab-pane fade show active" id="pills-to-do-list" role="tabpanel" aria-labelledby="pills-to-do-list-tab" tabindex="0">
                  <div class="table-responsive scroll-sm">
                    <table class="table bordered-table sm-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Name </th>
                          <th scope="col">Registered On</th>
                          <th scope="col">Role</th>
                          <th scope="col" class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                        <tr>
                        <td>1</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">sp</h6>
                                <span class="text-sm text-secondary-light fw-medium">dr</span>
                              </div>
                            </div>
                          </td>
                          <td>46</td>
                          <td>rf</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">acti</span> 
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-recent-leads" role="tabpanel" aria-labelledby="pills-recent-leads-tab" tabindex="0">
                  <div class="table-responsive scroll-sm">
                    <table class="table bordered-table sm-table mb-0">
                    <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Name </th>
                          <th scope="col">Registered On</th>
                          <th scope="col">Role</th>
                          <th scope="col" class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                        <tr>
                        <td>1</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">ddffg</h6>
                                <span class="text-sm text-secondary-light fw-medium">fewg</span>
                              </div>
                            </div>
                          </td>
                          <td>3</td>
                          <td>sfef</td>
                          <td class="text-center"> 
                            <span class="bg-danger-focus text-danger-main px-24 py-4 rounded-pill fw-medium text-sm">acti</span> 
                          </td>
                        </tr>
                        
                       
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="col-xxl-3 col-xl-12">
        <div class="card h-100">
          <div class="card-body">
            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between">
              <h6 class="mb-2 fw-bold text-lg mb-0">Latest Register Buyers </h6>
              <a href="/buyer" class="text-primary-600 hover-text-primary d-flex align-items-center gap-1">
                View All
                <iconify-icon icon="solar:alt-arrow-right-linear" class="icon"></iconify-icon>
              </a>
            </div>

            <div class="tab-content" id="pills-tabContent">   
                <div class="tab-pane fade show active" id="pills-to-do-list" role="tabpanel" aria-labelledby="pills-to-do-list-tab" tabindex="0">
                  <div class="table-responsive scroll-sm">
                    <table class="table bordered-table sm-table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">SL</th>
                          <th scope="col">Name </th>
                          <th scope="col">Registered On</th>
                          <th scope="col">Role</th>
                          <th scope="col" class="text-center">Status</th>
                        </tr>
                      </thead>
                      <tbody>
                     
                        <tr>
                        <td>1</td>
                          <td>
                            <div class="d-flex align-items-center">
                              <img src="assets/images/users/user1.png" alt="" class="w-40-px h-40-px rounded-circle flex-shrink-0 me-12 overflow-hidden">
                              <div class="flex-grow-1">
                                <h6 class="text-md mb-0 fw-medium">gr</h6>
                                <span class="text-sm text-secondary-light fw-medium">gr</span>
                              </div>
                            </div>
                          </td>
                          <td>34</td>
                          <td>dvfdsg</td>
                          <td class="text-center"> 
                            <span class="bg-success-focus text-success-main px-24 py-4 rounded-pill fw-medium text-sm">Active</span> 
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
            
          </div>
        </div>
      </div>
      
    </div> -->
  </div>
  @endsection
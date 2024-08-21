<x-app-layout>
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-between">
                      <div class="nk-block-head-content">
                          <h3 class="nk-block-title page-title">Orders</h3>
                      </div><!-- .nk-block-head-content -->
                  </div><!-- .nk-block-between -->
              </div><!-- .nk-block-head -->
              <div class="nk-block">
                  <div class="card card-stretch">
                      <div class="card-inner-group">
                          <div class="card-inner position-relative card-tools-toggle">
                              <div class="card-title-group">
                                  <div class="card-tools">
                                  </div><!-- .card-tools -->
                              </div><!-- .card-title-group -->
                              <div class="card-search search-wrap" data-search="search">
                              </div><!-- .card-search -->
                          </div><!-- .card-inner -->
                          <div class="card-inner p-0">
                              <div class="nk-tb-list nk-tb-ulist">
                                  <div class="nk-tb-item nk-tb-head">
                                      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Name</span></div>
                                      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Phone</span></div>
                                      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Email</span></div>
                                      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Address</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Total Amount</span></div>
                                      <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                  </div><!-- .nk-tb-item -->
                                  @foreach($orders as $dat)
                                    <div class="nk-tb-item">
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->name }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-lg">
                                          <span>{{ $dat->phone }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-lg">
                                          <span>{{ $dat->email  }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-lg">
                                          <span>{{ $dat->shipping_address  }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->status }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>Rs. {{ number_format($dat->total_amount) }}</span>
                                      </div>
                                      <div class="nk-tb-col nk-tb-col-tools">
                                          <ul class="nk-tb-actions gx-1">
                                              <li>
                                                  <div class="drodown">
                                                      <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                      <div class="dropdown-menu dropdown-menu-right">
                                                          <ul class="link-list-opt no-bdr">
                                                              <li><a href="{{route('Order.show', $dat->id)}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                  </div><!-- .nk-tb-item -->
                                  @endforeach
                              </div><!-- .nk-tb-list -->
                          </div><!-- .card-inner -->
                      </div><!-- .card-inner-group -->
                  </div><!-- .card -->
              </div><!-- .nk-block -->
          </div>
      </div>
  </div>
</x-app-layout>

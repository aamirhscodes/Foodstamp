<x-app-layout>
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-between">
                      <div class="nk-block-head-content">
                          <h3 class="nk-block-title page-title">Properties</h3>
                          <a href="{{route('propertiesAdd')}}" class="btn btn-primary">Add Property</a>
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
                                  <div class="card-tools mr-n1">
                                      <ul class="btn-toolbar gx-1">
                                          <li>
                                              <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                          </li><!-- li -->
                                          <li class="btn-toolbar-sep"></li><!-- li -->
                                          <li>
                                              <div class="toggle-wrap">
                                                  <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                  <div class="toggle-content" data-content="cardTools">
                                                      <ul class="btn-toolbar gx-1">
                                                          <li class="toggle-close">
                                                              <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                          </li><!-- li -->

                                                      </ul><!-- .btn-toolbar -->
                                                  </div><!-- .toggle-content -->
                                              </div><!-- .toggle-wrap -->
                                          </li><!-- li -->
                                      </ul><!-- .btn-toolbar -->
                                  </div><!-- .card-tools -->
                              </div><!-- .card-title-group -->
                              <div class="card-search search-wrap" data-search="search">
                                  <div class="card-body">
                                      <div class="search-content">
                                        <form method="post" action="{{route('search')}}">
                                          @csrf
                                          <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                          <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search" name="search_text">
                                          <button class="search-submit btn btn-icon" type="submit"><em class="icon ni ni-search"></em></button>
                                        </form>
                                      </div>
                                  </div>
                              </div><!-- .card-search -->
                          </div><!-- .card-inner -->
                          <div class="card-inner p-0">
                              <div class="nk-tb-list nk-tb-ulist">
                                  <div class="nk-tb-item nk-tb-head">
                                      <div class="nk-tb-col nk-tb-col-check">
                                          <div class="custom-control custom-control-sm custom-checkbox notext">
                                              <input type="checkbox" class="custom-control-input" id="uid">
                                              <label class="custom-control-label" for="uid"></label>
                                          </div>
                                      </div>
                                      <div class="nk-tb-col"><span class="sub-text">ID</span></div>
                                      <div class="nk-tb-col tb-col-mb"><span class="sub-text">Customer Details</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Title</span></div>
                                      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Location</span></div>
                                      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Size</span></div>
                                      <div class="nk-tb-col tb-col-lg"><span class="sub-text">Amount Paid</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Amount Remaining</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Stamp Date</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Payment Details</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Comments</span></div>
                                      <div class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></div>
                                      <div class="nk-tb-col nk-tb-col-tools text-right"></div>
                                  </div><!-- .nk-tb-item -->
                                  @foreach($properties as $dat)
                                    <div class="nk-tb-item">
                                      <div class="nk-tb-col nk-tb-col-check">
                                          <div class="custom-control custom-control-sm custom-checkbox notext">
                                              <input type="checkbox" class="custom-control-input" id="uid1">
                                              <label class="custom-control-label" for="uid1"></label>
                                          </div>
                                      </div>
                                      <div class="nk-tb-col tb-col-mb">
                                          <span class="tb-amount">{{ $dat->id }}</span>
                                      </div>
                                      <div class="nk-tb-col">
                                          <a href="{{route('customersEdit', $dat->customer_id)}}">
                                            <div class="user-card">
                                                <div class="user-info">
                                                    <span class="tb-lead">{{$dat->customer->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                    <span>Contact #: {{$dat->customer->phone}}</span>
                                                </div>
                                            </div>
                                          </a>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->title }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-lg">
                                          <span>{{ $dat->location }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-lg">
                                          <span>{{ $dat->size }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>Rs. {{ number_format($dat->paid_amount) }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>Rs. {{ number_format($dat->remaining_amount) }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->stamp_date }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->payment_details }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->comments }}</span>
                                      </div>
                                      <div class="nk-tb-col tb-col-md">
                                          <span>{{ $dat->status }}</span>
                                      </div>
                                      <div class="nk-tb-col nk-tb-col-tools">
                                          <ul class="nk-tb-actions gx-1">
                                              <li>
                                                  <div class="drodown">
                                                      <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                      <div class="dropdown-menu dropdown-menu-right">
                                                          <ul class="link-list-opt no-bdr">
                                                              <li><a href="{{route('propertiesView', $dat->id)}}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                              <li><a href="{{route('propertiesEdit', $dat->id)}}"><em class="icon ni ni-eye"></em><span>Edit Details</span></a></li>
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
                          <div class="card-inner">
                              <div class="nk-block-between-md g-3">
                                  <div class="g">
                                      <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                          <div>Page</div>
                                          <div>
                                          {{$properties->links()}}
                                          </div>
                                      </div>
                                  </div><!-- .pagination-goto -->
                              </div><!-- .nk-block-between -->
                          </div><!-- .card-inner -->
                      </div><!-- .card-inner-group -->
                  </div><!-- .card -->
              </div><!-- .nk-block -->
          </div>
      </div>
  </div>
</x-app-layout>

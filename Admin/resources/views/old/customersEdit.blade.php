<x-app-layout>
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-between">
                      <div class="nk-block-head-content">
                      </div><!-- .nk-block-head-content -->
                      <div class="nk-block-head-content">
                      </div><!-- .nk-block-head-content -->
                  </div><!-- .nk-block-between -->
              </div><!-- .nk-block-head -->
              <div class="container-fluid">
                  <div class="nk-content-inner">
                      <div class="nk-content-body">
                          <div class="components-preview wide-md mx-auto">
                              <div class="nk-block-head nk-block-head-lg wide-sm">
                                  <div class="nk-block-head-content">
                                      <div class="nk-block-head-sub"><a class="back-to" href="{{route('customers')}}"><em class="icon ni ni-arrow-left"></em><span>Cancel</span></a></div>
                                      <h2 class="nk-block-title fw-normal">Edit Customer</h2>
                                  </div>
                              </div><!-- .nk-block-head -->
                              <div class="nk-block nk-block-lg">
                                  <div class="card card-preview">
                                      <div class="card-inner">
                                        <form name="addForm" method="POST" action="{{ route('customersEditPost') }}">
                                          @csrf
                                          <div class="preview-block">
                                              <span class="preview-title-lg overline-title">Customer Details</span>
                                              <div class="row gy-4">
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Name</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="name" class="form-control" id="inputLastName" placeholder="Name"  value="{{$customer->name}}" required>
                                                              <input type="hidden" name="customer_id" value="{{$customer->id}}" />
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Father's Name</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" class="form-control" id="default-01" name="father_name" placeholder="Father's Name"  value="{{$customer->father_name}}" required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">CNIC</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" class="form-control" id="default-01" name="cnic" placeholder="CNIC Number"  value="{{$customer->cnic}}" required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Contact No.</label>
                                                          <div class="form-control-wrap">
                                                              <input type="tel" class="form-control" id="default-01" name="phone" placeholder="Contact No." value="{{$customer->phone}}" required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Email</label>
                                                          <div class="form-control-wrap">
                                                              <input type="email" class="form-control" id="default-01" placeholder="Email" name="email" value="{{$customer->email}}" required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Location</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" class="form-control" id="default-01" placeholder="Location" name="locality" value="{{$customer->locality}}" required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Comments</label>
                                                          <div class="form-control-wrap">
                                                              <textarea name="comments" class="form-control">{{$customer->comments}}</textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <button type="submit" class="btn btn-primary">Update Customer</button>
                                                      </div>
                                                  </div>

                                              </div>
                                          </div>
                                        </form>
                                      </div>
                                  </div><!-- .card-preview -->
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>

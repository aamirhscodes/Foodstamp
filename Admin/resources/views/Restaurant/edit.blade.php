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
                                      <div class="nk-block-head-sub"><a class="back-to" href="{{route('Restaurant.index')}}"><em class="icon ni ni-arrow-left"></em><span>Cancel</span></a></div>
                                      <h2 class="nk-block-title fw-normal">Edit Restaurant</h2>
                                  </div>
                              </div><!-- .nk-block-head -->
                              <div class="nk-block nk-block-lg">
                                  <div class="card card-preview">
                                      <div class="card-inner">
                                        <form name="addForm" method="POST" action="{{ route('Restaurant.update', $restaurant->id) }}" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="preview-block">
                                              <span class="preview-title-lg overline-title">Restaurant Details</span>
                                              <div class="row gy-4">
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Title</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="title" class="form-control" id="property_title" placeholder="Title" value="{{$restaurant->title}}"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Address</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="address" class="form-control" id="property_title" placeholder="Address"  value="{{$restaurant->address}}" required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Email</label>
                                                          <div class="form-control-wrap">
                                                              <input type="email" name="email" class="form-control" id="property_title" placeholder="Email" value="{{$restaurant->email}}"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Name of POC</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="name" class="form-control" id="property_title" placeholder="Name of POC" value="{{$restaurant->name}}"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Password</label>
                                                          <div class="form-control-wrap">
                                                              <input type="password" name="password" class="form-control" id="property_title" placeholder="Password" >
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-md-12">
                                                    <img src="{{URL::asset('uploads')}}/{{$restaurant->image}}" class="img-fluid" width="150px" />
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Image</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="image">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <button type="submit" class="btn btn-primary">Update Restaurant</button>
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

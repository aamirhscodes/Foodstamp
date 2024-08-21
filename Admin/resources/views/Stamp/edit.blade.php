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
                                      <div class="nk-block-head-sub"><a class="back-to" href="{{route('Stamp.index')}}"><em class="icon ni ni-arrow-left"></em><span>Cancel</span></a></div>
                                      <h2 class="nk-block-title fw-normal">Edit Stamp</h2>
                                  </div>
                              </div><!-- .nk-block-head -->
                              <div class="nk-block nk-block-lg">
                                  <div class="card card-preview">
                                      <div class="card-inner">
                                        <form name="addForm" method="POST" action="{{ route('Stamp.update', $stamp->id) }}" enctype="multipart/form-data">
                                          @csrf
                                          @method('PUT')
                                          <div class="preview-block">
                                              <span class="preview-title-lg overline-title">Stamp Details</span>
                                              <div class="row gy-4">
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Title</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="title" class="form-control" id="property_title" placeholder="Title" value="{{$stamp->title}}"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Price</label>
                                                          <div class="form-control-wrap">
                                                              <input type="number" name="price" class="form-control" id="inputLastName" placeholder="Price" value="{{$stamp->price}}"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Description</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="description" class="form-control" id="inputLastName" placeholder="Description" value="{{$stamp->description}}"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <button type="submit" class="btn btn-primary">Update Stamp</button>
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

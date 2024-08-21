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
                                      <div class="nk-block-head-sub"><a class="back-to" href="{{route('properties')}}"><em class="icon ni ni-arrow-left"></em><span>Cancel</span></a></div>
                                      <h2 class="nk-block-title fw-normal">Add Property</h2>
                                  </div>
                              </div><!-- .nk-block-head -->
                              <div class="nk-block nk-block-lg">
                                  <div class="card card-preview">
                                      <div class="card-inner">
                                        <form name="addForm" method="POST" action="{{ route('propertiesAddPost') }}" enctype="multipart/form-data">
                                          @csrf
                                          <div class="preview-block">
                                              <span class="preview-title-lg overline-title">Property Details</span>
                                              <div class="row gy-4">
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Title</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="title" class="form-control" id="property_title" placeholder="Title"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Location</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="location" class="form-control" id="inputLastName" placeholder="Location"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Size</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="size" class="form-control" id="inputLastName" placeholder="Size"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Paid Amount</label>
                                                          <div class="form-control-wrap">
                                                              <input type="number" name="paid_amount" class="form-control" id="inputLastName" placeholder="Paid Amount"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Remaining Amount</label>
                                                          <div class="form-control-wrap">
                                                              <input type="number" name="remaining_amount"  data-type="currency" class="form-control" id="inputLastName" placeholder="Remaining Amount"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Stamp Date</label>
                                                          <div class="form-control-wrap">
                                                              <input type="date" name="stamp_date" class="form-control" id="inputLastName" placeholder="Stamp Date"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Status</label>
                                                          <div class="form-control-wrap">
                                                              <input type="text" name="status" class="form-control" id="inputLastName" placeholder="Status"  required>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Customer</label>
                                                          <div class="form-control-wrap">
                                                            <select name="customer_id" class="form-control">
                                                              @foreach ($customers as $c)
                                                                <option value="{{$c->id}}">{{$c->name}} - {{$c->phone}}</option>
                                                              @endforeach
                                                            </select>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Payment Details</label>
                                                          <div class="form-control-wrap">
                                                              <textarea name="payment_details" class="form-control"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Comments</label>
                                                          <div class="form-control-wrap">
                                                              <textarea name="comments" class="form-control"></textarea>
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Stamp Paper File</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="stamp_paper" (change)="getFile($event)">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Additional File</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="other_file_1" (change)="getFile($event)">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Additional File</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="other_file_2" (change)="getFile($event)">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Additional File</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="other_file_3" (change)="getFile($event)">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Additional File</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="other_file_4" (change)="getFile($event)">
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <label class="form-label" for="default-01">Additional File</label>
                                                          <div class="form-control-wrap">
                                                              <input type="file" name="other_file_5" (change)="getFile($event)">
                                                              <input type="hidden" name="latitude" id="latitude" value="" />
                                                              <input type="hidden" name="longitude" id="longitude" value="" />
                                                          </div>
                                                      </div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div id="map" style="width:100%;height:450px;"></div>
                                                  </div>
                                                  <div class="col-sm-12">
                                                      <div class="form-group">
                                                          <button type="submit" class="btn btn-primary">Add Property</button>
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
  @section('customJS')
    <script>
    var marker = null;
    var icon = {
        url: "https://www.letting-genie.net/_webedit/cached-images/47.png", // url
        scaledSize: new google.maps.Size(45, 45), // scaled size
    };
    function initMap() {
      var init_location = new google.maps.LatLng(33.9908154,71.5125985);
      var myOptions = {
        zoom: 12,
        center: init_location
      };
      map = new google.maps.Map(document.getElementById('map'), myOptions);
      google.maps.event.addListener(map, 'click', function(event) {
        var location = event.latLng;
        if (marker != null)
        {
          marker.setMap(null);
          marker = null;
        }
        marker = new google.maps.Marker({
          opacity:0.8,
          position: new google.maps.LatLng(location.lat(), location.lng()),
          map: map,
          title: $('#property_title').val(),
          icon: icon
        });
        $('#latitude').val(location.lat());
        $('#longitude').val(location.lng());
      });
    }
    initMap();
    </script>
  @endsection
</x-app-layout>

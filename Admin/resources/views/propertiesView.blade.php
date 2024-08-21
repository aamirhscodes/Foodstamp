<x-app-layout>
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-between g-3">
                      <div class="nk-block-head-content">
                          <h3 class="nk-block-title page-title">Customer: {{$property->customer->name}}</h3>
                          <div class="nk-block-des text-soft">
                              <ul class="list-inline">
                                  <li>Email: <span class="text-base">{{$property->customer->email}}</span></li>
                                  <li>Contact #: <span class="text-base">{{$property->customer->phone}}</span></li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div><!-- .nk-block-head -->
              <div class="nk-block">
                  <div class="card">
                    <div class="card-content">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#staff"><em class="icon ni ni-user-circle"></em><span>Property Details</span></a>
                            </li>
                        </ul><!-- .nav-tabs -->
                        <div class="card-inner">
                          <div class="tab-content">
                              <div class="tab-pane active" id="staff">
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <h5 class="title">Property Information</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list" style="max-width:100% !important;">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Title</span>
                                                <span class="profile-ud-value">{{$property->title}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Customer</span>
                                                <span class="profile-ud-value">{{$property->customer->name}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Status</span>
                                                <span class="profile-ud-value">{{$property->status}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Location</span>
                                                <span class="profile-ud-value">{{$property->location}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Size</span>
                                                <span class="profile-ud-value">{{$property->size}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Paid Amount</span>
                                                <span class="profile-ud-value">Rs. {{number_format($property->paid_amount)}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Remaining Amount</span>
                                                <span class="profile-ud-value">Rs. {{number_format($property->remaining_amount)}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Payment Details</span>
                                                <span class="profile-ud-value">{{$property->payment_details}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Stamp Date</span>
                                                <span class="profile-ud-value">{{$property->stamp_date}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Comments</span>
                                                <span class="profile-ud-value">{{$property->comments}}</span>
                                            </div>
                                        </div>
                                        @if ($property->stamp_paper != null)
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Stamp Paper</span>
                                                <span class="profile-ud-value"><a href="{{URL::asset('uploads')}}/{{$property->stamp_paper}}" target="_blank">View Document</a></span>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($property->other_file_1 != null)
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Additional File</span>
                                                <span class="profile-ud-value"><a href="{{URL::asset('uploads')}}/{{$property->other_file_1}}" target="_blank">View Document</a></span>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($property->other_file_2 != null)
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Additional File</span>
                                                <span class="profile-ud-value"><a href="{{URL::asset('uploads')}}/{{$property->other_file_2}}" target="_blank">View Document</a></span>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($property->other_file_3 != null)
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Additional File</span>
                                                <span class="profile-ud-value"><a href="{{URL::asset('uploads')}}/{{$property->other_file_3}}" target="_blank">View Document</a></span>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($property->other_file_4 != null)
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Additional File</span>
                                                <span class="profile-ud-value"><a href="{{URL::asset('uploads')}}/{{$property->other_file_4}}" target="_blank">View Document</a></span>
                                            </div>
                                        </div>
                                        @endif
                                        @if ($property->other_file_5 != null)
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Additional File</span>
                                                <span class="profile-ud-value"><a href="{{URL::asset('uploads')}}/{{$property->other_file_5}}" target="_blank">View Document</a></span>
                                            </div>
                                        </div>
                                        @endif

                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                              </div>
                            </div>
                          </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card-content -->
                  </div><!-- .card -->
              </div><!-- .nk-block -->
              <div class="nk-block">
                  <div class="card">
                    <div class="card-content">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#complaint"><em class="icon ni ni-user-circle"></em><span>All Locations</span></a>
                            </li>
                        </ul><!-- .nav-tabs -->
                        <div class="card-inner">
                          <div class="tab-content">
                              <div class="tab-pane active" id="complaint">
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-line">
                                        <h6 class="title overline-title text-base">Location On Map</h6>
                                    <div>
                                        <div id="map" style="width:100%;height:550px;"></div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                              </div>
                          </div>
                        </div><!-- .card-inner -->
                    </div><!-- .card-content -->
                  </div><!-- .card -->
              </div><!-- .nk-block -->
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
      marker = new google.maps.Marker({
        opacity:0.8,
        position: new google.maps.LatLng({{$property->latitude}}, {{$property->longitude}}),
        map: map,
        title: $('#property_title').val(),
        icon: icon
      });
    }
    initMap();
    </script>
  @endsection
</x-app-layout>

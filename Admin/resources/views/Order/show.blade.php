<x-app-layout>
  <div class="container-fluid">
      <div class="nk-content-inner">
          <div class="nk-content-body">
              <div class="nk-block-head nk-block-head-sm">
                  <div class="nk-block-between g-3">
                      <div class="nk-block-head-content">
                          <h3 class="nk-block-title page-title">Order # <strong class="text-primary small">{{$order->id}}</strong></h3>
                          <div class="nk-block-des text-soft">
                              <ul class="list-inline">
                                  <li>Customer: <span class="text-base">{{$order->name}}</span></li>
                                  <li>Created: <span class="text-base">{{$order->created_at->format('d-m-Y H:i:s')}}</span></li>
                              </ul>
                          </div>
                          <div class="nk-block-des text-soft" style="margin-top:20px;">
                              <ul class="list-inline">
                                  <li><a href="{{route('getQR', $order->id)}}" id="getQRCodesButton" class="btn btn-primary">Get QR Codes</a></li>
                                  <li><a href="#" id="markDeliveredButton" class="btn btn-primary">Mark Delivered</a></li>
                              </ul>
                          </div>
                      </div>
                      <div class="nk-block-head-content">
                          <a href="{{route('Order.index')}}" class="btn btn-outline-light bg-white d-none d-sm-inline-flex"><em class="icon ni ni-arrow-left"></em><span>Back</span></a>
                          <a href="{{route('Order.index')}}" class="btn btn-icon btn-outline-light bg-white d-inline-flex d-sm-none"><em class="icon ni ni-arrow-left"></em></a>
                      </div>
                  </div>
              </div><!-- .nk-block-head -->
              <div class="nk-block">
                  <div class="card">
                    <div class="card-content">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#complaint"><em class="icon ni ni-user-circle"></em><span>Order Details</span></a>
                            </li>
                        </ul><!-- .nav-tabs -->
                        <div class="card-inner">
                          <div class="tab-content">
                              <div class="tab-pane active" id="complaint">
                                <div class="nk-block">
                                    <div class="nk-block-head">
                                        <h5 class="title">Customer Information</h5>
                                    </div><!-- .nk-block-head -->
                                    <div class="profile-ud-list" style="max-width:100% !important;">
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Name</span>
                                                <span class="profile-ud-value">{{$order->name}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Email</span>
                                                <span class="profile-ud-value">{{$order->email}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Phone</span>
                                                <span class="profile-ud-value">{{$order->phone}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Address</span>
                                                <span class="profile-ud-value">{{$order->shipping_address}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Total Amount</span>
                                                <span class="profile-ud-value">Rs. {{number_format($order->total_amount)}}</span>
                                            </div>
                                        </div>
                                        <div class="profile-ud-item">
                                            <div class="profile-ud wider">
                                                <span class="profile-ud-label">Status</span>
                                                <span class="profile-ud-value">{{$order->status}}</span>
                                            </div>
                                        </div>
                                    </div><!-- .profile-ud-list -->
                                </div><!-- .nk-block -->
                                <div class="nk-divider divider md"></div>
                                <div class="nk-block">
                                    <div class="nk-block-head nk-block-head-line">
                                        <h6 class="title overline-title text-base">Stamp Details</h6>
                                    </div><!-- .nk-block-head -->
                                    <div class="col-12">
                                      <table class="table" style="width:100%">
                                        <thead>
                                          <th>Price</th>
                                          <th>Quantity</th>
                                          <th>QR Code</th>
                                        </thead>
                                        <tbody>
                                            @foreach($details as $d)
                                              <tr>
                                                <td>{{$d->stamp->title}}</td>
                                                <td>1</td>
                                                <td>
                                                  <img src="{{URL::asset('')}}images/qrcodes/{{$d->qr_code}}.png" width="100px" />
                                                </td>
                                              </tr>
                                            @endforeach
                                        </tbody>
                                      </table>
                                    </div>

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
</x-app-layout>

@extends('layout.app')
@section('content')
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">

            <div class="col-sm-12 table-responsive mt-4">
                <table class="table cart-table">
                    <thead>
                        <tr class="table-head">
                            <th scope="col">Stamp Price</th>
                            <th scope="col">quantity</th>
                            <th scope="col">action</th>
                            <th scope="col">total</th>
                        </tr>
                    </thead>

                      @foreach ($products as $p)
                          <tbody>
                            <tr>
                                <td>
                                    <a href="#">Rs. {{$p->Stamp->price}}</a>
                                </td>
                                <td>
                                    <div class="qty-box">
                                        <div class="input-group">
                                            <input type="number" name="quantity" class="form-control input-number" value="{{$p->total}}" data-id="{{$p->stamp_id}}">
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <a href="#" class="removeCart" data-id="{{$p->stamp_id}}">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                                <td>
                                    <h2 class="td-color">Rs. {{$p->Stamp->price * $p->total}}</h2>
                                </td>
                            </tr>
                        </tbody>
                      @endforeach

                </table>
            </div>


            <div class="cart-checkout-section">
              <div class="row">
                <div class="col-lg-8">
                    <div class="left-side-button float-start">
                        <a href="{{route('home')}}" class="btn btn-solid-default btn fw-bold mb-0 ms-0">
                            <i class="fas fa-arrow-left"></i> Buy More</a>
                    </div>
                </div>
                  <div class="col-lg-4">
                      <div class="cart-box">
                          <div class="cart-box-details">
                              <div class="total-details">
                                  <div class="top-details">
                                      <h3>Cart Totals</h3>
                                      <h6>Total <span>Rs. {{number_format($cart->total_amount)}}</span></h6>
                                  </div>
                                  <div class="bottom-details">
                                      <a href="{{route('checkout')}}">Process Checkout</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('cart_data')
<li>
    <button type="button" class="btn btn-solid-default btn-spacing" onclick="window.location.href='{{route('cart')}}'">
        <i data-feather="shopping-cart" class="pe-2"></i>
        @if (isset($cart))
         <span id="cart_Total">Rs. {{$cart->total_amount}}</span>
        @else
         <span id="cart_Total">Rs. 0</span>
        @endif

    </button>
</li>
@endsection

@section('customJS')
<script>
$('.removeCart').on('click', function(e){
  e.preventDefault();
  var data_to_post = {
    "_token": "{{ csrf_token() }}",
    'stamp_id': $(this).data('id'),
  };
  $.ajax({
       type:'POST',
       url:"{{ route('removeCart') }}",
       data:data_to_post,
       success:function(data){
         window.location.reload();
       }
    });
});

$('.input-number').on('change', function(){
  var data_to_post = {
    "_token": "{{ csrf_token() }}",
    'stamp_id': $(this).data('id'),
    'quantity': $(this).val()
  };
  $.ajax({
       type:'POST',
       url:"{{ route('updateCart') }}",
       data:data_to_post,
       success:function(data){
         window.location.reload();
       }
    });
})
</script>
@endsection

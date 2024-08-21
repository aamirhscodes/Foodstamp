@extends('layout.app')
@section('content')
<section class="section-b-space">
		<div class="container">
				<div class="row g-4">
						<div class="col-lg-8">
								<h3 class="mb-3">Billing address</h3>
								<form class="needs-validation" method="post" action="{{route('placeOrder')}}">
									@csrf
										<div class="row g-4">
												<div class="col-md-6">
														<label for="fname" class="form-label">First Name</label>
														<input type="text" class="form-control" name="fname" id="fname" placeholder="Enter First Name" required>
												</div>
												<div class="col-md-6">
														<label for="lname" class="form-label">Last Name</label>
														<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" required>
												</div>
												<div class="col-md-6">
														<label for="lname" class="form-label">Contact Number</label>
														<div class="input-group">
																<input type="text" class="form-control" name="phone" placeholder="Contact Number" required>
														</div>
												</div>

												<div class="col-md-6">
														<label for="email" class="form-label">Email address</label>
														<input type="email" class="form-control" id="email" name="email" placeholder="example@example.com"
																required>
												</div>

												<div class="col-md-6">
														<label for="address" class="form-label">Address</label>
														<input type="text" class="form-control" id="address" name="address1" aria-describedby="emailHelp"
																placeholder="1234 Main St" required>
												</div>

												<div class="col-md-6">
														<label for="address2" class="form-label">Address 2</label>
														<input type="text" class="form-control" id="address2" name="address2" aria-describedby="emailHelp"
																placeholder="1234 Main St" required>
												</div>

												<div class="col-md-6">
														<label for="city" class="form-label">City</label>
														<input type="text" class="form-control" id="city" name="city" aria-describedby="emailHelp"
																placeholder="City" required>
												</div>

												<div class="col-md-6">
														<label for="zip" class="form-label">Post Code</label>
														<input type="text" class="form-control" id="zip" name="postcode" aria-describedby="emailHelp"
																placeholder="44000" required>
												</div>
										</div>
										<button class="btn btn-solid-default mt-4" type="submit">Place Order</button>
										@if (\Session::has('error'))
										    <div class="alert alert-danger">
										        <p>{!! \Session::get('error') !!}</p>
										    </div>
										@endif
								</form>
						</div>

						<div class="col-lg-4">
								<div class="your-cart-box">
										<h3 class="mb-3 d-flex text-capitalize">Your cart<span
														class="badge bg-theme new-badge rounded-pill ms-auto bg-dark">3</span>
										</h3>
										<ul class="list-group mb-3">
											@foreach ($products as $p)
											<li class="list-group-item d-flex justify-content-between lh-condensed">
													<div>
															<h6 class="my-0">Stamp Rs. {{$p->Stamp->price}}</h6>
															<small>Qty: {{$p->total}}</small>
													</div>
													<span>Rs. {{number_format($p->total * $p->Stamp->price)}}</span>
											</li>
											@endforeach
												<li class="list-group-item d-flex lh-condensed justify-content-between">
														<span class="fw-bold">Total (PKR)</span>
														<strong>Rs. {{number_format($cart->total_amount)}}</strong>
												</li>
										</ul>

								</div>
						</div>
				</div>
		</div>
</section>
@endsection

@section('customJS')
<script>
	jQuery(document).ready(function(){
		$('input[name=shipping_method]').change(function () {
		    if ($(this).prop("checked")) {
		        $('#os-total-delivery').html($(this).data('cost-text'));
						var order_total = {{$cart->total_amount}};
						order_total += $(this).data('cost') / 100;
						$('#os-totals-total').html('£' + order_total)
		    }
		});
	});
</script>
<script src="https://js.stripe.com/v2/"></script>
<script>
Stripe.setPublishableKey('pk_test_51LNC96ILQ1yMOXdWKGXvLvNZIYwxx6ZRXYIeGNMQ4rMPWVWuJSjhzu6wddwX8BKpfOFHjSQhNxo0NOqrYtfKC1VN00J1rG3Pj0');

// Callback to handle the response from stripe
function stripeResponseHandler(status, response) {
		if (response.error) {
				$('#c-proceed').removeAttr("disabled");
				$("#ErrorText").html('<p>'+response.error.message+'</p>');
				$("#ErrorText").css('display', 'block');
		} else {
				var form$ = $("#checkout_form");
				var token = response.id;
				form$.append("<input type='hidden' name='stripeToken' value='" + token + "' />");
				form$.get(0).submit();
		}
}

$(document).ready(function() {
		// On form submit
		$("#checkout_form").submit(function() {
				// Disable the submit button to prevent repeated clicks
				$('#c-proceed').attr("disabled", "disabled");

				// Create single-use token to charge the user
				Stripe.createToken({
						number: $('#card_no').val(),
						exp_month: $('#expiry_month').val(),
						exp_year: $('#expiry_year').val(),
						cvc: $('#card_cvv').val()
				}, stripeResponseHandler);

				// Submit from callback
				return false;
		});
});
</script>
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

@extends('layout.app')
@section('content')
<div id="c" data-checkout-url="/checkout" data-countdown="2022-07-19T00:00:00+01:00">
		<div class="d-md-flex">
			<div class="col-12 p-2 p-md-3 p-xl-4 text-center">
				<div id="c-m">
					<img src="https://www.freeiconspng.com/thumbs/success-icon/success-icon-1.png" width="150px" class="img-fluid" />
					<br><br><br>
					<h3>Success</h3>
					<p>Your order has been placed successfully!</p>
				</div>
			</div>
		</div>
</div>

@endsection

@extends('layout.app')
@section('content')
<div class="bg-p d-flex justify-content-between align-items-center" id="promo">
   <span style="color:#009af4;">Your No. 1 Trade Sign Partner!</span>
   <a href="{{route('contact')}}" style="width: 230px !important;padding-top: 0.2rem; letter-spacing: 0.5px; padding-bottom: 0.2rem; font-size: 1rem; background: #171717; background: -webkit-linear-gradient(top left, #171717, #293382); background: -moz-linear-gradient(top left, #171717, #293382); background: linear-gradient(to bottom right, #171717, #293382);" class="text-uppercase bg-primary rounded px-1 text-white"> <span>
                     <svg style="height:1em;position:relative;top:-5px;" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="white" d="M21 14.655l-5.799.908 3.393 6.917-3.111 1.52-3.413-6.982-4.07 3.651v-15.857l13 9.843m-12.792-10.905l-1.042.519-1.536-3.087 1.043-.519 1.535 3.087zm2.599-3.577l-1.152-.173-.513 3.409 1.152.173.513-3.409zm-4.779 5.848l.557-1.023-3.028-1.648-.557 1.023 3.028 1.648z" />
                     </svg>
                  </span> Custom Enquiry </a>
</div>
<div id="c" style="padding:20px;overflow:hidden;">
	<div class="row">
		<div class="col-4 bg-light py-3 pl-3">
			<h5>My Account</h5>
			<ul>
				<li>
					<a class="item" href="{{route('profile')}}"> <i class="icon home"></i> Dashboard </a>
				</li>
				<li>
					<a class="item" href="{{route('profile')}}"> <i class="icon user"></i> Personal information </a>
				</li>
				<li>
					<a class="item" href="{{route('changePassword')}}"> <i class="icon lock"></i> Change password </a>
				</li>
				<li>
					<a class="item" href="{{route('address')}}"> <i class="icon book"></i> Address book </a>
				</li>
				<li>
					<a class="item" href="{{route('orders')}}"> <i class="icon cart"></i> Order history </a>
				</li>
			</ul>
		</div>
    <div class="col-8 px-3">
    	<h1 class="text-center">
        Order history
      </h1>
    	<hr class="my-3">
    	<div class="mt-0 mb-3 h3 text-center">Browse your orders from the past</div>
    	<div class="ui hidden divider"></div>
    	<div class="sylius-grid-wrapper">
    		<div class="sylius-grid-nav">
    			<div class="sylius-grid-nav__pagination"> </div>
    		</div>
    		<div class="alert alert-warning">Sorry, You have not placed any orders.</div>
    	</div>
    </div>
	</div>
</div>
@endsection

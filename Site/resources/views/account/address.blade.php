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
    	<div class="mb-2">
    		<div class="column">
    			<h1 class="text-center">
          Address book
          </h1>
    			<hr>
        </div>
    		<div class="middle aligned column"> <a href="{{route('addressAdd')}}" class="btn btn-primary"> Add address</a> </div>
    	</div>
    	<div class="font-weight-bold mb-2">Your Addresses</div>
      @foreach($addresses as $a)
      <div class="bg-light p-3" id="sylius-default-address">
        <div class="ui stackable two column grid">
          <div class="column"> <address>
            <strong>{{$a->address_label}}</strong><br>
            <strong>{{$a->name}}</strong><br>
            {{$a->contact}}<br>
            {{$a->street}}<br>
            {{$a->city}}, {{$a->postcode}}<br>
            <i class="gb flag"></i>
            UNITED KINGDOM
          </address> </div>
          <div class="d-flex justify-content-between align-items-center">
            <a class="ui labeled icon button " href="{{route('addressEdit', $a->id)}}"> <i class="icon pencil"></i> Edit </a>
            <a class="ui red labeled icon button" href="{{route('addressDelete', $a->id)}}"> <i class="icon trash"></i> Delete </a>
          </div>
        </div>
      </div>
      @endforeach
      <div class="ui divider"></div>
    </div>
	</div>
</div>
@endsection

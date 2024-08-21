@extends('layout.adminpanel')
@section('content')
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<form method="post" action="{{route('editCustomerPost', $customer->id)}}" enctype="multipart/form-data">
		@csrf
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h3 class="text-themecolor">Edit Customer</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Customer</li>
					</ol>
				</div>
				<div class="">
					<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-6">
					<div class="form-group">
						<label class="control-label text-primary font-12">Name</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="name" id="name" name="name" value="{{$customer->name}}">
							<input type="hidden" name="customer_id" value="{{$customer->id}}" />
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6">
					<div class="form-group">
						<label class="control-label text-primary font-12">Business Name</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="business" id="business" name="business" value="{{$customer->business}}"> </div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6">
					<div class="form-group">
						<label class="control-label text-primary font-12">Email</label>
						<div>
							<input type="email" class="form-control font-14" placeholder="email" name="email" id="email" value="{{$customer->email}}"> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Phone</label>
						<div>
							<input type="tel" class="form-control font-14" placeholder="phone" id="phone" name="phone" value="{{$customer->phone}}"> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Address</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="Address" id="address" name="address" value="{{$customer->address}}"> </div>
					</div>
				</div>
			</div>

			<input type="submit" class="btn  btn-primary" value="save"> </div>
	</form>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
</div>
@endsection

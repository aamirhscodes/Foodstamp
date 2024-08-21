@extends('layout.adminpanel')
@section('content')
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<form method="post" action="{{url('addprojectPost')}}" enctype="multipart/form-data">
		@csrf
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h3 class="text-themecolor">Add Project</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Project</li>
					</ol>
				</div>
				<div class="">
					<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Customer</label>
						<div>
							<select name='customer_id' class="form-control" required>
								<option value="">Please Select Customer</option>
								@foreach ($customers as $c)
									<option value="{{$c->id}}">{{$c->business}} - {{$c->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Title</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="title" id="title" name="title" required> </div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Setup Fee</label>
						<div>
							<input type="number" class="form-control font-14" placeholder="Setup Fee" id="setup_fee" name="setup_fee" required> </div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Monthly Fee</label>
						<div>
							<input type="number" class="form-control font-14" placeholder="Monthly Fee" id="monthly_fee" name="monthly_fee" required> </div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Has Phases</label>
						<div>
							<input type="checkbox" class="form-control font-14" name="has_phases"> </div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Order Details</label>
						<div>
							<textarea id="order_details" class="form-control font-14" name="order_details" cols="12" rows="6" required></textarea>
						</div>
					</div>
				</div>
				<div class="col-6">
					<div class="upload-photo">
						<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" name="report" /> </div>
				</div>
			</div>
			<input type="submit" class="btn  btn-primary" value="save"> </div>
	</form>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
</div>
@endsection

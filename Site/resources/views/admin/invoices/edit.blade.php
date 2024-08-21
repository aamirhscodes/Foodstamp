@extends('layout.adminpanel')
@section('content')
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<form method="post" action="{{url('editinvoicePost')}}" enctype="multipart/form-data">
		@csrf
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h3 class="text-themecolor">Edit Invoice</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Invoice</li>
					</ol>
				</div>
				<div class="">
					<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Title</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="Title" id="title" name="title" value="{{$invoice->title}}">
							<input type="hidden" name="invoice_id" value="{{$invoice->id}}" />
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Project</label>
						<div>
							<select name='project_id' class="form-control" required>
								@foreach ($projects as $c)
									<option value="{{$c->id}}"
										@if ($c->id == $project->project_id)
											selected
										@endif
										>{{$c->title}}</option>
								@endforeach
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Fixed Amount</label>
						<div>
							<input type="number" class="form-control font-14" placeholder="Fixed Amount" id="fixed_amount" name="fixed_price" value="{{$invoice->fixed_price}}" required> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-xs-12">
					<div class="form-group">
						<label class="control-label text-primary font-12">Monthly Amount</label>
						<div>
							<input type="number" class="form-control font-14" placeholder="Monthly Amount" id="monthly_amount" name="monthly_price"  value="{{$invoice->monthly_price}}" required> </div>
					</div>
				</div>
			</div>
			<
			<input type="submit" class="btn  btn-primary" value="save"> </div>
	</form>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
</div>
@endsection

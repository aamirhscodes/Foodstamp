@extends('layout.adminpanel')
@section('content')
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<form method="post" action="{{url('addblogpost')}}" enctype=multipart/form-data> @csrf
		<div class="container-fluid">
			<div class="row page-titles">
				<div class="col-md-5 align-self-center">
					<h3 class="text-themecolor">Add Blog</h3>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active">Datatable</li>
					</ol>
				</div>
				<div class="">
					<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-xs-6">
					<div class="form-group">
						<label class="control-label text-primary font-12">Title</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="title" id="name" name="title"> </div>
					</div>
				</div>
				<div class="col-sm-6 col-xs-6">
					<div class="form-group">
						<label class="control-label text-primary font-12">Slug</label>
						<div>
							<input type="text" class="form-control font-14" placeholder="slug" name="slug" id="name"> </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<h6 class="card-subtitle">Description</h6>
							<div class="form-group">
								<textarea class="textarea_editor form-control wysiwyg-editor" rows="15" placeholder="Enter text ..." name="desc"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-6">
					<div class="upload-photo">
						<input type="file" id="input-file-now-custom-1" class="dropify" data-default-file="" name="blogimage" /> </div>
				</div>
			</div>
			<input type="submit" class="btn  btn-primary" value="save"> </div>
	</form>
	<!-- ============================================================== -->
	<!-- End Page wrapper  -->
	<!-- ============================================================== -->
</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.5.1/less.js"></script>
	<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
	<script src="{{asset('admin/dist/js/jquery.wysiwygEditor.js')}}"></script>
	<script type="text/javascript">
	$('.wysiwyg-editor').wysiwygEditor();
	</script>
@endsection

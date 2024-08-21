@extends('layout.adminpanel')
@section('content')
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
	<!-- ============================================================== -->
	<!-- Container fluid  -->
	<!-- ============================================================== -->
	<div class="container-fluid">
		<!-- ============================================================== -->
		<!-- Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h3 class="text-themecolor">Blogs
                        </h3>
				<!--
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">Ecommerce Products</li>
                        </ol>
-->
			</div>
			<div class="">
				<button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right ml-10"><i class="ti-settings text-white"></i></button>
			</div>
		</div>
		<!-- ============================================================== -->
		<!-- End Bread crumb and right sidebar toggle -->
		<!-- ============================================================== -->
		<!-- ============================================================== -->
		<!-- Start Page Content -->
		<!-- ============================================================== -->
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="demo-foo-addrow" class="table product-table table-hover contact-list" data-page-size="10">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Image</th>
										<th>Body</th>
										<td class="op-0">&nbsp;</td>
										<td class="op-0">&nbsp;</td>
									</tr>
								</thead>
								<tbody> @foreach($blog as $blogs)
									<tr>
										<td>{{$blogs->id}}</td>
										<td class="text-dark font-bold">{{$blogs->title}} </td>
										<td><img style="width:76px;height:44px" src="img/blogs/{{$blogs->image}}" alt="" title=""></td>
										<td>
											<?php  echo substr($blogs->body,0,400)."....."?>
										</td>
										<td class="text-center"><a href="{{url('/updateblog',$blogs->id)}}"><i class="fa fa-pencil text-primary"></i></a></td>
										<td class="text-center"><a href="{{url('delblogs',$blogs->id)}}"><i class="fa fa-trash text-danger text-danger"></i></a></td>
									</tr> @endforeach </tbody>
								<tfoot>
									<tr>
										<td colspan="2"> <a class="btn btn-primary btn-rounded" href="{{url('addblogs')}}">Add New Blog</a> </td>
										<td colspan="7">
											<div class="text-right">
												<ul class="pagination"> </ul>
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
				<!-- Column -->
			</div>
		</div>

	</div>


</div>
</div>
</body>
@endsection

@extends('layout.adminpanel')
@section('content')

<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h3 class="text-themecolor">Projects</h3>
			</div>
			<div class="">
				<a class="btn btn-primary" href="{{route('addproject')}}"><i class="ti-settings text-white"></i>Add Project</a>
			</div>
		</div>
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
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Setup Fee</th>
										<th>Monthly Fee</th>
										<th>Has Phases</th>
										<td class="op-0">&nbsp;</td>
										<td class="op-0">&nbsp;</td>
									</tr>
								</thead>
								<tbody> @foreach($projects as $p)
									<tr>
										<td>{{$p->id}}</td>
										<td>{{$p->title}}</td>
										<td>{{$p->customer->name}}</td>
										<td>{{$p->customer->email}}</td>
										<td>{{$p->customer->phone}}</td>
										<td>{{$p->setup_fee}}</td>
										<td>{{$p->monthly_fee}}</td>
										<td>
											@if ($p->has_phases == 1)
												<span>Yes</span>
											@else
												<span>No</span>
											@endif
										</td>
										<td class="text-center"><a href="{{route('editproject',$p->id)}}"><i class="fa fa-pencil text-primary"></i></a></td>
										<td class="text-center"><a href="{{route('deleteproject',$p->id)}}"><i class="fa fa-trash text-danger text-danger"></i></a></td>
									</tr>
									@endforeach
								</tbody>
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

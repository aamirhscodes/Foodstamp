@extends('layout.adminpanel')
@section('content')

<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h3 class="text-themecolor">Customers</h3>
			</div>
			<div class="">
				<a class="btn btn-primary" href="{{route('addCustomer')}}"><i class="ti-settings text-white"></i>Add Customer</a>
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
										<th>Name</th>
										<th>Email</th>
										<th>Phone</th>
										<td class="op-0">&nbsp;</td>
										<td class="op-0">&nbsp;</td>
									</tr>
								</thead>
								<tbody> @foreach($customers as $c)
									<tr>
										<td>{{$c->id}}</td>
										<td>{{$c->name}}</td>
										<td>{{$c->email}}</td>
										<td>{{$c->phone}}</td>
										<td class="text-center"><a href="{{route('editCustomer',$c->id)}}"><i class="fa fa-pencil text-primary"></i></a></td>
										<td class="text-center"><a href="{{route('deleteCustomer',$c->id)}}"><i class="fa fa-trash text-danger text-danger"></i></a></td>
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

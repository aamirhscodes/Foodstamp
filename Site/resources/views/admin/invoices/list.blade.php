@extends('layout.adminpanel')
@section('content')

<div class="page-wrapper">
	<div class="container-fluid">
		<div class="row page-titles">
			<div class="col-md-5 align-self-center">
				<h3 class="text-themecolor">Invoices</h3>
			</div>
			<div class="">
				<a class="btn btn-primary" href="{{route('addinvoice')}}"><i class="ti-settings text-white"></i>Add Invoice</a>
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
										<th>Customer</th>
										<th>Project</th>
										<th>Fixed Amount</th>
										<th>Monthly Amount</th>
										<th>View</th>
										<td class="op-0">&nbsp;</td>
										<td class="op-0">&nbsp;</td>
									</tr>
								</thead>
								<tbody> @foreach($invoices as $c)
									<tr>
										<td>{{$c->id}}</td>
										<td>{{$c->title}}</td>
										<td>{{$c->customer->business}} - {{$c->customer->name}}</td>
										<td>{{$c->project->title}}</td>
										<td>{{$c->fixed_price}}</td>
										<td>{{$c->monthly_price}}</td>
										<td><a href="{{route('quote', $c->uuid)}}">View</a></td>
										<td class="text-center"><a href="{{route('editinvoice',$c->id)}}"><i class="fa fa-pencil text-primary"></i></a></td>
										<td class="text-center"><a href="{{route('deleteinvoice',$c->id)}}"><i class="fa fa-trash text-danger text-danger"></i></a></td>
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

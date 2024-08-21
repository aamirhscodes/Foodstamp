<x-app-layout>
  <div class="container-fluid">
	<div class="nk-content-inner">
		<div class="nk-content-body">
			<div class="nk-block-head nk-block-head-sm">
				<div class="nk-block-between">
					<div class="nk-block-head-content">
						<h3 class="nk-block-title page-title">Dashboard</h3></div>
				</div>
			</div>
			<div class="nk-block">
				<div class="row g-gs">
					<div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('AgentReceiving.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Agent Receivings</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($agents_receivings)}}</div>
										</div>
										<div class="info"><span class="change up text-success">{{$agents_count}}</span><span> Agents</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Salary.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Salaries Paid</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($salaries)}}</div>
										</div>
										<div class="info"><span class="change down text-success">{{$employee_count}}</span><span> Employees</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Grant.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Grants</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($grants_sum)}}</div>
										</div>
										<div class="info"><span class="change down text-success">{{$grants_count}}</span><span> Grants</span></div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Expense.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Expenses</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($expenses)}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Patwari.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Patwari Payments</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($patwari_payments)}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Partner.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Partner Payments</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($partner_payments)}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Intiqal.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Intiqal Payments</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($inqiqal_payments)}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
          <div class="col-xxl-2 col-sm-6">
						<div class="card" onclick="window.location.href='{{route('Agreement.index')}}'">
							<div class="nk-ecwg nk-ecwg6">
								<div class="card-inner">
									<div class="card-title-group">
										<div class="card-title">
											<h6 class="title">Agreement Payments</h6></div>
									</div>
									<div class="data">
										<div class="data-group">
											<div class="amount">Rs. {{number_format($agreement_payments)}}</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xxl-8">
						<div class="card card-full">
							<div class="card-inner">
								<div class="card-title-group">
									<div class="card-title">
										<h6 class="title">Recent Agreements</h6></div>
								</div>
							</div>
							<div class="nk-tb-list mt-n2">
								<div class="nk-tb-item nk-tb-head">
									<div class="nk-tb-col"><span>Title</span></div>
									<div class="nk-tb-col tb-col-sm"><span>Land Owner</span></div>
									<div class="nk-tb-col tb-col-md"><span>Date</span></div>
									<div class="nk-tb-col"><span>Token Amount</span></div>
                  <div class="nk-tb-col"><span>Amount Paid</span></div>
                  <div class="nk-tb-col"><span>Amount Balance</span></div>
								</div>
                @foreach ($recent_agreements as $ra)
                <div class="nk-tb-item">
                  <div class="nk-tb-col"><span class="tb-lead"><a href="{{route('Agreement.edit', $ra->id)}}">{{$ra->title}}</a></span></div>
                  <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">
                      <div class="user-name"><span class="tb-lead">{{$ra->name}} (CNIC: {{$ra->cnic}})</span></div>
                    </div>
                  </div>
                  <div class="nk-tb-col tb-col-md"><span class="tb-sub">{{$ra->date_agreement}}</span></div>
                  <div class="nk-tb-col"><span class="tb-sub tb-amount">{{number_format($ra->token_amount)}} <span>PKR</span></span></div>
                  <div class="nk-tb-col"><span class="tb-sub tb-amount">{{number_format($ra->amount_paid)}} <span>PKR</span></span></div>
                  <div class="nk-tb-col"><span class="tb-sub tb-amount">{{number_format($ra->amount_balance)}} <span>PKR</span></span></div>
                </div>
                @endforeach

							</div>
						</div>
					</div>
          <div class="col-xxl-4 col-md-8 col-lg-6">
						<div class="card h-300" style="min-height:650px;">
							<div class="card-inner">
								<div class="card-title-group mb-2">
									<div class="card-title">
										<h6 class="title">Expenses Breakdown</h6></div>
								</div>
                <div class="nk-ck-sm">
                	<canvas class="pie-chart chartjs-render-monitor" id="pieChartData" width="259" height="180" style="display: block; width: 259px; height: 180px;"></canvas>
                </div>
							</div>
						</div>
					</div>
          <div class="col-xxl-8">
						<div class="card card-full">
							<div class="card-inner">
								<div class="card-title-group">
									<div class="card-title">
										<h6 class="title">Recent Intiqals</h6></div>
								</div>
							</div>
							<div class="nk-tb-list mt-n2">
								<div class="nk-tb-item nk-tb-head">
									<div class="nk-tb-col"><span>Title</span></div>
									<div class="nk-tb-col tb-col-sm"><span>Land Owner</span></div>
									<div class="nk-tb-col tb-col-md"><span>Date</span></div>
									<div class="nk-tb-col"><span>Token Amount</span></div>
                  <div class="nk-tb-col"><span>Amount Paid</span></div>
                  <div class="nk-tb-col"><span>Amount Balance</span></div>
								</div>
                @foreach ($recent_intiqals as $ra)
                <div class="nk-tb-item">
                  <div class="nk-tb-col"><span class="tb-lead"><a href="{{route('Agreement.edit', $ra->id)}}">{{$ra->title}}</a></span></div>
                  <div class="nk-tb-col tb-col-sm">
                    <div class="user-card">
                      <div class="user-name"><span class="tb-lead">{{$ra->name}} (CNIC: {{$ra->cnic}})</span></div>
                    </div>
                  </div>
                  <div class="nk-tb-col tb-col-md"><span class="tb-sub">{{$ra->date_agreement}}</span></div>
                  <div class="nk-tb-col"><span class="tb-sub tb-amount">{{number_format($ra->token_amount)}} <span>PKR</span></span></div>
                  <div class="nk-tb-col"><span class="tb-sub tb-amount">{{number_format($ra->amount_paid)}} <span>PKR</span></span></div>
                  <div class="nk-tb-col"><span class="tb-sub tb-amount">{{number_format($ra->amount_balance)}} <span>PKR</span></span></div>
                </div>
                @endforeach

							</div>
						</div>
					</div>
          <div class="col-xxl-4 col-md-8 col-lg-6">
						<div class="card h-300" style="min-height:650px;">
							<div class="card-inner">
								<div class="card-title-group mb-2">
									<div class="card-title">
										<h6 class="title">Agent Performance</h6></div>
								</div>
                <div class="nk-ck-sm">
                	<canvas class="pie-chart chartjs-render-monitor" id="pieChartData2" width="259" height="180" style="display: block; width: 259px; height: 180px;"></canvas>
                </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@section('customJS')
<script>
var data_to_show = [
  @foreach ($expenses_breakdown as $ex)
    {{$ex->amount}},
  @endforeach
];

var labels_to_show = [
  @foreach ($expenses_breakdown as $ex)
    '{{$ex->type}}',
  @endforeach
];

var data_to_show2 = [
  @foreach ($top_agents as $ex)
    {{$ex->amount}},
  @endforeach
];

var labels_to_show2 = [
  @foreach ($top_agents as $ex)
    '{{$ex->agent->name}}',
  @endforeach
];

var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: data_to_show,
                backgroundColor: [
                    '#7C3E66', '#F2EBE9', '#243A73'
                ],
                label: 'Dataset 1'
            }],
            labels: labels_to_show
        },
        options: {
            responsive: true
        }
    };

    var config2 = {
            type: 'pie',
            data: {
                datasets: [{
                    data: data_to_show2,
                    backgroundColor: [
                        '#7C3E66', '#F2EBE9', '#243A73'
                    ],
                    label: 'Dataset 1'
                }],
                labels: labels_to_show2
            },
            options: {
                responsive: true
            }
        };

    window.onload = function() {
        var ctx = document.getElementById("pieChartData").getContext("2d");
        window.myPie = new Chart(ctx, config);

        var ctx2 = document.getElementById("pieChartData2").getContext("2d");
        window.myPie = new Chart(ctx2, config2);
    };

</script>
@endsection
</x-app-layout>

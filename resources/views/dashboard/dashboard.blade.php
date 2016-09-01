@extends('app-dashboard')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Dashboard</div>
				<div class="panel-body">

					<div class="row">

							<div class="col-md-6">
								<a href="{{url('dashboard/transaksi/jual')}}" class="btn btn-primary" type="button">
								<span class="glyphicon glyphicon-open" aria-hidden="true"></span> Transaksi Jual <span class="badge">{{$transaksi_jual}}</span>
								</a>
						</div>

						<div class="col-md-6">
							<a href="{{url('dashboard/transaksi/beli')}}" class="btn btn-primary" type="button">
							<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Transaksi Beli <span class="badge">{{$transaksi_beli}}</span>
							</a>
					</div>

					</div>
					<hr />
					<div class="row">
						<div class="col-md-6">
							<a href="{{url('dashboard/bitcoin-rate')}}" class="btn btn-warning" type="button">
							<span class="glyphicon glyphicon-open" aria-hidden="true"></span> Rate Jual 1 BTC = Rp. {{number_format($bitcoin_rate->rate_jual, 2,'.', ',')}}
							</a>
					</div>

					<div class="col-md-6">
						<a href="{{url('dashboard/bitcoin-rate')}}" class="btn btn-danger" type="button">
						<span class="glyphicon glyphicon-save" aria-hidden="true"></span> Rate Beli 1 BTC = Rp. {{number_format($bitcoin_rate->rate_beli, 2,'.', ',')}}
						</a>
				</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</div>
@endsection

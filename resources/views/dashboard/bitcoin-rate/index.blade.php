@extends('app-dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <h2>Bitcoin Rate!</h2>
      <hr />
			<div class="panel panel-default">
				<div class="panel-heading">Pengaturan Rate Bitcoin Per 1 BTC</div>
				<div class="panel-body">
					@if (Session::has('message'))
	        <div class="col-md-12">
						<div class="alert alert-info alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
	        </div>
	        @endif
					{!! Html::ul($errors->all()) !!}
					{!! Form::model($bitcoin_rate, array('route' => array('dashboard.bitcoin-rate.update', $bitcoin_rate->id), 'method' => 'PUT')) !!}

					<div class="form-group">
					{!! Form::label('rate_jual', 'Bitcoin Rate Jual (Rp)') !!}
					{!! Form::text('rate_jual', null, array('class' => 'form-control')) !!}
					</div>

          <div class="form-group">
					{!! Form::label('rate_beli', 'Bitcoin Rate Beli (Rp)') !!}
					{!! Form::text('rate_beli', null, array('class' => 'form-control')) !!}
					</div>

					{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}

					{!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

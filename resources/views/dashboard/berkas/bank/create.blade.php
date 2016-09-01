@extends('app-dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <h2>DAFTAR BANK</h2>
      <hr />
			<div class="panel panel-default">
				<div class="panel-heading">Buat Data Bank Baru</div>
				<div class="panel-body">

          {!! Html::ul($errors->all()) !!}

					@if (Session::has('message'))
	        <div class="col-md-12">
						<div class="alert alert-info alert-dismissible" role="alert">
	            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							{{ Session::get('message') }}
						</div>
	        </div>
	        @endif

          {!! Form::open(array('url' => 'dashboard/berkas/bank')) !!}

              <div class="form-group">
                {!! Form::label('nama_bank', 'Nama Bank') !!}
                {!! Form::text('nama_bank', Input::old('nama_bank'), array('class' => 'form-control', 'required' => 'required')) !!}
              </div>

          {!! Form::submit('Tambah', array('class' => 'btn btn-primary')) !!}
          <a class="btn btn-small btn-warning" href="{{ URL::to('dashboard/berkas/bank') }}">Batal</a>
          {!! Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

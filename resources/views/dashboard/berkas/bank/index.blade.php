@extends('app-dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <h2>DAFTAR BANK


					<a class="btn btn-small btn-success" href="{{ URL::to('dashboard/berkas/bank/create') }}">Buat Baru</a>
</h2>

      <hr />
      @if (Session::has('message'))
      <div class="col-md-12">
        <div class="alert alert-info alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{ Session::get('message') }}
        </div>
      </div>
      @endif

      <table class="table table-striped table-bordered">
          <thead>
              <tr>
                  <th>NAMA BANK</th>
                  <th>GANTI</th>
                  <th>HAPUS</th>
              </tr>
          </thead>
          <tbody>
          @foreach($bank as $value)
              <tr>
                  <td>{{ $value->nama_bank }}</td>
                  <td>
                      <a class="btn btn-xs btn-info" href="{{ URL::to('dashboard/berkas/bank/' . $value->id . '/edit') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    </td><td>

                      {!! Form::open(array('url' => 'dashboard/berkas/bank/' . $value->id)) !!}
                          {!! Form::hidden('_method', 'DELETE') !!}
                          <button class="btn btn-xs btn-danger" onClick="return confirm('Benar ingin menghapus?')" type="submit"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                      {!! Form::close() !!}
                  </td>
              </tr>
          @endforeach
          </tbody>
      </table>

				</div>
	</div>
</div>
@endsection

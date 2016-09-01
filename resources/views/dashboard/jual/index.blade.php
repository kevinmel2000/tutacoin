@extends('app-dashboard')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
      <h2>Transaksi Jual Bitcoin</h2>

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
                  <th>NO. TRANSAKSI</th>
                  <th>TGL. TRANSAKSI</th>
                  <th>NAMA LENGKAP</th>
									<th>EMAIL</th>
                  <th>NO. HP</th>
									<th>BANK</th>
									<th>NO. REKENING</th>
                  <th>ALAMAT BITCOIN</th>
									<th>JUAL BTC</th>
                  <th>RUPIAH</th>
              </tr>
          </thead>
          <tbody>
          @foreach($jual as $value)
              <tr>
                  <td>J{{ $value->id }}</td>
                  <td>{{ date('d-m-Y H:i:s', strtotime($value->tgl_transaksi)) }}</td>
                  <td>{{ $value->nama_lengkap }}</td>
									<td>{{ $value->email }}</td>
                  <td>{{ $value->no_hp }}</td>
									<td>{{ $value->bank }}</td>
									<td>{{ $value->no_rekening }}</td>
                  <td>{{ $value->alamat_bitcoin }}</td>
									<td>{{ $value->btc_jual }}</td>
                  <td>{{ number_format($value->rupiah_jual, 2, '.', ',') }}</td>
              </tr>
          @endforeach
          </tbody>
      </table>

				</div>
	</div>
</div>
@endsection

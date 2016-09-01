@extends('app')

@section('content')

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="msg-box3-17" style="background-color: rgb(250, 197, 28);">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">BELI BITCOIN</h3>
            </div>
        </div>
    </div>
</section>

@if(Session::has('message'))
<div>&nbsp;</div>
@else
<section class="mbr-section" id="header3-18">
    <div class="mbr-section__container container mbr-section__container--first">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">BELI 1 BTC = Rp. {{number_format($bitcoin_rate_beli, 2,'.', ',')}}</h3>
                <p class="mbr-header__subtext">Untuk Melakukan Pembelian Bitcoin, silahkan lengkapi isian dibawah.</p>
            </div>
        </div>
    </div>
</section>
@endif

<section class="mbr-section" id="content1-19">
    <div class="mbr-section__container container mbr-section__container--middle">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
              @if(Session::has('message'))
              <div class="panel panel-default">
                <div class="panel-body">

                  <div class="col-md-12">
                    <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      {{ Session::get('message') }}
                    </div>
                  </div>

                  <table class="table">
                      <tr><td>NO. TRANSAKSI</td><td>:</td><td>B{{ Session::get('no_transaksi') }}</td></tr>
                      <tr><td>TGL. TRANSAKSI</td><td>:</td><td>{{ date('d-m-Y H:i:s', strtotime(Session::get('tgl_transaksi'))) }} WIB</td></tr>
                      <tr><td>NAMA LENGKAP</td><td>:</td><td>{{ Session::get('nama_lengkap') }}</td></tr>
                      <tr><td>EMAIL</td><td>:</td><td>{{ Session::get('email') }}</td></tr>
                      <tr><td>NO. HP</td><td>:</td><td>{{ Session::get('no_hp') }}</td></tr>
                      <tr><td>BANK</td><td>:</td><td>{{ Session::get('bank') }}</td></tr>
                      <tr><td>NO. REKENING</td><td>:</td><td>{{ Session::get('no_rekening') }}</td></tr>
                      <tr><td>ALAMAT BITCOIN</td><td>:</td><td>{{ Session::get('alamat_bitcoin') }}</td></tr>
                      <tr><td>BELI BTC</td><td>:</td><td>{{ Session::get('btc_beli') }}</td></tr>
                      <tr><td>RUPIAH</td><td>:</td><td>Rp. {{ number_format(Session::get('rupiah_beli'), 0, ',', '.') }}</td></tr>
                  </table>
                  <hr />
                  KETERANGAN:
                </div>
              </div>
              @else
              <div class="panel panel-default">
                <div class="panel-body">
          				<!-- begin content -->
          				{!! '<font color="red">' . Html::ul($errors->all()) . '</font>' !!}


                  {!! Form::open(array('url' => 'beli')) !!}

                  <div class="row" ng-controller="MainCtrl">

                		<div class="col-md-6">

                      <div class="form-group">
                      <label name="nama_lengkap">Nama Lengkap <small>(Sesuai Rekening)</small></label>
                      {!! Form::text('nama_lengkap', Input::old('nama_lengkap'), array('class' => 'form-control', 'required' => 'required')) !!}
                      </div>

                      <div class="form-group">
                      {!! Form::label('email', 'Email') !!}
                      {!! Form::email('email', Input::old('email'), array('class' => 'form-control', 'required' => 'required')) !!}
                      </div>

                      <div class="form-group">
            					{!! Form::label('bank', 'Bank') !!}
            					{!! Form::select('bank', $bank, Input::old('bank'), array('class' => 'form-control', 'required' => 'required')) !!}
            					</div>

                      <div class="form-group">
                      {!! Form::label('btc_beli', 'BTC') !!}
                      <input type="text" class="form-control" required="required" name="btc_beli" ng-init="beli_bitcoin='0'" ng-model="beli_bitcoin" valid-number />

                      </div>


                    </div>

                    <div class="col-md-6">

                      <div class="form-group">
                      {!! Form::label('no_hp', 'HP') !!}
                      {!! Form::text('no_hp', Input::old('no_hp'), array('class' => 'form-control', 'required' => 'required')) !!}
                      </div>

                      <div class="form-group">
                      {!! Form::label('alamat_bitcoin', 'Alamat Bitcoin') !!}
                      {!! Form::text('alamat_bitcoin', Input::old('alamat_bitcoin'), array('class' => 'form-control', 'required' => 'required')) !!}
                      </div>

                      <div class="form-group">
                      {!! Form::label('no_rekening', 'No. Rekening') !!}
                      {!! Form::text('no_rekening', Input::old('no_rekening'), array('class' => 'form-control', 'required' => 'required')) !!}
                      </div>

                      <div class="form-group">
                      <label name="rupiah_jual">Rupiah <small>(Otomatis)</small></label>
                      <p class="form-control-static">Rp. {{beli_bitcoin * <?php echo $bitcoin_rate_beli;?> | number:2}}</p>
                      </div>
                    </div>
                    <div align="right" class="col-md-12">
                      {!! Form::submit('Beli', array('class' => 'btn btn-primary')) !!}
                    </div>

                  </div>


                  {!! Form::close() !!}
          		<!-- end content -->
            </div>
          </div>
          @endif
            </div>
        </div>
    </div>
</section>

@endsection

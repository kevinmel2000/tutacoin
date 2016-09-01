<!DOCTYPE html>
<html>
<head>
<title>Mail Reminder</title>
</head>
<body>
Order Penjualan Bitcoin anda telah kami terima<br />
dengan informasi sebagai berikut:<br />
<p>No. Transaksi: J{{$jual->id}}</p>
<p>TGL. Transaksi: {{ date('d-m-Y H:i:s', strtotime($jual->tgl_transaksi)) }} WIB</p>
<p>Nama Lengkap: {{$jual->nama_lengkap}}</p>
<p>Email: {{$jual->email}}</p>
<p>No. HP: {{$jual->no_hp}}</p>
<p>Alamat Bitcoin: {{$jual->alamat_bitcoin}}</p>
<p>BTC: {{$jual->btc_jual}}</p>
<p>Rupiah: Rp. {{ number_format($jual->rupiah_jual, 2, '.', ',') }}</p>
</body>
</html>

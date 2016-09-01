<!DOCTYPE html>
<html>
<head>
<title>Mail Reminder</title>
</head>
<body>
Order Pembelian Bitcoin anda telah kami terima<br />
dengan informasi sebagai berikut:<br />
<p>No. Transaksi: B{{$beli->id}}</p>
<p>TGL. Transaksi: {{ date('d-m-Y H:i:s', strtotime($beli->tgl_transaksi)) }} WIB</p>
<p>Nama Lengkap: {{$beli->nama_lengkap}}</p>
<p>Email: {{$beli->email}}</p>
<p>No. HP: {{$beli->no_hp}}</p>
<p>Alamat Bitcoin: {{$beli->alamat_bitcoin}}</p>
<p>BTC: {{$beli->btc_beli}}</p>
<p>Rupiah: Rp. {{ number_format($beli->rupiah_beli, 2, '.', ',') }}</p>
</body>
</html>

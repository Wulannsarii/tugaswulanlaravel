<!-- Menghubungkan dengan view template master -->
@extends('master')
 
<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')
 
 
<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')
 
	<p>Ini Adalah Halaman Tentang</p>
	<p>
        Hay Nama saya Wulansari saya sekolah di SMKN 1 Subang,ini blog pertama saya dan masih ngikutin tutorial. 
        duduk dikelas XI dan mengambil jurusan RPL. Saya anak ke tigas dari tiga bersaudara, saya lahir pada tanggal 17 juni 2001.
        Saya berumur 17 tahun, Arigatou 
	</p>
 
@endsection
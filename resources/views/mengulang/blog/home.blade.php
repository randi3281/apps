{{-- Menghubungkan dengan view template master --}}
@extends('mengulang.blog.master')

{{-- isi bagian judul halaman --}}
{{-- cara penulisan isi setion yang pendek --}}
@section('judul_halaman', 'Halaman Home')

{{-- isi bagian konten --}}
{{-- cara penulisan isi section yang panjang --}}
@section('konten')

    <p>Ini adalah halaman home</p>
    <p>Selamat datang !</p>

@endsection

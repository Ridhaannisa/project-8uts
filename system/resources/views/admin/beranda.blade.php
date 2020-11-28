@extends('template.base')

@section('content')

<div class="jumbotron">
  <h1 class="display-4">Hallo Selamat Datang Di Blog Saya</h1>
  <p class="lead">Disini Memberi Informasi Untuk Anda</p>
  <hr class="my-4">
  <p>Blog Ini Menyediakan Artikel Yang Anda Butuhkan</p>
  <a class="btn btn-primary btn-lg" href="{{url('admin/artikel')}}" role="button">Cari Artikelmu Disini</a>
</div>

@endsection
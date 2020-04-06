<!-- menghubungkan dengan view template master -->
@extends('blog.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Tentang')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini adalah halaman Tentang</p>
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat vel est repudiandae placeat dicta dolorum possimus, molestiae quae tempora in! Esse odit blanditiis corporis! Accusantium obcaecati illum nisi tempore omnis?
    </p>

@endsection
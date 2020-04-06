<!-- menghubungkan dengan view template master -->
@extends('blog.master')

<!-- isi bagian judul halaman -->
<!-- cara penulisan isi section yang pendek -->
@section('judul_halaman', 'Halaman Kontak')

<!-- isi bagian konten -->
<!-- cara penulisan isi section yang panjang -->
@section('konten')

    <p>Ini adalah halaman Kontak</p>
    <table>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td>binary@gmail.com</td>
        </tr>
    </table>

@endsection
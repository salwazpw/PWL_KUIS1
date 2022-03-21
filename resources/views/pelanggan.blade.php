@extends('main')
@section('content')
    <!-- barang section -->
<div id="contact">
	<div class="container">
		<div class="row">
            <table class="table table-dark table-striped">
            
                <h1 style="margin-top: 100px" align="center">DAFTAR PELANGGAN</h1>
                <tr>
                    <th>NIK</th>
                    <th>Nama Pelanggan</th>
                    <th>No Hp</th>
                    <th>Alamat</th>
                </tr>
                <tbody>
                @foreach($blog as $b)
                <tr>
                    <td>{{$b -> id}}</td>
                    <td>{{$b -> namaPelanggan}}</td>
                    <td>{{$b -> noHp}}</td>
                    <td>{{$b -> alamat}}</td>
                </tr>
                @endforeach
                 </tbody>
            </table>
			Halaman : {{ $blog->currentPage() }} <br/>
            Jumlah Data : {{ $blog->total() }} <br/>
            Data Per Halaman : {{ $blog->perPage() }} <br/>
            <br>
            {{ $blog->links() }}
@endsection
@extends('main')
@section('content')
    <!-- suplier section -->
<div id="contact">
	<div class="container">
		<div class="row">
            <table class="table table-dark table-striped">
                
                <h1 style="margin-top: 100px" align="center">DAFTAR SUPLIER</h1>
                <tr>
                    <th>ID Suplier</th>
                    <th>Nama Suplier</th>
                    <th>Merk Mobil</th>
                </tr>
                <tbody>
                @foreach($blog as $b)
                <tr>
                    <td>{{$b -> id}}</td>
                    <td>{{$b -> namaSuplier}}</td>
                    <td>{{$b -> merkMobil}}</td>
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
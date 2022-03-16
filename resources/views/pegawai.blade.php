@extends('main')
@section('content')
    <!-- pegawai section -->
<div id="contact">
	<div class="container">
		<div class="row">
            <table class="table table-dark table-striped">
                
                <h1 style="margin-top: 100px" align="center">DAFTAR PEGAWAI</h1>
                <tr>
                    <th>ID Pegawai</th>
                    <th>Nama Pegawai</th>
                    <th>No. HP</th>
                    <th>Posisi</th>
                </tr>
                <tbody>
                @foreach($blog as $b)
                <tr>
                    <td>{{$b -> id}}</td>
                    <td>{{$b -> namaPegawai}}</td>
                    <td>{{$b -> noHp}}</td>
                    <td>{{$b -> posisi}}</td>
                </tr>
                @endforeach
                 </tbody>
            </table>			
@endsection
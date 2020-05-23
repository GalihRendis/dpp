<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title></title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
 </head>
 <body>
 <div class="container">
 <br />
 @if (\Session::has('success'))
 <div class="alert alert-success">
 <p>{{ \Session::get('success') }}</p>
 </div><br />
 @endif
  <a href="{{action('PatientController@create')}}"
class="btn btn-success mt-4">Add Data Patient</a>
 <table class="table table-striped mt-3">
 <thead>
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>No RM</th>
 <th>Tanggal Lahir</th>
 <th>Alamat</th>
 <th>Tanggal Asesmen</th>
 <th>Jam Asesmen</th>
 <th colspan="2" class="text-center">Action</th>
 </tr>
 </thead>
 <tbody>
 <?php 
 $p=1;
 ?>
 @foreach($patients as $patient)
 <tr>
 <td>{{$p}}</td>
 <?php $p++; ?>
 <td>{{$patient['Nama']}}</td>
 <td>{{$patient['No_RM']}}</td>
  <td>{{$patient['Tanggal_Lahir']}}</td>
   <td>{{$patient['Alamat']}}</td>
    <td>{{$patient['Tanggal_Asesmen']}}</td>
    <td>{{$patient['Jam_Asesmen']}}</td>
 <td>
 	<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
    ADD Asesmen
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item" href="{{action('AnamnesisController@index', $patient['id'])}}">Anamnesis</a>
    <a class="dropdown-item" href="{{action('PemeriksakanFisikController@index', $patient['id'])}}">Pemeriksakan Fisik</a>
    <a class="dropdown-item" href="{{action('DataPenunjangController@index', $patient['id'])}}">Data Penunjang</a>
    <a class="dropdown-item" href="{{action('DokterController@index', $patient['id'])}}">Dokter</a>
  </div>
</div>
</td>
  <td>
 	<a href=""
	class="btn btn-primary">Detail</a>
 </td>
 </tr>
 @endforeach
 </tbody>
 </table>
 </div>
 </body>
</html>
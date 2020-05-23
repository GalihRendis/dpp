<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
 <body>
 <div class="container">
 <h2>Perubahan Produk</h2><br />
 @if ($errors->any())
 <div class="alert alert-danger">
 <ul>
 @foreach ($errors->all() as $error)
 <li>{{ $error }}</li>
 @endforeach
 </ul>
 </div><br />
 @endif
 <form method="post" action="{{action('DokterController@update', $id)}}">
 {{csrf_field()}}
 <input name="id" type="hidden" value="{{$id}}">
 <div class="row">
 <div class="col-md-4"></div>
  <div class="form-group col-md-4">
    <label for="exampleFormControlSelect1">Dokter</label>
    <select class="form-control" id="exampleFormControlSelect1" name="Dokter_id">
      @foreach($dokter as $d)
      <option value="{{$d['id']}}">{{$d['id']}} {{$d['nama']}}</option>
      @endforeach
    </select>
  </div>
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <button type="submit" class="btn btn-success" style="marginleft:38px">Update Produk</button>
 </div>
 </div>
 </form>
 </div>
 </body>
</html>
<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <title>..:: RAI 2017 - Penerapan CRUD pada Laravel 5.5 ::..</title>
 <link rel="stylesheet" href="{{asset('css/app.css')}}">
 </head>
 <body>
 <div class="container">
 <h2>Penambahan Pasien</h2><br/>
 <form  action="/patient/add_patient" method="post">
 	{{csrf_field()}}
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="name">Nama:</label>
 <input type="text" class="form-control" name="Nama">
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">No_RM</label>
 <input type="text" class="form-control" name="No_RM">
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">Tanggal_Lahir</label>
 <input type="date" class="form-control" name="Tanggal_Lahir">
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">Alamat</label>
 <input type="text" class="form-control" name="Alamat">
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">Tanggal_Asesmen</label>
 <input type="date" class="form-control" name="Tanggal_Asesmen">
 </div>
 </div>
 <div class="row">
 <div class="col-md-4"></div>
 <div class="form-group col-md-4">
 <label for="price">Jam_Asesmen</label>
 <input type="time" class="form-control" name="Jam_Asesmen">
 </div>
 </div>
 </div>
 <div class="row ml-5">
 <div class="col-md-4"></div>
 <div class="form-group col-md-5">
 <button type="submit" class="btn btn-success" style="marginleft:38px">Add Patient</button>
 </div>
 </div>
 </form>
 </div>
 </body>
</html>
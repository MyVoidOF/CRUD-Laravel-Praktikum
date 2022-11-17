@extends('layout.template')
 <!-- START FORM -->
@section('odin')
<form action='{{ url('mahasiswa') }}' method='post'>
@csrf
  <div class="my-3 p-3 bg-body rounded shadow-sm">
      <div class="mb-3 row">
          <label for="nim" class="col-sm-2 col-form-label">NIM</label>
          <div class="col-sm-10">
              <input type="number" class="form-control" name='nim' id="nim">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="nama" class="col-sm-2 col-form-label">Nama</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='nama' id="nama">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='alamat' id="alamat">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="kota" class="col-sm-2 col-form-label">Kota</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='kota' id="kota">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="kelas" class="col-sm-2 col-form-label">Kelas</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='kelas' id="kelas">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-10">
              <input type="text" class="form-control" name='jurusan' id="jurusan">
          </div>
      </div>
      <div class="mb-3 row">
          <label for="jurusan" class="col-sm-2 col-form-label"></label>
          <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
      </div>
    </form>
  </div>
  <!-- AKHIR FORM --> 
@endsection
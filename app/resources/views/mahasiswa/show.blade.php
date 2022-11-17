<html>
//app\resources\views\mahasiswa\show.blade.php
@extends('mahasiswa.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Students Page</div>
  <div class="card-body">
        <div class="card-body">
        <p class="card-title">nim : {{ $mahasiswa->nim }}</p>
        <p class="card-text">nama : {{ $mahasiswa->nama }}</p>
        <p class="card-text">umur : {{ $mahasiswa->umur }}</p>
        <p class="card-title">alamat : {{ $mahasiswa->alamat }}</p>
        <p class="card-text">kota : {{ $mahasiswa->kota }}</p>
        <p class="card-text">kelas : {{ $mahasiswa->kelas }}</p>
        <p class="card-title">jurusan : {{ $mahasiswa->jurusan }}</p>
  </div>
    </hr>
  </div>
</div>
</html>
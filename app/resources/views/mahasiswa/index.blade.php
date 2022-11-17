@extends('layout.template')
         <!-- START DATA -->
@section('odin')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <!-- FORM PENCARIAN -->
    <div class="pb-3">
      <form class="d-flex" action="{{ url('mahasiswa') }}" method="get">
          <input class="form-control me-1" type="search" name="katakunci" value="{{ Request::get('katakunci') }}" placeholder="Masukkan kata kunci" aria-label="Search">
          <button class="btn btn-secondary" type="submit">Cari</button>
      </form>
    </div>
    
    <!-- TOMBOL TAMBAH DATA -->
    <div class="pb-3">
      <a href='{{ url('mahasiswa/create') }}' class="btn btn-primary">+ Tambah Data</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-md-1">No</th>
                <th class="col-md-1">NIM</th>
                <th class="col-md-1">Nama</th>
                <th class="col-md-1">Alamat</th>
                <th class="col-md-1">Kota</th>
                <th class="col-md-1">Kelas</th>
                <th class="col-md-1">Jurusan</th>
                <th class="col-md-1">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = $data->firstItem() ?>
            @foreach ($data as $item)
            <tr>
                <td>{{ $i }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->kota }}</td>
                <td>{{ $item->kelas }}</td>
                <td>{{ $item->jurusan }}</td>
                <td>
                    <a href='{{ url('mahasiswa/'.$item->nim.'/edit') }}' class="btn btn-warning btn-sm">Edit</a>
                    <form onsubmit="return confirm('Yakin akan menghapus data?')" class='d-inline' action="{{ url('mahasiswa/'.$item->nim) }}" method="post">
                        @csrf 
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            <?php $i++ ?>
            @endforeach
        </tbody>
    </table>
    {{ $data->withQueryString()->links() }}
</div>
<!-- AKHIR DATA -->  
@endsection

 
@extends('layout.main')
 
@section('title', 'Mahasiswa')
 
@section('content')
    <h1>Data Mahasiswa</h1>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Data Mahasiswa</h4>
                  <p class="card-description">
                  List data Mahasiswa
                  </p>
                  {{-- tombol tambah --}}
                  <a href="{{ route('mahasiswa.create') }}" class="btn btn-rounded btn-primary">tambah</a>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Npm</th>
                          <th>Nama</th>
                          <th>Tempat Lahir</th>
                          <th>Tanggal Lahir</th>
                          <th>Alamat</th>
                          <th>Prodi Id</th>
                          <th>Url Foto</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($mahasiswa as $item)
                            <tr>
                                <td> {{ $item["npm"] }}</td>
                                <td> {{ $item["nama"] }}</td>
                                <td> {{ $item["tempat_lahir"] }}</td>
                                <td> {{ $item["tanggal_lahir"] }}</td>
                                <td> {{ $item["alamat"] }}</td>
                                <td> {{ $item["prodi"]["nama"] }}</td>
                                <td> {{ $item["url_foto"] }}</td>
                            </tr>
                            @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
</div>
 
@if (session('success'))
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    Swal.fire({
    title: "Sukses",
    text: "{{ session('success') }}",
    icon: "success"
  });
  </script>
@endif
 
 
@endsection

@extends('layout.main')

@section('title', 'Fakultas')

@section('content')
    <h2>Fakultas</h2>

        <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fakultas</h4>
                  <p class="card-description">
                    List data fakultas
                  </p>
                  {{-- ! TOMBOL TAMBAH --}}

                  <a href="{{ route('fakultas.create' )}}" class="btn btn-rounded btn-primary">Tambah</a>

                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nama Fakultas</th>
                          <th>Singkatan</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($fakultas as $item)
                            <tr>
                                <td> {{ $item["nama"] }} </td>
                                <td> {{ $item["singkatan"]}} </td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
       </div>

@if (session('success'))
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire({
    title: "Good job!",
    text: "{{ session ('success') }}",
    icon: "success",
  });
  </script>
@endif

@endsection


@extends('dashboard')

@section('content')
    <div class="page-heading">
        <h3>Daftar Mahasiswa</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('mahasiswa') }}" method="GET">
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Cari mahasiswa" name="search">
                                <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Cari</button>
                            </div>
                        <h5 class="card-title">Daftar Mahasiswa</h5>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Prodi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mahasiswa as $mhs)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $mhs->nim }}</td>
                                        <td>{{ $mhs->nama }}</td>
                                        <td>{{ $mhs->prodi->nama_prodi }}</td>
                                        <td>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        {{ $mahasiswa->links() }}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

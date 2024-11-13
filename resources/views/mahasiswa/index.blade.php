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
                        <h5 class="card-title">Daftar Mahasiswa</h5>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">NIM</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Program Studi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($mahasiswa as $mhs)
                                <tr>
                                    <td>{{$mhs->nim}}</td>
                                    <td>{{$mhs->nama}}</td>
                                    <td>{{$mhs->prodi->nama_prodi."-".$mhs->prodi->jenjang}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@extends('dashboard')

@section('content')
    <div class="page-heading">
        <h3>Tambah Mahasiswa</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title
                        ">Tambah Mahasiswa</h5>
                        <form action="{{route('mahasiswa.store')}}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="nim" class="form-label">NIM</label>
                                <input type="text" class="form-control" id="nim" name="nim">
                            </div>
                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama">
                            </div>
                            <div class="mb-3">
                                <label for="prodi" class="form-label">Program Studi</label>
                                <select class="form-select" id="prodi" name="id_prodi">
                                    @foreach($prodi as $p)
                                        <option value="{{$p->id}}">{{$p->nama_prodi."-".$p->jenjang}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
?>

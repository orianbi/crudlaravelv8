@extends('layouts.main')

@section('container')
<h1 class="text-center mb-4 mt-3">Tambah Data Pegawai</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/prosesTambahDataPegawai" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                          <label for="nama" class="form-label">Nama Lengkap</label>
                          <input type="text" name="nama" class="form-control" id="nama" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                          <label for="nama" class="form-label">Jeni Kelamin</label>
                          <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                            <option selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-laki</option>
                            <option value="perempuan">Perempuan</option>
                          </select>
                        </div>
                        
                       
                        <div class="mb-3">
                          <label for="number" class="form-label">No Telpon</label>
                          <input type="number" name="no_telpon" class="form-control" id="number">
                        </div>
                       
                        <button type="submit" class="btn btn-primary">Tambah</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
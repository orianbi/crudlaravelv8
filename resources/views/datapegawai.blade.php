@extends('layouts.main')

@section('container')

<h1 class="text-center mb-4 mt-3">Data Pegawai</h1>

<div class="container">
    <a href="/tambahDataPegawai" class="btn btn-success mb-3">Tambah</a>
    <div class="row justify-content-center">
        <table>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Lengkap</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">No Telpon</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $no = 1;
                @endphp
                @foreach ($data as $d)            
                <tr>
                    <td>{{ $no ++ }}</td>
                    <td>{{ $d->nama }}</td>
                    <td>{{ $d->jenis_kelamin }}</td>
                    <td>{{ $d->no_telpon }}</td>
                    <td>
                        <a href="/editDataPegawai/{{ $d->id }}" class="btn btn-info">Edit</a> |
                        <a href="/hapus/{{ $d->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@endsection
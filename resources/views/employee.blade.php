@extends('layout.main')

    @section('title','Halaman Pegawai')
    @section('container')
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-4 mb-4">
            <form action="/employee/cari" method="GET" class="form-inline">
                <div class="form-group">
                <input type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
            <div class="col">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Umur</th>
                    <th scope="col">Tanggal masuk</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($employee as $emp)
                    <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $emp->nama }}</td>
                    <td>{{ $emp->jabatan }}</td>
                    <td>{{ $emp->umur }}</td>
                    <td>{{ $emp->created_at }}</td>
                    <td>
                        <a href="{{ url('/employee/edit/'.$emp->id) }}" class="btn btn-success" >Edit</a>
                        <a href="{{ url('/employee/hapus/'.$emp->id) }}" class="btn btn-danger">Hapus</a>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
            </div>
        </div>
        <div class="d-flex justify-content-center">{{ $employee->links() }}
        
        </div>
        <div class="d-flex justify-content-center">
        <a href="{{ url('/employee/tambah') }}" class="btn btn-primary" >Tambah</a>
        </div>
    </div>
    @endsection
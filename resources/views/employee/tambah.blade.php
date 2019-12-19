@extends('layout.main')
@section('title','Tambah Data Karyawan')
@section('container')
@parent

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <form method="post" action="{{ url('/employee') }}">
            {{ @csrf_field() }}
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" id="nama" value="{{ old('nama') }}" >
                    @error('nama')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ old('jabatan') }}">
                    @error('jabatan')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="umur">Umur</label>
                    <input type="text" name="umur" class="form-control" id="umur" value="{{ old('umur') }}">
                    @error('umur')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>

@endsection
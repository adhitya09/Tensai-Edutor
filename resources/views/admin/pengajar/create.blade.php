@extends('owner.dashboard')

@section('section')
    <h1>Tambah Pengajar</h1>

    <form action="{{ route('pengajar.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nama Pengajar</label>
            <input type="text" name="nama_pengajar" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Foto</label>
            <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group">
            <label>Usia</label>
            <input type="number" name="usia" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nomor Telepon</label>
            <input type="text" name="nomor_telepon" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Tingkat Pendidikan</label>
            <input type="text" name="tingkat_pendidikan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Sesi Kosong</label>
            <input type="text" name="sesi_kosong" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Mata Pelajaran yang Diajarkan</label>
            <input type="text" name="mata_pelajaran" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
@endsection

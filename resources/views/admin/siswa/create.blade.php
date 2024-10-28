@extends('owner.dashboard')

@section('section')
<div class="container mt-5">
    <h2>Form Input Data Siswa</h2>
    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nama_siswa">Nama Siswa:</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" required>
        </div>
        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nomor_telepon_siswa">Nomor Telepon Siswa:</label>
            <input type="tel" class="form-control" id="nomor_telepon_siswa" name="nomor_telepon_siswa" required>
        </div>
        <div class="form-group">
            <label for="nomor_telepon_orang_tua">Nomor Telepon Orang Tua:</label>
            <input type="tel" class="form-control" id="nomor_telepon_orang_tua" name="nomor_telepon_orang_tua" required>
        </div>
        <div class="form-group">
            <label for="kelas">Kelas:</label>
            <input type="text" class="form-control" id="kelas" name="kelas" required>
        </div>
        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah:</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
        </div>
        <div class="form-group">
            <label for="jadwal">Jadwal:</label>
            <input type="text" class="form-control" id="jadwal" name="jadwal" required>
        </div>
        <div class="form-group">
            <label for="mata_pelajaran">Mata Pelajaran:</label>
            <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
        </div>
        <div class="form-group">
            <label for="pengajar_id">Pengajar:</label>
            <select class="form-control" id="pengajar_id" name="pengajar_id">
                <option value="">Pilih Pengajar</option>
                @foreach ($pengajars as $pengajar)
                    <option value="{{ $pengajar->id }}">{{ $pengajar->nama_pengajar }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

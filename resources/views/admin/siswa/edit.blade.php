@extends('owner.dashboard')

@section('content')
<div class="container">
    <h1>Edit Data Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $siswa->nama_siswa }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $siswa->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $siswa->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nomor_telepon_siswa">Nomor Telepon Siswa</label>
            <input type="text" class="form-control" id="nomor_telepon_siswa" name="nomor_telepon_siswa" value="{{ $siswa->nomor_telepon_siswa }}" required>
        </div>

        <div class="form-group">
            <label for="nomor_telepon_orang_tua">Nomor Telepon Orang Tua</label>
            <input type="text" class="form-control" id="nomor_telepon_orang_tua" name="nomor_telepon_orang_tua" value="{{ $siswa->nomor_telepon_orang_tua }}" required>
        </div>

        <div class="form-group">
            <label for="kelas">Kelas</label>
            <input type="text" class="form-control" id="kelas" name="kelas" value="{{ $siswa->kelas }}" required>
        </div>

        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $siswa->asal_sekolah }}" required>
        </div>

        <div class="form-group">
            <label for="jadwal">Jadwal</label>
            <input type="text" class="form-control" id="jadwal" name="jadwal" value="{{ $siswa->jadwal }}" required>
        </div>

        <div class="form-group">
            <label for="mata_pelajaran">Mata Pelajaran</label>
            <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" value="{{ $siswa->mata_pelajaran }}" required>
        </div>

        <div class="form-group">
            <label for="pengajar_id">Pengajar</label>
            <select class="form-control" id="pengajar_id" name="pengajar_id" required>
                @foreach ($pengajars as $pengajar)
                    <option value="{{ $pengajar->id }}" {{ $siswa->pengajar_id == $pengajar->id ? 'selected' : '' }}>
                        {{ $pengajar->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

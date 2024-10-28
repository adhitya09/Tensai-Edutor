@extends('owner.dashboard')

 @section('content')
<div class="container">
    <h1>Edit Transaksi</h1>
    <form action="{{ route('admin.transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" class="form-control" id="nama_siswa" name="nama_siswa" value="{{ $transaksi->nama_siswa }}" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="Laki-laki" {{ $transaksi->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $transaksi->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_orang_tua">Nama Orang Tua</label>
            <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" value="{{ $transaksi->nama_orang_tua }}" required>
        </div>

        <div class="form-group">
            <label for="tingkat_pendidikan">Tingkat Pendidikan</label>
            <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" value="{{ $transaksi->tingkat_pendidikan }}" required>
        </div>

        <div class="form-group">
            <label for="asal_sekolah">Asal Sekolah</label>
            <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" value="{{ $transaksi->asal_sekolah }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_hari">Pilihan Hari</label>
            <input type="text" class="form-control" id="pilihan_hari" name="pilihan_hari" value="{{ $transaksi->pilihan_hari }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_waktu">Pilihan Waktu</label>
            <input type="time" class="form-control" id="pilihan_waktu" name="pilihan_waktu" value="{{ $transaksi->pilihan_waktu }}" required>
        </div>

        <div class="form-group">
            <label for="pilihan_mata_pelajaran">Pilihan Mata Pelajaran</label>
            <input type="text" class="form-control" id="pilihan_mata_pelajaran" name="pilihan_mata_pelajaran" value="{{ $transaksi->pilihan_mata_pelajaran }}" required>
        </div>

        <div class="form-group">
            <label for="rencana_mulai_kelas">Rencana Mulai Kelas</label>
            <input type="date" class="form-control" id="rencana_mulai_kelas" name="rencana_mulai_kelas" value="{{ $transaksi->rencana_mulai_kelas }}" required>
        </div>

        <div class="form-group">
            <label for="nomor_telepon_siswa">Nomor Telepon Siswa</label>
            <input type="text" class="form-control" id="nomor_telepon_siswa" name="nomor_telepon_siswa" value="{{ $transaksi->nomor_telepon_siswa }}" required>
        </div>

        <div class="form-group">
            <label for="nomor_telepon_orang_tua">Nomor Telepon Orang Tua</label>
            <input type="text" class="form-control" id="nomor_telepon_orang_tua" name="nomor_telepon_orang_tua" value="{{ $transaksi->nomor_telepon_orang_tua }}" required>
        </div>

        <div class="form-group">
            <label for="bukti_pembayaran">Bukti Pembayaran</label>
            <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
        </div>

        <div class="form-group">
            <label for="status_pembayaran">Status Pembayaran</label>
            <select class="form-control" id="status_pembayaran" name="status_pembayaran" required>
                <option value="Lunas" {{ $transaksi->status_pembayaran == 'Lunas' ? 'selected' : '' }}>Lunas</option>
                <option value="Belum Lunas" {{ $transaksi->status_pembayaran == 'Belum Lunas' ? 'selected' : '' }}>Belum Lunas</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection -->

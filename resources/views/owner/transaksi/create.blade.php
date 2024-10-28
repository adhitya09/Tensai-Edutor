@extends('owner.dashboard')

@section('section')
    <div class="container">
        <h2>Tambah Transaksi</h2>

        <form action="{{ route('transaksi.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="nama_orang_tua" class="form-label">Nama Orang Tua</label>
                <input type="text" class="form-control" id="nama_orang_tua" name="nama_orang_tua" required>
            </div>

            <div class="mb-3">
                <label for="tingkat_pendidikan" class="form-label">Tingkat Pendidikan</label>
                <input type="text" class="form-control" id="tingkat_pendidikan" name="tingkat_pendidikan" required>
            </div>

            <div class="mb-3">
                <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                <input type="text" class="form-control" id="asal_sekolah" name="asal_sekolah" required>
            </div>

            <div class="mb-3">
                <label for="pilihan_hari" class="form-label">Pilihan Hari</label>
                <input type="text" class="form-control" id="pilihan_hari" name="pilihan_hari" required>
            </div>

            <div class="mb-3">
                <label for="pilihan_waktu" class="form-label">Pilihan Waktu</label>
                <input type="text" class="form-control" id="pilihan_waktu" name="pilihan_waktu" required>
            </div>

            <div class="mb-3">
                <label for="mata_pelajaran" class="form-label">Mata Pelajaran</label>
                <input type="text" class="form-control" id="mata_pelajaran" name="mata_pelajaran" required>
            </div>

            <div class="mb-3">
                <label for="rencana_mulai_kelas" class="form-label">Rencana Mulai Kelas</label>
                <input type="date" class="form-control" id="rencana_mulai_kelas" name="rencana_mulai_kelas" required>
            </div>

            <div class="mb-3">
                <label for="nomor_telepon_siswa" class="form-label">Nomor Telepon Siswa</label>
                <input type="text" class="form-control" id="nomor_telepon_siswa" name="nomor_telepon_siswa" required>
            </div>

            <div class="mb-3">
                <label for="nomor_telepon_orang_tua" class="form-label">Nomor Telepon Orang Tua</label>
                <input type="text" class="form-control" id="nomor_telepon_orang_tua" name="nomor_telepon_orang_tua" required>
            </div>

            <div class="mb-3">
                <label for="bukti_pembayaran" class="form-label">Bukti Pembayaran (upload foto)</label>
                <input type="file" class="form-control" id="bukti_pembayaran" name="bukti_pembayaran">
            </div>

            <div class="mb-3">
                <label for="status_pembayaran" class="form-label">Status Pembayaran</label>
                <select class="form-select" id="status_pembayaran" name="status_pembayaran" required>
                    <option value="Belum dibayar">Belum dibayar</option>
                    <option value="Sudah dibayar">Sudah dibayar</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection



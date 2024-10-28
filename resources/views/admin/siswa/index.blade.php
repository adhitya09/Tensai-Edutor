@extends("owner.dashboard")

@section("section")

<div class="container-fluid">

    <!-- Table -->
    <br>
    <div class="container">
        <h1>Data Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Data Siswa</th>
                            <th>Asal Sekolah</th>
                            <th>Hari dalam Seminggu</th>
                            <th>Waktu Bimbel</th>
                            <th>Mata Pelajaran</th>
                            <th>Rencana Mulai Kelas</th>
                            <th>No Telp Siswa</th>
                            <th>No Telp Orang Tua</th>
                            <th>Nama Pengajar</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $sw) <!-- Menggunakan $siswa untuk masing-masing item -->
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">

                                    <div class="ms-3">
                                        <p class="fw-bold mb-1">{{ $sw->nama_siswa }}</p>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $sw->jenis_kelamin}}</td>
                            <td>{{ $sw->nomor_telepon_siswa }}</td>
                            <td>{{ $sw->nomor_telepon_orang_tua }}</td>
                            <td>{{ $sw->kelas }}</td>
                            <td>{{ $sw->asal_sekolah }}</td>
                            <td>{{ $sw->jadwal }}</td>
                            <td>{{ $sw->mata_pelajaran }}</td>
                            <td>{{ optional($sw->pengajar)->nama_pengajar }}</td>
                            <td>
                                <form action="{{ route('siswa.destroy', $sw->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                <a href="{{ route('siswa.edit', $sw->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

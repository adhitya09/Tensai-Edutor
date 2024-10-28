@extends('owner.dashboard')

@section("section")
    <title>Transaksi Pendaftaran - Tensai Edutor</title>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-4 text-gray-800">Data Transaksi & Pendaftar Tensai Edutor</h1> --}}

        @if(session()->has('message'))
            <div class="alert alert-{{ session()->get('type') }} alert-dismissible fade show">
                {{ session()->get('message') }}
                <button type="button" class="close" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>

                <button class="close" type="button" data-dismiss="alert">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <!-- Tabel Transaksi -->
        <br>
        <div class="container">
            <h1>Data Pendaftaran dan Transaksi</h1>
            <a href="{{ route('transaksi.create') }}" class="btn btn-primary mb-3">Tambah Transaksi</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama Orang Tua</th>
                            <th>Tingkat Pendidikan</th>
                            <th>Asal Sekolah</th>
                            <th>Pilihan Hari</th>
                            <th>Pilihan Waktu</th>
                            <th>Mata Pelajaran</th>
                            <th>Rencana Mulai Kelas</th>
                            <th>Nomor Telepon Siswa</th>
                            <th>Nomor Telepon Orang Tua</th>
                            <th>Bukti Pembayaran</th>
                            <th>Status Pembayaran</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transaksis as $transaksi)
                        <tr>
                            <td>{{ $transaksi->nama_orang_tua }}</td>
                            <td>{{ $transaksi->tingkat_pendidikan }}</td>
                            <td>{{ $transaksi->asal_sekolah }}</td>
                            <td>{{ $transaksi->pilihan_hari }}</td>
                            <td>{{ $transaksi->pilihan_waktu }}</td>
                            <td>{{ $transaksi->mata_pelajaran }}</td>
                            <td>{{ \Carbon\Carbon::parse($transaksi->rencana_mulai_kelas)->format('d-m-Y') }}</td>
                            <td>{{ $transaksi->nomor_telepon_siswa }}</td>
                            <td>{{ $transaksi->nomor_telepon_orang_tua }}</td>
                            <td><img src="{{ asset('uploads/bukti_pembayaran/' . $transaksi->bukti_pembayaran) }}" alt="" style="max-width: 100%; height: auto;"></td>

                            <!-- Dropdown untuk Status Pembayaran -->
                            <td>
                                <form action="">
                                    <select class="" required>
                                        <option value=>Belum dibayar</option>
                                        <option value=>Sudah dibayar</option>
                                    </select>
                                </form>
                            </td>

                            <td>
                                <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

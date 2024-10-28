@extends('owner.dashboard')

@section('section')
<title>Data Pengajar - Tensai Edutor</title>

<div class="container-fluid">

    <!-- Table -->
    <br>
    <div class="container">
        <h1>Data Pengajar</h1>
        <a href="{{ route('pengajar.create') }}" class="btn btn-primary">Tambah Pengajar</a>

            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Foto</th>
                                <th>Usia</th>
                                <th>Nomor Telepon</th>
                                <th>Tingkat Pendidikan</th>
                                <th>Sesi Kosong</th>
                                <th>Mata Pelajaran</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pengajar as $pj)
                            <tr>
                                <td>{{ $pj->nama_pengajar }}</td>
                                <td><img src="{{ asset('images/' . $pj->foto) }}" alt="" style="max-width: 100%; height: auto;"></td>
                                <td>{{ $pj->usia }}</td>
                                <td>{{ $pj->nomor_telepon }}</td>
                                <td>{{ $pj->tingkat_pendidikan }}</td>
                                <td>{{ $pj->sesi_kosong }}</td>
                                <td>{{ $pj->mata_pelajaran }}</td>
                                <td>{{ $pj->alamat }}</td>
                                <td>
                                    <a href="{{ route('pengajar.edit', $pj->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('pengajar.destroy', $pj->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah yakin ingin menghapus?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            {{-- fungsi js --}}
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="#">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Begin Page Content -->
            <div class="container-fluid">

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

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->


        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{ asset('backend/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{ asset('backend/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{ asset('backend/js/sb-admin-2.min.js') }}"></script>

        <!-- Page level plugins -->
        <script src="{{ asset('backend/vendor/chart.js/Chart.min.js') }}"></script>

        <!-- Page level custom scripts -->
        <script src="{{ asset('backend/js/demo/chart-area-demo.js') }}"></script>
        <script src="{{ asset('backend/js/demo/chart-pie-demo.js') }}"></script>
    </div>
</div>
@endsection


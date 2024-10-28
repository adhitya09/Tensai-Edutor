@extends('owner.dashboard')

@section("section")
    <title>user Pendaftaran - Tensai Edutor</title>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        {{-- <h1 class="h3 mb-4 text-gray-800">Data user & Pendaftar Tensai Edutor</h1> --}}

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

        <!-- Tabel user -->
        <br>
        <div class="container">
            <h1>Data User</h1>
            <a href="{{ route('user.create') }}" class="btn btn-primary mb-3">Tambah user</a>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $us)
                        <tr>
                            <td>{{ $us->name }}</td>
                            <td>{{ $us->email }}</td>
                            <td>{{ $us->password }}
                            <td>{{ $us->role }}</td>
                            <!-- Dropdown untuk Status Pembayaran -->
                            <td>
                                <form action="{{ route('user.destroy', $us->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                </form>
                                <a href="{{ route('user.edit', $us->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection

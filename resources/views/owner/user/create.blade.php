@extends('owner.dashboard')

@section('section')
    <div class="container">
        <h2>Tambah User</h2>

        <form action="{{ route('user.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="role">Role</label>
                <select name="role" id="role" class="form-control" required>
                    <option value="">-- Pilih Role --</option>
                    <option value="Owner">Admin</option>
                    <option value="Pengajar">Pengajar</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection



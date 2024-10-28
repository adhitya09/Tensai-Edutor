<?php

namespace App\Http\Controllers;

use App\Models\Pengajar;
use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $siswa = Siswa::all(); // Ambil semua data pengajar
        return view('admin.siswa.index', compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pengajars = Pengajar::all(); // Ambil data pengajar
        return view('admin.siswa.create', compact('pengajars'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki, Perempuan',
            'nomor_telepon_siswa' => 'required|string|max:15',
            'nomor_telepon_orang_tua' => 'required|string|max:15',
            'kelas' => 'required|string|max:50',
            'asal_sekolah' => 'required|string|max:100',
            'jadwal' => 'required|string|max:100',
            'mata_pelajaran' => 'required|string|max:100',
            'pengajar_id' => 'required',
        ]);

        // Simpan data siswa ke database
        Siswa::create($validatedData);

        // Redirect setelah berhasil menyimpan
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        // Ambil semua data pengajar untuk ditampilkan di dropdown
        $pengajars = Pengajar::all();

        // Kirim data siswa dan pengajars ke view edit
        return view('admin.siswa.edit', compact('siswa', 'pengajars'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        // Validasi input
        $request->validate([
            'nama_siswa' => 'required|string|max:255',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nomor_telepon_siswa' => 'required|string|max:15',
            'nomor_telepon_orang_tua' => 'required|string|max:15',
            'kelas' => 'required|string|max:10',
            'asal_sekolah' => 'required|string|max:255',
            'jadwal' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
            'pengajar_id' => 'nullable|exists:pengajars,id' // pastikan id pengajar ada di tabel pengajars
        ]);

        // Buat data baru ke tabel siswas
        $siswa = new Siswa();
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->nomor_telepon_siswa = $request->nomor_telepon_siswa;
        $siswa->nomor_telepon_orang_tua = $request->nomor_telepon_orang_tua;
        $siswa->kelas = $request->kelas;
        $siswa->asal_sekolah = $request->asal_sekolah;
        $siswa->jadwal = $request->jadwal;
        $siswa->mata_pelajaran = $request->mata_pelajaran;
        $siswa->pengajar_id = $request->pengajar_id;
        $siswa->save();

        return redirect()->route('siswa.index')->with('message', 'Data siswa berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        // Hapus data siswa dari database
        $siswa->delete();

        // Redirect setelah berhasil menghapus
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus!');
    }
}

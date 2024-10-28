<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksis = Transaksi::paginate(10); // Ambil data transaksi dengan pagination
        return view('owner.transaksi.index', compact('transaksis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owner.transaksi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_orang_tua' => 'required|string|max:255',
            'tingkat_pendidikan' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'pilihan_hari' => 'required|string|max:255',
            'pilihan_waktu' => 'required|string|max:255',
            'mata_pelajaran' => 'required|string|max:255',
            'rencana_mulai_kelas' => 'required|date',
            'nomor_telepon_siswa' => 'required|string|max:255',
            'nomor_telepon_orang_tua' => 'required|string|max:255',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status_pembayaran' => 'required|in:Belum dibayar,Sudah dibayar',
        ]);

        $data = $request->all();

        // Handle upload file
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/bukti_pembayaran'), $filename);
            $data['bukti_pembayaran'] = $filename;
        }

        Transaksi::create($data);

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        return view('owner.transaksi.show', compact('transaksi'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaksi $transaksi)
    {
        return view('owner.transaksi.edit', compact('transaksi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        $request->validate([
            'nama_siswa' => 'required',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'nama_orang_tua' => 'required',
            'tingkat_pendidikan' => 'required',
            'asal_sekolah' => 'required',
            'pilihan_hari' => 'required',
            'pilihan_waktu' => 'required',
            'mata_pelajaran' => 'required',
            'rencana_mulai_kelas' => 'required|date',
            'nomor_telepon_siswa' => 'required|digits_between:10,15',
            'nomor_telepon_orang_tua' => 'required|digits_between:10,15',
            'bukti_pembayaran' => 'image|nullable|max:1999',
            'status_pembayaran' => 'required|in:Belum Bayar,Sudah Bayar',
        ]);

        $transaksi->nama_siswa = $request->nama_siswa;
        $transaksi->jenis_kelamin = $request->jenis_kelamin;
        $transaksi->nama_orang_tua = $request->nama_orang_tua;
        $transaksi->tingkat_pendidikan = $request->tingkat_pendidikan;
        $transaksi->asal_sekolah = $request->asal_sekolah;
        $transaksi->pilihan_hari = $request->pilihan_hari;
        $transaksi->pilihan_waktu = $request->pilihan_waktu;
        $transaksi->mata_pelajaran = $request->mata_pelajaran;
        $transaksi->rencana_mulai_kelas = $request->rencana_mulai_kelas;
        $transaksi->nomor_telepon_siswa = $request->nomor_telepon_siswa;
        $transaksi->nomor_telepon_orang_tua = $request->nomor_telepon_orang_tua;
        $transaksi->status_pembayaran = $request->status_pembayaran;

        // Mengelola update bukti pembayaran jika ada file baru
        if ($request->hasFile('bukti_pembayaran')) {
            $fileNameWithExt = $request->file('bukti_pembayaran')->getClientOriginalName();
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('bukti_pembayaran')->getClientOriginalExtension();
            $fileNameToStore = $fileName . '_' . time() . '.' . $extension;
            $path = $request->file('bukti_pembayaran')->storeAs('public/bukti_pembayaran', $fileNameToStore);

            // Hapus file bukti pembayaran lama jika ada
            if ($transaksi->bukti_pembayaran) {
                Storage::delete('public/bukti_pembayaran/' . $transaksi->bukti_pembayaran);
            }

            // Simpan file bukti pembayaran baru
            $transaksi->bukti_pembayaran = $fileNameToStore;
        }

        $transaksi->save();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaksi $transaksi)
    {
        // Hapus file bukti pembayaran jika ada
        if ($transaksi->bukti_pembayaran) {
            Storage::delete('public/bukti_pembayaran/' . $transaksi->bukti_pembayaran);
        }

        // Hapus data transaksi
        $transaksi->delete();

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }

    public function pendaftaran(Request $request)
    {
        $request->validate([
            'nama_orang_tua' => 'required|string|max:255',
            'tingkat_pendidikan' => 'required|string|max:255',
            'asal_sekolah' => 'required',
            'pilihan_hari' => 'required',
            'pilihan_waktu' => 'required',
            'mata_pelajaran' => 'required',
            'rencana_mulai_kelas' => 'required|date',
            'nomor_telepon_siswa' => 'required|string|max:255',
            'nomor_telepon_orang_tua' => 'required|string|max:255',
            'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        @dd($request->all());

        // $data = $request->all();

        // Handle upload file
        if ($request->hasFile('bukti_pembayaran')) {
            $file = $request->file('bukti_pembayaran');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/bukti_pembayaran'), $filename);
            $data['bukti_pembayaran'] = $filename;
        }

        Transaksi::create($data);

        return redirect('/pendaftaran')->with('success', 'Transaksi berhasil ditambahkan.');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'telepon' => 'required|string|max:255',
            'fakultas' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'gedung' => 'required|string|max:255',
            'ruangan' => 'required|string|max:255',
            'tanggal_mulai' => 'required|date',
            'jam_mulai' => 'required|date_format:H:i',
            'tanggal_selesai' => 'required|date',
            'jam_selesai' => 'required|date_format:H:i',
            'surat_izin_kegiatan' => 'required|file|mimes:pdf,doc,docx',
            'keterangan' => 'required|string',
        ]);

        // Create a new loan entry
        $loan = new Loan();
        $loan->nama = $validatedData['nama'];
        $loan->nim = $validatedData['nim'];
        $loan->email = $validatedData['email'];
        $loan->telepon = $validatedData['telepon'];
        $loan->fakultas = $validatedData['fakultas'];
        $loan->prodi = $validatedData['prodi'];
        $loan->gedung = $validatedData['gedung'];
        $loan->ruangan = $validatedData['ruangan'];
        $loan->tanggal_mulai = $validatedData['tanggal_mulai'];
        $loan->jam_mulai = $validatedData['jam_mulai'];
        $loan->tanggal_selesai = $validatedData['tanggal_selesai'];
        $loan->jam_selesai = $validatedData['jam_selesai'];

        if ($request->hasFile('surat_izin_kegiatan')) {
            $file = $request->file('surat_izin_kegiatan');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/surat_izin_kegiatan', $filename);
            $loan->surat_izin_kegiatan = $filename;
        }

        $loan->keterangan = $validatedData['keterangan'];
        $loan->save();

        // Redirect or return a response
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}

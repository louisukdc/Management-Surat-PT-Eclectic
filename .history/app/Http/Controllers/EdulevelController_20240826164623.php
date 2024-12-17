<?php

namespace App\Http\Controllers;

use App\Models\Jenis_Surat;
use App\Models\User;
use App\Models\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EdulevelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->authorizeResource(Surat::class, 'surat');
    }

    public function index(Request $request): View
    {
        $search = $request->input('search');
        $perPage = $request->input('per_page', 10);

        $surats = Surat::when($search, function ($query, $search) {
                return $query->where('nomor', 'like', "%{$search}%")
                             ->orWhere('nama_pembuat', 'like', "%{$search}%")
                             ->orWhere('jabatan_pembuat', 'like', "%{$search}%");
            })
            ->orderBy('created_at', 'desc')
            ->paginate($perPage)
            ->withQueryString();

        return view('surat.index', compact('surats', 'search'));
    }

    public function create(): View
    {
        $jenis_surat = Jenis_Surat::all();
        $users = User::all();

        return view('surat.create', compact('jenis_surat', 'users'));
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'nomor' => 'required|unique:surats,nomor',
            'nosurat' => 'required|unique:surats,nosurat',
            'tempat_buat' => 'required|string|min:3',
            'tgl_buat' => 'required|date',
            'id_tipe_surat' => 'required|exists:jenis_surats,id',
            'id_pembuat' => 'required|exists:users,id',
            'nama_pembuat' => 'required|string|min:3',
            'jabatan_pembuat' => 'required|string|min:3',
            // 'attachment' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        try {
            Surat::create($validatedData);

            return redirect()->route('surat.index')->with('success', 'Surat created successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to create Surat: ' . $e->getMessage());
        }
    }

    public function show(Surat $surat): View
    {
        return view('surat.show', compact('surat'));
    }

    public function edit(Surat $surat): View
    {
        $jenis_surat = Jenis_Surat::all();
        $users = User::all();

        return view('surat.edit', compact('surat', 'jenis_surat', 'users'));
    }

    public function update(Request $request, Surat $surat): RedirectResponse
    {
        $validatedData = $request->validate([
            'nomor' => 'required|unique:surats,nomor,' . $surat->id,
            'nosurat' => 'required|unique:surats,nosurat,' . $surat->id,
            'tempat_buat' => 'required|string|min:3',
            'tgl_buat' => 'required|date',
            'id_tipe_surat' => 'required|exists:jenis_surats,id',
            'id_pembuat' => 'required|exists:users,id',
            'nama_pembuat' => 'required|string|min:3',
            'jabatan_pembuat' => 'required|string|min:3',
        ]);

        try {
            $surat->update($validatedData);

            return redirect()->route('surat.index')->with('success', 'Surat updated successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->with('error', 'Failed to update Surat: ' . $e->getMessage());
        }
    }

    public function destroy(Surat $surat): RedirectResponse
    {
        try {
            $surat->delete();

            return redirect()->route('surat.index')->with('success', 'Surat deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Surat: ' . $e->getMessage());
        }
    }
}

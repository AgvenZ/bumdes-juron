<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\Document;
use App\Models\OrganizationPosition;
use App\Models\Unit;
use App\Models\UnitPhoto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    // Halaman Publik
    public function index()
    {
        $bumdes = Bumdes::first();
        $units = Unit::all();
        return view('home', compact('bumdes', 'units'));
    }

    public function organization()
    {
        $bumdes = Bumdes::first();
        $positions = OrganizationPosition::orderBy('order_num')->get();
        return view('organization', compact('bumdes', 'positions'));
    }

    public function units()
    {
        $bumdes = Bumdes::first();
        $units = Unit::all();
        return view('units', compact('bumdes', 'units'));
    }

    public function unitDetail($id)
    {
        $bumdes = Bumdes::first();
        $unit = Unit::with('photos')->findOrFail($id);
        return view('unit_detail', compact('bumdes', 'unit'));
    }

    public function documents()
    {
        $bumdes = Bumdes::first();
        $documents = Document::all();
        return view('documents', compact('bumdes', 'documents'));
    }

    // Admin Pages
    public function adminLogin()
    {
        return view('admin.login');
    }

    public function adminLoginPost(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'Kredensial yang diberikan tidak cocok dengan data kami.',
        ]);
    }

    public function adminDashboard()
    {
        $bumdes = Bumdes::first();
        $positionsCount = OrganizationPosition::count();
        $unitsCount = Unit::count();
        $documentsCount = Document::count();
        $galeriCount = UnitPhoto::count();
        
        return view('admin.dashboard', compact('bumdes', 'positionsCount', 'unitsCount', 'documentsCount', 'galeriCount'));
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    public function adminBumdes()
    {
        $bumdes = Bumdes::first();
        return view('admin.bumdes', compact('bumdes'));
    }

    public function adminBumdesUpdate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'address' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|email',
            'director_name' => 'required|string|max:255',
            'director_photo' => 'nullable|image|max:2048',
            'director_message' => 'required|string',
        ]);

        $bumdes = Bumdes::first();
        
        if ($request->hasFile('director_photo')) {
            $photoPath = $request->file('director_photo')->store('public/director_photos');
            $bumdes->director_photo = str_replace('public/', '', $photoPath);
        }

        $bumdes->update($request->except('director_photo'));

        return redirect()->route('admin.bumdes')->with('success', 'Profil BUMDes berhasil diperbarui!');
    }

    public function adminOrganization()
    {
        $positions = OrganizationPosition::orderBy('order_num')->get();
        return view('admin.organization', compact('positions'));
    }

    public function adminOrganizationUpdate(Request $request)
    {
        $request->validate([
            'positions' => 'required|array',
            'positions.*.name' => 'required|string|max:255',
            'positions.*.position' => 'required|string|max:255',
            'positions.*.photo' => 'nullable|image|max:2048',
        ]);

        foreach ($request->positions as $id => $data) {
            $position = OrganizationPosition::find($id);
            if ($position) {
                if (isset($data['photo']) && $data['photo']) {
                    $photoPath = $data['photo']->store('public/organization_photos');
                    $position->photo = str_replace('public/', '', $photoPath);
                }
                $position->update([
                    'name' => $data['name'],
                    'position' => $data['position'],
                ]);
            }
        }

        return redirect()->route('admin.organization')->with('success', 'Struktur organisasi berhasil diperbarui!');
    }

    public function adminUnits()
    {
        $units = Unit::with('photos')->orderBy('order_num')->get();
        return view('admin.units', compact('units'));
    }

    public function adminUnitsCreate()
    {
        return view('admin.units-create');
    }

    public function adminUnitsStore(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string',
            'location' => 'required|string',
            'whatsapp' => 'required|string',
            'order_num' => 'required|integer',
        ]);

        $unit = Unit::create($request->all());

        return redirect()->route('admin.units')->with('success', 'Unit usaha berhasil ditambahkan!');
    }

    public function adminUnitsEdit($id)
    {
        $unit = Unit::findOrFail($id);
        return view('admin.units-edit', compact('unit'));
    }

    public function adminUnitsUpdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string',
            'location' => 'required|string',
            'whatsapp' => 'required|string',
            'order_num' => 'required|integer',
        ]);

        $unit = Unit::findOrFail($id);
        $unit->update($request->all());

        return redirect()->route('admin.units')->with('success', 'Unit usaha berhasil diperbarui!');
    }

    public function adminUnitsDestroy($id)
    {
        $unit = Unit::findOrFail($id);
        $unit->delete();

        return redirect()->route('admin.units')->with('success', 'Unit usaha berhasil dihapus!');
    }

    // Admin Documents Management
    public function adminDocuments()
    {
        $documents = Document::orderBy('created_at', 'desc')->get();
        return view('admin.documents.index', compact('documents'));
    }

    public function adminDocumentsStore(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
            'document' => 'required|file|mimes:pdf|max:10240', // 10MB max
        ]);

        $document = new Document();
        $document->title = $request->title;
        $document->description = $request->description;
        $document->category = $request->category;

        if ($request->hasFile('document')) {
            $file = $request->file('document');
            $path = $file->store('public/documents');
            $document->doc_path = str_replace('public/', '', $path);
            $document->size = $file->getSize();
        }

        $document->save();

        return redirect()->route('admin.documents')->with('success', 'Dokumen berhasil ditambahkan!');
    }

    public function adminDocumentsDestroy($id)
    {
        $document = Document::findOrFail($id);
        
        // Delete the file from storage
        if (Storage::exists('public/' . $document->doc_path)) {
            Storage::delete('public/' . $document->doc_path);
        }
        
        $document->delete();

        return redirect()->route('admin.documents')->with('success', 'Dokumen berhasil dihapus!');
    }
}

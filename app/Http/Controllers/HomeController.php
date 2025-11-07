<?php

namespace App\Http\Controllers;

use App\Models\Bumdes;
use App\Models\Document;
use App\Models\OrganizationPosition;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        
        return view('admin.dashboard', compact('bumdes', 'positionsCount', 'unitsCount', 'documentsCount'));
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect('/');
    }

    // Admin CRUD methods will be implemented here
}

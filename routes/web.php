<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/organization', [HomeController::class, 'organization'])->name('organization');
Route::get('/units', [HomeController::class, 'units'])->name('units');
Route::get('/units/{id}', [HomeController::class, 'unitDetail'])->name('unit.detail');
Route::get('/documents', [HomeController::class, 'documents'])->name('documents');

// Admin Authentication Routes
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('/admin/test-login', function() {
    // Auto login for testing
    $user = \App\Models\User::first();
    if ($user) {
        Auth::login($user);
        return redirect()->route('admin.dashboard');
    }
    return 'No user found';
})->name('admin.test-login');
Route::post('/admin/login', [AuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// Redirect /admin to /admin/dashboard
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});

// Admin Protected Routes
Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [HomeController::class, 'adminDashboard'])->name('admin.dashboard');
    Route::get('/dashboard-simple', function() {
        $bumdes = \App\Models\Bumdes::first();
        $positionsCount = \App\Models\OrganizationPosition::count();
        $unitsCount = \App\Models\Unit::count();
        $documentsCount = \App\Models\Document::count();
        $galeriCount = \App\Models\UnitPhoto::count();
        return view('admin.dashboard-simple', compact('bumdes', 'positionsCount', 'unitsCount', 'documentsCount', 'galeriCount'));
    })->name('admin.dashboard.simple');

    // Admin CRUD Routes
    Route::get('/bumdes', [HomeController::class, 'adminBumdes'])->name('admin.bumdes');
    Route::put('/bumdes', [HomeController::class, 'adminBumdesUpdate'])->name('admin.bumdes.update');

    Route::get('/organization', [HomeController::class, 'adminOrganization'])->name('admin.organization');
    Route::put('/organization', [HomeController::class, 'adminOrganizationUpdate'])->name('admin.organization.update');

    Route::get('/units', [HomeController::class, 'adminUnits'])->name('admin.units');
    Route::get('/units/create', [HomeController::class, 'adminUnitsCreate'])->name('admin.units.create');
    Route::post('/units', [HomeController::class, 'adminUnitsStore'])->name('admin.units.store');
    Route::get('/units/{id}/edit', [HomeController::class, 'adminUnitsEdit'])->name('admin.units.edit');
    Route::put('/units/{id}', [HomeController::class, 'adminUnitsUpdate'])->name('admin.units.update');
    Route::delete('/units/{id}', [HomeController::class, 'adminUnitsDestroy'])->name('admin.units.destroy');

    Route::get('/units/{id}/photos', [HomeController::class, 'adminUnitsPhotos'])->name('admin.units.photos');
    Route::post('/units/{id}/photos', [HomeController::class, 'adminUnitsPhotosStore'])->name('admin.units.photos.store');
    Route::delete('/units/{unit}/photos/{photo}', [HomeController::class, 'adminUnitsPhotosDestroy'])->name('admin.units.photos.destroy');

    Route::get('/documents', [HomeController::class, 'adminDocuments'])->name('admin.documents');
    Route::post('/documents', [HomeController::class, 'adminDocumentsStore'])->name('admin.documents.store');
    Route::delete('/documents/{id}', [HomeController::class, 'adminDocumentsDestroy'])->name('admin.documents.destroy');
});

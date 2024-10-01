<?php

use App\Models\Lait;
use App\Models\Vente;
use App\Models\Animal;
use App\Models\Gestation;
use App\Models\Testgestation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Medecin\ProduitController;
use App\Http\Controllers\Gestionnaire\LaitController;
use App\Http\Controllers\Medecin\EtatSanteController;
use App\Http\Controllers\Gestionnaire\VenteController;
use App\Http\Controllers\Medecin\PreventionController;
use App\Http\Controllers\Gestionnaire\AnimalController;
use App\Http\Controllers\Gestionnaire\ClientController;
use App\Http\Controllers\Gestionnaire\TraiteController;
use App\Http\Controllers\Gestionnaire\DocteurController;
use App\Http\Controllers\Medecin\InseminationController;
use App\Http\Controllers\Medecin\MonteNaturelController;
use App\Http\Controllers\Medecin\FicheControleController;
use App\Http\Controllers\Medecin\TestgestationController;
use App\Http\Controllers\Medecin\SynchronisationController;
use App\Http\Controllers\Gestionnaire\UtilisateurController;
use App\Http\Controllers\Gestionnaire\AlimantationController;
use App\Http\Controllers\Gestionnaire\ConsommationController;
use App\Http\Controllers\Gestionnaire\ReproductionListeController;
use App\Http\Controllers\Gestionnaire\ListeContorllePreventionController;
use App\Models\FicheControle;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/equipe', [\App\Http\Controllers\EquipeController::class, 'equipe'])->name('equipe');
Route::get('/contact', [\App\Http\Controllers\EquipeController::class, 'contact'])->name('contact');
Route::get('/testes', [\App\Http\Controllers\EquipeController::class, 'testes'])->name('testes');

Route::prefix('gestionnaire')->name('gestionnaire.')->middleware('auth')->group(function(){
    Route::resource('animal', AnimalController::class);
    Route::resource('docteur', DocteurController::class)->except('show');
    Route::resource('alimant', AlimantationController::class)->except('show');
    Route::resource('client', ClientController::class)->except('show');
    Route::resource('lait', LaitController::class)->except('show');
    Route::resource('vente', VenteController::class)->except('show');
    Route::resource('traite', TraiteController::class)->except('show');
    Route::resource('consomme', ConsommationController::class)->except('show');
    Route::resource('user', UtilisateurController::class);

    //Liste de prevention et de controlle
    Route::get('sante', [ListeContorllePreventionController::class, 'controlle'])->name('controlle');
    Route::get('prevention', [ListeContorllePreventionController::class, 'prevention'])->name('prevention');
    Route::delete('sante', [ListeContorllePreventionController::class, 'deletecontrolle'])->name('destroy');
    Route::delete('prevention', [ListeContorllePreventionController::class, 'deleteprevention'])->name('prevention.destroy');

    //liste de reproduction
    Route::get('insemination', [ReproductionListeController::class, 'insemination'])->name('insemination');

});
Route::prefix('medecin')->name('medecin.')->middleware('auth')->group(function(){
    Route::resource('etat', EtatSanteController::class)->except('show');
    Route::resource('fiche', FicheControleController::class)->except('show');
    Route::resource('prevent', PreventionController::class)->except('show');
    Route::resource('produit', ProduitController::class)->except('show');
    Route::resource('insemination', InseminationController::class)->except('show');
    Route::resource('synchrone', SynchronisationController::class)->except('show');
    Route::resource('test', TestgestationController::class)->except('show');
    Route::resource('monte', MonteNaturelController::class)->except('show');
});

Route::get('/dashboard', function () {
    $nbre_b = Animal::count();
    $nbre_vache = Testgestation::count();
    $nbre_v = Gestation::count();
    $nbre_total_veau = Lait::sum('quantite_veau');
    $nbre_total = Lait::sum('quantite_total');
    $nbre_vendu = Vente::sum('quantite');
    //dd($nbre_vendu);
    return view('dashboard', compact('nbre_b', 'nbre_total_veau', 'nbre_total', 'nbre_vendu', 'nbre_vache', 'nbre_v'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('homemedecin', function(){
    $nbre_vache = Testgestation::count();
    $nbre_v = Gestation::count();
    $nbre_b = Animal::count();
    $nbre_int = FicheControle::where('user_id', '=', Auth::user()->id)->count();
    $lact_suspendu = Animal::where('etat_lactation', '=', 'Lactation suspendu')->count();
    return view('home_medecin', compact('nbre_vache', 'nbre_v', 'nbre_b', 'nbre_int', 'lact_suspendu'));
})->name('homemedecin');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

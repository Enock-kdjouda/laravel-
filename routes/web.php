<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//Route pour afficher le formulaire de création d'un livre
Route::get('Book/create', [BookController::class, 'create'])->name('Book.create');

// Route pour traiter la création d'un livre
Route::post('Book', [BookController::class, 'store'])->name('Book.store');

// Route pour afficher la liste des livres
Route::get('Book', [BookController::class, 'index'])->name('Book.index');

// Route pour editer la liste des livres
Route::get('Book/{id}/edit', [BookController::class, 'edit'])->name('Book.edit');

Route::put('Book/{id}', [BookController::class, 'update'])->name('Book.update');

Route::delete('Book/{id}', [BookController::class, 'destroy'])->name('Book.destroy');

Route::get('books/author/{biography}', [BookController::class, 'byBiographyAuthor'])->name('Book.filiere');

// Route pour afficher un livre spécifique
 Route::get('Book/{id}', [BookController::class, 'show'])->name('Book.show');

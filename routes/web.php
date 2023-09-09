<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () { return view('site.inicio'); });
Route::get('/historia', function () { return view('site.historia'); });
Route::get('/diretoria', function () { return view('site.diretoria'); });
Route::get('/identidade', function () { return view('site.identidade'); });
Route::get('/inspiracao', function () { return view('site.inspiracao'); });
Route::get('/meninos-e-meninas', function () { return view('site.meninos-e-meninas'); });
Route::get('/equipe-gestao', function () { return view('site.equipe-gestao'); });
Route::get('/educadores', function () { return view('site.educadores'); });
Route::get('/equipe-apoio', function () { return view('site.equipe-apoio'); });
Route::get('/ambientes', function () { return view('site.ambientes'); });
Route::get('/pesquisa-documentacao', function () { return view('site.pesquisa-documentacao'); });
Route::get('/participacao-familias', function () { return view('site.participacao-familias'); });
Route::get('/eventos', function () { return view('site.eventos'); });
Route::get('/galeria', function () { return view('site.galeria'); });
Route::get('/contato', function () { return view('site.contato'); });
Route::get('/transparencia', function () { return view('site.transparencia'); });
Route::get('/atas-estatuto', function () { return view('site.transparencia.atas-estatuto'); });
Route::get('/atas-2017-2019', function () { return view('site.transparencia.atas.bienio-2017-2019'); });
Route::get('/atas-2019-2021', function () { return view('site.transparencia.atas.bienio-2019-2021'); });
Route::get('/atas-2021-2023', function () { return view('site.transparencia.atas.bienio-2021-2023'); });
Route::get('/estatuto', function () { return view('site.transparencia.estatuto'); });
Route::get('/balanco', function () { return view('site.transparencia.balanco'); });
Route::get('/balanco-2018', function () { return view('site.transparencia.balanco.2018.balanco-2018'); });
Route::get('/balanco-2019', function () { return view('site.transparencia.balanco.2019.balanco-2019'); });
Route::get('/balanco-2020', function () { return view('site.transparencia.balanco.2020.balanco-2020'); });
Route::get('/balanco-2021', function () { return view('site.transparencia.balanco.2021.balanco-2021'); });
Route::get('/balanco-2022', function () { return view('site.transparencia.balanco.2022.balanco-2022'); });
Route::get('/convenio', function () { return view('site.transparencia.convenio'); });
Route::get('/termos-colaboracao-fomento', function () { return view('site.transparencia.convenios.termos-colaboracao.termos-colaboracao'); });
Route::get('/termos-colaboracao', function () { return view('site.transparencia.convenios.termos-colaboracao.termos-colaboracao'); });
Route::get('/termos-fomento', function () { return view('site.transparencia.convenios.termos-fomento.termos-fomento'); });
Route::get('/termos-colaboracao-2018', function () { return view('site.transparencia.convenios.termos-colaboracao.2018.termos-colaboracao-2018'); });
Route::get('/termos-colaboracao-2019', function () { return view('site.transparencia.convenios.termos-colaboracao.2019.termos-colaboracao-2019'); });
Route::get('/termos-colaboracao-2020', function () { return view('site.transparencia.convenios.termos-colaboracao.2020.termos-colaboracao-2020'); });
Route::get('/termos-colaboracao-2021', function () { return view('site.transparencia.convenios.termos-colaboracao.2021.termos-colaboracao-2021'); });
Route::get('/termos-colaboracao-2022', function () { return view('site.transparencia.convenios.termos-colaboracao.2022.termos-colaboracao-2022'); });
Route::get('/termos-fomento-2018', function () { return view('site.transparencia.convenios.2018.termo-fomento-2018'); });
Route::get('/termos-fomento-2019', function () { return view('site.transparencia.convenios.2019.termo-fomento-2019'); });
Route::get('/termos-fomento-2020', function () { return view('site.transparencia.convenios.2020.termo-fomento-2020'); });
Route::get('/termos-fomento-2021', function () { return view('site.transparencia.convenios.2021.termo-fomento-2021'); });
Route::get('/termos-fomento-2022', function () { return view('site.transparencia.convenios.2022.termo-fomento-2022'); });
Route::get('/admin', function () { return view('auth.login'); });

Route::get('/admin', function () { return view('admin.admin');})->middleware(['auth', 'verified'])->name('admin');

Route::middleware('auth')->group(function () {
    Route::resource('/usuarios', App\Http\Controllers\UsuarioController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

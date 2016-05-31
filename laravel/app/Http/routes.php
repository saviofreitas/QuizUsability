<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/heuristicas', 'HeuristicasController@listAll');
Route::get('/heuristicas/{id}', 'HeuristicasController@show');
Route::get('/avaliacao/{token}', 'AvaliacaoController@listAll');

Route::resource('projetos', 'ProjetosController');

Route::get('/projetos/{id}/questionarios', 'ProjetosController@findQuestionarios');
Route::post('/projetos/{id}/questionarios', 'ProjetosController@saveQuestionario');
Route::delete('/projetos/questionarios/{id}', 'ProjetosController@removeQuestionario');
Route::get('/questionarios', 'QuestionariosController@index');
Route::get('/projetos/{id}/questionarios/create', 'ProjetosController@createQuestionario');
Route::get('/avaliacoes', 'ProjetosController@findAvaliacoes');
Route::get('/quiz/{token}', 'QuizController@find');

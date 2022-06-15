<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmpresaApiController;
use App\Http\Controllers\ParadaApiController;
use App\Http\Controllers\RecorridoApiController;
use App\Http\Controllers\RecorridoParadaApiController;
use App\Http\Controllers\HorarioApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

#inicio de sesión
//ruta para el registro de usuarios
    Route::post('/auth/register',[AuthController::class,'register']);
//ruta para el login de usuarios
    Route::post('/auth/login',[AuthController::class,'login']);
//Ruta para el logout de Usuario
    Route::post('/auth/logout',[AuthController::class,'logout'])->middleware('auth:sanctum');
#fin inicio de sesión

#rutas de empresa
    //mostrar empresa
    Route::get('empresa',[EmpresaApiController::class,'index']);
    //editar empresa
    Route::put('empresa/{id}',[EmpresaApiController::class,'update']);
    //crear empresa
    Route::post('/register/empresa',[EmpresaApiController::class,'store']);
    //elimiinar empresa
    Route::delete('empresa/{id}',[EmpresaApiController::class,'destroy']);
    //caosul name empresas
    Route::get('empresa_consulta_name',[EmpresaApiController::class,'consultaNameEmpresa']);
#FIN RUTAS EMPRESA

#rutas de recorrido
    //mostrar recorrido
    Route::get('recorrido',[RecorridoApiController::class,'index']);
    //editar recorrido
    Route::put('recorrido/{id}',[RecorridoApiController::class,'update']);
    //crear recorrido
    Route::post('/register/recorrido',[RecorridoApiController::class,'store']);
    //elimiinar recorrido
    Route::delete('recorrido/{id}',[RecorridoApiController::class,'destroy']);
    //consulta recorrido (punto inicio,final,nuero ruta)

    Route::get('recorrido_consulta/{id}',[RecorridoApiController::class,'ConsultaRecorridos_rutas_empresa']);
    //consulta recorrido (punto inicio,final,nuero ruta,imegen ruta)
    Route::get('recorrido_consulta_imagen_ruta_empresa/{id}/{numero_ruta}',[RecorridoApiController::class,'ConsultaRecorridos_Imagen_ruta_empresa']);



#FIN RUTAS RECORIDO

#rutas de puntos_parada
    //mostrar puntos de parada
    Route::get('paradas',[ParadaApiController::class,'index']);
    //editar puntos de parada
    Route::put('paradas/{id}',[ParadaApiController::class,'update']);
    //crear puntos de parada
    Route::post('/register/paradas',[ParadaApiController::class,'store']);
    //elimiinar puntos de parada
    Route::delete('paradas/{id}',[ParadaApiController::class,'destroy']);
#FIN RUTAS PUNTOS DE PARADA


#rutas de RecorridoParada
    //mostrar RecorridoParada
    Route::get('paradarecoridos',[RecorridoParadaApiController::class,'index']);
    //editar RecorridoParada
    Route::put('paradarecoridos/{id}',[RecorridoParadaApiController::class,'update']);
    //crear RecorridoParada
    Route::post('/register/paradarecoridos',[RecorridoParadaApiController::class,'store']);
    //elimiinar RecorridoParada
    Route::delete('paradarecoridos/{id}',[RecorridoParadaApiController::class,'destroy']);
#FIN RUTAS #FIN RUTAS RecorridoParada

#rutas de horario
    //mostrar horario
    Route::get('horario',[HorarioApiController::class,'index']);
    //editar horario
    Route::put('horario/{id}',[HorarioApiController::class,'update']);
    //crear horario
    Route::post('/register/horario',[HorarioApiController::class,'store']);
    //elimiinar horario
    Route::delete('horario/{id}',[HorarioApiController::class,'destroy']);
#FIN RUTAS #FIN RUTAS horario





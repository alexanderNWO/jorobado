<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/indexadmin','marca@indexadmin')->name('indexadmin');

Route::POST('/registroexito','pagina@registroexito')->name('registroexito');
Route::POST('/exitoso','pagina@exitoso')->name('exitoso');
Route::POST('/Tarjeta','pagina@Tarjeta')->name('Tarjeta');
Route::POST('/verificar','pagina@verificar')->name('verificar');
Route::get('/iniciodesesion','pagina@iniciodesesion')->name('iniciodesesion');
Route::POST('/cerrar','pagina@cerrar')->name('cerrar');
Route::POST('/indexinicio','pagina@indexinicio')->name('indexinicio');
Route::POST('/rentas','pagina@rentas')->name('rentas');
Route::POST('/registros','pagina@registros')->name('registros');
Route::get('/contactoinicio','pagina@contactoinicio')->name('contactoinicio');
Route::get('/misioninicio','pagina@misioninicio')->name('misioninicio');
Route::get('/reservas','pagina@reservas')->name('reservas');
Route::get('/ubicacioninicio','pagina@ubicacioninicio')->name('ubicacioninicio');
Route::get('/visioninicio','pagina@visioninicio')->name('visioninicio');
Route::get('/cochesmedianainicio','pagina@cochesmedianainicio')->name('cochesmedianainicio');
Route::get('/cochesaltoinicio','pagina@cochesaltoinicio')->name('cochesaltoinicio');
Route::get('/cochesbajainicio','pagina@cochesbajainicio')->name('cochesbajainicio');
Route::get('/cochesalto','pagina@cochesalto')->name('cochesalto');
Route::get('/cochesbaja','pagina@cochesbaja')->name('cochesbaja');
Route::get('/cochesmediana','pagina@cochesmediana')->name('cochesmediana');
Route::get('/contacto','pagina@contacto')->name('contacto');
Route::get('/ubicacion','pagina@ubicacion')->name('ubicacion');
Route::get('/index','pagina@index')->name('index');
Route::get('/cochesmedianapopup','pagina@cochesmedianapopup')->name('cochesmedianapopup');
Route::get('/cochesbajapopup','pagina@cochesbajapopup')->name('cochesbajapopup');
Route::get('/cochesaltopopup','pagina@cochesaltopopup')->name('cochesaltopopup');
Route::get('/mision','pagina@mision')->name('mision');
Route::get('/vision','pagina@vision')->name('vision');

Route::get('/altamarca','marca@altamarca')->name('altamarca');
Route::POST('/guardarmarca','marca@guardarmarca')->name('guardarmarca');
Route::get('/reportemarca','marca@reportemarca')->name('reportemarca');

Route::get('/altacliente','cliente@altacliente')->name('altacliente');
Route::POST('/guardarcliente','cliente@guardarcliente')->name('guardarcliente');
Route::get('/reportecliente','cliente@reportecliente')->name('reportecliente');

Route::get('/altaadministrador','administrador@altaadministrador')->name('altaadministrador');
Route::POST('/guardaradministrador','administrador@guardaradministrador')->name('guardaradministrador');
Route::get('/reporteadministrador','administrador@reporteadministrador')->name('reporteadministrador');


Route::get('/altacoche','coche@altacoche')->name('altacoche');
Route::POST('/guardarcoche','coche@guardarcoche')->name('guardarcoche');
Route::get('/reportecoche','coche@reportecoche')->name('reportecoche');

Route::get('/altacategoria','categoria@altacategoria')->name('altacategoria');
Route::POST('/guardarcategoria','categoria@guardarcategoria')->name('guardarcategoria');
Route::get('/reportecategoria','categoria@reportecategoria')->name('reportecategoria');

Route::get('/altasucursal','sucursal@altasucursal')->name('altasucursal');
Route::POST('/guardarsucursal','sucursal@guardarsucursal')->name('guardarsucursal');
Route::get('/reportesucursal','sucursal@reportesucursal')->name('reportesucursal');

Route::get('/altarenta','renta@altarenta')->name('altarenta');
Route::POST('/guardarrenta','renta@guardarrenta')->name('guardarrenta');
Route::get('/reporterenta','renta@reporterenta')->name('reporterenta');

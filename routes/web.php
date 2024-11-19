<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    echo "<h1>Estic a la Home</h1>";
});

/*Afegir rutes amb tots els metodes HTTP
GET --
POST --
PUT
DELETE

*/

Route::get('/mostrar-data', function () {
    $params ['title'] ="Data actual";
    return view('mostrar-data',$params);
});

Route::get('/pelicula/{titol}/{year?}', function ($titol='No hi ha pellicula seleccionada',$year='2024') {
    return view('pelicula',array(
        'titol' => $titol,
        'year' => $year
    ));
}) -> where(array(
    'titol' => '[a-zA-Z-]+',
    'year' => '[0-9]+'
));

Route::get('/llistat-pelis', function () {
    $params=[
        'titol'=>'Llistat de pelis',
        'pelis' => ['Spiderman','Batman','Superman']
    ];
    return view('pelicules.llistat',$params);
});

Route::get('/llistat-pelis', function () {
    $params=[
        'titol'=>'Llistat de pelis',
        'pelis' => ['Spiderman','Batman','Superman']
    ];
    return view('pelicules.llistat')
        ->with('titol',$params['titol'])
        ->with('pelis',$params['pelis']);
});

Route::get('/pagina-generica', function () {
    return view('pagina');
});

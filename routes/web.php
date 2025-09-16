<?php

use Illuminate\Support\Facades\Route;
use WandesCardoso\MercadoPago\Facades\MercadoPago;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/teste-mercadopago/{id}', function ($id) {
    // Busca um pagamento pelo ID
    $mp = MercadoPago::payment()->find($id);

    // Mostra o resultado na tela
    dd($mp); // ou var_dump($mp)
    /*echo '<pre>';
print_r($mp);
echo '</pre>';*/
//mudança
// mudança 02

});

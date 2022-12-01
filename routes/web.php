<?php

use App\Http\Controllers\PDFController;
use App\Http\Controllers\AddressesController;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BasketController;
use Illuminate\Support\Facades\Route;


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

//Page d'accueil Laravel
Route::get('/', function () {
    return view('Accueil');
});

Route::get('/Accueil', function () {
    return view('Accueil');
});

//page nos guitares
Route::get('/product/nos-guitares', function () {
    return view('/product/nos-guitares');
});

Route::get('/product/product-electrique', function () {
    return view('/product/product-electrique');
});

Route::get('/product/product-classique', function () {
    return view('/product/product-classique');
});

Route::get('/product/product-folk', function () {
    return view('/product/product-folk');
});


//MODIFICATION DE LA TABLE ADDRESSES
//Voir les adresses
Route::get('/address/showAddresses', [AddressesController::class, 'showAddresses']);
//Ajouter une adresse
Route::get('/address/appendAddresses', [AddressesController::class, 'appendAddresses']);
Route::post('/address/addAddresse', [AddressesController::class, 'addAddresses']);
//modifier une adresse
Route::get('/address/{index}', [AddressesController::class, 'editAddresses']);
Route::post('/address/edit', [AddressesController::class, 'postEditAddresses']);
//Supprimer une Adresse
Route::get('/address/supprimer/{index}', [AddressesController::class, 'deleteAddresses']);
Route::post('/address/suppression', [AddressesController::class, 'postDeleteAddresses']);


//MODIFICATION DE LA TABLE FEATURES
//Voir les toutes caractéristiques
Route::get('/feature/showFeatures', [FeaturesController::class, 'showFeatures']);
//Ajouter d'une caractéristique
Route::get('/feature/appendFeatures', [FeaturesController::class, 'appendFeatures']);
Route::post('/feature/addFeature', [FeaturesController::class, 'addFeatures']);
//modifier une caractéristique
Route::get('/feature/{index}', [FeaturesController::class, 'editFeatures']);
Route::post('/feature/edit', [FeaturesController::class, 'postEditFeatures']);


//MODIFICATION DE LA TABLE ORDERS
//Voir les toutes commandes
Route::get('/order/showOrders', [OrdersController::class, 'showOrders']);
//Ajouter une commande
Route::get('/order/appendOrders', [OrdersController::class, 'appendOrders']);
Route::post('/order/addOrder', [OrdersController::class, 'addOrders']);
//modifier une commande
Route::get('/order/{index}', [OrdersController::class, 'editOrders']);
Route::post('/order/edit', [OrdersController::class, 'postEditOrders']);


//MODIFICATION DE LA TABLE PRODUCTS
//Voir les touts les produits
Route::get('/product/showProducts/{index}', [ProductsController::class, 'showProducts']);

//Ajouter un produit
Route::get('/product/appendProducts', [ProductsController::class, 'appendProducts']);
Route::post('/product/addProduct', [ProductsController::class, 'addProducts']);
//modifier un produit
Route::get('/product/{index}', [ProductsController::class, 'editProducts']);
Route::post('/product/edit', [ProductsController::class, 'postEditProducts']);


//MODIFICATION DE LA TABLE USERS
//Voir les touts les utilisateurs
Route::get('/user/showUsers', [UsersController::class, 'showUsers']);
//Ajouter un utilisateur
Route::get('/user/appendUsers', [UsersController::class, 'appendUsers']);
Route::post('/user/addUser', [UsersController::class, 'addUsers']);
//modifier un utilisateur
Route::get('/user/{index}', [UsersController::class, 'editUsers']);
Route::post('/user/edit', [USersController::class, 'postEditUsers']);

//Créer un fichier pdf
Route::get('create-pdf-file', [PDFController::class, 'index']);

//Pour authtification   
Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::group(['middleware' => ['auth']], function () {
    Route::get('/logout', [LoginController::class, 'logout']);
});

//voir le panier de l'utilisateur connecté
Route::get('/basket', [BasketController::class, 'showBasket'])->name('basket');
//Ajouter un produit au panier de l'utilisateur connecté
Route::get('/basket/appendBasket/{index}', [BasketController::class, 'appendBasket']);

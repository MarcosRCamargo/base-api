<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
    // Rotas para CRUD de Usuários
    $router->group(['prefix' => 'api/users'], function () use ($router) {
        $router->get('/', 'UserController@index'); // Listar todos os usuários
        $router->post('/', 'UserController@store'); // Criar um novo usuário
        $router->get('/{id}', 'UserController@show'); // Mostrar um usuário específico
        $router->put('/{id}', 'UserController@update'); // Atualizar um usuário
        $router->delete('/{id}', 'UserController@destroy'); // Excluir um usuário
    });
// // Middleware de autenticação
// $router->group(['middleware' => 'auth'], function () use ($router) {

//     // Rotas para CRUD de Usuários
//     $router->group(['prefix' => 'api/users'], function () use ($router) {
//         $router->get('/', 'UserController@index'); // Listar todos os usuários
//         $router->post('/', 'UserController@store'); // Criar um novo usuário
//         $router->get('/{id}', 'UserController@show'); // Mostrar um usuário específico
//         $router->put('/{id}', 'UserController@update'); // Atualizar um usuário
//         $router->delete('/{id}', 'UserController@destroy'); // Excluir um usuário
//     });

//     // Rotas para CRUD de PersonalInfo
//     $router->group(['prefix' => 'api/personal-info'], function () use ($router) {
//         $router->get('/', 'PersonalInfoController@index'); // Listar todos os personal info
//         $router->post('/', 'PersonalInfoController@store'); // Criar um novo personal info
//         $router->get('/{id}', 'PersonalInfoController@show'); // Mostrar um personal info específico
//         $router->put('/{id}', 'PersonalInfoController@update'); // Atualizar um personal info
//         $router->delete('/{id}', 'PersonalInfoController@destroy'); // Excluir um personal info
//     });
// });

// // Middleware de controle de acesso (ACL)
// $router->group(['middleware' => 'acl'], function () use ($router) {
//     // Aqui você pode definir quais papéis têm permissão para acessar as rotas protegidas pelo middleware 'auth'
//     // Por exemplo:
//     // $router->put('/api/personal-info/{id}', 'PersonalInfoController@update')->middleware('role:admin');
// });
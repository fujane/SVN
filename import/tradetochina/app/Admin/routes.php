<?php

use Illuminate\Routing\Router;

Admin::registerHelpersRoutes();

Route::group([
    'prefix'        => config('admin.prefix'),
    'namespace'     => Admin::controllerNamespace(),
    'middleware'    => ['web', 'admin'],
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    /**用户管理路由start**/
    $router->get('/Member', 'MemberController@index');
    $router->get('/Member/create', 'MemberController@create');
    $router->any('/Member/save', 'MemberController@save');
    $router->get('/Member/edit/{id}', 'MemberController@edit');
    $router->any('/Member/delete/{id}', 'MemberController@delete');
    $router->get('/Member/detail/{id}', 'MemberController@detail');
    $router->any('/Member/update_state/{id}', 'MemberController@update_state');
    $router->get('/Member/alipaylog', 'MemberController@alipaylog');
    $router->get('/Member/excel', 'MemberController@excel');
    /**用户管理路由end**/

    /**资讯路由start**/
    $router->get('/info', 'InfoController@index');
    /**资讯路由end**/
});

<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/16
 * Time: 0:02
 */

use Illuminate\Routing\Router;

Route::group([
    'prefix' => config('admin.route.prefix') . '/store',
    'namespace' => 'iBrand\\Store\\Backend\\Http\\Controllers',
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
    $router->get('setting/pay', 'HomeController@settingPay');

});
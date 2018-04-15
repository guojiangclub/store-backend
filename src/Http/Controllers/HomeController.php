<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/4/16
 * Time: 0:06
 */

namespace iBrand\Store\Backend\Http\Controllers;

use Illuminate\Routing\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class HomeController extends Controller
{
    public function index(){

        return Admin::content(function (Content $content) {
            $content->header('商城首页');
            $content->description('Description...');
            $content->body(view('store-backend::index'));
        });
    }

    public function settingPay()
    {
        return Admin::content(function (Content $content) {

            $content->header('商城配置');
            $content->description('Description...');
        });
    }
}
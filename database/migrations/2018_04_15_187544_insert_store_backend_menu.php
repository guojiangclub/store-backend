<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;

class InsertStoreBackendMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('admin.database.connection') ?: config('database.default');

        $menuId = DB::connection($connection)->table(config('admin.database.menu_table'))->insertGetId(
            [
                'parent_id' => 0,
                'order' => 1,
                'title' => '商城管理',
                'icon' => 'fa-tasks',
                'uri' => 'store',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
            ]
        );

        DB::connection($connection)->table(config('admin.database.menu_table'))->insert(
            [
                'parent_id' => $menuId,
                'order' => 1,
                'title' => '支付设置',
                'icon' => 'fa-bar-chart',
                'uri' => 'store/setting/pay',
                'created_at'=>\Carbon\Carbon::now(),
                'updated_at'=>\Carbon\Carbon::now(),
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}

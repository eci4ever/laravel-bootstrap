<?php
// php artisan make:migration RoleUserPivottable

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RoleUserPivotTable extends Migration
{

    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreignId('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }


    public function down()
    {
        Schema::dropIfExists('role_user');
    }
}

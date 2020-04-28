<?php
// php artisan make:migration PermissionRolePivottable
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PermissionRolePivotTable extends Migration
{

    public function up()
    {
        Schema::create('permission_role', function (Blueprint $table) {
            $table->foreignId('role_id');
            $table->foreign('role_id')->references('id')->on('roles');
            $table->foreignId('permission_id');
            $table->foreign('permission_id')->references('id')->on('permissions');
        });
    }


    public function down()
    {
        Schema::dropIfExists('permission_role');
    }
}

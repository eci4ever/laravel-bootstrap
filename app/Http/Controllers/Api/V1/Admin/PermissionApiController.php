<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\Permission\Permission as AppPermission;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionApiController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();

        return AppPermission::collection($permissions);
    }
}

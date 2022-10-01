<?php

namespace App\Http\Controllers\Apps;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //get permissions
        $permissions = Permission::when(
            request()->q,
            function ($permissions) {
                $permissions = $permissions->where('name', 'like', '%' .
                    request()->q . '%');
            }
        )->latest()->paginate(10);
        //return inertia view
        return Inertia::render('Apps/Permissions/Index', [
            'permissions' => $permissions
        ]);
    }
}

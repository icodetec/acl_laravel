<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use App\Models\Post;

class PainelController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $totalRoles = Role::count();
        $totalPermission = Permission::count();
        $totalPost = Post::count();
        return view ('painel.home.index', compact('totalUser', 'totalRoles', 'totalPermission', 'totalPost'));
    }
}

<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Models\Role;
use Gate;

class RoleController extends Controller
{
    private $role;

    public function __construct(Role $role) 
    {
        $this->role = $role; 
    }

    public function index()
    {
        $roles = $this->role->all();

        if(Gate::denies('adm'))
        {
            return redirect()->back();
            //abort(403, 'Você não pode acessar esse conteudo');
        }
        
        return view ('painel.roles.index', compact('roles'));
    }
}

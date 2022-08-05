<?php

namespace App\Http\Controllers\Painel;

use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Models\permission;
use Gate;

class PermissionController extends Controller
{
    private $permission;

    public function __construct(Permission $permission) 
    {
    
        $this->permission = $permission;  
    }


    public function index()
    { 

        if(Gate::denies('adm'))
        {
            //abort(403, 'Você não pode acessar esse conteudo'); 
            return redirect()->back(); 
        }
            $permissions = $this->permission->all();
        return view ('painel.permissions.index', compact('permissions'));
    }

}

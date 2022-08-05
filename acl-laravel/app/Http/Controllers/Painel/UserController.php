<?php

namespace App\Http\Controllers\Painel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Gate;

class UserController extends Controller
{

    private $user;

    public function __construct(User $user) 
    {
        $this->user = $user; 
    }


    public function index()
    {
        $users = $this->user->all();
        if(Gate::denies('edit_post'))
        {
            return redirect()->back();
        //abort(403, 'Você não pode acessar esse conteudo');
        }
        return view ('painel.user.index', compact('users'));
    }
}    

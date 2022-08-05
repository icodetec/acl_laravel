<?php

namespace App\Http\Controllers\Painel;
use Illuminate\Http\Request;
use App\Http\Controllers\controller;
use App\Models\Post;
use Gate;

class PostController extends Controller
{

    private $post;

    public function __construct(Post $post) 
    {
        $this->post = $post; 
    }

    public function index()
    {
        $posts = $this->post->all();

        if(Gate::denies('view_post'))
        {
            return redirect()->back();
            //abort(403, 'Você não pode acessar esse conteudo');
        }
        return view ('painel.posts.index', compact('posts'));
    }
};

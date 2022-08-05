<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel ACL</title>
    <meta name="author" content="">
	<!--CSS-->
	<link rel="stylesheet" href="{{url('assets/Painel/css/acl-Painel.css')}}">
	<!--Favicon-->
	<link rel="icon" type="image/png" href="{{url('assets/Painel/imgs/favicon-acl.png')}}">
     <!--Icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	
</head>

<body>
    <header class="menu">
        <div class="logo">
			<a href="{{url('admin')}}">
				<img src="{{url('assets/Painel/imgs/acl-branca.png')}}" alt="" class="logo">
			</a>
        </div>
        <nav>
		<ul>
			@can('view_post', 'edit_post')
				<li>
					<a><i class="far fa-user"></i> {{ Auth::user()->name }}</a>
				</li>
			@endcan

			@can('edit_post')
				<li>
					<a href="{{url('admin/users')}}">Usuários</a>
				</li>
			@endcan

			@can('view_post', 'edit_post')
				<li>
					<a href="{{url('admin/posts')}}">Notícias</a>
				</li>
			@endcan

            @can('adm')
				<li>
					<a href="{{url('admin/role')}}">Funções</a>
				</li>
            @endcan


			@can('adm')
				<li>
					<a href="{{url('admin/permission')}}">Permissões</a>
				</li>
			@endcan


			@if( Auth::check())
			    <li>
				    <i class="fas fa-lock-alt"></i>
					<form role="form" method="POST"  action="{{ route('logout') }}">
						@csrf
						<button class="button_sair">Sair</button>
					</form>
				</li>
			@else
				<li>
					<a href="{{ route('login') }}">
						<h1>Login</h1>
					</a>
				</li>
            @endif

			
		</ul>
        </nav>
    
        <div class="container_menu_icon">
		    <span></span>
        </div>  
    </header>


	<!--Content Dinâmico-->
	@yield('content')


	<div class="footer">
		<div class="container_info_footer">
			<p>Felipe Alves - Todos os direitos reservados</p>
		</div>
	</div>


	<!--jQuery-->
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="{{url('assets/Painel/js/scripty.js')}}"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Painel ACL</title>
    <meta name="author" content="">
	<!--CSS-->
	<link rel="stylesheet" href="{{url('assets/Auth/css/acl-auth.css')}}">
	<!--Favicon-->
	<link rel="icon" type="image/png" href="{{url('assets/Auth/imgs/favicon-acl.png')}}">
     <!--Icon-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
	
</head>

<body>
    <header class="menu">
        <div class="logo">
			<img src="{{url('assets/Auth/imgs/acl-branca.png')}}" alt="" class="logo">
        </div>
		<nav>
		<ul>
		    <li>
			   <a href="register"></i>Cadastro</a>
			</li>
			<li>
				<a href="login"></i>Login</a>
			</li>
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
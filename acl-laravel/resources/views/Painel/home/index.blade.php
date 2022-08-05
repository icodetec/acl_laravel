@extends('painel.templates.template')

@section('content')



	<section class="relatorios">
		<header>
			<h1>Visão Geral</h1>
		</header>

		<div class="container">
			<h2>TOTAL POST</h2>
			<h3>{{$totalPost}}</h3>
		</div>

		<div class="container">
			<h2>TOTAL ROLES</h2>
			<h3>{{$totalRoles}}</h3>
		</div>

		<div class="container">
			<h2>TOTAL PERMISSION</h2>
			<h3>{{$totalPermission}}</h3>
		</div>

		<div class="container">
			<h2>TOTAL USER</h2>
			<h3>{{$totalUser}}</h3>
		</div>
	</section>

@endsection
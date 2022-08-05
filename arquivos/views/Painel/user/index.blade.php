@extends('painel.templates.template')

@section('content')

    <section class="section_listar">
		<header>
			<h1>LISTAGEM DOS USUÁRIOS</h1>
		</header>

		<table id="customers">
			<tr>
				<th>Title</th>
				<th>Descrição</th>
				<th width="100px">Ações</th>
			</tr>

			@forelse($users as $user)
			<tr>
			    <td>{{$user->name}}</td>
	  	        <td>{{$user->email}}</td>
				<td>
					<a href="{{url("painel/post/$user->id/edit")}}" class="edit">
					   <i class="fas fa-pencil-alt"></i>
					</a>
					<a href="{{url("painel/post/$user->id/delete")}}" class="delete">
						<i class="fa fa-trash"></i>
					</a>
				</td>
			</tr>
			<tr>
				@empty
				<tr colspan="90">
				<p>Nenhum resultado encontrado!</p>
			</tr>

			@endforelse
			
		</table>
	</section>

@endsection
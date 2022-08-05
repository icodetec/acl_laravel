@extends('painel.templates.template')

@section('content')


<section class="section_listar">
		<header>
			<h1>Listagem dos Roles</h1>
		</header>

		<table id="customers">
			<tr>
				<th>Title</th>
				<th>Descrição</th>
				<th width="100px">Ações</th>
			</tr>

		 @forelse($roles as $role)
			<tr>
				<td>{{$role->name}}</td>
				<td>{{$role->label}}</td>
				<td>
					<a href="{{url("painel/post/$role->id/edit")}}" class="edit">
					   <i class="fas fa-pencil-alt"></i>
					</a>
					<a href="{{url("painel/post/$role->id/delete")}}" class="delete">
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
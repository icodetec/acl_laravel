@extends('painel.templates.template')

@section('content')



<section class="section_listar">
		<header>
			<h1>Listagem dos Permission</h1>
		</header>

		<table id="customers">
			<tr>
				<th>Title</th>
				<th>Descrição</th>
				<th width="100px">Ações</th>
			</tr>

		  @forelse($permissions as $permission)
			<tr>
				<td>{{$permission->name}}</td>
				<td>{{$permission->label}}</td>
				<td>
					<a href="{{url("painel/permission/$permission->id/edit")}}" class="edit">
					  <i class="fas fa-pencil-alt"></i>
					</a>
					<a href="{{url("painel/permission/$permission->id/delete")}}" class="delete">
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
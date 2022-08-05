@extends('painel.templates.template')

@section('content')

	<section class="section_listar">
		<header>
			<h1>Listagem dos Posts</h1>
		</header>

		<table id="customers">
			<tr>
				<th>Title</th>
				<th>Descrição</th>
				<th width="100px">Ações</th>
			</tr>

		@forelse($posts as $post)
			<tr>
				<td>{{$post->title}}</td>
				<td>{{$post->description}}</td>
				<td>
					<a class="edit" href="{{url("painel/post/$post->id/edit")}}">
					   <i class="fas fa-pencil-alt"></i>
					</a>
					<a class="delete" href="{{url("painel/post/$post->id/delete")}}">
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
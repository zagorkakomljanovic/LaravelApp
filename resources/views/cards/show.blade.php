@extends('layout')


@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3">

		<h1>			
			{{ $card->title }}	
		</h1>
	
		<ul class="list-group" >

			@foreach($card->notes  as $note)
		
			<li class="list-group-item" >
				{{ $note->body}}	
			</li>

			@endforeach
			
		</ul>
		<hr>
		<h3>Add a new Note</h3>

		<form  method="POST" acction="/cards/{{ $card->id }}/notes"> 

			
		<input name="_token" type="hidden" value="{{ csrf_token() }}"/>
			<div class="form-group" >
				<textarea name="body" class="form-control" >
				
				</textarea>
			</div>

			<div class="form-group" >
			<button class="btn btn-primary">Add a Note</button>
			</div>

		</form>
	</div>
</div>
@stop
@extends('public')

@section('content')
	@foreach($text as $one)
		<h2>{{$one->name}}</h2>
		<div class="row">
			<p>{!!$one->body!!}</p>
		</div>
	@endforeach
@stop
@extends('admin')

@section('content')
<div class="main1">

	<h2>Таблица пользователей</h2>
		
	<table class="table table-hover" width="100%" border="1">
	<tr class="active">
		<td>Идентификатор пользователя</td><td>Имя пользователя</td><td> Email пользователя</td>
	</tr>
@foreach($user as $one)	
	<tr class="active">
		<td>{{$one->id}}</td><td><a href="{{asset('user/'.$one->id)}}">{{$one->name}}</a></td><td>{{$one->email}}</td>
	</tr>
@endforeach
	</table>	
		
</div>
		
@stop
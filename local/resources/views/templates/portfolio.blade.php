@extends('cabinet')

@section('content')
<div class="portfolio">
	<h2>Кабинет пользователя</h2>
	
	@if(isset($errors))
		@foreach($errors->all() as $err)
			{{$err}}
		@endforeach
	
	@endif
	
	<h3>Введите вид услуги:</h3>

	<form method="post" action="{{asset('cabinet/')}}">
		<input type="text" name="name"/>
		<input type="submit" value="Отправить"/>
		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		
	</form>
	
	<br/>
		
	<table class="table table-striped" width="100%" border="1">
		<tr class="active">
			<td>Наименование</td><td>Действие</td>
		</tr>
		
		@foreach($cat as $one)
		<tr class="active">
			<td>{{$one->name}}</td><td><a href="{{asset('works/'.$one->id)}}">Портфолио</a>&nbsp;<a href="#">Скрыть</a>&nbsp;<a href="#">Удалить</a></td>
		</tr>
		@endforeach
		
	</table>
	
	<a href="{{asset('acaunt')}}" class="btn btn-info">Изменить данные аккаунта</a>
</div>
@stop
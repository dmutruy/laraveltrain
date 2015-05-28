@extends('cabinet')

@section('content')

<div class="portfolio">

	<h2>Аккаунт пользователя</h2>
	
	@if(isset($errors))
	@foreach($errors->all() as $err)
		{{$err}}
	@endforeach
	
	@endif
	
	<h3>Изменить номер телефона:</h3>

	<form method ="post" action ="{{asset('acaunt')}}">
		
		<input type = "text" name = "phone" value ="{{$acc->phone}}"/><br/>
			<input type = "submit" value = "Отправить"/>
				<input type="hidden" name="_token" value="{{csrf_token()}}"/>

	</form><br/><br/>
	
		<a href="{{asset('cabinet')}}" class="btn btn-info">Вернуться в кабинет</a>

	
</div>

@stop
@extends('public')

@section('content')
	
		
<table class="table table-striped" width="100%" border="1">

	<tr class="active">
		<td>Фото</td><td>Название</td><td>Цена</td><td>Кол-во</td><td>Сумма</td><td>Действие</td>
	</tr>
	
	<?php
	$summa = 0;
	$all = 0;
	?>
	
	@foreach($products as $product)
	
	<form method="post" action="{{asset('cart/add/'.$product->id)}}">
	
	<?php 
	$summa = $product->price*Cookie::get($product->id);
	$all  += $summa; ?>
	
	<tr class="active">
		<td></td><td>{{$product->name}}</td><td>{{$product->price}}</td><td>
				<input type="number" name ="col" value="{{Cookie::get($product->id)}}"/>
					<input type="submit" value="Заменить"/>
				 		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
				 		</td><td>{{$summa}}</td><td><a href="{{asset('cart/dell/'.$product->id)}}">Удалить</a></td>
	</tr>
	@endforeach
	<tr class="active">
		<td colspan="4">Итого:</td><td colspan="2">{{$all}}</td>
	</tr>
	
</table>

</form>

<form method="post" action="{{asset('cart/user/')}}">

<table>
	<tr>
		<td>Телефон:</td><td><input type="tel" name="phone"/></td>
	</tr>
	
	<tr>
		<td>Email:</td><td><input type="email" name="email"/></td>
	</tr>
	
	<tr>
		<td></td><td><input type="submit" value="Подтвердить:"/><input type="hidden" name="_token" value="{{csrf_token()}}"/>
</td>
	</tr>
</table>

</form>
@stop






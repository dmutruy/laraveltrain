@extends('public')

@section('content')
		<div class="row">
		
		
<table class="table table-striped" width="100%" border="1">
	<tr>
		<td>Наименование</td><td>Цена</td><td>Выбрать</td>
	</tr>
@foreach($page as $one)
	<tr class="active">
		<td>{{$one->name}}</td><td>{{$one->price}}</td><td>
		
		<form method="post" action="{{asset('cart/add/'.$one->id)}}"><!-- add добавление -->
			<input type="number" name ="col" value=""/>
					<input type="submit" value="Добавить в корзину"/>
				 		<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		</form>
		
		</td>
		
		
		
	</tr>
@endforeach

</table>
		</div>
		 <?php echo $page->render(); ?>
@stop
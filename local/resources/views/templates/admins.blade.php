@extends('cabinet')

@section('content')
<div class="user1">

	<h2>Таблица приема заказов:</h2>
	
<table class="table table-striped" width="100%" border="1">
<tr class="active">
		
		<td>Заказ:</td>	
			<td>Phone:</td>
				<td>Email:</td>
					<td>Действия:</td>
</tr>
 	
@foreach($tovar as $tov)

<tr class="active">
	<td>
		<table  width="100%" border="1">
			<tr class="active">
				<td>Id товара:</td>
					<td>Наименование товара:</td>
						<td>Цена товара:</td>
					<td>Количество товара:</td>
				<td>Сумма:</td>
			<td>Статус:</td>
		</tr>
		
<?php $summa = 0;
$all = 0;?>
<?php $arr = unserialize($tov->body)?>
@foreach($arr as $key => $value)

<?php $one = \App\Product::find($key);?>

<?php $summa = $one->price*$value;
$all  += $summa; ?>
	
			<tr class="active">	
				<td>{{$one->id}}</td>
					<td>{{$one->name}}</td>
						<td>{{$one->price}}</td>
							<td>{{$value}}</td>
								<td>{{$summa}}</td>
							<td>{{$tov->status}}</td>
						</tr>
						
@endforeach
						
			<tr class="active"><td colspan="4">Итого:</td><td>{{$all}}</td></tr>
		</table>	
	</td>
			<td>{{$tov->phone}}</td>
		<td>{{$tov->email}}</td>
	<td><a href ="{{asset('admin/upp/'.$tov->email)}}">Измен.статус</a>&nbsp;<a href ="{{asset('admin/dell/'.$tov->id)}}" style="color: red">Удалить</a><br/><a href ="#">Написать сообщение</a></td>
	
</tr>				

@endforeach
	
</table>

<?php echo $tovar->render(); ?>
</div>


@stop
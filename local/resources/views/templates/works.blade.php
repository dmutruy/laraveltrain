@extends('cabinet')

@section('content')
<div class="works">
	<h2>Кабинет пользователя<br/>(вывод portfolio)</h2><br/>
		@foreach($port as $one)
			
<table border="1" width="100%" class="table table-striped">
	<tr>
		<td>{!!$one->name!!}</td>
	</tr>
</table>
		@endforeach
</div>

@stop
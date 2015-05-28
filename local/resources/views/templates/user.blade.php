@extends('admin')
@section('script')
@parent
		<script src="{{asset('/media/ckeditor/ckeditor.js')}}"></script>
@stop
@section('content')
<div class="user1">

		<h2>Форма обратной связи</h2>
		@foreach($user as $one)
		
		<form method="post" action="{{asset('user/'.$one->id)}}">
			<textarea name="text" class="ckeditor" id="ckeditor1" style="resize: none"></textarea><br />
				<input type="submit" value="Отправить"/>
					<input type="hidden" name="_token" value="{{csrf_token()}}"/>
		</form>
		@endforeach
</div>

@stop
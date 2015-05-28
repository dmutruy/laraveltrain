<!Doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Главная страница сайта</title>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
		<meta name="keywords" content=""/>
		<meta name="descripshion" content=""/>
		<meta http-equiv="content-style-type" content="text/css"/>
		
		<link type="text/css" rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('/css/style.css')}}"/>
		<link type="text/css" rel="stylesheet" href="{{asset('/css/app.css')}}"/>
		<script src="{{asset('/css/jquery.js')}}"></script>

		<script src="{{asset('/css/js/jquery.js')}}"></script>
		
		<script>
		$(function(){
			$('.menutop a:eq(0)').bind('mouseover',function(){
				$('.menutop0').css('display','block');
			});
				$('.menutop a:eq(1)').bind('mouseover',function(){
					$('.menutop1').css('display','block');
				});
					$('.menutop a:eq(2)').bind('mouseover',function(){
						$('.menutop2').css('display','block');
					});
						$('.menutop a:eq(3)').bind('mouseover',function(){
							$('.menutop3').css('display','block');
						});
			$('.menutop').bind('mouseout',function(){
				$('.menutop0').css('display','none');
			});
					$('.menutop').bind('mouseout',function(){
						$('.menutop1').css('display','none');
				});
						$('.menutop').bind('mouseout',function(){
							$('.menutop2').css('display','none');
					});
						$('.menutop').bind('mouseout',function(){
							$('.menutop3').css('display','none');
					});
			});
		
		</script>
		
	</head>
	
	<body>
	
		<div id="header">
			<img src="{{asset('/media/logo-etalon.png')}}" class="logo" height="150" width="650" > 
				<h1>Главная страница</h1>
		</div>	
		<div class="menutop">
			
			<a href="{{asset('/company')}}">О компании</a>
				<a href="{{asset('/press-centr')}}">Пресс-центр</a>
					<a href="{{asset('/contacts')}}">Контакты</a>
						<a href="{{asset('/partners')}}">Партнерам</a>
						
			<div class="menutop0"><p>Эталон-групп" производство широкого ассортимента гаражных и промышленных секционных ворот, въездных групп, сэндвич-панелей для секционных ворот, стальных направляющих профилей и других комплектующих для секционных ворот...</p></div>
				<div class="menutop1"><p>Вышел новый буклет «9 аргументов в пользу секционных ворот «Эталон». Издание в доступной форме раскрывает основные преимущества ворот, которые производит компания...</p></div>
					<div class="menutop2"><p>«Эталон», Минск (оптовая и розничная торговля)  и «Эталон Торговый дом», Минск (оптовая и розничная торговля через дилерскую сеть)...</p></div>
						<div class="menutop3"><p>В рамках реализации партнерской программы Группа компаний «Эталон» рада предложить вам новый инструмент повышения продаж — интернет-магазин...</p></div>

						
		</div>
		
		<div class="main">
			<div class="col-md-2">
				<div class="menuhead">Cхема проезда:</div>
					<div class="menubody">
							
						<script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=a2iomPMHWEds4M2rFOUiUtHDz_D7m67h&width=200&height=200"></script>	
							
						<a href="{{asset('products')}} " class="btn btn-danger">Каталог товаров</a>

					</div>
				</div>
				
				
				<div class="col-md-8">
				
					@yield('content')

				</div>
		
		<div class="col-md-2">
			
				<div class="inner">
				
				<table id="t_2" width="100%" height="180%" cellpadding="2" cellspacing="0">
				<tr><td>
					<a href="http://6.pogoda.by/26850" style="font-family:Tahoma; font-size:12px; color:#003399;" 
					title="Погода Минск на 6 дней - Гидрометцентр РБ" target="_blank">Погода Минск</a>
				</td></tr>
				
				<tr><td>
				<table id="t_3" width=100% height=100%  cellpadding="0" cellspacing="0">
				<tr><td>
						<script type="text/javascript" charset="windows-1251" src="http://pogoda.by/meteoinformer/js/26850_1.js"></script>
				</td></tr>
				</table>
				</td></tr>

				<tr><td align="right">Информация сайта 
					<a href="http://www.pogoda.by" target="_blank" style="font-family:Tahoma; font-size:12px; color:#003399;">pogoda.by</a>
				</td></tr>
				</table>
				
					@if (Auth::guest())
							<a href="{{asset('auth/register')}}" class="btn btn-success">Регистрация</a>
								<a href="{{asset('auth/login')}}" class="btn btn-success">Авторизация</a>
					@else
							<a href="{{asset('auth/logout')}}" class="btn btn-success">Выход</a>
							<a href="{{asset('cabinet')}}" class="btn btn-success">Кабинет пользователя</a>

					@endif

								
					</div>

			</div>

		</div>
		
		<div class="footer">
			<p> &copy info<span>@</span>aethalon-group.com. &nbsp;Все права защищены.</p>
				<a href="http://www.yandex.ru" title="">Информационный партнер: Yandex.ru</a>
		</div>

	</body>
</html>

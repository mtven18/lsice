<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NO-BS') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">

	<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
	
	<div class="container">

		<!-- <div class="callback">
			<img src="image/callback.png" alt="">
		</div> -->


		<!-- <a href="#" id="popup__toggle" onclick="return false;">
			<div class="circlephone" style="transform-origin: center;"></div>
			<div class="circle-fill" style="transform-origin: center;"></div>
			<div class="img-circle" style="transform-origin: center;">
				<div class="img-circleblock" style="transform-origin: center;"></div>
			</div>
		</a> -->



		
		<div class="col-md-2 margin_top_logo">
			<a href="/"><img src="{{ asset('img/inCarex_logo.png') }}" alt="InCarEx" id="incarex_logo"></a>
			<img src="{{ asset('img/kemptner_logo.png') }}" alt="Kemptner" id="kemptner_logo">
		</div>

		<div class="col-md-8 nav-div">
			
			<div class="container-fluid">

				<!-- Navigation bar -->
				<div class="col-md-12">
					<div class="navbar navbar-default" rel="navigation">
						<div class="container-fluid">
							<div class="navbar-header">
								<img src="{{ asset('img/shest.png') }}" alt="" class="img_nav">
								<img src="{{ asset('img/shest_r.png') }}" alt="" class="img_nav">
							</div>
							<div class="navbar-collapse collapse">
								<ul class="nav main_nav navbar-nav">
									<li><a href="#">Главная</a></li>
									<li class="dropdown delivery">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Доставка/Оплата
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											<li id="drop_main"><a href="delivery.php">Доставка</a></li>
											<li class="divider"></li>
											<li id="drop_main"><a href="pay.php">Оплата</a></li>
										</ul>
									</li>
									<li><a href="return.php">Возврат</a></li>
									<li><a href="contacts.php">Контакты</a></li>
								</ul>
								<div class="nav navbar-nav navbar-right">
									<img src="{{ asset('img/shest_r.png') }}" alt="" class="img_nav">
									<img src="{{ asset('img/shest.png') }}" alt="" class="img_nav">
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-md-12">
					<div class="container-fluid">
						<div class="col-md-2 col-md-offset-1 cont_marks">
							<img src="{{ asset('img/Ford.png') }}" alt="" class="marks ford">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/bmw.png') }}" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/Chevypnglogo.png') }}" alt="" class="marks chevy">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/hondalogo.png') }}" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/nissan.png') }}" alt="" class="marks">
						</div>
					</div>
					<div class="container-fluid">
						<div class="col-md-2 col-md-offset-1 cont_marks">
							<img src="{{ asset('img/330686-motorcraft.png') }}" alt="" class="marks mc">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/mazdalogo.png') }}" alt="" class="marks mazda">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/GM.png') }}" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/hyundai_logo_lg.png') }}" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/mitsubishilogo.png') }}" alt="" class="marks micik">
						</div>
					</div>
					<div class="container-fluid">
						<div class="col-md-2 col-md-offset-1 cont_marks">
							<img src="{{ asset('img/kia.png') }}" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/Land_Rover.png') }}" alt="" class="marks">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/mercedes-logo.png') }}" alt="" class="marks mb">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/Renault-logo.png') }}" alt="" class="marks renault">
						</div>
						<div class="col-md-2 cont_marks">
							<img src="{{ asset('img/Toyota_logo.png') }}" alt="" class="marks">
						</div>
					</div>
				</div>

			</div>

		</div>
			
		<div class="col-md-2 center null_padding margin_top_partner">
			<div class="carousel slide" data-ride="carousel" style="width: 250px;">
			  <div class="carousel-inner" role="listbox">
			    <div class="item active partner_slide" data-slide="next">
			      <img src="{{ asset('img/partners/logo-250x150.jpg') }}" alt="First slide">
			    </div>
			    <div class="item partner_slide" data-slide="next">
			      <img src="{{ asset('img/partners/-logo_emex-250x150.jpg') }}" alt="Second slide">
			    </div>
			    <div class="item partner_slide" data-slide="next">
			      <img src="{{ asset('img/partners/autopiter-250x150.jpg') }}" alt="Third slide">
			    </div>
			    <div class="item partner_slide" data-slide="next">
			      <img src="{{ asset('img/partners/partkom-250x150.jpg') }}" alt="Third slide">
			    </div>
			  </div>
			</div>
		</div>

		<div class="col-md-12 content">
			<div class="col-md-3 brands_container">
				<div class="panel panel-default cats">
					<div class="panel-heading">
						<h2 class="panel-title">Бренды</h2>
					</div>
					<div class="panel-body">
						<div class="list-group">
							<a href="cats.php" class="list-group-item">KEMTNER<span class="badge">256</span></a>
							<a href="cats.php" class="list-group-item">FORD<span class="badge">88</span></a>
							<a href="cats.php" class="list-group-item">NISSAN<span class="badge">145</span></a>
							<a href="cats.php" class="list-group-item">MOTORCRAFT<span class="badge">29</span></a>
							<a href="cats.php" class="list-group-item">TOYOTA<span class="badge">20</span></a>
							<a href="cats.php" class="list-group-item">MITSUBISHI<span class="badge">20</span></a>
							<a href="cats.php" class="list-group-item">MAZDA<span class="badge">3</span></a>
							<a href="cats.php" class="list-group-item">HONDA<span class="badge">9</span></a>
							<a href="cats.php" class="list-group-item">GENERAL MOTORS<span class="badge">33</span></a>
							<a href="cats.php" class="list-group-item">BMW<span class="badge">9</span></a>
							<a href="cats.php" class="list-group-item">LAND ROVER<span class="badge">4</span></a>
							<a href="cats.php" class="list-group-item">RENAULT<span class="badge">51</span></a>
							<a href="cats.php" class="list-group-item">OPEL<span class="badge">5</span></a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="container-fluid">
					<div class="col-md-12" align="center">
						<form class="form-inline" role="search">
							<div class="form-group">
								<input id="search_input" type="text" class="form-control search_in" placeholder="Поиск по артиклу...">
			    					<button type="button" class="btn btn-search btn-default">
			    						<span class="glyphicon glyphicon-search">
			    					</button>
							</div>
						</form>
					</div>
				</div>

				@yield('content')

			</div>

			<div class="col-md-3 right_sidebar">
				<div class="container-fluid">

					<a href="#" id="a_cart">
						<div class="col-md-12 cart_container" align="center">
							<span class="glyphicon glyphicon-shopping-cart"></span>
							<span class="cart">&nbsp;&nbsp;Корзина(0)</span>
						</div>
					</a>

					<div class="col-md-12 login_container">
						<div align="center">
							<span class="glyphicon glyphicon-user"></span>
							<span id="span_in">&nbsp;&nbsp;Войти в личный кабинет:</span>
							<form role="form">
								<div class="input-group input-group-sm login_input_container">
									<input type="text" class="form-control" placeholder="Логин">
								</div>
								<div class="input-group input-group-sm login_input_container">
									<input type="password" class="form-control" placeholder="Пароль">
								</div>
								<button type="submit" class="btn btn-default login_btn">Вход/Регистрация</button>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>

		<div class="col-md-12 footer">
			<footer>
				<div class="col-md-12">
					<div class="container-fluid">
						<div class="col-md-6 col-md-offset-3 nav_footer" align="center">
							<ul>
								<li><a href="/delivery.html">Доставка</a></li>
								<li><a href="pay.php">Оплата</a></li>
								<li><a href="return.php">Возврат</a></li>
								<li><a href="contacts.php">Контакты</a></li>
								<li><a href="aboutus.php">О нас</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-2 col-md-offset-5 copyright" align="center">
					<span class="red">in</span><span>CaR</span><span class="red">ex</span><span> &copy; 2018</span>
				</div>
			</footer>
		</div>

	</div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
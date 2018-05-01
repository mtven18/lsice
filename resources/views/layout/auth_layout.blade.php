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

		<div class="modal fade" id="bio_modal" tabindex="1" role="dialog" aria-labelledby="bio_label" aria-hidden="true">
            <div class="modal-dialog bio_modal_dialog">
                <div class="modal-content">
                    <div class="modal-body bio_modal_body" id="">
                        
                        <img src="{{ asset('img/1 001.jpg') }}" alt="Kemptner Certificate" id="certificate_img">

                    </div>
                </div>
            </div>
        </div>

		
		<div class="col-md-2 margin_top_logo">
			<a href="/"><img src="{{ asset('img/inCarex_logo.png') }}" alt="InCarEx" id="incarex_logo"></a>
			<img src="{{ asset('img/kemptner_logo.png') }}" alt="Kemptner" id="kemptner_logo" data-toggle="modal" data-target="#bio_modal">
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
									<li><a href="{{ route('index') }}">Главная</a></li>
									<li class="dropdown delivery">
										<a class="dropdown-toggle" data-toggle="dropdown" href="#">Доставка/Оплата
											<b class="caret"></b>
										</a>
										<ul class="dropdown-menu">
											<li id="drop_main"><a href="{{ route('index.delivery') }}">Доставка</a></li>
											<li class="divider"></li>
											<li id="drop_main"><a href="{{ route('index.pay') }}">Оплата</a></li>
										</ul>
									</li>
									<li><a href="{{ route('index.return') }}">Возврат</a></li>
									<li><a href="{{ route('index.contacts') }}">Контакты</a></li>
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

		@yield('content')

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

    @yield('script')

</body>
</html>
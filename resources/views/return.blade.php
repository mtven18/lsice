@extends('layout.main_layout')

@section('content')

	<link rel="stylesheet" href="{{ asset('css/return_style.css') }}">
	<!-- RETURN -->
	<div class="col-md-12 cont">
		<div class="container-fluid return_container">
			
			<h2>Возврат</h2>

			<div class="head_rule">
				<img src="{{ asset('img/rule.png') }}" alt="">
				<span>Условия возврата</span>
			</div>
			
			<div class="return_rule container-fluid">
				<div class="col-md-1"><img src="{{ asset('img/timeout.png') }}" alt="" style="width: 30px; height: 30px;"></div>
				<div class="col-md-11 desc_return"><span>Возврат товара принимается в течении 1 месяца.</span></div>
			</div>

			<div class="return_rule container-fluid">
				<div class="col-md-1"><img src="{{ asset('img/brak.png') }}" alt="" style="width: 30px; height: 30px;"></div>
				<div class="col-md-11 desc_return"><span>Брак наша компания принимает без документов. Нам очень дороги наши постоянные клиенты!</span></div>
			</div>

			<div class="return_rule container-fluid">
				<div class="col-md-1"><img src="{{ asset('img/ontcomplate.png') }}" alt="" style="width: 30px; height: 30px;"></div>
				<div class="col-md-11 desc_return"><span>В случае, если в результате нашей ошибки комплектации заказа, вам был причинен ущерб, мы готовы нести ФИНАНСОВУЮ ОТВЕТСТВЕННОСТЬ и компенсировать ущерб частично или в полном размере. Мы – профессиональная компания, а значит должны нести ответственность за свою работу.</span></div>
			</div>

		</div>
	</div>

@endsection
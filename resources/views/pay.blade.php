@extends('layout.main_layout')

@section('content')

	<link rel="stylesheet" href="{{ asset('css/pay_style.css') }}">

	<!-- WAY PAY -->
	<div class="col-md-12 cont">
		<div class="container-fluid pay_container">
			
			<h2>Оплату Вы можете произвести одним из способов</h2>
			
			<div class="pay_way">
				<img src="{{ asset('img/chek.png') }}" alt="">
				<span>Безналичный способ оплаты. Выставление счета (с НДС).</span>
			</div>

			<div class="pay_way">
				<img src="{{ asset('img/cc.png') }}" alt="">
				<span>Картой любой платежной системы.</span>
			</div>

			<div class="pay_way">
				<img src="{{ asset('img/money.png') }}" alt="">
				<span>Наличными в нашем магазине или курьеру при получении заказа.</span>
			</div>

		</div>
	</div>

@endsection
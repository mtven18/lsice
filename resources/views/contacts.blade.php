@extends('layout.main_layout')

@section('content')

	<link rel="stylesheet" href="{{ asset('css/contacts_style.css') }}">

	<!-- Contacts -->
	<div class="col-md-12 cont">
		<div class="container-fluid contacts_container">
			
			<h2>Наши контакты</h2>

			<h4><img src="{{ asset('img/ourphone.png') }}" alt="">Телефон: </h4>
			<p>8(917)522-50-52</p>
			<h4><img src="{{ asset('img/email.png') }}" alt="">E-mail: </h4>
			<p>9175225052@incarex.ru</p>
			
			<h4><img src="{{ asset('img/location.png') }}" alt="">Адрес:</h4>
			<p>Филевский бульвар д.10, корп.3, м.Фили (первый вагон из центра)</p>
			<p>Добраться к нам Вы можете: автобус № 653, маршрутка № 653м ост. Универсам</p>
			<h4><img src="{{ asset('img/worktime.png') }}" alt="">Режим работы: </h4>
			<p>9.00-20.00 ежедневно</p>

			<div class="map">
				<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=IPY4t2nMkOByk-H7XrSWLxUucPI5m4bf&amp;width=100%&amp;height=300&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
			</div>

			<h4><img src="{{ asset('img/send.png') }}" alt="">Обратная связь</h4>
			<form action="/" method="post">
				<div class="form-group back_message">
						<label for="name">Вашe имя</label>
						<input required type="text" class="form-control" name="name" id="name" placeholder="Имя">
					</div>
					<div class="form-group back_message">
						<label for="email">Ваш E-mail</label>
						<input required type="email" class="form-control" name="email" id="email" placeholder="E-mail">
					</div>
					<div class="form-group">
						<label for="message">Ваше сообщение</label>
						<textarea placeholder="Сообщение" required name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-default">Отправить сообщение</button>
			</form>

		</div>
	</div>

@endsection
@extends('layout.main_layout')

@section('content')

	<link rel="stylesheet" href="{{ asset('css/delivery_style.css') }}">

	<!-- Delivery table -->
				<div class="col-md-12 cont">
					<div class="container-fluid">
						<h2 align="center" id="h_delivery_table">Выберите подходящий Вам способ доставки: </h2>
						<table style="border-radius: 6px; border: 1px solid black;" class="table table-bordered table-inverse table-condensed" id="delivery_table">
							<thead class="thead-inverse">
								<tr>
									<th>Район доставки</th>
									<th>Способ доставки</th>
									<th>Сумма заказа до 20000 руб.</th>
									<th>Сумма заказа от 20000 руб.</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td rowspan="3">Доставка по Москве и до 2 км. за МКАД</td>
									<td>Курьером.Возможна доставка в ночное время с 21.00 до 9.00 (обговаривается отдельно с менеджером).</td>
									<td rowspan="2">500 руб</td>
									<td rowspan="2">Бесплатно</td>
								</tr>
								<tr>
									<td>
										<span>Через пункты самовывоза: </span>
										<ul>
											<li id="iml"><a href="http://iml.ru/places?Moscow"><img style="width: 22px;" src="{{ asset('img/IML.png') }}" alt=""></a>&nbspIML</li>
											<li id="boxberry"><a href="http://boxberry.ru/find_an_office/"><img style="width: 22px;" src="{{ asset('img/Boxberry.png') }}" alt=""></a>&nbspBoxberry</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Экспресс доставка по Москве</td>
									<td colspan="2">1000 руб.</td>
								</tr>
								<tr>
									<td rowspan="2">Доставка по МО от 10 до 100 км. за МКАД</td>
									<td>Курьером</td>
									<td>500 руб. + 20 руб. за каждый км от МКАД *</td>
									<td>20 руб. за каждый км от МКАД *</td>
								</tr>
								<tr>
									<td>
										<span>Через пункты самовывоза:</span>
										<ul>
											<li id="iml"><a href="http://iml.ru/places?Moscow"><img style="width: 22px;" src="{{ asset('img/IML.png') }}" alt=""></a>&nbspIML</li>
											<li id="boxberry"><a href="http://boxberry.ru/find_an_office/"><img style="width: 22px;" src="{{ asset('img/Boxberry.png') }}" alt=""></a>&nbspBoxberry</li>
										</ul>
									</td>
									<td  colspan="2">500 руб</td>
								</tr>
								<tr>
									<td>Доставка по всей России</td>
									<td>
										<span>Транспортными компаниями:</span>
										<ul>
											<li id="iml"><a href="http://iml.ru/places?Moscow"><img style="width: 22px;" src="{{ asset('img/IML.png') }}" alt=""></a>&nbspIML</li>
											<li id="boxberry"><a href="http://boxberry.ru/find_an_office/"><img style="width: 22px;" src="{{ asset('img/Boxberry.png') }}" alt=""></a>&nbspBoxberry</li>
											<li id="pr"><a href="https://www.pochta.ru/"><img style="width: 22px;" src="{{ asset('img/ПочтаРоссии.png') }}" alt=""></a>&nbspПочта России</li>
											<li id="b-s"><a href="https://www.baikalsr.ru/"><img style="width: 22px;" src="{{ asset('img/БайкалСервис.png') }}" alt=""></a>&nbspБайкал-сервис</li>
											<li id="sdek"><a href="http://www.edostavka.ru/"><img style="width: 22px;" src="{{ asset('img/СДЭК.png') }}" alt=""></a>&nbspСДЭК</li>
											<li id="dl"><a href="http://www.dellin.ru/"><img style="width: 22px;" src="{{ asset('img/ДеловыеЛинии.png') }}" alt=""></a>&nbspДеловые линии</li>
											<li id="pek"><a href="http://pecom.ru/"><img style="width: 22px;" src="{{ asset('img/ПЭК.png') }}" alt=""></a>&nbspПЭК</li>
										</ul>
									</td>
									<td colspan="2">Стоимость доставки рассчитывается индивидуально в зависимости от региона, товара и выбора транспортной компании.</td>
								</tr>
							</tbody>
						</table>
						<h4 id="ps">Также готовы рассмотреть возможность отправки через любую, удобную вам, транспортную компанию!</h4>

					</div>
				</div>

@endsection
@extends('layouts.tmplayout')
@section('content')
<!-- Page info section -->
<section class="page-info-section set-bg" data-setbg="img/page-info-bg/3.jpg">
		<div class="container">
			<h2>Контакты</h2>
		</div>
	</section>
	<!-- Page info section end -->


	<!-- Contact section -->
	<section class="contact-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-text">
						<h3>Мы с Вами свяжемся</h3>
						<div class="contact-info">
							<div class="ci-image set-bg" data-setbg="img/doctors/1.jpg"></div>
							<div class="ci-content">
								<p>Казахстан, Алматы, 22-я линия, 45, 2 этаж 204 офис</p>
								<p>+7 778 140 3998</p>
								<p>office@yourbusiness.com</p>
                            </div>
                            <br>
                            <div class="ci-image set-bg" data-setbg="img/doctors/1.jpg"></div>
							<div class="ci-content">
								<p>Адрес 2</p>
								<p>Номер 2</p>
								<p>office@yourbusiness.com</p>
							</div>
                        </div>
					</div>
					<form class="contact-form">
						<input type="text" placeholder="Имя">
						<input type="text" placeholder="E-mail">
						<input type="text" placeholder="Номер телефона">
						<textarea placeholder="Комментарии"></textarea>
						<button class="site-btn">Пуск!</button>
					</form>
				</div>
			</div>
		</div>
		<div class="map" id="map-canvas"></div>
	</section>
	<!-- Contact section end -->
@endsection
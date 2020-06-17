<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Dent.kz - Стоматологические оборудование</title>
	<meta charset="UTF-8">
	<meta name="description" content="Аренда, продажа стоматологических оборудований">
	<meta name="keywords" content="prodent, dentist, creative, стоматологические оборудование">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->   
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
	<!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/flaticon.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}"/>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<!-- Site Logo -->
			<a href="index.html" class="site-logo">
				<img src="img/logo-test-9.jpg" alt="" width="200px">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				<li class="{{request()->path() == '/' ? 'active' : ''}}"><a href="{{ route('main') }}">Главная</a></li>
				<li class="{{request()->path() == 'about' ? 'active' : ''}}"><a href="{{ route('about') }}">О нас</a></li>
				<li class="{{request()->path() == 'service' ? 'active' : ''}}"><a href="#">Сервисы</a></li>
				<li class="{{request()->path() == 'equipment' ? 'active' : ''}}"><a href="#">Оборудование</a></li>
				<li class="{{request()->path() == 'news' ? 'active' : ''}}"><a href="#">Новости</a></li>
				<li class="{{request()->path() == 'contacts' ? 'active' : ''}}"><a href="{{ route('contact') }}">Контакты</a></li>
				<li class="{{request()->path() == 'active' ? 'active' : ''}}"><a href="#"><i class="flaticon-020-decay fa-2x"></i></a></li>
			</ul>
		</div>
		<div class="header-info">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/map-marker.png" alt="">
						</div>
						<div class="hi-content">
							<h6>22-я линия, 45, 2 этаж 204 офис</h6>
							<p>Казахстан, Алматы</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/clock.png" alt="">
						</div>
						<div class="hi-content">
							<h6>Рабочая время</h6>
							<p>Пон - Пят: 9:00 - 19:00</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/phone.png" alt="">
						</div>
						<div class="hi-content">
							<h6>+7 778 140 3998</h6>
							<p>Позвоните нам сейчас!</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 hi-item">
						<div class="hs-icon">
							<img src="img/icons/calendar.png" alt="">
						</div>
						<div class="hi-content">
							<h6>22-я линия, 45</h6>
							<p>Казахстан, Алматы</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->
                                               
    @yield('content')
    
    <!-- Newsletter section -->
	<section class="newsletter-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text text-white">
					<h4>Подпишитесь на новости</h4>
					<p>Псс, подпишись</p>
				</div>
				<div class="col-lg-5 text-lg-right">
					<form class="newsletter-form">
						<input type="text" placeholder="Введите E-mail">
						<button class="site-btn sb-dark">Подписаться</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- Newsletter section end -->

	<!-- Footer top section -->
	<section class="footer-top-section set-bg" data-setbg="img/footer-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="footer-widget">
						<div class="fw-about">
							<img src="img/logo-test-9.jpg" alt=""  width="200px">
							<p>Подписывайтесь на социальные сети</p>
							<div class="fw-social">
								<a href=""><i class="fa fa-pinterest"></i></a>
								<a href=""><i class="fa fa-facebook"></i></a>
								<a href=""><i class="fa fa-twitter"></i></a>
								<a href=""><i class="fa fa-dribbble"></i></a>
								<a href=""><i class="fa fa-behance"></i></a>
								<a href=""><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-5">
					<div class="footer-widget">
						<div class="fw-links">
							<h5 class="fw-title">Наши услуги</h5>
							<ul>
								<li><a href="">Оборудование</a></li>
								<li><a href="">Новинки</a></li>
								<li><a href="">Условия покупки</a></li>
								<li><a href="">Доставка</a></li>
								<li><a href="">Новости</a></li>
								<li><a href="">Контакты</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-5 col-md-7">
					<div class="footer-widget">
						<div class="fw-timetable">
							<div class="fw-title">Расписание</div>
							<div class="timetable-content">
								<table>
									<tr>
										<td>Понедельник</td>
										<td>9:00 - 18:00</td>
									</tr>
									<tr>
										<td>Вторник</td>
										<td>9:00 - 18:00</td>
									</tr>
									<tr>
										<td>Среда</td>
										<td>9:00 - 18:00</td>
									</tr>
									<tr>
										<td>Четверг</td>
										<td>9:00 - 18:00</td>
									</tr>
									<tr>
										<td>Пятница</td>
										<td>9:00 - 18:00</td>
									</tr>
									<tr>
										<td>Суббота</td>
										<td>9:00 - 14:00</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Footer top section end -->

	<!-- Footer section -->
	<footer class="footer-section">
		<div class="container">
			<ul class="footer-menu">
				<li><a href="">Главная</a></li>
				<li><a href="{{ route('about') }}">О нас</a></li>
				<li><a href="">Сервисы</a></li>
				<li><a href="">Оборудование</a></li>
				<li><a href="{{ route('contact') }}">Контакты</a></li>
			</ul>
		</div>
	</footer>
	<!-- Footer top section end -->
                                                
	<!--====== Javascripts & Jquery ======-->
	<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
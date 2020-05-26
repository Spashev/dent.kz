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
				<img src="img/logo-test-3.png" alt="" width="48px">
			</a>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<!-- Main Menu -->
			<ul class="main-menu">
				<li class="active"><a href="{{ route('main') }}">Главная</a></li>
				<li><a href="#">О нас</a></li>
				<li><a href="#">Сервисы</a></li>
				<li><a href="#">Оборудование</a></li>
				<li><a href="#">Новости</a></li>
				<li><a href="#">Контакты</a></li>
				<li><a href="#"><i class="flaticon-020-decay fa-2x"></i></a></li>
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
                                               
	<!-- Hero section -->
	<section class="hero-section">
		<div class="hero-slider owl-carousel">
			<!-- item -->
			<div class="hs-item set-bg text-white" data-setbg="img/slide-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-7">
							<h2>Любите свою улыбку</h2>
							<p>Всегда радуйтесь во всю улыбку. Наше оборудование поможет Вам чаще улыбаться.</p>
							<a href="#" class="site-btn">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
			<!-- item -->
			<div class="hs-item set-bg text-white" data-setbg="img/slide-1.jpg">
				<div class="container">
					<div class="row">
						<div class="col-xl-7">
							<h2>Лучшее оборудование</h2>
							<p>(Название компании) продает только лучшее. Наше оборудорвание - залог здоровья Ваших зубов, а хорошее здоровье - залог успеха.</p>
							<a href="#" class="site-btn">Подробнее</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	<!-- Banner section -->
	<section class="banner-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-7 banner-text text-white">
					<h4>Записаться на констультацию.</h4>
					<p>*Отличное настроение обязательно.</p>
				</div>
				<div class="col-lg-5 text-lg-right">
					<a href="#" class="site-btn sb-light">Записаться.</a>
				</div>
			</div>
		</div>
	</section>
	<!-- Banner section end -->

	<!-- About section -->
	<section class="about-section spad">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<img src="img/about.jpg" alt="">
				</div>
				<div class="col-lg-7 about-text">
					<h2>Оставьте заботу о зубах нам</h2>
					<p>У нас работают только высококвалифицированные сотрудники.</p>
					<img src="img/awards.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<!-- About section end -->

	<!-- Facts section -->
	<section class="facts-section set-bg" data-setbg="img/facts-bg.jpg">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-003-tooth-3"></i>
					<h2>600</h2>
					<p>Рентгеновских ооборудований</p>
				</div>
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-002-toothbrush-1"></i>
					<h2>14 тыс.</h2>
					<p>Зубных щеток</p>
				</div>
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-030-tooth"></i>
					<h2>700</h2>
					<p>Стомотологических кресел</p>
				</div>
				<div class="col-md-3 col-sm-6 fact">
					<i class="flaticon-023-tooth-1"></i>
					<h2>2000</h2>
					<p>Счастливых обладателей нашей продукции</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Facts section end -->

	<!-- Services section -->
	<section class="services-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Наши товары</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-020-decay"></i>
					</div>
					<div class="service-content">
						<h4>Товар 1</h4>
						<p>Описание 1</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-011-implants"></i>
					</div>
					<div class="service-content">
						<h4>Товар 2</h4>
						<p>Описание 2</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-024-toothbrush"></i>
					</div>
					<div class="service-content">
						<h4>Товар 3</h4>
						<p>Описание 3</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-019-dentist"></i>
					</div>
					<div class="service-content">
						<h4>Товар 4</h4>
						<p>Описание 4</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-001-tooth-4"></i>
					</div>
					<div class="service-content">
						<h4>Товар 5</h4>
						<p>Описание 5</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 service">
					<div class="service-icon">
						<i class="flaticon-029-braces"></i>
					</div>
					<div class="service-content">
						<h4>Товар 6</h4>
						<p>Описание 6</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Services section end -->

	<!-- Gallery section -->
	<div class="gallery-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/1.jpg" alt="">
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/2.jpg" alt="">
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/3.jpg" alt="">
				</div>
				<div class="col-lg-3 col-sm-6 p-0">
					<img src="img/gallery/4.jpg" alt="">
				</div>
			</div>
		</div>
	</div>
	<!-- Gallery section end -->

	<!-- Testimonials section -->
	<section class="testimonials-section spad">
		<div class="container">
			<div class="section-title text-center">
				<h2>Отзывы</h2>
			</div>
		</div>
		<div class="testimonials-warp">
			<div class="testimonials-slider owl-carousel">
				<div class="testimonial-item">
					<div class="ts-content">
						<div class="quta">“</div>
						<p>После покупки продукции компании, я понал новые возможности в области стоматологии.</p>
						<h6>Айнур Баймагамбетова</h6>
						<span>Клиент</span>
					</div>
					<div class="author-pic set-bg" data-setbg="img/review/1.jpg"></div>
				</div>
				<div class="testimonial-item">
					<div class="ts-content">
						<div class="quta">“</div>
						<p>Раньше думал, что такое качество услуг и продукции возможно только в книге.</p>
						<h6>Дмитрий Широтов</h6>
						<span>Стоматолог</span>
					</div>
					<div class="author-pic set-bg" data-setbg="img/review/2.jpg"></div>
				</div>
				<div class="testimonial-item">
					<div class="ts-content">
						<div class="quta">“</div>
						<p>Ребята уже опередили свое время. Все отлично, супер.</p>
						<h6>Антон Холецкий</h6>
						<span>Клиент</span>
					</div>
					<div class="author-pic set-bg" data-setbg="img/review/3.jpg"></div>
				</div>
				<div class="testimonial-item">
					<div class="ts-content">
						<div class="quta">“</div>
						<p>Не магазин, а просто сказка</p>
						<h6>Светлана Дроздова</h6>
						<span>Стоматолог</span>
					</div>
					<div class="author-pic set-bg" data-setbg="img/review/2.jpg"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Testimonials section end -->

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
							<img src="img/logo-test.png" alt="" width="50px">
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
				<li><a href="">Home</a></li>
				<li><a href="">About us</a></li>
				<li><a href="">Services</a></li>
				<li><a href="">Blog</a></li>
				<li><a href="">Contact</a></li>
			</ul>
			<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
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
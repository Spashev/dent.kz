@extends('layouts.tmplayout')
@section('content')
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

	
@endsection
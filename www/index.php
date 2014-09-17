<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru-ru">
<head>
	<META http-equiv="Content-Type" content="text/html" charset="utf-8">
	<title>Эстив</title>
	<meta name="format-detection" content="telephone=no"/>
	<meta name="MobileOptimized" content="1200"/>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	
	<link rel="shortcut icon" href="images/favicon.ico" />
	<link rel="icon" href="images/favicon.ico" />

	<!--[if lte IE 8]><script src="/js/css3-mediaqueries.js"></script><![endif]-->
	<!--[if gte IE 9]><style type="text/css">.gradient {filter: none;}</style><![endif]-->

	<link href="/css/normalize.css" rel="stylesheet" type="text/css" />
	<link href="/css/styles.css" rel="stylesheet" type="text/css" />

	<!--[if lte IE 9]><link href="/css/ie.css" rel="stylesheet" type="text/css" /><![endif]-->

	<!-- royal slider -->
	<link rel="stylesheet" href="/js/royalslider/royalslider.css">
	<link rel="stylesheet" href="/js/royalslider/rs-index.css">


	<script type="text/javascript" src="/js/jquery.min.js"></script>

	<!--[if lte IE 9]><script src="/js/ie.js"></script><![endif]-->

	<script type="text/javascript" src="/js/tabs.js"></script>
	<script type="text/javascript" src="/js/jquery.maskedinput.min.js"></script>
	<script type="text/javascript" src="/js/jquery.placeholder.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$('input, textarea').placeholder();
			$('.b-input-phone').mask('+7 (999) 999-9999');
		});
	</script>

	<script type="text/javascript" src="/js/royalslider/jquery.easing-1.3.js"></script>
	<script type="text/javascript" src="/js/royalslider/jquery.royalslider.min.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			var rsi = $('.b-index_slider').royalSlider({
				arrowsNav: false,loop: true,keyboardNavEnabled: true,controlsInside: false,usePreloader: true,
				imageScaleMode: 'fill',arrowsNavAutoHide: false,autoScaleSlider: false,autoHeight: false,
				controlNavigation: 'thumbnails',navigateByClick: false,startSlideId: 0,autoPlay: false,
				transitionType:'move',globalCaption: false,sliderDrag: false,sliderTouch: true,transitionSpeed: 300,
				deeplinking: {enabled: false,change: false},thumbs: {spacing: 26,arrowsAutoHide: false,
				orientation: 'horizontal',arrows: false,firstMargin: 20}
			}).data('royalSlider');
			$('#b-index_slider-next').click(function () {rsi.next();});
			$('#b-index_slider-prev').click(function () {rsi.prev();});
		});
	</script>
<body>
	<section>

		<div class="b-right_column">
			
			<div class="b-left_column">
				<div class="b-right_bottom_list"></div>
				<div class="b-copyright">© ЭСТИВ.2008–2014</div>

				<header>
					<a href="#" class="b-header-logo">
						<img src="/images/estiw-logo.png" alt="" class="b-header-logo_img">
					</a>
					<div class="b-header_phone">
						<span>Бесплатный звонок по РФ</span>
						<a href="tel:8 (800) 234 0 234">8 (800) 234 0 234</a>
					</div>
					<div class="b-header_location">
						<a href="#b-town_choose" class="b-towns fancybox"><span class="b-icon_time"></span><div class="b-text">Владивосток <span class="b-icon_down"></span></div></a>
						<div class="b-time">12:31</div>
					</div>
					<div class="b-header_contacts">
						<a href="#b-callback-popup" class="b-callback_link fancybox">Заказать звонок</a>
						<a href="" class="b-contacts_link">Контактная информация</a>
					</div>

					<nav class="b-header_menu gradient">
						<div class="b-header_menu-image"></div>
						<ul class="b-level_one">
							<li class="first">
								<h1>О компании</h1>
								<ul>
									<li><a href="">Презентация</a></li>
									<li><a href="/">Структура</a></li>
									<li><a href="/">Документы</a></li>
									<li><a href="/">Реквизиты</a></li>
									<li><a href="/">Отзывы</a></li>
									<li><a href="/">Вакансии</a></li>
								</ul>
							</li>
							<li class="second">
								<h1>Услуги</h1>
								<ul>
									<h2>Организуем перевозки</h2>
									<li><a href="/">Морские</a></li>
									<li><a href="/">Железнодорожные</a></li>
									<li><a href="/">Автомобильные</a></li>
									<li><a href="/">Авиаперевозки</a></li>
									<li><a href="/">Мультимодальные</a></li>
									<h2>Перевозим грузы</h2>
									<li><a href="/">Контейнерные (FCL)</a></li>
									<li><a href="/">Сборные (LCL)</a></li>
									<li><a href="/">Негабаритные</a></li>
									<li><a href="/">Спецтехнику</a></li>
									<li><a href="/">Опасные грузы</a></li>
									<h2>Предоставляем услуги</h2>
									<li><a href="/">Таможенное оформление</a></li>
									<li><a href="/">Складская логистика</a></li>
									<li><a href="/">Сертификация товаров</a></li>
									<li><a href="/">Страхование грузов</a></li>
									<li><a href="/">Юридическая поддержка и консультирование</a></li>
									<li><a href="/">Сопутствующие услуги</a></li>
								</ul>
							</li>
							<li class="third">
								<h1>Партнерам</h1>
								<ul>
									<li><a href="/">Поставщикам услуг</a></li>
									<li><a href="/">Производителям товаров</a></li>
									<li><a href="/">Торговым компаниям</a></li>
									<li><a href="/">Фрилансерам</a></li>
									<li><a href="/">Агентам</a></li>
									<li><a href="/">Информация для СМИ</a></li>
									<li><a href="/">ЭОД</a></li>
								</ul>
							</li>
							<li class="fourth">
								<h1>Новости</h1>
								<ul>
									<li><a href="/">Все новости</a></li>
									<li><a href="/">О компании</a></li>
									<li><a href="/">Таможня</a></li>
									<li><a href="/">Порты</a></li>
									<li><a href="/">Море</a></li>
									<li><a href="/">Железная дорога</a></li>
									<li><a href="/">Авто</a></li>
									<li><a href="/">Авиа</a></li>
									<li><a href="/">Ассоциация АРЭ</a></li>
									<li><a href="/">Общество и Политика</a></li>
									<li><a href="/">Контейнер. перевозки</a></li>
								</ul>
							</li>
							<li class="fifth">
								<h1>Справочник</h1>
								<ul>
									<li><a href="/">Законодательство</a></li>
									<li><a href="/">Incoterms</a></li>
									<li><a href="/">UCP-600</a></li>
									<li><a href="/">Товарная номенклатура</a></li>
									<li><a href="/">Транспорт. оборудование</a></li>
									<li><a href="/">Опасные грузы</a></li>
									<li><a href="/">Проектные перевозки</a></li>
									<li><a href="/">Единицы измерения</a></li>
									<li><a href="/">Термины</a></li>
									<li><a href="/">Транспортные пункты</a></li>
									<li><a href="/">Динамика курсов валют</a></li>
									<a href="/" class="b-btn b-btn-default b-btn-header_menu shadow gradient"><span class="b-glyphicon b-glyphicon-question"></span>Задать вопрос</a>
								</ul>
							</li>
						</ul>
					</nav>
				</header>
				
				<div class="b-index_slider-bg">
					<span id="b-index_slider-prev"></span>
					<span id="b-index_slider-next"></span>
					<div class="b-index_slider royalslider rsIndex">
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Обращение ген.директора</span>
						</div>
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Команда проффесионалов проффесионалов</span>
						</div>
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Персональный менеджер</span>
						</div>
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Команда проффесионалов проффесионалов</span>
						</div>
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Команда проффесионалов проффесионалов</span>
						</div>
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Команда проффесионалов проффесионалов</span>
						</div>
						<div class="b-index_slider-slide">
							<div class="b-left_content rsABlock" data-delay="100" data-move-effect="right">
								<div class="b-headline rsABlock" data-delay="200" data-move-effect="right"><h1>Заголовок слайда</h1></div>
								<div class="b-text rsABlock" data-delay="250" data-move-effect="right">
									<p>Индивидуальный подход к каждому клиенту. Ваши запросы обрабатываются быстрее и взаимодействие с компанией упрощается!</p>
								</div>
								<a href="/" class="b-btn b-btn-blue b-btn-index_slider rsABlock" data-delay="400" data-move-effect="right">Название кнопки</a>
							</div>
							<img class="b-slider-image rsABlock" src="/images/images/slider1.png" data-delay="450" data-move-effect="left">
							<span class="rsTmb">Команда проффесионалов проффесионалов</span>
						</div>
					</div>					
				</div>

				<div class="b-index_news-bg">
					<div class="b-headline"><h1>Новости</h1></div>
					<div class="b-index_news section">
						<ul class="tabs">
							<li><a>Все новости</a></li>
							<li><a>О компании</a></li>
							<li><a>Таможня</a></li>
							<li><a>Железная дорога</a></li>
							<li><a>Авто</a></li>
							<li><a>Авиа</a></li>
							<li><a>Ассоциация АРЭ</a></li>
							<li><a>Общество и политика</a></li>
						</ul>

						<div class="b-right_list">
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Все новости</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Новости о компании</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Новости таможни</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Новости о железной дороге</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Новости об авто</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Новости об авиа</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Новости об ассоциации АРЭ</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
							<div class="b-news_list box">
								<ul>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Общество и политика</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8% январь-май 2014 г. низился на 3,8%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Осетровского речного порта вырос на 30%</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Украина отгородится от России стеной</a>
									</li>
									<li class="b-new">
										<div class="b-date">1 июня</div>
										<a href="/">Грузооборот Архангельского морского торгового порта за январь-май 2014 г. низился на 3,8%</a>
									</li>
									<a href="/" class="b-link_allnews">Посмотреть все новости</a>
								</ul>
							</div>
						</div>

					</div>
				</div>
			</div>

			<div class="b-right_column-content">
				<div class="b-myestiw_block">
					<a href="/"><img src="/images/myestiw-logo.png"></a>
					<div class="b-myestiw_block-link"><a href="/">Описание</a></div>
					<div class="b-myestiw_block-link"><a href="/">Регистрация</a></div>
					<a href="/" class="b-btn b-btn-default b-btn-myestiw_login shadow gradient"><span class="b-glyphicon b-glyphicon-key"></span>Личный кабинет</a>
				</div>
				<ul class="b-menu_fast">
					<li><a href="/">Быстрый запрос</a></li>
					<li><a href="/">Калькулятор cборных грузов</a></li>
					<li><a href="/">Профессиональный запрос</a></li>
					<li><a href="/">Заказать покупку товара</a></li>
					<li><a href="/">Заказать юридическое сопровождение ВЭД</a></li>
					<li><a href="/">Договор онлайн</a></li>
				</ul>

				<div class="b-currency_block">
					<div class="b-headline">Валюта<span class="b-date">17 июня</span></div>
					<div class="b-row green">
						<div class="b-one">USD</div>
						<div class="b-two">34.56</div>
						<div class="b-three"><span class="b-icon"></span>0,26</div>
					</div>
					<div class="b-row green">
						<div class="b-one">EUR</div>
						<div class="b-two">34.56</div>
						<div class="b-three"><span class="b-icon"></span>0,26</div>
					</div>
					<div class="b-row red">
						<div class="b-one">JPY</div>
						<div class="b-two">34.56</div>
						<div class="b-three"><span class="b-icon"></span>0,26</div>
					</div>
					<div class="b-row green">
						<div class="b-one">CNY</div>
						<div class="b-two">34.56</div>
						<div class="b-three"><span class="b-icon"></span>0,26</div>
					</div>
					<a class="b-link_dynamics">Посмотреть динамику</a>
				</div>

				<div class="b-footer_icons">
					<img src="/images/footer_icons/1.png" alt="">
					<img src="/images/footer_icons/2.png" alt="">
					<img src="/images/footer_icons/3.png" alt="">
					<img src="/images/footer_icons/4.png" alt="">
				</div>
			</div>
		</div>

		<footer>
			<nav>
				<div class="b-footer_block b-footer_block_first">
					<div class="b-footer_block-link_top">
						<a href="/">О компании</a>
					</div>
					<ul>
						<li><a href="/">Презентация</a></li>
						<li><a href="/">Структура</a></li>
						<li><a href="/">Документы</a></li>
						<li><a href="/">Реквизиты</a></li>
						<li><a href="/">Отзывы</a></li>
						<li><a href="/">Вакансии</a></li>
					</ul>
				</div>
				<div class="b-footer_block">
					<div class="b-footer_block-link_top">
						<a href="/">Услуги</a>
					</div>
					<ul>
						<li><a href="/">Организация перевозок</a></li>
						<li><a href="/">Поиск и поставка товара</a></li>
						<li><a href="/">Планирование поставок</a></li>
						<li><a href="/">Таможенное оформление</a></li>
						<li><a href="/">Консультации по ВЭД</a></li>
						<li><a href="/">Типовые документы</a></li>
					</ul>
				</div>
				<div class="b-footer_block">
					<div class="b-footer_block-link_top">
						<a href="/">My estiw</a>
					</div>
					<ul>
						<li><a href="/">О системе</a></li>
						<li><a href="/">Руководство</a></li>
						<li><a href="/">Онлайн демонстрация</a></li>
						<li><a href="/">Поддержка</a></li>
						<li><a href="/">Регистрация</a></li>
					</ul>
				</div>
				<div class="b-footer_block">
					<div class="b-footer_block-link_top">
						<a href="/">Проекты</a>
					</div>
					<div class="b-footer_block-link_top">
						<a href="/">Новости</a>
					</div>
					<div class="b-footer_block-link_top">
						<a href="/">Справочник</a>
					</div>
					<div class="b-footer_block-link_top">
						<a href="/">Партнерам</a>
					</div>
				</div>
				<div class="b-footer_block b-footer_block_last">
					<div class="b-footer_phone">
						<span>Бесплатный звонок по РФ</span>
						<a href="tel:8 (800) 234 0 234">8 (800) 234 0 234</a>
					</div>
					<div class="b-footer_block-link_top">
						<a href="/">Контактная информация</a>
					</div>
					<div class="b-footer_block-searchform">
						<span class="b-search_icon"></span>
						<form method="GET" action="#">
							<input type="text">
						</form>
					</div>
				</div>
			</nav>
		<footer>

	</section>

	<div id="b-callback-popup" style="display: none;">
		<div class="b-callback-popup_form">
			<div class="b-left gradient">
				<h2>Появились вопросы?</h2>
				<span class="b-phone">Звоните прямо сейчас <br/><a href="tel:88002340234">8 (800) 234 0 234</a></span>
			</div>
			<div class="b-right">
				<h2>Вам перезвонить?</h2>
				<form name="message" method="post" action="/message/new" novalidate="novalidate">
					<input type="text" class="b-input-name" placeholder="Ваше имя" />
					<input type="text" class="b-input-phone" placeholder="Ваш телефон" />
					<button class="button b-btn b-btn-blue b-btn-callback_popup" type="submit">Заказать звонок</button>
				</form>
			</div>
		</div>
		<div class="b-callback-popup_success" style="display: none;">
			<div>
				<img src="/images/popup-success.png" class="b-image_success">
				<h2>Ваша заявка отправлена</h2>
				<div class="b-text">Спасибо за интерес к нашей студии. В ближайшее время наши специалисты <br/>Вам перезвонят и проконсультируют по всем вопросам.</div>
			</div>
		</div>
	</div>

	<div id="b-town_choose" style="display: none;">
		<div class="b-town_choose-popup">
			<div class="b-town_choose-headline gradient">
				<h1>Пожалуйста, выберите свой часовой пояс</h1>
			</div>
			<ul>
				<li><a class="b-bold active">Владивосток</a></li>
				<li><a>Пекин</a></li>
				<li><a>Новосибирск</a></li>
				<li><a class="b-bold">Москва</a></li>
				<li><a>Киев</a></li>
				<li><a>Иркутск</a></li>
				<li><a>Сингапур</a></li>
				<li><a>Токио</a></li>
				<li><a>Сидней</a></li>
				<li><a>Лондон</a></li>
				<li><a>Нью-Йорк</a></li>
				<li><a>Амстердам</a></li>
				<li><a>Дубай</a></li>
				<li><a>Рио-де-Жанейро</a></li>
				<li><a>Петропавловск-Камчатский</a></li>
				<li><a>Лос-Анджелес</a></li>
				<li><a>Мехико</a></li>
			</ul>
		</div>
	</div>

	<link rel="stylesheet" href="/js/fancybox/source/jquery.fancybox.css"  media="screen" />
	<script type="text/javascript" src="/js/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="/js/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $(".fancybox").fancybox({
		        closeBtn: true
		    });
		});
	</script>
</body>
</html>
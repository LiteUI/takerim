<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title></title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 

<?php include "blocks/header.php"; ?>

<section class="actions">
	<div class="actionblock">
		<div class="container">
			<div class="actionblock__leftside">
				<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a>Обзоры покупок</p>
				<a href="#" class="actionblock__writereview"><span class="actionblock__icon actionblock__icon_plus"><span></span></span>Написать обзор</a>
				<!-- кнопки при скролле -->
				<a href="#" class="actionblock__icon actionblock__icon_search"><img src="img/icon_search.svg" alt="@@" width="19" height="19"></a>
				<a href="#" class="actionblock__icon actionblock__icon_filter"><img src="img/icon_filter.svg" alt="@@"></a>
				<!-- // кнопки при скролле -->
			</div>
			<div class="actionblock__rightside">
				<!-- до входа в ЛК -->
				<div class="actionblock__account actionblock__account_login">
					<a href="#" class="actionblock__register">Регистрация</a>
					<a href="#loginform" class="actionblock__login fancybox">Вход</a>
				</div>
				<!-- // до входа в ЛК -->
				<!-- после входа в ЛК -->
				<div class="actionblock__account actionblock__account_logged">
					<a href="#" class="actionblock__icon actionblock__icon_like">
						<svg width="16px" height="14px" viewBox="0 0 16 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="likeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_like" transform="translate(-12.000000, -14.000000)" fill="#CECFD6"><path d="M19.9333422,17.0730566 C19.4753964,15.1079889 17.5917835,13.7959794 15.5589834,14.0261458 C13.5261833,14.2563122 11.9936821,15.9551157 12.0000196,17.9713173 C12.0000196,22.8984857 19.9333422,28 19.9333422,28 C19.9333422,28 27.8666648,22.8984857 27.8666648,17.9713173 C27.8676856,16.9202217 27.4446492,15.9118319 26.6907266,15.1682394 C25.9368041,14.4246468 24.9138324,14.0068413 23.8471147,14.0068418 C21.9776185,14.0077276 20.3555441,15.2785292 19.9333422,17.0730566 Z" id="likeShape"></path></g></g></svg>
					</a>
					<a href="#" class="actionblock__icon actionblock__icon_notification">
						<img src="img/icon_bell.svg" alt="@@">
						<!-- количество уведомлений -->
						<span>6</span>
						<!-- // количество уведомлений -->
					</a>
					<a href="#" class="actionblock__username">
						<span class="actionblock__icon actionblock__icon_avatar">
							<img src="img/avatar1.png" alt="@@">
							<!-- крестик -->
							<span></span>
							<!-- // крестик -->
						</span>
					Sorokins</a>
					<!-- информация о пользователе -->
						<div class="dropmenu userinfo actionblock__userinfo">
							<div class="userinfo__avatar"><img src="img/avatar1.png" alt="@@"></div>
							<p class="userinfo__name">Sorokins</p>
							<ul class="userinfo__actionlist">
								<li><a href="#"><img src="img/icon_profile.svg" alt="@@">Профиль</a></li>
								<li><a href="#"><img src="img/icon_draft.svg" alt="@@">Черновики</a></li>
								<li><a href="#"><img src="img/icon_options.svg" alt="@@">Настройки</a></li>
								<li><a href="#" class="userinfo__logout"><img src="img/icon_exit.svg" alt="@@">Выход</a></li>
							</ul>
						</div>
					<!-- // информация о пользователе -->
				</div>
				<!-- // после входа в ЛК -->
			</div>
		</div>
	</div>
	
	<div class="searchblock">
		<div class="container">
			<div class="searchblock__leftside">
				<a href="#" class="searchblock__icon searchblock__icon_search"><img src="img/icon_search.svg" alt="@@" width="19" height="19"></a>
				<ul class="searchblock__menu searchblock__menu_categories">
					<li class="searchblock__option searchblock__option_categories"><a href="#">категории</a></li>
				</ul>
				<ul class="searchblock__menu">
					<li class="searchblock__option"><a href="#">магазины</a></li>
				</ul>
				<ul class="searchblock__menu">
					<li class="searchblock__option"><a href="#">авторы</a></li>
				</ul>
				<ul class="searchblock__menu searchblock__menu_date">
					<li class="searchblock__option searchblock__option_default"><a href="#" data-default="по дате">по дате</a></li>
					<!-- выпадающий список фильтра -->
					<ul class="dropmenu searchblock__submenu">
						<li data-type="по дате"><a href="#">Дата<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(старые-новые)">Старые - Новые</a></li>
									<li><a href="#" data-value="(новые-старые)">Новые - Старые</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
						<li data-type="по рейтингу"><a href="#">Рейтинг<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(ниже-выше)">Ниже - Выше</a></li>
									<li><a href="#" data-value="(выше-ниже)">Выше - Ниже</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
						<li data-type="по просмотрам"><a href="#">Просмотры<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(меньше-больше)">Меньше - Больше</a></li>
									<li><a href="#" data-value="(больше-меньше)">Больше - Меньше</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
						<li data-type="по комментариям"><a href="#">Комментарии<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(меньше-больше)">Меньше - Больше</a></li>
									<li><a href="#" data-value="(больше-меньше)">Больше - Меньше</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
					</ul>
					<!-- // выпадающий список фильтра -->
				</ul>
				<!-- дополнительные настройки активного фильтра -->
				<a href="#" class="searchblock__icon searchblock__icon_minus"><span></span></a>
				<ul class="searchblock__menu searchblock__menu_select">
					<li class="searchblock__option"><a href="#" data-default="выбрать">выбрать</a></li>
					<!-- выпадающий список фильтра -->
					<ul class="dropmenu searchblock__submenu">
						<li data-type="по дате"><a href="#">Дата<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(старые-новые)">Старые - Новые</a></li>
									<li><a href="#" data-value="(новые-старые)">Новые - Старые</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
						<li data-type="по рейтингу"><a href="#">Рейтинг<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(ниже-выше)">Ниже - Выше</a></li>
									<li><a href="#" data-value="(выше-ниже)">Выше - Ниже</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
						<li data-type="по просмотрам"><a href="#">Просмотры<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(меньше-больше)">Меньше - Больше</a></li>
									<li><a href="#" data-value="(больше-меньше)">Больше - Меньше</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
						<li data-type="по комментариям"><a href="#">Комментарии<img src="img/icon_arrow_select.svg" alt="@@"></a>
							<!-- дополнительный выпадающий список -->
							<div class="searchblock__addmenu-wrapper">
								<ul class="dropmenu searchblock__addmenu">
									<li><a href="#" data-value="(меньше-больше)">Меньше - Больше</a></li>
									<li><a href="#" data-value="(больше-меньше)">Больше - Меньше</a></li>
								</ul>
							</div>
							<!-- // дополнительный выпадающий список -->
						</li>
					</ul>
					<!-- // выпадающий список фильтра -->
				</ul>
				<!-- // дополнительные настройки активного фильтра -->
				<a href="#" class="searchblock__icon searchblock__icon_plus"><span></span></a>
			</div>
			<div class="searchblock__rightside">
				<a href="#" class="searchblock__icon searchblock__icon_view active" data-view="squares">
					<svg width="16px" height="16px" viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="view1Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_view1" fill="#c6c8d1"><rect id="view1Rectangle-6" x="0" y="0" width="7" height="7" rx="1"></rect><rect id="view1Rectangle-6-Copy-2" x="0" y="9" width="7" height="7" rx="1"></rect><rect id="view1Rectangle-6-Copy" x="9" y="0" width="7" height="7" rx="1"></rect><rect id="view1Rectangle-6-Copy-3" x="9" y="9" width="7" height="7" rx="1"></rect></g></g></svg>
				</a>
				<a href="#" class="searchblock__icon searchblock__icon_view" data-view="stripes">
					<svg width="19px" height="16px" viewBox="0 0 19 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="view2Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_view2" fill="#c6c8d1"><g id="view2Group-2"><rect id="view2Rectangle-3" x="5" y="0" width="14" height="2"></rect><rect id="view2Rectangle-3" x="0" y="0" width="2" height="2"></rect></g><g id="view2Group-2-Copy" transform="translate(0.000000, 7.000000)"><rect id="view2Rectangle-3" x="5" y="0" width="14" height="2"></rect><rect id="view2Rectangle-3" x="0" y="0" width="2" height="2"></rect></g><g id="view2Group-2-Copy-2" transform="translate(0.000000, 14.000000)"><rect id="view2Rectangle-3" x="0" y="0" width="2" height="2"></rect><rect id="view2Rectangle-3" x="5" y="0" width="14" height="2"></rect></g></g></g></svg>
				</a>
			</div>
		</div>
		<!-- поле для поиска -->
		<div class="searchblock__searchfield">
			<div class="container">
				<form action="" class="searchblock__form" id="searchform">
					<input type="text" placeholder="Поиск по обзорам">
					<button><img src="img/icon_search.svg" alt="@@" width="19" height="19"></button>
				</form>
			</div>
		</div>
		<!-- // поле для поиска -->
	</div>
</section>

<section class="reviews">

<!-- список категорий -->
	<div class="searchblock__categories">
			<div class="container">
				<div class="searchblock__category-column">
					<div class="category searchblock__category">
						<a href="#" class="category__name">Телефоны и средсва связи<span class="category__count category__count_all">555</span></a>
						<ul class="category__list">
							<li><a href="#">Телефоны и смартфоны<span class="category__count">555</span></a></li>
							<li><a href="#">Стационарные телефоны<span class="category__count">3</span></a></li>
							<li><a href="#">Дисплеи, Тач панели<span class="category__count">7</span></a></li>
							<li><a href="#">Аксессуары для<br> телефонов<span class="category__count">186</span></a></li>
							<li><a href="#">Запчасти<span class="category__count">7</span></a></li>
							<li><a href="#">Аккумуляторы и зарядные<br> устройства<span class="category__count">151</span></a></li>
							<li><a href="#">Наушники, Handfree<span class="category__count">119</span></a></li>
						</ul>
					</div>
					<div class="category searchblock__category">
						<a href="#" class="category__name">Компьютеры и сети<span class="category__count category__count_all">544</span></a>
						<ul class="category__list">
							<li><a href="#">Дисплеи, Тач панели<span class="category__count">7</span></a></li>
							<li><a href="#">Запчасти<span class="category__count">7</span></a></li>
							<li><a href="#">Наушники, Handsfree<span class="category__count">119</span></a></li>
							<li><a href="#">Фото и Видео камеры<span class="category__count">127</span></a></li>
							<li><a href="#">Домашние кинотеатры<span class="category__count">16</span></a></li>
							<li><a href="#">Портативное аудио и<br> видео<span class="category__count">203</span></a></li>
							<li><a href="#">IP Камеры<span class="category__count">34</span></a></li>
						</ul>
					</div>
				</div>
				<div class="searchblock__category-column">
					<div class="category searchblock__category">
						<a href="#" class="category__name">Бытовая Электроника<span class="category__count category__count_all">814</span></a>
						<ul class="category__list">
							<li><a href="#">Фото и Видео камеры<span class="category__count">127</span></a></li>
							<li><a href="#">Домашние кинотеатры<span class="category__count">16</span></a></li>
							<li><a href="#">Портативное аудио и<br> видео<span class="category__count">203</span></a></li>
							<li><a href="#">Аксессуары для фото/<br>видео камер<span class="category__count">105</span></a></li>
							<li><a href="#">Игры и аксессуары<span class="category__count">19</span></a></li>
							<li><a href="#">Ресиверы<span class="category__count">7</span></a></li>
							<li><a href="#">IP Камеры<span class="category__count">34</span></a></li>
							<li><a href="#">Регистраторы, Камеры<br> наблюдения<span class="category__count">27</span></a></li>
							<li><a href="#">Запчасти и аксессуары<span class="category__count">17</span></a></li>
							<li><a href="#">Наушники, динамики<span class="category__count">130</span></a></li>
							<li><a href="#">Пульты д/у<span class="category__count">21</span></a></li>
							<li><a href="#">TV-приставки<span class="category__count">81</span></a></li>
						</ul>
					</div>
					<div class="category searchblock__category">
						<a href="#" class="category__name">Носители информации<span class="category__count category__count_all">814</span></a>
						<ul class="category__list">
							<li><a href="#">Телефоны и смартфоны<span class="category__count">555</span></a></li>
							<li><a href="#">Стационарные телефоны<span class="category__count">3</span></a></li>
							<li><a href="#">Аксессуары для<br> телефонов<span class="category__count">186</span></a></li>
							<li><a href="#">Запчасти<span class="category__count">7</span></a></li>
							<li><a href="#">Наушники, HandFree<span class="category__count">119</span></a></li>
							<li><a href="#">Телефоны и смартфоны<span class="category__count">555</span></a></li>
						</ul>
					</div>
				</div>
				<div class="searchblock__category-column">
					<div class="category searchblock__category">
						<a href="#" class="category__name">Носители информации<span class="category__count category__count_all">814</span></a>
						<ul class="category__list">
							<li><a href="#">Телефоны и смартфоны<span class="category__count">555</span></a></li>
							<li><a href="#">Стационарные телефоны<span class="category__count">3</span></a></li>
							<li><a href="#">Аксессуары для<br> телефонов<span class="category__count">186</span></a></li>
							<li><a href="#">Запчасти<span class="category__count">7</span></a></li>
							<li><a href="#">Наушники, HandFree<span class="category__count">119</span></a></li>
							<li><a href="#">Телефоны и смартфоны<span class="category__count">555</span></a></li>
						</ul>
					</div>
					<div class="category searchblock__category">
						<a href="#" class="category__name">Компьютеры и сети<span class="category__count category__count_all">544</span></a>
						<ul class="category__list">
							<li><a href="#">Дисплеи, Тач панели<span class="category__count">7</span></a></li>
							<li><a href="#">Запчасти<span class="category__count">7</span></a></li>
							<li><a href="#">Наушники, Handsfree<span class="category__count">119</span></a></li>
							<li><a href="#">Фото и Видео камеры<span class="category__count">127</span></a></li>
							<li><a href="#">Домашние кинотеатры<span class="category__count">16</span></a></li>
							<li><a href="#">Портативное аудио и<br> видео<span class="category__count">203</span></a></li>
							<li><a href="#">IP Камеры<span class="category__count">34</span></a></li>
						</ul>
					</div>
				</div>
				<div class="searchblock__category-column">
					<div class="category searchblock__category">
						<a href="#" class="category__name">Компьютеры и сети<span class="category__count category__count_all">544</span></a>
						<ul class="category__list">
							<li><a href="#">Дисплеи, Тач панели<span class="category__count">7</span></a></li>
							<li><a href="#">Запчасти<span class="category__count">7</span></a></li>
							<li><a href="#">Наушники, Handsfree<span class="category__count">119</span></a></li>
							<li><a href="#">Фото и Видео камеры<span class="category__count">127</span></a></li>
							<li><a href="#">Домашние кинотеатры<span class="category__count">16</span></a></li>
							<li><a href="#">Портативное аудио и<br> видео<span class="category__count">203</span></a></li>
							<li><a href="#">IP Камеры<span class="category__count">34</span></a></li>
						</ul>
					</div>
					<div class="category searchblock__category">
						<a href="#" class="category__name">Бытовая Электроника<span class="category__count category__count_all">814</span></a>
						<ul class="category__list">
							<li><a href="#">Фото и Видео камеры<span class="category__count">127</span></a></li>
							<li><a href="#">Домашние кинотеатры<span class="category__count">16</span></a></li>
							<li><a href="#">Портативное аудио и<br> видео<span class="category__count">203</span></a></li>
							<li><a href="#">Аксессуары для фото<br>/видео камер<span class="category__count">105</span></a></li>
							<li><a href="#">Игры и аксессуары<span class="category__count">19</span></a></li>
							<li><a href="#">Ресиверы<span class="category__count">7</span></a></li>
							<li><a href="#">IP Камеры<span class="category__count">34</span></a></li>
							<li><a href="#">Регистраторы, Камеры<br> наблюдения<span class="category__count">27</span></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="searchblock__categories-bottom">
				<a href="#" class="searchblock__allcategories">Все категории</a>
			</div>
		</div>
	<div class="searchblock__categories-overlay"></div>
<!-- // список категорий -->

	<div class="container">
		<ul class="reviews__cards">
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods1.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">19 окт</p>
					<p class="reviews__name">Обзор портативной колонки Biolit 15</p>
					<p class="reviews__text">В домашней акустике революций уже особенно не ожидается. конечно, есть Hi-Fi и дорогие системы, акустика для кино - там Dolby Atmos и другие обновления. Но вот именно для музыки, чтобы послушать дома и не городить огород из напольных конструкций, а при желании легко перенести колонку в другую комнату или другой дом - таких продуктов известно немного. <br>[...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Sorokins</p>
						<p class="reviews__price">€ 499</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods2.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">19 окт</p>
					<p class="reviews__name">Портативная колонка Beoplay A1 от компании beoplay</p>
					<p class="reviews__text">Когда выложил фотографию колонки в Instagram, многие спрашивали, ну а какой же реальный размер у колонки? Но тут дело не только в размере, но и в необычной форме в целом, А1 напоминает таблетку, где нижняя часть плоская, а верхняя с закруглениями, оттого и не получается сразу ухватить, как она выглядит. На пресс-фото устройство кажется маленьким, и я уже испугался, что в B&amp;O решились на отчаянный шаг - залезть в нишу JBL Clip и прочих [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Sorokins</p>
						<p class="reviews__price">€ 499</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card reviews__card_big">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like reviews__like_grey">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods3.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">4 окт</p>
					<p class="reviews__name">Самый полный обзор Apple iPhone 7 и iPhone 7 Plus</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Sorokins</p>
						<p class="reviews__price">$ 649</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods4.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">31 сен</p>
					<p class="reviews__name">Сбалансированные беспроводные наушники Gravity</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Bezbod</p>
						<p class="reviews__price">$ 149,00</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods5.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">26 сен</p>
					<p class="reviews__name">Умный велосипед от нового игрока на рынке Shibusa</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Oke-Anis</p>
						<p class="reviews__price">$ 789,00</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods6.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">20 сен</p>
					<p class="reviews__name">Стильный Square Wireless Chip Reader</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Bezbod</p>
						<p class="reviews__price">$ 99,00</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods7.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">17 сен</p>
					<p class="reviews__name">Красный Induction Power Pack от Huggl</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Syncaine</p>
						<p class="reviews__price">$ 50,99</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card reviews__card_big">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods8.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">14 сен</p>
					<p class="reviews__name">Обзор необычного вейпа в виде трубки, как у Холмса Holmes Pipe</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Sorokins</p>
						<p class="reviews__price">€ 199,59</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods9.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">5 сен</p>
					<p class="reviews__name">Инновационный мини холодильник OOINO Mini Refrigerator</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Oke-Anis</p>
						<p class="reviews__price">€ 499,00</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
			<li class="reviews__card">
				<div class="reviews__card-wrapper"></div>
				<a href="detail.php" class="reviews__cardlink"></a>
				<!-- иконки рейтинга и лайка -->
				<span class="reviews__rating four">4,3</span>
				<span class="reviews__like reviews__like_grey">
					<svg width="22px" height="21px" viewBox="0 0 22 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M253.00001,37.5120647 C252.480492,35.2662731 250.34362,33.7668336 248.037502,34.0298809 C245.731384,34.2929283 243.992833,36.2344179 244.000022,38.5386483 C244.000022,44.1696979 253.00001,50 253.00001,50 C253.00001,50 261.999998,44.1696979 261.999998,38.5386483 C262.001156,37.3373962 261.521241,36.1849507 260.66595,35.3351307 C259.81066,34.4853107 258.650146,34.0078186 257.440004,34.0078192 C255.319147,34.0088315 253.478979,35.4611762 253.00001,37.5120647 Z" id="cardlikepath-1"></path><mask id="cardlikemask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="22" height="20"><rect x="242" y="32" width="22" height="20" fill="white"></rect><use xlink:href="#cardlikepath-1" fill="black"></use></mask></defs><g id="cardlikeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardlike" transform="translate(-242.000000, -32.000000)" stroke="#FFFFFF" stroke-width="4"><use id="cardlikefavorite" mask="url(#cardlikemask-2)" xlink:href="#cardlikepath-1"></use></g></g></svg>
					
					<svg width="18px" height="16px" viewBox="0 0 18 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="cardlikedPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_cardliked" transform="translate(-366.000000, -138.000000)" fill="#99CC00"><g id="cardlikedcontetn" transform="translate(132.000000, 114.000000)"><g id="cardlikedfavorite" transform="translate(234.000000, 0.000000)"><path d="M9.00001006,27.5120647 C8.48049172,25.2662731 6.34361993,23.7668336 4.03750219,24.0298809 C1.73138446,24.2929283 -0.00716735518,26.2344179 2.2217174e-05,28.5386483 C2.2217174e-05,34.1696979 9.00001006,40 9.00001006,40 C9.00001006,40 17.9999979,34.1696979 17.9999979,28.5386483 C18.0011559,27.3373962 17.5212407,26.1849507 16.6659504,25.3351307 C15.8106601,24.4853107 14.6501461,24.0078186 13.4400041,24.0078192 C11.319147,24.0088315 9.47897855,25.4611762 9.00001006,27.5120647 Z"></path></g></g></g></g></svg>
				</span>
				<!-- // иконки рейтинга и лайка -->
				<div class="reviews__cardimage">
					<img src="img/goods10.png" alt="@@">
				</div>
				<div class="reviews__cardinfo">
					<p class="reviews__date">29 авг</p>
					<p class="reviews__name">Кольцо с тревожной кнопкой - NIMB. Обзор новинки</p>
					<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам [...]</p>
					<div class="reviews__cardbottom">
						<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
						<p class="reviews__author">Bezbod</p>
						<p class="reviews__price">$ 259,00</p>
						<!-- название магазина -->
						<a href="#" class="reviews__shop reviews__shop_name">GearBest.com
						<span>В магазин</span></a>
						<!-- // название магазина -->
					</div>
				</div>
			</li>
		</ul>
		<div class="reviews__pagination">
			<a href="#" class="reviews__pagearrow reviews__pagearrow_prev"><img src="img/icon_arrow.svg" alt="@@"></a>
			<ul class="reviews__pagenumbers">
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li class="active"><a href="#">5</a></li>
				<li><a href="#">6</a></li>
				<li><a href="#">7</a></li>
				<li><a href="#">...</a></li>
				<li><a href="#">30</a></li>
			</ul>
			<a href="#" class="reviews__pagearrow reviews__pagearrow_next"><img src="img/icon_arrow.svg" alt="@@"></a>
		</div>
		<div class="reviews__more">
			<a href="#" class="reviews__showmore">Показать еще</a>
		</div>
	</div>
</section>

<?php include "blocks/footer.php"; ?>

<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
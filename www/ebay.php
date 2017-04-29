<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Taker.IM</title>
    <?php include "blocks/css.php"; ?>
</head>

<body> 
<div class="page page_ebay">

<section class="formscreen formscreen_ebay section">
	<div class="section-overlay"></div>
	<div class="content content_column">
		<div class="container">
			<p class="formscreen__preheading animated delay1 bounceInUp">Проверь продавца на eBay</p>
			<h2 class="formscreen__heading animated delay1 bounceInUp">Введите ник продавца или ссылку на его товар или магазин на eBay</h2>
			<form action="send.php" method="post" autocomplete="off" class="formscreen__form animated delay1 bounceInUp">
				<div class="inputblock">
			    	<div class="more">
			    		<span class="more__dot"></span>
			    		<span class="more__dot"></span>
			    		<span class="more__dot"></span>
			    	</div>
				    <input type="text" name="seller">
				</div>
				<div class="formscreen__form-bottom">
					<button class="button button_pink" type="submit">Проверить</button>
				</div>
			</form>
			<img src="img/together.svg" alt="@@" class="animated delay2 bounceInUp">
			<p class="formscreen__cardheading">Недавно проверенные продавцы</p>
		 </div>
		 <div class="container_navcards">
		 	<div class="cardnav formscreen__cardnav">
				<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
				<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
			</div>
			<div class="formscreen__cards js-navcards">
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Vologry</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">98<span>баллов</span></p>
							<p class="sellercard__detail">56 сек. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Resawa</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">2 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Maskit</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">3 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Maskit</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">3 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
				<a href="#" class="sellercard">
					<div class="sellercard__avatar">
						<img src="img/avatar1.png" alt="@@">
					</div>
					<div class="sellercard__info">
						<p class="sellercard__name">Maskit</p>
						<div class="sellercard__details">
							<p class="sellercard__detail">87<span>баллов</span></p>
							<p class="sellercard__detail">3 мин. назад<span>Проверен</span></p>
						</div>
					</div>
				</a>
			</div>
		</div>
		<a href="#reviews" class="scroll-link animated fadeInUp nav"><span class="scroll-link__mouse"></span><span class="scroll-link__text">Обзоры покупок</span></a>
	</div>
</section>

<section class="second good">
	<div class="content content_column">
		<div class="container">
			<div class="second__top">
				<img src="img/good.svg" alt="@@" class="good">
				<img src="img/bad.svg" alt="@@" class="bad">
				<div>
					<p class="second__blockheading">Покупать?</p>
					<p class="second__blocktext" id="yesorno">Да, можно покупать.</p>
				</div>
				<div>
					<p class="second__blockheading">Наш рейтинг продавца</p>
					<p class="second__blocktext"><span id="ratingnumber">85</span> из 100 <br>
					<span id="textrating">очень хороший</span></p>
				</div>
				<div>
					<p class="second__blockheading">Стр. проверки продавца</p>
					<p class="second__sellerpage">http://www.taker.im/e/sorokins</p>
					<a href="#" class="second__addtofav" id="tofavourites">Добавить в избранное</a>
				</div>
			</div>
			<div class="second__goods-head">
				<p class="second__goods-heading">Товары  Sorokins в продаже</p>
				<div class="second__goods-share">
					<p class="second__goods-sharetext">Расскажи друзьям о продавце</p>
					<div class="second__goods-social">
						<a href="#" class="icon vk"></a>
						<a href="#" class="icon facebook"></a>
						<a href="#" class="icon twitter"></a>
						<a href="#" class="icon ok"></a>
						<a href="#" class="icon mailru"></a>
					</div>
				</div>
			</div>
		</div>
		<div class="container container_navcards">
		 	<div class="cardnav firstscreen__cardnav">
				<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
				<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
			</div>
			<div class="second__goods-cards js-navcards">
				<a href="#" class="second__card goodcard shadow-hover">
					<div class="goodcard__image">
						<img src="img/goods9.png" alt="@@">
					</div>
					<div class="goodcard__info">
						<p class="goodcard__number">4967853524565</p>
						<p class="goodcard__price">€ 499</p>
						<p class="goodcard__text">Инновационный мини холодильник OOINO Mini Refrigerator</p>
					</div>
				</a>
				<a href="#" class="second__card goodcard shadow-hover">
					<div class="goodcard__image">
						<img src="img/goods4.png" alt="@@">
					</div>
					<div class="goodcard__info">
						<p class="goodcard__number">3963254525665</p>
						<p class="goodcard__price">€ 192</p>
						<p class="goodcard__text">Сбалансированные беспроводные наушники Gravity</p>
					</div>
				</a>
				<a href="#" class="second__card goodcard shadow-hover">
					<div class="goodcard__image">
						<img src="img/goods2.png" alt="@@">
					</div>
					<div class="goodcard__info">
						<p class="goodcard__number">4967853524565</p>
						<p class="goodcard__price">€ 499</p>
						<p class="goodcard__text">Инновационный мини холодильник OOINO Mini Refrigerator</p>
					</div>
				</a>
				<a href="#" class="second__card morecard morecard_rose shadow-hover">
					<img src="img/ebaylogo.png" alt="@@" class="morecard__logo">
					<p class="morecard__count">+ 8 669</p>
					<p class="morecard__text">Показать все товары<br> Sorokins</p>
				</a>
			</div>
		</div>
	</div>
	<a href="#" class="second__detail-button">Детальная информация</a>
</section>

<section class="moreinfo">
	<div class="container container_big">
		<div class="table">
		<ul>
			<li>
				<p>Ник продавца</p>
				<div class="icon avatar"></div>
				<p class="huge"><a href="#">Sorokins</a></p>
				<p>Посмотреть <a href="#">историю смены имени</a> продавца</p>
			</li>
			<li>
				<p>Рейтинг <a href="#">Positive Feedback score</a></p>
				<div class="icon happy"></div>
				<p class="huge">100%</p>
				<p>У продавца <a href="#">Sorokins</a> 100% рейтинг на аукционе eBay.</p>
			</li>
			<li>
				<p>Страна</p>
				<div class="icon pin"></div>
				<p class="huge">Великобритания</p>
				<p>Продавец указал, что он из страны Великобритания.</p>
			</li>
			<li>
				<p>Количество отзывов за продажи</p>
				<div class="icon happy"></div>
				<p class="huge">63949</p>
				<p>Продавец со стажем, 63949 отзывов за продажи на аукционе eBay, внушает доверие.</p>
			</li>
			<li>
				<p>Стаж на аукционе eBay</p>
				<div class="icon happy"></div>
				<p class="huge">9 лет</p>
				<p>Продавец со стажем на аукционе eBay 9 лет, проверенный временен продавец.</p>
			</li>
			<li>
				<p>Кол-во продаж за последний год</p>
				<div class="icon happy"></div>
				<p class="huge">38412</p>
				<p>За последний год пользователь продал 38412 единиц товара на аукционе eBay.</p>
			</li>
			<li>
				<p>Кол-во продаж за последний месяц</p>
				<div class="icon happy"></div>
				<p class="huge">2634</p>
				<p>За последний месяц пользователь продал 2634 единиц товара на аукционе eBay.</p>
			</li>
			<li>
				<p>Соответствие товара описанию</p>
				<div class="icon displeased"></div>
				<p class="huge">98%</p>
				<p>2% покупателей не довольны качеством товара. Будьте внимательны</p>
			</li>
			<li>
				<p>Оценка общения с продавцом</p>
				<div class="icon displeased"></div>
				<p class="huge">98%</p>
				<p>2% покупателей не довольны общением с продавцом. Продавец может по долгу не отвечать на вопросы.</p>
			</li>
			<li>
				<p>Оценка скорости обработки заказа (время отправки)</p>
				<div class="icon displeased"></div>
				<p class="huge">98%</p>
				<p>2% процентов покупателей не довольны сроком обработки заказа покупателей.</p>
			</li>
			<li>
				<p>Оценка стоимости доставки</p>
				<div class="icon happy"></div>
				<p class="huge">100%</p>
				<p>Доставка большинства товаров бесплатная, или по приемлемой цене.</p>
			</li>
			<li>
				<p>Наличие статуса <a href="#">Top Rated Seller</a></p>
				<div class="icon sad"></div>
				<p class="huge">Нет</p>
				<p>Продавец не достиг звания TopRate Seller <a href="#">Подробнее о звании TopRate Seller</a></p>
			</li>
			<li>
				<p>Наличие собственного магазина (Store) на eBay</p>
				<div class="icon happy"></div>
				<p class="huge">Есть</p>
				<p>У продавца имеется свой <a href="#">магазин</a>, в котором могут быть более привлекательные цены.</p>
			</li>
			<li>
				<p>Кол-во выставленных товаров</p>
				<div class="icon happy"></div>
				<p class="huge">96682</p>
				<p>У продавца на аукционе eBay выставлено 96682 товаров в 29 категорий.</p>
			</li>
			<li>
				<p>Средняя стоимость выставленных товаров</p>
				<div class="icon dollar"></div>
				<p class="huge">41.49 $</p>
				<p>Средняя стоимость <a href="#">выставленных товаров</a> у продавца <a href="#">Sorokins</a> составляет 41.49&nbsp;$</p>
			</li>
			<li>
				<p>Средняя стоимость проданных товаров за месяц</p>
				<div class="icon dollar"></div>
				<p class="huge">126.96 $</p>
				<p>Средняя стоимость <a href="#">проданных товаров</a> за месяц у продавца <a href="#">Sorokins</a> составляет 126.96&nbsp;$</p>
			</li>
			<li>
				<p>Кол-во подписчиков</p>
				<div class="icon happy"></div>
				<p class="huge">1002</p>
				<p>1002 покупателей добавили продавца в избранное на аукционе eBay.</p>
			</li>
			<li>
				<p>Наличие <a href="#">отзывов</a> от продавцов</p>
				<div class="icon cloud"></div>
				<p class="huge">120</p>
				<p>Продавец <a href="#">Sorokins</a> имеет 120 отзывов как покупатель (Продавец покупает и продает с одного eBay аккаунта).</p>
			</li>
		</ul>
	</div>
	</div>
</section>

<section class="second second_bottom good">
	<div class="content content_column">
		<div class="container">
			<div class="second__top">
				<img src="img/good.svg" alt="@@" class="good">
				<img src="img/bad.svg" alt="@@" class="bad">
				<div>
					<p class="second__blockheading">Покупать?</p>
					<p class="second__blocktext" id="yesorno">Да, можно покупать.</p>
				</div>
				<div>
					<p class="second__blockheading">Наш рейтинг продавца</p>
					<p class="second__blocktext"><span id="ratingnumber">85</span> из 100 <br>
					<span id="textrating">очень хороший</span></p>
				</div>
				<div>
					<p class="second__blockheading">Стр. проверки продавца</p>
					<p class="second__sellerpage">http://www.taker.im/e/sorokins</p>
					<a href="#" class="second__addtofav" id="tofavourites">Добавить в избранное</a>
				</div>
				<a href="#" class="button button_pink">Товары продавца</a>
			</div>
			<div class="second__goods-head">
				<div class="second__goods-share">
					<p class="second__goods-sharetext">Расскажи друзьям о продавце</p>
					<div class="second__goods-social">
						<a href="#" class="icon vk"></a>
						<a href="#" class="icon facebook"></a>
						<a href="#" class="icon twitter"></a>
						<a href="#" class="icon ok"></a>
						<a href="#" class="icon mailru"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="reviews section" id="reviews">
	<div class="section-overlay"></div>
	<div class="content content_column">
		<?php include "blocks/header.php"; ?>
		<div class="reviews__actions actions actions_main active sticky">
			<div class="actionblock">
			<div class="container">
				<div class="actionblock__leftside">
					<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Обзоры покупок</span></p>
					<a href="#" class="actionblock__writereview"><span class="actionblock__icon actionblock__icon_plus"><span></span></span><span class="text">Написать обзор</span></a>
					<!-- кнопки при скролле -->
					<a href="#" class="actionblock__icon actionblock__icon_search"><img src="img/icon_search.svg" alt="@@" width="19" height="19"></a>
					<a href="#" class="actionblock__icon actionblock__icon_filter">
						<img src="img/icon_filter.svg" alt="@@">
						<span></span>
					</a>
					<!-- // кнопки при скролле -->
				</div>
				<div class="actionblock__rightside">
					<!-- до входа в ЛК -->
					<div class="actionblock__account actionblock__account_login">
						<a href="#loginform" class="actionblock__account-icon fancybox"><img src="img/icon_user.svg" alt="@@" width="19"></a>
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
						<li class="searchblock__option"><a href="#" data-default="по дате">по дате</a><img class="searchblock__filterarrow" src="img/icon_arrow_filter.svg" alt="@@"></li>
						<!-- выпадающий список фильтра -->
						<ul class="dropmenu searchblock__submenu">
							<li data-type="по дате"><a href="#">Дата<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Старые - Новые</a></li>
										<li><a href="#" data-value="up">Новые - Старые</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по рейтингу"><a href="#">Рейтинг<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Ниже - Выше</a></li>
										<li><a href="#" data-value="up">Выше - Ниже</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по просмотрам"><a href="#">Просмотры<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по комментариям"><a href="#">Комментарии<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
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
						<li class="searchblock__option"><a href="#" data-default="выбрать">выбрать</a><img class="searchblock__filterarrow" src="img/icon_arrow_filter.svg" alt="@@"></li>
						<!-- выпадающий список фильтра -->
						<ul class="dropmenu searchblock__submenu">
							<li data-type="по дате"><a href="#">Дата<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Старые - Новые</a></li>
										<li><a href="#" data-value="up">Новые - Старые</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по рейтингу"><a href="#">Рейтинг<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Ниже - Выше</a></li>
										<li><a href="#" data-value="up">Выше - Ниже</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по просмотрам"><a href="#">Просмотры<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по комментариям"><a href="#">Комментарии<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
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
		</div>
		
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
		<div class="overlay"></div>
		<!-- // список категорий -->
		
		<div class="container">
			<h3 class="reviews__heading">Обзоры покупок</h3>
		</div>
		<div class="container container_navcards">
			<div class="cardnav reviews__cardnav">
				<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
				<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
			</div>
			<ul class="reviews__cards js-navcards">
				<li class="reviews__card reviews__card_big">
				<div class="reviews__card-shadow">
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
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
				<div class="reviews__card-shadow">
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
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
				<div class="reviews__card-shadow">
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
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
				<div class="reviews__card-shadow">
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
						<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам <span class="reviews__text-more">[...]</span></p>
						<div class="reviews__cardbottom">
							<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
							<p class="reviews__author">Bezbod</p>
							<p class="reviews__price">$ 259,00</p>
							<!-- название магазина -->
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
				<div class="reviews__card-shadow">
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
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
				<div class="reviews__card-shadow">
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
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
				<div class="reviews__card-shadow">
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
						<p class="reviews__text">На этот раз Apple официально представила новые iPhone7 и iPhone 7 Plus - не в Twitter, а со сцены выставочного центра. Оказалось, этой "утечкой", если можно так ее назвать, мы с вами не увидели и половины того, чем на самом делемогут похвастаться новые смартфоны корпорации. Как и обещали, разберем все по полочкам <span class="reviews__text-more">[...]</span></p>
						<div class="reviews__cardbottom">
							<div class="reviews__avatar"><img src="img/avatar1.png" alt="@@"></div>
							<p class="reviews__author">Bezbod</p>
							<p class="reviews__price">$ 259,00</p>
							<!-- название магазина -->
							<a href="#" class="reviews__shop"><span class="reviews__shopname">GearBest.com</span>
							<span class="reviews__shophover">В магазин</span></a>
							<!-- // название магазина -->
						</div>
					</div>
				</div>
				</li>
				
				<li class="reviews__card">
					<a href="#" class="morecard reviews__morecard shadow-hover">
						<img src="img/icon_im2.svg" alt="@@" class="morecard__icon">
						<p class="morecard__text morecard__text_showall">Показать<br> все обзоры</p>
						<p class="morecard__text">еще</p>
						<p class="morecard__count">+8 669</p>
					</a>
				</li>
			</ul>
		</div>
		<a href="#" class="reviews__showmore">Показать еще</a>
		<a href="#mytrack" class="scroll-link nav"><span class="scroll-link__mouse"></span><span class="scroll-link__text">Мой трек</span><span class="scroll-link__text scroll-link__text_second">Узнать больше</span></a>
	</div>
</section>

<section class="formscreen formscreen_mytrack section" id="mytrack">
	<div class="section-overlay"></div>
	<div class="content">
		<?php include "blocks/header.php"; ?>
		
		<div class="formscreen__actions actions actions_main active sticky">
			<div class="actionblock">
			<div class="container">
				<div class="actionblock__leftside">
					<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Мой трек</span></p>
				</div>
				<div class="actionblock__rightside">
					<!-- до входа в ЛК -->
					<div class="actionblock__account actionblock__account_login">
						<a href="#loginform" class="actionblock__account-icon fancybox">
							<svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.5 22" width="19px"><defs><clipPath id="clip-path" transform="translate(0 2)"><circle cx="9" cy="7" r="7" fill="none"/></clipPath></defs><title>icon_user</title><path d="M1,19c0-3.6,2.8-6.8,4.5-7" transform="translate(0 2)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><path d="M13,12c1.7,0.2,4.5,3.3,4.5,7" transform="translate(0 2)" fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/><g clip-path="url(#clip-path)"><path d="M2,7A7,7,0,0,1,16,7,7,7,0,0,1,2,7Z" transform="translate(0 2)" fill="none" stroke="#fff" stroke-miterlimit="50" stroke-width="4"/></g></svg>
						</a>
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
		</div>
		
		<div class="container">
			<p class="formscreen__preheading animated delay1">Отслеживание почтовых отправлений</p>
			<h2 class="formscreen__heading animated delay1">Введите трек-номер (идентификатор) отправления:</h2>
			<form action="send.php" method="post" autocomplete="off" class="formscreen__form animated delay1">
				<div class="inputblock">
			    	<div class="more">
			    		<span class="more__dot"></span>
			    		<span class="more__dot"></span>
			    		<span class="more__dot"></span>
			    	</div>
				    <input type="text" name="tracknumber">
				</div>
				<div class="formscreen__form-bottom">
					<div class="sorting-list formscreen__sorting-list">
						<p class="sorting-list__heading">Страна получателя</p>
						<a href="#" class="sorting-list__link">Россия</a>
						<div class="dropmenu sorting-list__submenu">
							<ul class="sorting-list__scrollable scrollbar-inner">
								<li><a href="#">Россия</a></li>
								<li><a href="#">Китай</a></li>
								<li><a href="#">Россия</a></li>
								<li><a href="#">Китай</a></li>
								<li><a href="#">Россия</a></li>
								<li><a href="#">Китай</a></li>
								<li><a href="#">Россия</a></li>
								<li><a href="#">Китай</a></li>
							</ul>
						</div>
					</div>
					<button class="button" type="submit">Проверить</button>
				</div>
			</form>
			<img src="img/mytrack.png" alt="@@" class="animated delay2">
		</div>
		    <a href="#forums" class="scroll-link nav"><span class="scroll-link__mouse"></span><span class="scroll-link__text">Форум</span></a>
	</div>
</section>

<section class="forums section" id="forums">
	<div class="section-overlay"></div>
	<div class="content content_column">
		<?php include "blocks/header.php"; ?>
		<div class="forums__actions actions actions_main active sticky">
			<div class="actionblock">
			<div class="container">
				<div class="actionblock__leftside">
					<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Форум</span></p>
					<a href="#" class="actionblock__writereview"><span class="actionblock__icon actionblock__icon_plus"><span></span></span><span class="text">Открыть тему</span></a>
					<!-- кнопки при скролле -->
					<a href="#" class="actionblock__icon actionblock__icon_search"><img src="img/icon_search.svg" alt="@@" width="19" height="19"></a>
					<!-- // кнопки при скролле -->
				</div>
				<div class="actionblock__rightside">
					<!-- до входа в ЛК -->
					<div class="actionblock__account actionblock__account_login">
						<a href="#loginform" class="actionblock__account-icon fancybox"><img src="img/icon_user.svg" alt="@@" width="19"></a>
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
						<li class="searchblock__option"><a href="#" data-default="по дате">по дате</a><img class="searchblock__filterarrow" src="img/icon_arrow_filter.svg" alt="@@"></li>
						<!-- выпадающий список фильтра -->
						<ul class="dropmenu searchblock__submenu">
							<li data-type="по дате"><a href="#">Дата<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Старые - Новые</a></li>
										<li><a href="#" data-value="up">Новые - Старые</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по рейтингу"><a href="#">Рейтинг<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Ниже - Выше</a></li>
										<li><a href="#" data-value="up">Выше - Ниже</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по просмотрам"><a href="#">Просмотры<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по комментариям"><a href="#">Комментарии<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
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
						<li class="searchblock__option"><a href="#" data-default="выбрать">выбрать</a><img class="searchblock__filterarrow" src="img/icon_arrow_filter.svg" alt="@@"></li>
						<!-- выпадающий список фильтра -->
						<ul class="dropmenu searchblock__submenu">
							<li data-type="по дате"><a href="#">Дата<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Старые - Новые</a></li>
										<li><a href="#" data-value="up">Новые - Старые</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по рейтингу"><a href="#">Рейтинг<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Ниже - Выше</a></li>
										<li><a href="#" data-value="up">Выше - Ниже</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по просмотрам"><a href="#">Просмотры<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
									</ul>
								</div>
								<!-- // дополнительный выпадающий список -->
							</li>
							<li data-type="по комментариям"><a href="#">Комментарии<img src="img/icon_arrow_select.svg" alt="@@"></a>
								<!-- дополнительный выпадающий список -->
								<div class="searchblock__addmenu-wrapper">
									<ul class="dropmenu searchblock__addmenu">
										<li><a href="#" data-value="down">Меньше - Больше</a></li>
										<li><a href="#" data-value="up">Больше - Меньше</a></li>
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
		</div>
		
		<div class="overlay"></div>
		
		<div class="container">
			<h3 class="forums__heading">Основные форумы</h3>
		</div>
		<div class="container container_navcards">
			<div class="cardnav forums__cardnav">
				<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
				<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
			</div>
			<div class="forums__cards js-navcards">
			
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Новичкам: Песочница обо всём</p>
						<p class="forumcard__text">Любые вопросы на любую тему покупок, если не знаете в каком разделе спросить</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							Валера Польских</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">Помогите на немецком!!!</p>
							<p class="forumcard__message-date">Вчера, 22:01</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>20 115</span></p>
						<p class="forumcard__info">Ответов <span>145 394</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Все вопросы по трек-номерам</p>
						<p class="forumcard__text">Когда придёт моя посылка? Почему статус трека долго не обновляется? Спросите тут!</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							syndicaterus</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">ММПО Внуково. Очередн...</p>
							<p class="forumcard__message-date">Вчера, 23:40</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>2 818</span></p>
						<p class="forumcard__info">Ответов <span>219 217</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Новости и события в мире онлайн-покупок</p>
						<p class="forumcard__text">Что новенького на аукционах, у магазинов и в интернете?</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							Tocha62</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">Скончался глава российск...</p>
							<p class="forumcard__message-date">13 Мар 2017</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>1 315</span></p>
						<p class="forumcard__info">Ответов <span>38 840</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Конкурсы форума  </p>
						<p class="forumcard__text">Конкурсы нашего форума</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							me11</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">(голосование завершено) ...</p>
							<p class="forumcard__message-date">09 Фев 2017</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>51</span></p>
						<p class="forumcard__info">Ответов <span>6 099</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Новичкам: Песочница обо всём</p>
						<p class="forumcard__text">Любые вопросы на любую тему покупок, если не знаете в каком разделе спросить</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							Валера Польских</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">Помогите на немецком!!!</p>
							<p class="forumcard__message-date">Вчера, 22:01</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>20 115</span></p>
						<p class="forumcard__info">Ответов <span>145 394</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Все вопросы по трек-номерам</p>
						<p class="forumcard__text">Когда придёт моя посылка? Почему статус трека долго не обновляется? Спросите тут!</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							syndicaterus</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">ММПО Внуково. Очередн...</p>
							<p class="forumcard__message-date">Вчера, 23:40</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>2 818</span></p>
						<p class="forumcard__info">Ответов <span>219 217</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Новости и события в мире онлайн-покупок</p>
						<p class="forumcard__text">Что новенького на аукционах, у магазинов и в интернете?</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							Tocha62</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">Скончался глава российск...</p>
							<p class="forumcard__message-date">13 Мар 2017</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>1 315</span></p>
						<p class="forumcard__info">Ответов <span>38 840</span></p>
					</div>
				</a>
				
				<a href="#" class="forums__card forumcard">
					<div class="forumcard__top">
						<p class="forumcard__heading">Конкурсы форума  </p>
						<p class="forumcard__text">Конкурсы нашего форума</p>
						<p class="forumcard__author">
							<span class="forumcard__avatar"><img src="img/avatar1.png" alt="@@"></span>
							me11</p>
						<div class="forumcard__message">
							<p class="forumcard__message-text">(голосование завершено) ...</p>
							<p class="forumcard__message-date">09 Фев 2017</p>
						</div>
					</div>
					<div class="forumcard__bottom">
						<p class="forumcard__info">Тем <span>51</span></p>
						<p class="forumcard__info">Ответов <span>6 099</span></p>
					</div>
				</a>
				
				<a href="#" class="morecard forums__morecard shadow-hover">
					<img src="img/icon_im2.svg" alt="@@" class="morecard__icon">
					<p class="morecard__text morecard__text_showall">Показать все<br> темы форума</p>
					<p class="morecard__text">еще</p>
					<p class="morecard__count">+769</p>
				</a>
			</div>
		</div>
		<a href="#" class="forums__showmore">Показать еще</a>
	</div>
</section>

<section class="section section_footer">
    <?php include "blocks/footer.php"; ?>
</section>

</div>
<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
<!DOCTYPE html>
<html lang="ru">

<head>
    <?php include "blocks/head.php"; ?>
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Taker.IM</title>
    <?php include "blocks/css.php"; ?>
</head>

<body data-login="logoff">
<div class="page page_detail">
<?php include "blocks/header.php"; ?>

<section class="actions actions_detail">
	<div class="actionblock">
		<div class="container">
			<div class="actionblock__leftside">
				<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a>Обзоры покупок</p>
				<a href="#" class="actionblock__writereview"><span class="actionblock__icon actionblock__icon_plus"><span></span></span>Написать обзор</a>
				<div class="actionblock__goodimage">
					<img src="img/detail.png" alt="@@">
				</div>
				<p class="actionblock__detailheading">Обзор Bang &amp; Olufsen BeoPlay A2: портативный премиум-универсал</p>
			</div>
			<div class="actionblock__rightside">
				<p class="actionblock__detailprice">€ 399,00</p>
				<a href="#" class="button detail__button">Ссылка на товар<span>eBay</span></a>
				<!-- до входа в ЛК -->
				<div class="actionblock__account actionblock__account_login">
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
					</a>
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
</section>

<section class="detail">
	<div class="detail__actions">
		<div class="container">
			<div class="detail__actions-left">
				<a href="#" class="detail__action"><img src="img/icon_edit.svg" alt="@@">Редактировать</a>
				<a href="#" class="detail__action"><img src="img/icon_del.svg" alt="@@">Удалить</a>
			</div>
			<div class="detail__actions-right">
				<a href="#" class="detail__action detail__action_hide"><img src="img/icon_hide.svg" alt="@@">Скрыть</a>
				<a href="#" class="detail__action detail__action_allow"><img src="img/icon_allow.svg" alt="@@">Одобрить</a>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="detail__header">
			<h2 class="detail__heading">Обзор Bang &amp; Olufsen BeoPlay A2: портативный премиум-универсал</h2>
			<div class="detail__header-right">
				<p class="detail__price">€ 399,00</p>
				<a href="#" class="button detail__button">Ссылка на товар<span>eBay</span></a>
			</div>
		</div>
		<div class="detail__authorinfo">
			<div class="detail__goodimage">
				<img src="img/detail.png" alt="@@">
			</div>
			<div class="usercard detail__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_talent"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Sorokins</p>
				<p class="usercard__rank"><img src="img/icon_rank3.svg" alt="@@">Талант</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">4,3</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">+ Подписаться</a>
					<a href="#" class="usercard__action">Написать автору</a>
				</div>
			</div>
		</div>
		<div class="detail__reviewinfo">
			<div class="detail__reviewsection">
				<a href="#" class="detail__reviewlink">Обзоры</a>
				<a href="#" class="detail__reviewshop">LighTake - (LighTake.com)</a>
			</div>
			<p class="detail__reviewdate">Обновлено: 18 января 2017</p>
		</div>
		<div class="detail__textblock">
			<p class="detail__text">В Bang&amp;Olufsen верны себе – в этой колонке моментально видишь фирменные черты, это великолепное сочетание уникального дизайна, отличного звука и ряда совершенно особых черт. И еще, А2 работает 24 часа от аккумулятора…</p>
			<h3 class="detail__subheading">Дизайн, конструкция</h3>
			<p class="detail__text">Мне очень нравится стиль Bang&amp;Olufsen, продукты всегда узнаваемы, практичны и функциональны – хотя порой и выглядят, как что-то космическое. Не стала исключением и эта колонка, большинство людей при виде необычного гаджета сразу же начинают интересоваться, что это такое, с чем едят, как работает. Магия – такая же, какой обладают устройства компании Apple. И при всей футуристичности это абсолютно утилитарный и продуманный предмет.</p>
		</div>
		<div class="detail__imageblock">
			<div class="detail__halfimage"><img src="img/detail_half1.png" alt="@@"></div>
			<div class="detail__halfimage"><img src="img/detail_half2.png" alt="@@"></div>
		</div>
		<div class="detail__textblock">
			<p class="detail__listname">Маркированный список</p>
			<ul class="detail__list">
				<li><p>Колонка</p></li>
				<li><p>Блок питания</p></li>
				<li><p>Сменные вилки</p></li>
			</ul>
			<p class="detail__text">При взгляде на BeoPlay 2 меня не оставляет другая мысль. Отважатся ли дизайнеры B&amp;O сделать совсем маленькую колонку? Ведь это очень большой риск – но и очень большой рынок. Особенно в 2015-ом году, портативное аудио сейчас на взлете, эта тенденция становится еще актуальнее, чем в году уходящем. Дизайнер этого устройства – Cecilie Manz, она же отвечала за разработку BeoLit 12. Я уже ранее делал обзор не нее, посмотреть его вы можее здесь:</p>
			<a href="#" class="detail__linkblock shadow-hover">
				<span class="detail__linkimage"><img src="img/goods_small.png" alt="@@"></span>
				<p class="detail__linkname">Обзор аудиосистемы Bang&amp;Olufsen Beolit 12</p>
				<p class="detail__linksite">www.taker.im</p>
			</a>
			<p class="detail__listname">Нумированный список</p>
			<ol class="detail__list detail__list_ordered">
				<li><p>Колонка</p></li>
				<li><p>Блок питания</p></li>
				<li><p>Сменные вилки</p></li>
			</ol>
			<p class="detail__text">В целом, A2 оставляет очень приятное впечатление, такую вещь здорово подарить даже тому человеку, у кого все есть – магия B&amp;O делает свое дело очень быстро. Отличный дизайн, продуманные детали, знакомый уже ремешок, абсолютное и моментальное понимание, как использовать эту вещь – все это делает A2 уникальным предложением на рынке.</p>
		</div>
	</div>
</section>

<section class="share">
	<div class="container">
		<div class="share__block">
			<div class="usercard share__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_talent"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Sorokins</p>
				<p class="usercard__rank"><img src="img/icon_rank3.svg" alt="@@">Талант</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">4,3</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">+ Подписаться</a>
					<a href="#" class="usercard__action">Написать автору</a>
				</div>
			</div>
			<div class="share__actions">
				<p class="share__text">Понравился обзор?</p>
				<p class="share__smalltext">Поддержи автора, поделись с друзьями</p>
				<div class="share__buttonblock">
					<a href="#" class="button button_social button_social_vk">
						<span><img src="img/icon_vk.svg" alt="@@"></span><span class="button__number">120</span>
					</a>
					<a href="#" class="button button_social button_social_fb">
						<span><img src="img/icon_fb.svg" alt="@@"></span><span class="button__number">1k</span>
					</a>
					<a href="#" class="button button_social button_social_twitter">
						<span><img src="img/icon_tw.svg" alt="@@"></span><span class="button__number">3</span>
					</a>
					<a href="#" class="button button_social button_social_ok">
						<span><img src="img/icon_ok.svg" alt="@@"></span><span class="button__number">0</span>
					</a>
					<a href="#" class="button button_social button_social_mailru">
						<span><img src="img/icon_mail.svg" alt="@@"></span><span class="button__number">12</span>
					</a>
					<a href="#" class="button button_social_icon button_social_other">&middot; &middot; &middot;</a>
				</div>
				<p class="share__smalltext">Спасибо!</p>
			</div>
		</div>
		<div class="share__bottom">
			<div class="share__infocolumn">
				<p class="share__infotext">В избранное</p>
				<a href="#" class="share__icon share__icon_like">
					<svg width="16px" height="14px" viewBox="0 0 16 14" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="likeSymbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_like" transform="translate(-12.000000, -14.000000)" fill="#CECFD6"><path d="M19.9333422,17.0730566 C19.4753964,15.1079889 17.5917835,13.7959794 15.5589834,14.0261458 C13.5261833,14.2563122 11.9936821,15.9551157 12.0000196,17.9713173 C12.0000196,22.8984857 19.9333422,28 19.9333422,28 C19.9333422,28 27.8666648,22.8984857 27.8666648,17.9713173 C27.8676856,16.9202217 27.4446492,15.9118319 26.6907266,15.1682394 C25.9368041,14.4246468 24.9138324,14.0068413 23.8471147,14.0068418 C21.9776185,14.0077276 20.3555441,15.2785292 19.9333422,17.0730566 Z" id="likeShape"></path></g></g></svg>
				</a>
			</div>
			<div class="share__infocolumn">
				<p class="share__infotext">Просмотров</p>
				<p class="share__count share__count_watches">1473</p>
			</div>
			<div class="share__infocolumn">
				<p class="share__infotext">Комментариев</p>
				<p class="share__count share__count_comments">3</p>
			</div>
			<div class="share__infocolumn share__infocolumn_big">
				<p class="share__infotext">Оцените статью</p>
				<!-- моя оценка -->
				<p class="share__myrating">Моя оценка <span>4</span></p>
				<!-- // моя оценка -->
				<a href="#loginform" class="share__icon share__icon_star one fancybox">
					<span data-rating="0,5"></span>
					<span data-rating="1"></span>
					<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="starPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_star" transform="translate(-765.000000, -3481.000000)" fill="#D9DADF"><g id="starlast-block" transform="translate(0.000000, 2888.000000)"><g id="starrate" transform="translate(748.000000, 541.000000)"><g id="star1" transform="translate(1.000000, 36.000000)"><polygon id="Star" points="25 30.5067286 19.4376941 33.1190173 20.2032813 27.0217084 16 22.5388828 22.0354648 21.3828273 25 16 27.9645352 21.3828273 34 22.5388828 29.7967188 27.0217084 30.5623059 33.1190173"></polygon></g></g></g></g></g></svg>
				</a>
				<a href="#loginform" class="share__icon share__icon_star two fancybox">
					<span data-rating="1,5"></span>
					<span data-rating="2"></span>
					<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="starPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_star" transform="translate(-765.000000, -3481.000000)" fill="#D9DADF"><g id="starlast-block" transform="translate(0.000000, 2888.000000)"><g id="starrate" transform="translate(748.000000, 541.000000)"><g id="star1" transform="translate(1.000000, 36.000000)"><polygon id="Star" points="25 30.5067286 19.4376941 33.1190173 20.2032813 27.0217084 16 22.5388828 22.0354648 21.3828273 25 16 27.9645352 21.3828273 34 22.5388828 29.7967188 27.0217084 30.5623059 33.1190173"></polygon></g></g></g></g></g></svg>
				</a>
				<a href="#loginform" class="share__icon share__icon_star three fancybox">
					<span data-rating="2,5"></span>
					<span data-rating="3"></span>
					<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="starPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_star" transform="translate(-765.000000, -3481.000000)" fill="#D9DADF"><g id="starlast-block" transform="translate(0.000000, 2888.000000)"><g id="starrate" transform="translate(748.000000, 541.000000)"><g id="star1" transform="translate(1.000000, 36.000000)"><polygon id="Star" points="25 30.5067286 19.4376941 33.1190173 20.2032813 27.0217084 16 22.5388828 22.0354648 21.3828273 25 16 27.9645352 21.3828273 34 22.5388828 29.7967188 27.0217084 30.5623059 33.1190173"></polygon></g></g></g></g></g></svg>
				</a>
				<a href="#loginform" class="share__icon share__icon_star four fancybox">
					<span data-rating="3,5"></span>
					<span data-rating="4"></span>
					<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="starPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_star" transform="translate(-765.000000, -3481.000000)" fill="#D9DADF"><g id="starlast-block" transform="translate(0.000000, 2888.000000)"><g id="starrate" transform="translate(748.000000, 541.000000)"><g id="star1" transform="translate(1.000000, 36.000000)"><polygon id="Star" points="25 30.5067286 19.4376941 33.1190173 20.2032813 27.0217084 16 22.5388828 22.0354648 21.3828273 25 16 27.9645352 21.3828273 34 22.5388828 29.7967188 27.0217084 30.5623059 33.1190173"></polygon></g></g></g></g></g></svg>
				</a>
				<a href="#loginform" class="share__icon share__icon_star five fancybox">
					<span data-rating="4,5"></span>
					<span data-rating="5"></span>
					<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="starPage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_star" transform="translate(-765.000000, -3481.000000)" fill="#D9DADF"><g id="starlast-block" transform="translate(0.000000, 2888.000000)"><g id="starrate" transform="translate(748.000000, 541.000000)"><g id="star1" transform="translate(1.000000, 36.000000)"><polygon id="Star" points="25 30.5067286 19.4376941 33.1190173 20.2032813 27.0217084 16 22.5388828 22.0354648 21.3828273 25 16 27.9645352 21.3828273 34 22.5388828 29.7967188 27.0217084 30.5623059 33.1190173"></polygon></g></g></g></g></g></svg>
				</a>
				<p class="share__count share__count_rating">4,3<span class="share__smallinfotext">голосов: 32</span></p>
			</div>
		</div>
	</div>
</section>

<section class="subscribe">
	<div class="container">
		<form class="subscribe__form">
			<div class="subscribe__textblock">
				<h3 class="subscribe__heading">Подписаться</h3>
				<p class="subscribe__text">Оставь свой Email и узнавай о новых обзорах первым</p>
			</div>
			<div class="subscribe__field">
				<input type="email" placeholder="Ваш Email">
			</div>
			<button class="button subscribe__button">Подписаться</button>
		</form>
	</div>
</section>

<section class="topauthors">
	<div class="container">
		<h3 class="topauthors__heading">ТОП авторов</h3>
		<div class="sorting-list topauthors__sorting-list">
			<a href="#" class="sorting-list__link">ТОП за неделю</a>
			<ul class="dropmenu sorting-list__submenu">
				<li><a href="#">ТОП за неделю</a></li>
				<li><a href="#">ТОП за месяц</a></li>
				<li><a href="#">ТОП за год</a></li>
			</ul>
		</div>
	</div>
	<div class="container container_navcards">
		<div class="cardnav topauthors__cardnav">
			<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
			<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
		</div>
		<div class="topauthors__cards js-navcards">
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_master"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Vologry</p>
				<p class="usercard__rank"><img src="img/icon_rank4.svg" alt="@@">Мастер обзоров</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">3,6</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_god"><circle cx="69" cy="69" r="65"></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Resawa</p>
				<p class="usercard__rank"><img src="img/icon_rank5.svg" alt="@@">Бог обзоров</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">5,0</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_writer"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Maskit</p>
				<p class="usercard__rank"><img src="img/icon_rank2.svg" alt="@@">Писатель</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">2,9</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_novice"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Kit-Kat</p>
				<p class="usercard__rank"><img src="img/icon_rank1.svg" alt="@@">Новичок</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">1,4</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_master"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Vologry</p>
				<p class="usercard__rank"><img src="img/icon_rank4.svg" alt="@@">Мастер обзоров</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">3,6</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_master"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Vologry</p>
				<p class="usercard__rank"><img src="img/icon_rank4.svg" alt="@@">Мастер обзоров</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">3,6</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_god"><circle cx="69" cy="69" r="65"></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Resawa</p>
				<p class="usercard__rank"><img src="img/icon_rank5.svg" alt="@@">Бог обзоров</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">5,0</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_writer"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Maskit</p>
				<p class="usercard__rank"><img src="img/icon_rank2.svg" alt="@@">Писатель</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">2,9</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_novice"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Kit-Kat</p>
				<p class="usercard__rank"><img src="img/icon_rank1.svg" alt="@@">Новичок</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">1,4</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<div class="usercard usercard_small topauthors__usercard">
				<div class="usercard__status">
					<svg class="usercard__statusbar usercard__statusbar_master"><path></svg>
					<div class="usercard__avatar"><img src="img/avatar1.png" alt="@@"></div>
				</div>
				<p class="usercard__name">Vologry</p>
				<p class="usercard__rank"><img src="img/icon_rank4.svg" alt="@@">Мастер обзоров</p>
				<div class="usercard__stats">
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_rating">3,6</span><br>Рейтинг</a>
					<a href="#" class="usercard__stat"><span class="usercard__number usercard__number_reviews">27</span><br>Обзоров</a>
				</div>
				<div class="usercard__actions">
					<a href="#" class="usercard__action">Профиль</a>
				</div>
			</div>
			<!--<a href="#" class="morecard topauthors__morecard shadow-hover">
				<img src="img/icon_im2.svg" alt="@@" class="morecard__icon">
				<p class="morecard__text morecard__text_showall">Показать всех<br> авторов</p>
				<p class="morecard__text">еще</p>
				<p class="morecard__count">+769</p>
			</a>-->
		</div>
	</div>
</section>

<section class="interesting">
	<div class="container">
		<h3 class="interesting__heading">Интересные материалы</h3>
	</div>
	<div class="container container_navcards">
		<div class="cardnav interesting__cardnav">
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
				<a href="#" class="morecard interesting__morecard shadow-hover">
					<img src="img/icon_im2.svg" alt="@@" class="morecard__icon">
					<p class="morecard__text morecard__text_showall">Показать все<br> материалы</p>
					<p class="morecard__text">еще</p>
					<p class="morecard__count">+8425</p>
				</a>
			</li>
		</ul>
	</div>
</section>

<?php include "blocks/comments.php"; ?>

<?php include "blocks/footer.php"; ?>
</div>
<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
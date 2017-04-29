<!DOCTYPE html>
<html lang="ru" class="ebay-page">

<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=1360">
	<meta http-equiv="Content-type" content="text/html; utf-8">
	<meta http-equiv="Content-language" content="ru-RU"> 
    <meta name="robots" content="all">
    <?php include "blocks/meta.php"; ?>
    <title>Taker.IM</title>
    <?php include "blocks/css.php"; ?>
</head>

<body>

<div class="siteloader">
  <ul class="siteloader__circles">
    <li class="siteloader__icon">
      <img src="img/icon-1_active.svg"  alt="@@">
      <span><img src="img/icon-1_pink.svg" alt="@@"></span>
    </li>
    <li class="siteloader__icon">
      <img src="img/icon-2.svg" alt="@@">
      <span><img src="img/icon-2_pink.svg" alt="@@" ></span>
    </li>
    <li class="siteloader__icon">
      <img class="hand" src="img/icon-3.svg" alt="@@">
      <span><img class="hand-active" src="img/icon-3_pink.svg" alt="@@" ></span>
    </li>
    <li class="siteloader__icon">
      <img src="img/icon-4.svg" alt="@@">
      <span><img src="img/icon-4_pink.svg" alt="@@" ></span>
    </li>
    <li class="siteloader__icon">
      <img src="img/icon-5.svg" alt="@@">
      <span><img src="img/icon-5_pink.svg" alt="@@"></span>
    </li>
  </ul>
  <div class="siteloader__progress">
    <div class="siteloader__progress_bar">
	  <span class="siteloader__progress_bar_progressive"></span>
    </div>
    <div class="siteloader__progress_texts">
      <p class="siteloader__progress_texts_percent"><span>0</span> %</p>
      <p class="siteloader__progress_texts_text">Подключаюсь</p>
    </div>
  </div>
</div>

<div class="page page_ebay">

<section class="formscreen formscreen_ebay section">
	<div class="section-overlay"></div>
	<div class="content content_column">
		<?php include "blocks/header.php"; ?>
		<div class="formscreen__actions actions actions_main active">
			<div class="actionblock">
		  		<div class="container">
		    		<div class="actionblock__leftside">
			  			<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Проверь продавца на eBay</span></p>
					</div>
					<div class="actionblock__rightside">
			  			<a href="mailto:contact@taker.im" class="header__mail">Contact@taker.im</a>
			  			<p class="header__adults">18+</p>
					</div>
		      	</div>
			</div>
		</div>
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
				    <p class="inputlink">http://www.ebay.com/usr/modelmeistershop?_trksid=p2047675.l2559</p>
				</div>
				<div class="formscreen__form-bottom">
					<button class="button button_pink" type="submit">Проверить</button>
				</div>
			</form>
			<img src="img/together.svg" alt="@@" class="animated delay2 bounceInUp">
			<p class="formscreen__cardheading">Недавно проверенные продавцы</p>
		 </div>
		 <div class="container_navcards">
		 	<div class="cardnav formscreen__cardnav cardnav_ebay">
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
		<a href="#second" class="scroll-link nav"><span class="scroll-link__mouse"></span><span class="scroll-link__text">Узнать больше</span></a>
	</div>
</section>

<div class="ebay-content">
<section class="topblock">
	<form>
    	<p class="huge">Введите ник продавца или ссылку на его товар<br> или магазин на eBay</p>
    	<div class="inputblock"><input type="text" name="seller"></div>
    	<div class="buttons">
    		<button class="button button_pink" type="submit">Проверить</button>
    		<a href="#cancel" class="button button_grey">Отмена</a>
    	</div>
    </form>
</section>
<section class="second second_top good" id="second">
	<div class="content content_column">
		<?php include "blocks/header.php"; ?>
		<div class="formscreen__actions actions actions_main active">
			<div class="actionblock">
		  		<div class="container">
		    		<div class="actionblock__leftside">
			  			<p class="actionblock__watchreview"><a href="#" class="actionblock__icon actionblock__icon_burger"><span></span></a><span class="text">Проверь продавца на eBay</span></p>
			  			<div class="actionblock__inputblock inputblock">
		        			<div class="more">
			  					<span class="more__dot"></span>
			  					<span class="more__dot"></span>
			  					<span class="more__dot"></span>
							</div>
		     				<p class="actionblock__sellerlink">http://www.ebay.com/usr/modelmeistershop?_trksid=p2047675.l2559</p>
		     				<p class="actionblock__inputlink inputlink">text</p>
		      			</div>
		      			<a href="#change" class="actionblock__changelink">Изменить</a>
					</div>
					<div class="actionblock__rightside">
			  			<a href="#" class="actionblock__commentsbutton">
			  				<p>Комментарии</p>
			  				<p>28</p>
			  			</a>
			  			<a href="#" class="button button_pink actionblock__goods-button">Товары продавца</a>
					</div>
		      	</div>
			</div>
		</div>
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

<section class="ebay-allinfo">

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

<!-- Отзывы о продавце -->
<?php include "blocks/ebay/ebay-reviews.php"; ?>

<!-- ТОП 10 продавцов -->
<?php include "blocks/ebay/ebay-top10.php"; ?>

<!-- История продаж продавца -->
<?php include "blocks/ebay/ebay-history.php"; ?>

<?php include "blocks/comments.php"; ?>

</section>

<?php include "blocks/footer.php"; ?>

</div>
</div>
<?php include "blocks/forms.php"; ?>
<?php include "blocks/scripts.php"; ?>
</body>
</html>
<section class="comments" id="comments">
	<div class="container">
		<h3 class="comments__heading">Комментарии</h3>
		<form action="" class="comments__form" id="commentform">
			<div class="comments__formpanel">
				<div class="comments__formavatar"><img src="img/avatar1.png" alt="@@"></div>
				<div class="comments__formfield">
					<textarea placeholder="Ваш комментарий"></textarea>
				</div>
				<a href="#" class="comments__formupload">
					<svg width="15px" height="17px" viewBox="0 0 15 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" stroke="#AAAAB0" stroke-width="2" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"><g><g transform="translate(-1022.000000, -5251.000000)"><g transform="translate(0.000000, 5059.000000)"><g transform="translate(132.000000, 125.000000)"><g transform="translate(873.000000, 50.000000)"><path d="M23.1591174,24.6407949 L31.3083436,24.6407949 C32.0491824,24.6407949 33.5308599,25.3816336 33.5308599,26.8633111 C33.5308599,28.3449886 32.0491824,29.0858274 31.3083436,29.0858274 L21.6774399,29.0858274 C19.4549237,29.0858274 17.2324074,28.3449886 17.2324074,25.3816336 C17.2324074,22.4182786 19.4549237,21.6774399 21.6774399,21.6774399 L29.0858274,21.6774399" transform="translate(25.381634, 25.381634) rotate(-315.000000) translate(-25.381634, -25.381634) "></path></g></g></g></g></g></svg>
				</a>
				<button class="button comments__formbutton" disabled>Отправить</button>
			</div>
			<!-- прикрепленные файлы -->
			<div class="comments__uploads">
				<div class="comments__upload"><img src="img/goods_small2.png" alt="@@"><span class="comments__deleteupload"><span></span></span></div>
				<div class="comments__upload"><img src="img/goods_small3.png" alt="@@"><span class="comments__deleteupload"><span></span></span></div>
			</div>
			<!-- // прикрепленные файлы -->
		</form>
		<!-- начальный текст в комментариях -->
		<p class="comments__firsttext">Еще никто не оставил комментариев, станьте первым.</p>
		<!-- // начальный текст в комментариях -->
		<!-- кнопки для входа, чтобы оставить комментарий -->
		<div class="comments__loginblock">
			<p class="comments__logintext">Для того, что бы оставить комментарий необходимо войти через</p>
			<div class="comments__logbuttons">
				<a href="#loginform" class="button button_login fancybox">
					<span class="button_social_icon button_social_im"><img src="img/icon_im.svg" alt="@@" width="24" height="19"></span>Вход
				</a>
				<a href="#" class="button button_social_icon button_social_vk">
					<img src="img/icon_vk.svg" alt="@@">
				</a>
				<a href="#" class="button button_social_icon button_social_fb">
					<img src="img/icon_fb.svg" alt="@@">
				</a>
				<a href="#" class="button button_social_icon button_social_twitter">
					<img src="img/icon_tw.svg" alt="@@">
				</a>
				<a href="#" class="button button_social_icon button_social_ok">
					<img src="img/icon_ok.svg" alt="@@">
				</a>
				<a href="#" class="button button_social_icon button_social_mailru">
					<img src="img/icon_mail.svg" alt="@@">
				</a>
				<a href="#" class="button button_social_icon button_social_other">&middot; &middot; &middot;</a>
			</div>
		</div>
		<!-- // кнопки для входа, чтобы оставить комментарий -->
		<div class="comments__topcomments">
			<h4 class="comments__topcomments-heading">ТОП комментариев</h4>
			<div class="sorting-list comments__sorting-list">
				<a href="#" class="sorting-list__link">ТОП за неделю</a>
				<ul class="dropmenu sorting-list__submenu">
					<li><a href="#">ТОП за неделю</a></li>
					<li><a href="#">ТОП за месяц</a></li>
					<li><a href="#">ТОП за год</a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="container container_navcards">
		<div class="cardnav comments__cardnav">
			<a href="#" class="cardnav__arrow prev"><img src="img/navarrow.svg" alt="@@"></a>
			<a href="#" class="cardnav__arrow next"><img src="img/navarrow.svg" alt="@@"></a>
		</div>
		<div class="comments__cards js-navcards">
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Sorokins</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Nikola</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Exelenz</p>
				<p class="comments__cardtext">17 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Oke-Anis</p>
				<p class="comments__cardtext">17 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Sorokins</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Nikola</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Nikola</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Nikola</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Nikola</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
			<a href="#" class="comments__card">
				<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
				<p class="comments__cardname">Nikola</p>
				<p class="comments__cardtext">39 комментариев</p>
			</a>
		</div>
	</div>
	<div class="container">
		<div class="comments__block">
			<div class="comments__actionblock">
				<div class="comments__shownew"><span>Новые</span>
					<ul class="dropmenu comments__submenu">
						<li data-type="Новые"><a href="#">Новые</a></li>
						<li data-type="Старые"><a href="#">Старые</a></li>
					</ul>
				</div>
				<div class="comments__actions">
					<a href="#" class="comments__action">+ Подписаться</a>
					<a href="#" class="comments__action">Поделиться</a>
				</div>
			</div>
			<ul class="comments__list">
				<li class="comments__comment">
					<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
					<div class="comments__info">
						<p class="comments__author">Bane Baks</p>
						<p class="comments__date">23 часа назад</p>
						<p class="comments__text">Она моно что-ли видно только 3 динамика выс., ср., низ.</p>
						<a href="#" class="comments__answerlink">Ответить</a>
					</div>
					<!-- дополнительные действия в комментариях -->
					<div class="comments__actionicons comments__actionicons_top">
						<a href="#" class="comments__actionicon comments__actionicon_link">
							<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="linkpath-1" x="0.414213562" y="6.25277607e-13" width="9" height="8" rx="3"></rect><mask id="linkmask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="9" height="8" fill="white"><use xlink:href="#linkpath-1"></use></mask><rect id="linkpath-3" x="11" y="-3.41060513e-13" width="9" height="8" rx="3"></rect><mask id="linkmask-4" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="9" height="8" fill="white"><use xlink:href="#linkpath-3"></use></mask><rect id="linkpath-5" x="6" y="3" width="8" height="2" rx="1"></rect><mask id="linkmask-6" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="8" height="2" fill="white"><use xlink:href="#linkpath-5"></use></mask></defs><g id="linkpage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_link" transform="translate(-1107.000000, -462.000000)" stroke="#BFC1CA"><g id="linkaction" transform="translate(1106.000000, 461.000000)"><g id="link" transform="translate(10.253048, 10.253048) rotate(-315.000000) translate(-10.253048, -10.253048) translate(-0.246952, 6.253048)"><use id="linkrectangle-4" mask="url(#linkmask-2)" stroke-width="4" xlink:href="#linkpath-1"></use><use id="linkrectangle-4-Copy" mask="url(#linkmask-4)" stroke-width="4" xlink:href="#linkpath-3"></use><use id="linkrectangle" mask="url(#linkmask-6)" stroke-width="2" xlink:href="#linkpath-5"></use></g></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon comments__actionicon_share">
							<svg width="16px" height="18px" viewBox="0 0 16 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_share" transform="translate(-1149.000000, -462.000000)" stroke="#BFC1CA" stroke-width="2"><g id="action" transform="translate(1106.000000, 461.000000)"><g id="share" transform="translate(44.000000, 2.000000)"><circle id="Oval" cx="12" cy="14" r="2"></circle><circle id="Oval-Copy" cx="2" cy="8" r="2"></circle><circle id="Oval-Copy-2" cx="12" cy="2" r="2"></circle><path d="M10,3 L4,7" id="Path-9"></path><path d="M10,9 L4,13" id="Path-9" transform="translate(7.000000, 11.000000) scale(1, -1) translate(-7.000000, -11.000000) "></path></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon comments__actionicon_more">
							<svg width="22px" height="6px" viewBox="0 0 22 6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  stroke-width="2" stroke="#BFC1CA" fill="none" fill-rule="evenodd"><g><g transform="translate(-1187.000000, -468.000000)"><g transform="translate(1106.000000, 461.000000)"><g transform="translate(82.000000, 8.000000)"><circle cx="2" cy="2" r="2"></circle><circle cx="10" cy="2" r="2"></circle><circle cx="18" cy="2" r="2"></circle></g></g></g></g></svg>
						</a>
						<!-- ссылка на комментарий -->
						<div class="dropmenu comments__link"><a href="#">http://www.taker.im/review/13820-nedorogoy-Mini-PC-Beelink-Z83II-na-zamenu-shumnomu-s#cc-63609882</a></div>
						<!-- // ссылка на комментарий -->
						<!-- поделиться комментарием в соцсетях -->
						<div class="comments__share">
							<a href="#" class="button button_social_icon button_social_vk">
								<img src="img/icon_vk.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_fb">
								<img src="img/icon_fb.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_twitter">
								<img src="img/icon_tw.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_ok">
								<img src="img/icon_ok.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_mailru">
								<img src="img/icon_mail.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_other">&middot; &middot; &middot;</a>
						</div>
						<!-- // поделиться комментарием в соцсетях -->
						<!-- дополнительное выпадающее меню -->
						<ul class="dropmenu comments__addactions">
							<li><a href="#">Это спам</a></li>
							<li><a href="#">Пожаловаться</a></li>
						</ul>
						<!-- // дополнительное выпадающее меню -->
					</div>
					<div class="comments__actionicons comments__actionicons_bottom">
						<a href="#" class="comments__actionicon">
							<svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M9.98319159,2.62024024 L7.60316213,7.66931517 L7.0952381,8 C6,8 6,8.54286552 6,9 L6,14 C6.00285175,14.1748841 6.92033073,15.0000232 7.0952381,15 L13,15 C13.5295653,15.0041516 14.5847929,14.2571172 14.6509743,13.7316872 C14.6920131,13.3309744 14.4926291,12.9438144 14.1425847,12.744506 L14.3863331,12.744506 C14.9158984,12.7486576 15.3647879,12.3558793 15.4309693,11.8304493 C15.4701932,11.4319183 15.2718393,11.0474798 14.9243208,10.8484913 L15.1645871,10.8484913 C15.6941524,10.8526429 16.1430419,10.4598646 16.2092233,9.93443464 C16.2577501,9.53084937 16.06124,9.13714437 15.709539,8.93332496 L15.9828854,8.93332496 C16.2572981,8.93294611 16.5199481,8.82185432 16.7113477,8.62521092 C16.9027473,8.42856752 17.0067012,8.16301141 16.9996647,7.88868877 C16.9688675,7.32819522 15.7258496,6.99073445 15.1645871,7 L11,7 L11.6666667,2.76190476 C11.655365,2.48738707 11.3864116,2.23758708 11.1471451,2.10253442 C10.9078785,1.96748176 10.6157928,1.96573719 10.3749302,2.09792215 C10.1754905,2.20779569 10.0328271,2.39801353 9.98319159,2.62024024 Z M1,15 C0.387145996,15 0,14.5775757 0,14 L0,9 C0,8.42687988 0.472290039,8 1,8 C1.52770996,8 3,8 3,8 C3.54406738,8 4,8.43133545 4,9 L4,14 C4,14.5987549 3.55566406,15 3,15 L1,15 Z" id="path-11"></path><mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="21" height="17.0000172"><rect x="-2" y="0" width="21" height="17.0000172" fill="white"></rect><use xlink:href="#path-11" fill="black"></use></mask></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_commentlike" transform="translate(-1107.000000, -541.000000)" stroke-width="4" stroke="#BFC1CA" fill-rule="nonzero"><g id="comments"><g id="comment-2" transform="translate(310.000000, 455.000000)"><g id="rating" transform="translate(799.000000, 86.000000)"><use id="Shape" mask="url(#mask-2)" xlink:href="#path-11"></use></g></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon">
							<svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M49.9831916,2.62024024 L47.6031621,7.66931517 L47.0952381,8 C46,8 46,8.54286552 46,9 L46,14 C46.0028517,14.1748841 46.9203307,15.0000232 47.0952381,15 L53,15 C53.5295653,15.0041516 54.5847929,14.2571172 54.6509743,13.7316872 C54.6920131,13.3309744 54.4926291,12.9438144 54.1425847,12.744506 L54.3863331,12.744506 C54.9158984,12.7486576 55.3647879,12.3558793 55.4309693,11.8304493 C55.4701932,11.4319183 55.2718393,11.0474798 54.9243208,10.8484913 L55.1645871,10.8484913 C55.6941524,10.8526429 56.1430419,10.4598646 56.2092233,9.93443464 C56.2577501,9.53084937 56.06124,9.13714437 55.709539,8.93332496 L55.9828854,8.93332496 C56.2572981,8.93294611 56.5199481,8.82185432 56.7113477,8.62521092 C56.9027473,8.42856752 57.0067012,8.16301141 56.9996647,7.88868877 C56.9688675,7.32819522 55.7258496,6.99073445 55.1645871,7 L51,7 L51.6666667,2.76190476 C51.655365,2.48738707 51.3864116,2.23758708 51.1471451,2.10253442 C50.9078785,1.96748176 50.6157928,1.96573719 50.3749302,2.09792215 C50.1754905,2.20779569 50.0328271,2.39801353 49.9831916,2.62024024 Z M41,15 C40.387146,15 40,14.5775757 40,14 L40,9 C40,8.42687988 40.47229,8 41,8 C41.52771,8 43,8 43,8 C43.5440674,8 44,8.43133545 44,9 L44,14 C44,14.5987549 43.5556641,15 43,15 L41,15 Z" id="path-12"></path><mask id="mask-21" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="21" height="17.0000172"><rect x="38" y="0" width="21" height="17.0000172" fill="white"></rect><use xlink:href="#path-12" fill="black"></use></mask></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_commentdislike" transform="translate(-1147.000000, -541.000000)" fill-rule="nonzero" stroke="#BFC1CA" stroke-width="4"><g id="comments"><g id="comment-2" transform="translate(310.000000, 455.000000)"><g id="rating" transform="translate(799.000000, 86.000000)"><use id="Shape" mask="url(#mask-21)" transform="translate(48.500000, 8.500009) scale(-1, -1) translate(-48.500000, -8.500009) " xlink:href="#path-12"></use></g></g></g></g></g></svg>
						</a>
						<p class="comments__rating">+ 3</p>
					</div>
					<!-- // дополнительные действия в комментариях -->
				</li>
				<li class="comments__comment comments__comment_answer">
					<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
					<div class="comments__info">
						<p class="comments__author">Exelenz</p>
						<img src="img/icon_arrow_message.svg" alt="@@">
						<p class="comments__author">Bane Baks</p>
						<p class="comments__date">23 часа назад</p>
						<p class="comments__text">Тоже интересно: моно ли сигнал идет на «разные стороны» колонки? Там только 2 полосы (вч и сч/нч) и пассивный резонатор</p>
						<a href="#" class="comments__answerlink">Ответить</a>
					</div>
					<!-- дополнительные действия в комментариях -->
					<div class="comments__actionicons comments__actionicons_top">
						<a href="#" class="comments__actionicon comments__actionicon_link">
							<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="linkpath-1" x="0.414213562" y="6.25277607e-13" width="9" height="8" rx="3"></rect><mask id="linkmask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="9" height="8" fill="white"><use xlink:href="#linkpath-1"></use></mask><rect id="linkpath-3" x="11" y="-3.41060513e-13" width="9" height="8" rx="3"></rect><mask id="linkmask-4" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="9" height="8" fill="white"><use xlink:href="#linkpath-3"></use></mask><rect id="linkpath-5" x="6" y="3" width="8" height="2" rx="1"></rect><mask id="linkmask-6" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="8" height="2" fill="white"><use xlink:href="#linkpath-5"></use></mask></defs><g id="linkpage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_link" transform="translate(-1107.000000, -462.000000)" stroke="#BFC1CA"><g id="linkaction" transform="translate(1106.000000, 461.000000)"><g id="link" transform="translate(10.253048, 10.253048) rotate(-315.000000) translate(-10.253048, -10.253048) translate(-0.246952, 6.253048)"><use id="linkrectangle-4" mask="url(#linkmask-2)" stroke-width="4" xlink:href="#linkpath-1"></use><use id="linkrectangle-4-Copy" mask="url(#linkmask-4)" stroke-width="4" xlink:href="#linkpath-3"></use><use id="linkrectangle" mask="url(#linkmask-6)" stroke-width="2" xlink:href="#linkpath-5"></use></g></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon comments__actionicon_share">
							<svg width="16px" height="18px" viewBox="0 0 16 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_share" transform="translate(-1149.000000, -462.000000)" stroke="#BFC1CA" stroke-width="2"><g id="action" transform="translate(1106.000000, 461.000000)"><g id="share" transform="translate(44.000000, 2.000000)"><circle id="Oval" cx="12" cy="14" r="2"></circle><circle id="Oval-Copy" cx="2" cy="8" r="2"></circle><circle id="Oval-Copy-2" cx="12" cy="2" r="2"></circle><path d="M10,3 L4,7" id="Path-9"></path><path d="M10,9 L4,13" id="Path-9" transform="translate(7.000000, 11.000000) scale(1, -1) translate(-7.000000, -11.000000) "></path></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon comments__actionicon_more">
							<svg width="22px" height="6px" viewBox="0 0 22 6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  stroke-width="2" stroke="#BFC1CA" fill="none" fill-rule="evenodd"><g><g transform="translate(-1187.000000, -468.000000)"><g transform="translate(1106.000000, 461.000000)"><g transform="translate(82.000000, 8.000000)"><circle cx="2" cy="2" r="2"></circle><circle cx="10" cy="2" r="2"></circle><circle cx="18" cy="2" r="2"></circle></g></g></g></g></svg>
						</a>
						<!-- ссылка на комментарий -->
						<div class="dropmenu comments__link"><a href="#">http://www.taker.im/review/13820-nedorogoy-Mini-PC-Beelink-Z83II-na-zamenu-shumnomu-s#cc-63609882</a></div>
						<!-- // ссылка на комментарий -->
						<!-- поделиться комментарием в соцсетях -->
						<div class="comments__share">
							<a href="#" class="button button_social_icon button_social_vk">
								<img src="img/icon_vk.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_fb">
								<img src="img/icon_fb.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_twitter">
								<img src="img/icon_tw.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_ok">
								<img src="img/icon_ok.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_mailru">
								<img src="img/icon_mail.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_other">&middot; &middot; &middot;</a>
						</div>
						<!-- // поделиться комментарием в соцсетях -->
						<!-- дополнительное выпадающее меню -->
						<ul class="dropmenu comments__addactions">
							<li><a href="#">Это спам</a></li>
							<li><a href="#">Пожаловаться</a></li>
						</ul>
						<!-- // дополнительное выпадающее меню -->
					</div>
					<div class="comments__actionicons comments__actionicons_bottom">
						<a href="#" class="comments__actionicon">
							<svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M9.98319159,2.62024024 L7.60316213,7.66931517 L7.0952381,8 C6,8 6,8.54286552 6,9 L6,14 C6.00285175,14.1748841 6.92033073,15.0000232 7.0952381,15 L13,15 C13.5295653,15.0041516 14.5847929,14.2571172 14.6509743,13.7316872 C14.6920131,13.3309744 14.4926291,12.9438144 14.1425847,12.744506 L14.3863331,12.744506 C14.9158984,12.7486576 15.3647879,12.3558793 15.4309693,11.8304493 C15.4701932,11.4319183 15.2718393,11.0474798 14.9243208,10.8484913 L15.1645871,10.8484913 C15.6941524,10.8526429 16.1430419,10.4598646 16.2092233,9.93443464 C16.2577501,9.53084937 16.06124,9.13714437 15.709539,8.93332496 L15.9828854,8.93332496 C16.2572981,8.93294611 16.5199481,8.82185432 16.7113477,8.62521092 C16.9027473,8.42856752 17.0067012,8.16301141 16.9996647,7.88868877 C16.9688675,7.32819522 15.7258496,6.99073445 15.1645871,7 L11,7 L11.6666667,2.76190476 C11.655365,2.48738707 11.3864116,2.23758708 11.1471451,2.10253442 C10.9078785,1.96748176 10.6157928,1.96573719 10.3749302,2.09792215 C10.1754905,2.20779569 10.0328271,2.39801353 9.98319159,2.62024024 Z M1,15 C0.387145996,15 0,14.5775757 0,14 L0,9 C0,8.42687988 0.472290039,8 1,8 C1.52770996,8 3,8 3,8 C3.54406738,8 4,8.43133545 4,9 L4,14 C4,14.5987549 3.55566406,15 3,15 L1,15 Z" id="path-11"></path><mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="21" height="17.0000172"><rect x="-2" y="0" width="21" height="17.0000172" fill="white"></rect><use xlink:href="#path-11" fill="black"></use></mask></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_commentlike" transform="translate(-1107.000000, -541.000000)" stroke-width="4" stroke="#BFC1CA" fill-rule="nonzero"><g id="comments"><g id="comment-2" transform="translate(310.000000, 455.000000)"><g id="rating" transform="translate(799.000000, 86.000000)"><use id="Shape" mask="url(#mask-2)" xlink:href="#path-11"></use></g></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon">
							<svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M49.9831916,2.62024024 L47.6031621,7.66931517 L47.0952381,8 C46,8 46,8.54286552 46,9 L46,14 C46.0028517,14.1748841 46.9203307,15.0000232 47.0952381,15 L53,15 C53.5295653,15.0041516 54.5847929,14.2571172 54.6509743,13.7316872 C54.6920131,13.3309744 54.4926291,12.9438144 54.1425847,12.744506 L54.3863331,12.744506 C54.9158984,12.7486576 55.3647879,12.3558793 55.4309693,11.8304493 C55.4701932,11.4319183 55.2718393,11.0474798 54.9243208,10.8484913 L55.1645871,10.8484913 C55.6941524,10.8526429 56.1430419,10.4598646 56.2092233,9.93443464 C56.2577501,9.53084937 56.06124,9.13714437 55.709539,8.93332496 L55.9828854,8.93332496 C56.2572981,8.93294611 56.5199481,8.82185432 56.7113477,8.62521092 C56.9027473,8.42856752 57.0067012,8.16301141 56.9996647,7.88868877 C56.9688675,7.32819522 55.7258496,6.99073445 55.1645871,7 L51,7 L51.6666667,2.76190476 C51.655365,2.48738707 51.3864116,2.23758708 51.1471451,2.10253442 C50.9078785,1.96748176 50.6157928,1.96573719 50.3749302,2.09792215 C50.1754905,2.20779569 50.0328271,2.39801353 49.9831916,2.62024024 Z M41,15 C40.387146,15 40,14.5775757 40,14 L40,9 C40,8.42687988 40.47229,8 41,8 C41.52771,8 43,8 43,8 C43.5440674,8 44,8.43133545 44,9 L44,14 C44,14.5987549 43.5556641,15 43,15 L41,15 Z" id="path-12"></path><mask id="mask-21" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="21" height="17.0000172"><rect x="38" y="0" width="21" height="17.0000172" fill="white"></rect><use xlink:href="#path-12" fill="black"></use></mask></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_commentdislike" transform="translate(-1147.000000, -541.000000)" fill-rule="nonzero" stroke="#BFC1CA" stroke-width="4"><g id="comments"><g id="comment-2" transform="translate(310.000000, 455.000000)"><g id="rating" transform="translate(799.000000, 86.000000)"><use id="Shape" mask="url(#mask-21)" transform="translate(48.500000, 8.500009) scale(-1, -1) translate(-48.500000, -8.500009) " xlink:href="#path-12"></use></g></g></g></g></g></svg>
						</a>
						<p class="comments__rating">+ 3</p>
					</div>
					<!-- // дополнительные действия в комментариях -->
				</li>
				<li class="comments__comment">
					<div class="comments__avatar"><img src="img/avatar1.png" alt="@@"></div>
					<div class="comments__info">
						<p class="comments__author">Kirill Ptitsyn</p>
						<p class="comments__date">23 часа назад</p>
						<p class="comments__text">Компания хорошая и продукция у них хорошая, что говорить - это действительно бренд и звучат колонки отменно. Но, каждому -свое. Мне дизайн их портативной акустики наоборот не нравится. Купил Marshall и очень доволен - по звуку не хуже точно, а винтажных дизайн заставляет постоянно получать позитив и крутить ручки:)</p>
						<a href="#" class="comments__answerlink">Ответить</a>
					</div>
					<!-- дополнительные действия в комментариях -->
					<div class="comments__actionicons comments__actionicons_top">
						<a href="#" class="comments__actionicon comments__actionicon_link">
							<svg width="18px" height="18px" viewBox="0 0 18 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="linkpath-1" x="0.414213562" y="6.25277607e-13" width="9" height="8" rx="3"></rect><mask id="linkmask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="9" height="8" fill="white"><use xlink:href="#linkpath-1"></use></mask><rect id="linkpath-3" x="11" y="-3.41060513e-13" width="9" height="8" rx="3"></rect><mask id="linkmask-4" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="9" height="8" fill="white"><use xlink:href="#linkpath-3"></use></mask><rect id="linkpath-5" x="6" y="3" width="8" height="2" rx="1"></rect><mask id="linkmask-6" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="0" y="0" width="8" height="2" fill="white"><use xlink:href="#linkpath-5"></use></mask></defs><g id="linkpage-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_link" transform="translate(-1107.000000, -462.000000)" stroke="#BFC1CA"><g id="linkaction" transform="translate(1106.000000, 461.000000)"><g id="link" transform="translate(10.253048, 10.253048) rotate(-315.000000) translate(-10.253048, -10.253048) translate(-0.246952, 6.253048)"><use id="linkrectangle-4" mask="url(#linkmask-2)" stroke-width="4" xlink:href="#linkpath-1"></use><use id="linkrectangle-4-Copy" mask="url(#linkmask-4)" stroke-width="4" xlink:href="#linkpath-3"></use><use id="linkrectangle" mask="url(#linkmask-6)" stroke-width="2" xlink:href="#linkpath-5"></use></g></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon comments__actionicon_share">
							<svg width="16px" height="18px" viewBox="0 0 16 18" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_share" transform="translate(-1149.000000, -462.000000)" stroke="#BFC1CA" stroke-width="2"><g id="action" transform="translate(1106.000000, 461.000000)"><g id="share" transform="translate(44.000000, 2.000000)"><circle id="Oval" cx="12" cy="14" r="2"></circle><circle id="Oval-Copy" cx="2" cy="8" r="2"></circle><circle id="Oval-Copy-2" cx="12" cy="2" r="2"></circle><path d="M10,3 L4,7" id="Path-9"></path><path d="M10,9 L4,13" id="Path-9" transform="translate(7.000000, 11.000000) scale(1, -1) translate(-7.000000, -11.000000) "></path></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon comments__actionicon_more">
							<svg width="22px" height="6px" viewBox="0 0 22 6" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  stroke-width="2" stroke="#BFC1CA" fill="none" fill-rule="evenodd"><g><g transform="translate(-1187.000000, -468.000000)"><g transform="translate(1106.000000, 461.000000)"><g transform="translate(82.000000, 8.000000)"><circle cx="2" cy="2" r="2"></circle><circle cx="10" cy="2" r="2"></circle><circle cx="18" cy="2" r="2"></circle></g></g></g></g></svg>
						</a>
						<!-- ссылка на комментарий -->
						<div class="dropmenu comments__link"><a href="#">http://www.taker.im/review/13820-nedorogoy-Mini-PC-Beelink-Z83II-na-zamenu-shumnomu-s#cc-63609882</a></div>
						<!-- // ссылка на комментарий -->
						<!-- поделиться комментарием в соцсетях -->
						<div class="comments__share">
							<a href="#" class="button button_social_icon button_social_vk">
								<img src="img/icon_vk.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_fb">
								<img src="img/icon_fb.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_twitter">
								<img src="img/icon_tw.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_ok">
								<img src="img/icon_ok.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_mailru">
								<img src="img/icon_mail.svg" alt="@@">
							</a>
							<a href="#" class="button button_social_icon button_social_other">&middot; &middot; &middot;</a>
						</div>
						<!-- // поделиться комментарием в соцсетях -->
						<!-- дополнительное выпадающее меню -->
						<ul class="dropmenu comments__addactions">
							<li><a href="#">Это спам</a></li>
							<li><a href="#">Пожаловаться</a></li>
						</ul>
						<!-- // дополнительное выпадающее меню -->
					</div>
					<div class="comments__actionicons comments__actionicons_bottom">
						<a href="#" class="comments__actionicon">
							<svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M9.98319159,2.62024024 L7.60316213,7.66931517 L7.0952381,8 C6,8 6,8.54286552 6,9 L6,14 C6.00285175,14.1748841 6.92033073,15.0000232 7.0952381,15 L13,15 C13.5295653,15.0041516 14.5847929,14.2571172 14.6509743,13.7316872 C14.6920131,13.3309744 14.4926291,12.9438144 14.1425847,12.744506 L14.3863331,12.744506 C14.9158984,12.7486576 15.3647879,12.3558793 15.4309693,11.8304493 C15.4701932,11.4319183 15.2718393,11.0474798 14.9243208,10.8484913 L15.1645871,10.8484913 C15.6941524,10.8526429 16.1430419,10.4598646 16.2092233,9.93443464 C16.2577501,9.53084937 16.06124,9.13714437 15.709539,8.93332496 L15.9828854,8.93332496 C16.2572981,8.93294611 16.5199481,8.82185432 16.7113477,8.62521092 C16.9027473,8.42856752 17.0067012,8.16301141 16.9996647,7.88868877 C16.9688675,7.32819522 15.7258496,6.99073445 15.1645871,7 L11,7 L11.6666667,2.76190476 C11.655365,2.48738707 11.3864116,2.23758708 11.1471451,2.10253442 C10.9078785,1.96748176 10.6157928,1.96573719 10.3749302,2.09792215 C10.1754905,2.20779569 10.0328271,2.39801353 9.98319159,2.62024024 Z M1,15 C0.387145996,15 0,14.5775757 0,14 L0,9 C0,8.42687988 0.472290039,8 1,8 C1.52770996,8 3,8 3,8 C3.54406738,8 4,8.43133545 4,9 L4,14 C4,14.5987549 3.55566406,15 3,15 L1,15 Z" id="path-11"></path><mask id="mask-2" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="21" height="17.0000172"><rect x="-2" y="0" width="21" height="17.0000172" fill="white"></rect><use xlink:href="#path-11" fill="black"></use></mask></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_commentlike" transform="translate(-1107.000000, -541.000000)" stroke-width="4" stroke="#BFC1CA" fill-rule="nonzero"><g id="comments"><g id="comment-2" transform="translate(310.000000, 455.000000)"><g id="rating" transform="translate(799.000000, 86.000000)"><use id="Shape" mask="url(#mask-2)" xlink:href="#path-11"></use></g></g></g></g></g></svg>
						</a>
						<a href="#" class="comments__actionicon">
							<svg width="21px" height="17px" viewBox="0 0 21 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M49.9831916,2.62024024 L47.6031621,7.66931517 L47.0952381,8 C46,8 46,8.54286552 46,9 L46,14 C46.0028517,14.1748841 46.9203307,15.0000232 47.0952381,15 L53,15 C53.5295653,15.0041516 54.5847929,14.2571172 54.6509743,13.7316872 C54.6920131,13.3309744 54.4926291,12.9438144 54.1425847,12.744506 L54.3863331,12.744506 C54.9158984,12.7486576 55.3647879,12.3558793 55.4309693,11.8304493 C55.4701932,11.4319183 55.2718393,11.0474798 54.9243208,10.8484913 L55.1645871,10.8484913 C55.6941524,10.8526429 56.1430419,10.4598646 56.2092233,9.93443464 C56.2577501,9.53084937 56.06124,9.13714437 55.709539,8.93332496 L55.9828854,8.93332496 C56.2572981,8.93294611 56.5199481,8.82185432 56.7113477,8.62521092 C56.9027473,8.42856752 57.0067012,8.16301141 56.9996647,7.88868877 C56.9688675,7.32819522 55.7258496,6.99073445 55.1645871,7 L51,7 L51.6666667,2.76190476 C51.655365,2.48738707 51.3864116,2.23758708 51.1471451,2.10253442 C50.9078785,1.96748176 50.6157928,1.96573719 50.3749302,2.09792215 C50.1754905,2.20779569 50.0328271,2.39801353 49.9831916,2.62024024 Z M41,15 C40.387146,15 40,14.5775757 40,14 L40,9 C40,8.42687988 40.47229,8 41,8 C41.52771,8 43,8 43,8 C43.5440674,8 44,8.43133545 44,9 L44,14 C44,14.5987549 43.5556641,15 43,15 L41,15 Z" id="path-12"></path><mask id="mask-21" maskContentUnits="userSpaceOnUse" maskUnits="objectBoundingBox" x="-2" y="-2" width="21" height="17.0000172"><rect x="38" y="0" width="21" height="17.0000172" fill="white"></rect><use xlink:href="#path-12" fill="black"></use></mask></defs><g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><g id="icon_commentdislike" transform="translate(-1147.000000, -541.000000)" fill-rule="nonzero" stroke="#BFC1CA" stroke-width="4"><g id="comments"><g id="comment-2" transform="translate(310.000000, 455.000000)"><g id="rating" transform="translate(799.000000, 86.000000)"><use id="Shape" mask="url(#mask-21)" transform="translate(48.500000, 8.500009) scale(-1, -1) translate(-48.500000, -8.500009) " xlink:href="#path-12"></use></g></g></g></g></g></svg>
						</a>
						<p class="comments__rating">+ 3</p>
					</div>
					<!-- // дополнительные действия в комментариях -->
				</li>
			</ul>
		</div>
	</div>
</section>
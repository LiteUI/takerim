<!-- Всплывающая форма заявки !-->
<form class="popup" id="popup" action="send.php" method="post">
	<p>Заполните заявку!</p>
    <input type="name" name="name" placeholder="Ваше имя" required/>
    <input type="tel" name="tel" placeholder="Телефон" required/>
    <input type="email" name="email" placeholder="E-mail" required/>
    <button class="button" type="submit">Отправить</button>
</form>

<!-- Окно "спасибо за заявку" !-->
<form class="popup" id="success">
	<p>Спасибо, мы свяжемся с Вами в ближайшее время!</p>
</form>


<!-- Вход в ЛК -->
<form class="loginform popup" id="loginform" action="send.php" method="post">
	<div class="loginform__head">
		<p class="loginform__heading loginform__heading_main">Вход</p>
		<!-- при попытке проголосовать -->
		<p class="loginform__heading loginform__heading_vote">Для голосования необходимо авторизироваться</p>
		<!-- // при попытке проголосовать -->
	</div>
	<div class="loginform__social">
		<a href="#" class="loginform__socialicon loginform__socialicon_vk"><img src="img/icon_vk.svg" alt="@@"></a>
		<a href="#" class="loginform__socialicon loginform__socialicon_fb"><img src="img/icon_fb.svg" alt="@@"></a>
		<p>или</p>
	</div>
	<div class="loginform__field">
		<input type="text" placeholder="Логин или Email">
	</div>
	<div class="loginform__field">
		<input type="password" placeholder="Пароль">
		<a href="#" class="loginform__forgotpw">Не помню</a>
	</div>
	<button class="button loginform__button">Вход</button>
	<div class="loginform__bottom">
		<a href="#" class="loginform__register">Регистрация</a>
		<p class="loginform__text">Используйте тот же Логин (Email) и Пароль, что и для входа на форум</p>
	</div>
</form>
<!-- // Вход в ЛК -->


<!-- выезжающий блок после оценки -->
<div class="thanks">
	<p class="thanks__voting">Спасибо за участие в проекте. Ваша оценка принята!</p>
	<a href="#" class="thanks__ok">Ок</a>
</div>
<!-- // выезжающий блок после оценки -->
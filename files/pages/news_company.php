<?php 
	session_start();
	if (isset($_COOKIE["roll"])) {
		$_SESSION['id'] = $_COOKIE["id"];
		$_SESSION['roll'] = $_COOKIE["roll"];
		$_SESSION['login'] = $_COOKIE["login"];
	}
	$_SESSION['TypePage'] = 0;
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sound Production</title>
		<link href="../css/pages/company_news_page.css" rel="stylesheet">
		<link href="../css/system/colors.css" rel="stylesheet">
		<link href="../css/system/reset.css" rel="stylesheet">
		<link href="../css/system/base.css" rel="stylesheet">
		<link href="../css/system/fonts.css" rel="stylesheet">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.min.js"></script>
		<script src="../scripts/pages/company_news_page.js"></script>
		<script src="../scripts/system/base.js"></script>
		<script src="../scripts/pages/materials_page.js"></script>

		<link type="image/x-icon" rel="shortcut icon" href="../img/icon/favicon.ico">
	</head>
	<body>
		<div class="base" id="base">
			<header>
				<div class="logoext" onclick="window.location.href ='../../index.php';">SOUND PRODUCTION</div>
				<!--<input type="button" class="btn auroriz-btn" id="autorise-btn" value="Войти">-->
			</header>
			<nav id="nav">
				<input type="button" id="glav" class="navbtn btn" value="Главная" onclick="window.location.href ='../../index.php';">
				<input type="button" id="news" class="navbtn btn" value="Новости">
					<div id="news_list" class="news_list doplist">
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='news_industry.php';">Новости индустрии</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='news_company.php';">Новости компании</div>
						<div class="nav_line"></div>
					</div>
				<input type="button" id="about" class="navbtn btn" value="О нас">	
					<div id="about_list" class="about_list doplist">
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='about_achievements.php';">Наши достижения</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='about_ethics.php';">Корпоративная этика</div>
						<div class="nav_line"></div>
					</div>
				<input type="button" id="coop" class="navbtn btn" value="Сотрудничество">
					<div id="cooperation_list" class="cooperation_list doplist">
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='cooperation_jobs.php';">Вакансии</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='cooperation_policy.php';">Пользование сервисом</div>
						<div class="nav_line"></div>
					</div>

				<!--Вход-->
				<input type="button" id="autorise-btn" class="navbtn btn" value="Личный кабинет">
				<!--Продюссер-->
				<input type="button" id="prod" class="navbtn btn" value="Личный кабинет">
					<div id="ls3" class="lk_list doplist">
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/records_group.php';">Ваши записи</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/advertisements_group.php';">Ваши объявления</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/visible_area.php';">Просмотр площадок</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/profile.php';">Управление аккаунтом</div>
						<div class="nav_line"></div>
						<form action="../php/exit.php">
							<button class="listbtn" id="prod_exit" style="border: none;">Выйти</button>
						</form>
						<div class="nav_line"></div>
					</div>
				<!--Менеджер-->
				<input type="button" id="manag" class="navbtn btn" value="Личный кабинет">
					<div id="ls4" class="lk_list doplist">
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/records_area.php';">Ваши записи</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/advertisements_area.php';">Ваши объявления</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/visible_group.php';">Просмотр групп</div>
						<div class="nav_line"></div>
						<div class="listbtn" onclick="window.location.href ='../pages/profile.php';">Управление аккаунтом</div>
						<div class="nav_line"></div>
						<form action="../php/exit.php">
							<button class="listbtn" id="manag_exit" style="border: none;">Выйти</button>
						</form>
						<div class="nav_line"></div>
					</div>
			</nav>
			<div class="back" id="back">
				<div class="NoneBack">Кажется, ничего не нашлось... <br> Рекомендуем сбросить фильтры</div>
				<div class="list0 lists">
					<div class="head_text"><b>Новости нашей компании</b></div>
				</div>
				<div class="listr lists">
					<div class="zga_text" id="zga1">Фильтры</div>
					<div class="flt_text">
						<b>По времени:</b>
						<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
						<b>По тэгам:</b>
					</div>
					<div class="flex_tags_base">
						<div class="tag tag_web">Web</div>
						<div class="tag tag_patсh">Patch</div>
						<div class="tag tag_announce">Announce</div>
						<div class="tag tag_tv">TV</div>
						<div class="tag tag_Mobile">Mobile</div>
						<div class="tag tag_release">Release</div>
						<div class="tag tag_google">Google</div>
						<div class="tag tag_apple">Apple</div>
					</div>
					<input type="button" class="time_buttons time_buttons_blue timeB1" value="Сегодня">
					<input type="button" class="time_buttons time_buttons_green timeB2" value="Вчера">
					<input type="button" class="time_buttons time_buttons_blue timeB3" value="В последние дни">
					<input type="button" class="time_buttons time_buttons_green timeB4" value="Последняя неделя">
					<input type="button" class="time_buttons time_buttons_blue timeB5" value="Последний месяц">
					<input type="button" class="time_buttons time_buttons_green timeB6" value="Последний год">
					<input type="button" class="btn" id="fback" value="Сбросить"></input>
				</div>
				<div class="listn lists" id="list4">
					<div class="dt_text" id="dt_text4">date</div>
					<div class="zg_text" id="zg_text4">&nbsp&nbsp&nbspКогда будет выход приложения на TvOs</div>
					<div class="cl_text">
						Студия Krafton анонсировала выход приложения на TvOs по вселенной Playerunknown's Battlegrounds. Авторы продолжения королевской битвы перенесут игроков в недалекое будущее. Битвы будут происходить на новой карте «Трой» в 2051 году. Релиз PUBG: New State запланирован на мобильных устройствах с операционными системами iOS и Android в 2021 году.
						Разработчики рассказали, что новая часть франшизы должна расширить вселенную оригинальной игры и улучшить существующие механики по типу кастомизации оружия прямо на поле боя. Действие PUBG: New State происходит в 2051 году, а значит вооружение, транспорт и гаджеты будут соответствовать духу времени.

						По вселенной PUBG в следующем году выйдет еще одна игра. Всего планируется три проекта
						За новую игру отвечает PUBG Studio, которая разрабатывала и и поддерживала оригинальную королевскую битву для ПК и консолей. Разработчики планируют перенести в мобильный формат все особенности и механики геймплея из основной игры. Авторы PUBG Mobile, студия Tencent, не заявлена среди разработчиков.

						Все желающие уже могут оформить предварительную регистрацию в Google Play. В магазине приложений Apple ее обещают открыть позднее.
					</div>
					<div class="img_yap" id="img_tvos"></div>
					<div class="dbl_text" id="vc4" onclick="window.location.href ='news.php';">Читать полностью...</div>
					<div class="flex_tags_base_cards">
						<div class="tags_text">Тэги:</div>
						<div class="tag tag_tv">TV</div>
						<div class="tag tag_announce">Announce</div>
						<div class="tag tag_apple">Apple</div>
					</div>
				</div>
				<div class="listn lists" id="list3">
					<div class="dt_text" id="dt_text3">date</div>
					<div class="zg_text" id="zg_text3">&nbsp&nbsp&nbspВыход приложения на Android Tv</div>
					<div class="cl_text">
						Студия Krafton анонсировала выход приложения на Android Tv по вселенной Playerunknown's Battlegrounds. Авторы продолжения королевской битвы перенесут игроков в недалекое будущее. Битвы будут происходить на новой карте «Трой» в 2051 году. Релиз PUBG: New State запланирован на мобильных устройствах с операционными системами iOS и Android в 2021 году.
						Разработчики рассказали, что новая часть франшизы должна расширить вселенную оригинальной игры и улучшить существующие механики по типу кастомизации оружия прямо на поле боя. Действие PUBG: New State происходит в 2051 году, а значит вооружение, транспорт и гаджеты будут соответствовать духу времени.

						По вселенной PUBG в следующем году выйдет еще одна игра. Всего планируется три проекта
						За новую игру отвечает PUBG Studio, которая разрабатывала и и поддерживала оригинальную королевскую битву для ПК и консолей. Разработчики планируют перенести в мобильный формат все особенности и механики геймплея из основной игры. Авторы PUBG Mobile, студия Tencent, не заявлена среди разработчиков.

						Все желающие уже могут оформить предварительную регистрацию в Google Play. В магазине приложений Apple ее обещают открыть позднее.
					</div>
					<div class="img_yap" id="img_androidtv"></div>
					<div class="dbl_text" id="vc3" onclick="window.location.href ='news.php';">Читать полностью...</div>
					<div class="flex_tags_base_cards">
						<div class="tags_text">Тэги:</div>
						<div class="tag tag_tv">TV</div>
						<div class="tag tag_release">Release</div>
						<div class="tag tag_google">Google</div>
					</div>
				</div>
				<div class="listn lists" id="list2">
					<div class="dt_text" id="dt_text2">date</div>
					<div class="zg_text" id="zg_text2">&nbsp&nbsp&nbspРелиз на мобильных платформах</div>
					<div class="cl_text">
						Студия Krafton анонсировала релиз на мобильных платформах. Авторы продолжения королевской битвы перенесут игроков в недалекое будущее. Битвы будут происходить на новой карте «Трой» в 2051 году. Релиз PUBG: New State запланирован на мобильных устройствах с операционными системами iOS и Android в 2021 году.
						Разработчики рассказали, что новая часть франшизы должна расширить вселенную оригинальной игры и улучшить существующие механики по типу кастомизации оружия прямо на поле боя. Действие PUBG: New State происходит в 2051 году, а значит вооружение, транспорт и гаджеты будут соответствовать духу времени.

						По вселенной PUBG в следующем году выйдет еще одна игра. Всего планируется три проекта
						За новую игру отвечает PUBG Studio, которая разрабатывала и и поддерживала оригинальную королевскую битву для ПК и консолей. Разработчики планируют перенести в мобильный формат все особенности и механики геймплея из основной игры. Авторы PUBG Mobile, студия Tencent, не заявлена среди разработчиков.

						Все желающие уже могут оформить предварительную регистрацию в Google Play. В магазине приложений Apple ее обещают открыть позднее.
					</div>
					<div class="img_yap" id="img_mobile"></div>
					<div class="dbl_text" id="vc2" onclick="window.location.href ='news.php';">Читать полностью...</div>
					<div class="flex_tags_base_cards">
						<div class="tags_text">Тэги:</div>
						<div class="tag tag_Mobile">Mobile</div>
						<div class="tag tag_release">Release</div>
						<div class="tag tag_google">Google</div>
						<div class="tag tag_apple">Apple</div>
					</div>
				</div>
				<div class="listn lists" id="list1">
					<div class="dt_text" id="dt_text1">date</div>
					<div class="zg_text" id="zg_text1">&nbsp&nbsp&nbspРелиз проекта</div>
					<div class="cl_text">
						Студия Krafton анонсировала релиз проекта. Авторы продолжения королевской битвы перенесут игроков в недалекое будущее. Битвы будут происходить на новой карте «Трой» в 2051 году. Релиз PUBG: New State запланирован на мобильных устройствах с операционными системами iOS и Android в 2021 году.
						Разработчики рассказали, что новая часть франшизы должна расширить вселенную оригинальной игры и улучшить существующие механики по типу кастомизации оружия прямо на поле боя. Действие PUBG: New State происходит в 2051 году, а значит вооружение, транспорт и гаджеты будут соответствовать духу времени.

						По вселенной PUBG в следующем году выйдет еще одна игра. Всего планируется три проекта
						За новую игру отвечает PUBG Studio, которая разрабатывала и и поддерживала оригинальную королевскую битву для ПК и консолей. Разработчики планируют перенести в мобильный формат все особенности и механики геймплея из основной игры. Авторы PUBG Mobile, студия Tencent, не заявлена среди разработчиков.

						Все желающие уже могут оформить предварительную регистрацию в Google Play. В магазине приложений Apple ее обещают открыть позднее.
					</div>
					<div class="img_yap" id="img_release"></div>
					<div class="dbl_text" id="vc1" onclick="window.location.href ='news.php';">Читать полностью...</div>
					<div class="flex_tags_base_cards">
						<div class="tags_text">Тэги:</div>
						<div class="tag tag_release">Release</div>
						<div class="tag tag_web">Web</div>
						<div class="tag tag_announce">Announce</div>
						<div class="tag tag_patсh">Patсh</div>
						<div class="tag tag_Mobile">Mobile</div>
						<div class="tag tag_tv">TV</div>
					</div>
				</div>
			</div>
			<footer>
				<div class="colmn"><div class="incolmn">
					<div class="ftext footer_text" onclick="window.location.href ='../../index.php';"><b>Главная</b></div>
					<div class="fline"></div>
				</div></div>
				<div class="colmn"><div class="incolmn"><div class="ftext footer_text" onclick="window.location.href ='news_head.php';"><b>Новости</b></div>
					<div class="fline"></div>
					<div class="stext footer_text" onclick="window.location.href ='news_industry.php';">Новости индустрии</div>
					<div class="stext footer_text" onclick="window.location.href ='news_company.php';">Новости компании</div>
				</div></div>
					<div class="colmn"><div class="incolmn"><div class="ftext footer_text" onclick="window.location.href ='about_head.php';"><b>О нас</b></div>
					<div class="fline"></div>
					<div class="stext footer_text" onclick="window.location.href ='about_achievements.php';">Наши достижения</div>
					<div class="stext footer_text" onclick="window.location.href ='about_ethics.php';">Корпоративная этика</div>
				</div></div>
					<div class="colmn"><div class="incolmn"><div class="ftext footer_text" onclick="window.location.href ='cooperation_head.php';"><b>Сотрудничество</b></div>
					<div class="fline"></div>
					<div class="stext footer_text" onclick="window.location.href ='cooperation_jobs.php';">Вакансии</div>
					<div class="stext footer_text" onclick="window.location.href ='cooperation_policy.php';">Пользование сервисом</div>
				</div></div>
					<div class="colmn"><div class="incolmn"><div class="ftext footer_text"><b>Личный кабинет</b></div>
					<div class="fline"></div>
					<div class="stext footer_text" id="f-autorise">Войти</div>
					<div class="stext footer_text" id="pr-z" onclick="window.location.href ='../pages/records_group.php';">Ваши записи</div>
					<div class="stext footer_text" id="pr-o" onclick="window.location.href ='../pages/advertisements_group.php';">Ваши объявления</div>
					<div class="stext footer_text" id="pr-p" onclick="window.location.href ='../pages/visible_area.php';">Просмотр площадок</div>
					<div class="stext footer_text" id="man-z" onclick="window.location.href ='../pages/records_area.php';">Ваши записи</div>
					<div class="stext footer_text" id="man-o" onclick="window.location.href ='../pages/advertisements_area.php';">Ваши объявления</div>
					<div class="stext footer_text" id="man-g" onclick="window.location.href ='../pages/visible_group.php';">Просмотр групп</div>
				</div></div>
			</footer>
			<div class="socialline">
				<div class="outro_text">© Sound production by Horoshilov corporation</div>
				<div class="bodys">
					<input type='checkbox' id='time'/>
					<label for='time' id="lb">Night</label>
				</div>
				<div class="link"><div class="linkimg" id="linkYoutube" 
					onclick="window.open('https://www.youtube.com/channel/UCxk-mBW7X4ZLu_J-wlPLe2A')"></div></div>
				<div class="link"><div class="linkimg" id="linkPinterest" 
					onclick="window.open('https://www.pinterest.ru/SoundProductionRu')"></div></div>
				<div class="link"><div class="linkimg" id="linkTelegram" 
					onclick="window.open('https://t.me/SoundProductionRu')"></div></div>
				<div class="link"><div class="linkimg" id="linkMail" onclick="window.location.href ='contact_form.php';"></div></div>
			</div>

			<!-- Непервоначальновизуальные объекты -->
			<div class="autorisation-block" id="autorise-block">
				<div class="inblok-relative" id="lg_bl">
					<div class="autorisation-block-exit" id="autorise-close">&#10006</div>
					<div class="autorisation-text-zagl-a autorisation-text-zagl" id="text_btnV">Вход</div>
					<div class="autorisation-text-zagl-s autorisation-text-zagl">&nbsp/&nbsp</div>
					<div class="autorisation-text-zagl-r autorisation-text-zagl" id="text_btnR">Регистрация</div>
					<form id="formV" action="../php/login.php" method="POST">
						<div class="auroriz-preview-text-login Vr-preview-text" id="lg_lg">Логин</div>
						<input type="text" name="login_login" id="login_login" class="V_input_login vr_input">
						<div class="auroriz-preview-text-password Vr-preview-text" id="lg_psw">Пароль</div>
						<input type="password" name="login_password" id="login_password" class="V_input_password vr_input">
						<div class="auroriz-captcha">
							<!--Капча-->
							<div class="text-app-lg" id="captcha-text">Подтвердите, что вы не робот</div>
							<div class="s-switch-lg" id="captcha-switch">
								<input class="inp-cbx" id="cbxlg" type="checkbox" style="display: none"/>
								<label class="cbx" for="cbxlg">
									<span>
										<svg width="8px" height="6px" viewbox="0 0 12 10">
											<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
										</svg>
									</span>
								</label>
							</div>
							<!--Забыли пароль?-->
							<a class="forgot-password" id="fg-password">Забыли пароль?</a>
						</div>
						<button name="login_button" id="lgbutton" class="btn auroriz-btn-in-block" text="Войти">Войти</button>
						<div class="password-icon" id="password-icon"></div>
					</form>
					<form id="formR">
						<div class="reg-preview-text-surname Vr-preview-text" id="rg_srnm">Фамилия</div>
						<input type="text" name="" class="R_input_surname vr_input" id="rg-surname" maxlength="50">
						<div class="reg-preview-text-name Vr-preview-text" id="rg_snm">Имя</div>
						<input type="text" name="" class="R_input_name vr_input" id="rg-name" maxlength="50">
						<div class="reg-preview-text-patronymic Vr-preview-text" id="rg_ptrnm">Отчество</div>
						<input type="text" name="" class="R_input_patronymic vr_input" id="rg-patronymic" maxlength="50">
						<div class="reg-preview-text-phone Vr-preview-text" id="rg_phn">Телефон</div>
						<input type="text" name="" class="R_input_phone vr_input" id="rg-phone">
						<div class="reg-preview-text-mail Vr-preview-text" id="rg_mil">Почта</div>
						<input type="text" name="" class="R_input_mail vr_input" id="rg-mail" maxlength="70">
						<div class="reg-preview-text-login Vr-preview-text" id="rg_lgn">Логин</div>
						<input type="text" name="" class="R_input_login vr_input" id="rg-login" maxlength="70">
						<div class="reg-preview-text-password Vr-preview-text" id="rg_psw">Пароль</div>
						<input type="password" name="" class="R_input_password vr_input" id="rg-password" maxlength="70">
						<div class="reg-preview-text-password-double Vr-preview-text" id="rg_pswd">Повторите пароль</div>
						<input type="password" name="" class="R_input_password_double vr_input" id="rg-password-double" maxlength="70">
						<div class="reg-preview-text-roll Vr-preview-text">Роль</div>
						<div class="switch-box">
							<div class="switch-button">
								<input class="switch-button-checkbox" type="checkbox" id="rg-roll"></input>
								<label class="switch-button-label" for=""><span class="switch-button-label-span">Продюссер группы</span></label>
							</div>
						</div>
						<div class="text-app" id="text-app">Согласие на обработку персональных данных</div>
						<div class="s-switch">
							<input class="inp-cbx" id="cbx" type="checkbox" style="display: none"/>
							<label class="cbx" for="cbx">
								<span>
									<svg width="8px" height="6px" viewbox="0 0 12 10">
										<polyline points="1.5 6 4.5 9 10.5 1"></polyline>
									</svg>
								</span>
							</label>
						</div>
						<input type="button" class="btn reg-btn-in-block" id="prm" value="Зарегистрироваться"></input>
					</form>
				</div>
			</div>
		</div>
		<div id="dt_text01"></div><div id="dt_text02"></div><div id="dt_text03"></div><div id="dt_text04"></div>
		<div id="fog"></div>
		<div id="cookie_base">
			<div class="cookies-block-exit" id="cookies-close">&#10006</div>
			<div class="cline">
				Мы используем файлы cookie для вашего удобства пользования сайтом и повышения качества рекомендаций.&nbsp
				<div id="about_cookie"><u>Подробнее</u></div>
				&nbsp&nbsp
				<input type="button" class="btn_cookie" id="btn_cookie" value="Я согласен"></input>
			</div>	
		</div>
		<div class="cookies-band" id="cookies-band">
			<div class="cookies-band-exit" id="cookies-band-close">&#10006</div>
			<div class="cookies-band-text">
				Продолжая использовать наш сайт, вы даете согласие на обработку файлов cookie (пользовательских данных, содержащих сведения о местоположении; версию ОС; тип и разрешение экрана устройства, с которого пользователь обращается к сайту; сведения о взаимодействии пользователя с web-интерфейсом) в целях аутентификации пользователя на сайте. Если вы не хотите, чтобы ваши данные обрабатывались, пожалуйста, покиньте сайт.
			</div>
		</div>
	</body>
</html>
<?php
	if ($_SESSION['roll'] == '3') {
		echo "<script src='../scripts/system/show_producer.js'></script>";
	}
	else if ($_SESSION['roll'] == '4') {
		echo "<script src='../scripts/system/show_manager.js'></script>";
	}
	else if ($_SESSION['roll'] == '000') {
		echo "<script src='../scripts/system/error_login.js'></script>";
		session_destroy();
	}
	else if ($_SESSION['roll'] != null){
		echo '<script>alert("Данный аккаунт не поддерживается сайтом, перезагрузите страницу и попробуйте войти с другого аккаунта, или создайте новый.");</script>';
		session_destroy();
	}

	if (isset($_COOKIE["inf_cookie"]) != null){
		if ($_COOKIE["inf_cookie"] == "1") {
			echo "<script src='../scripts/system/cookie_info.js'></script>";
		}
	}
	else{
		echo "<script src='../scripts/system/cookie_info.js'></script>";
	}

	if (isset($_COOKIE["themes"]) != null){
		if ($_COOKIE["themes"] == "black") {
			echo "<script src='../scripts/system/themdark.js'></script>";
		}
		if ($_COOKIE["themes"] == "white") {
			echo "<script src='../scripts/system/themwhite.js'></script>";
		}
	}
	else{
		echo "<script src='../scripts/system/cookie_info.js'></script>";
	}

	if (isset($_COOKIE["anti-bot"]) != null){
		if ($_COOKIE["anti-bot"] == "yes") {
			echo "<script>$('#cbxlg').prop('checked', true);</script>";
		}
	}
?>
<!doctype php>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Добавить новость</title>
		<link rel="stylesheet" href="style/style.css" />
		<script src="scripts/add_news.js"></script>
	</head>
	<body>
		<?php
			include 'menu.php';
		?>
		
		<div class="class_main_wrapper">
			<div class="article_wrapper">
				<div class="content_widget">
					<h2>Добавить новость на сайт</h2>
					<form method="POST" href="news.php" action="add_news.php">
						<p>Имя пользователя:<br> 
						<input type="text" name="user_name" size="40" class="textbox" />
						<span class="error" id="username_errortext"></span>
						</p>
						<p>E-mail: <br> 
						<input type="text" name="email" size="40" class="textbox" />
						<span class="error" id="email_errortext"></span>
						</p>
						<p>Ссылка на картинку: <br> 
						<input type="text" name="image" size="40" class="textbox" />
						<span class="error" id="link_errortext"></span>
						</p>
						<p>Название новости: <br> 
						<textarea name="header" cols="40" rows="5" class="textbox"></textarea>
						<span class="error" id="message_errortext"></span>
						</p>
						<p>Описание новости: <br> 
						<textarea name="text" cols="40" rows="5" class="textbox"></textarea>
						<span class="error" id="message_errortext"></span>
						</p>
						<input type="submit" value="Добавить" class="button" id="submit_button" />
						<span class="error" id="submit_errortext"></span>
					</form>
				</div>
			</div>
			
			<div class="sidebar_wrapper">
				<div class="content_widget">
					<p>Российские поисковые системы</p>
					<p>Yandex:	<a href='http://www.yandex.ru/'> http://www.yandex.ru/ </a> </p>
					<p>Rambler:	<a href='http://www.rambler.ru/'> http://www.rambler.ru/ </a> </p>
					<p>Google:	<a href='http://www.google.ru/'> http://www.google.ru/ </a> </p>
					<p>Mail.ru:	<a href='http://www.mail.ru/'> http://www.mail.ru/ </a> </p>
					<p>Aport:	<a href='http://www.aport.ru/'> http://www.aport.ru/ </a> </p>
					<p>Lycos:	<a href='http://www.lycos.ru/'> http://www.lycos.ru/ </a> </p>
					<p>Нигма.рф:	<a href='http://www.nigma.ru/'> http://www.nigma.ru/ </a> </p>
					<p>Yahoo! по-русски:	<a href='https://www.yahoo.com/'> https://www.yahoo.com/ </a> </p>
					<p>Liveinternet:	<a href='http://www.liveinternet.ru/'> http://www.liveinternet.ru/ </a> </p>
					<p>Webalta:	<a href='http://www.webalta.ru/'> http://www.webalta.ru/ </a> </p>
					<p>Filesearch:	<a href='http://www.filesearch.ru/'> http://www.filesearch.ru/ </a> </p>
					<p>Metabot:	<a href='http://www.metabot.ru/'> http://www.metabot.ru/ </a> </p>
					<p>Зона РУ:	<a href='http://www.zoneru.org/'> http://www.zoneru.org/ </a> </p>
					<p>KM.ru:	<a href='http://www.km.ru/'> http://www.km.ru/ </a> </p>
					<p>Gde :	<a href='http://www.gde.ru/'> http://www.gde.ru/ </a> </p>
					<p>Поисковая система для вебмастеров Codavr :	<a href='http://www.codavr.ru/'> http://www.codavr.ru/ </a> </p>
					<p>Netoteka :	<a href='http://www.netoteka.ru/'> http://www.netoteka.ru/ </a> </p>
			   </div>
			</div>
		</div>
	</body>
</html>
<!doctype php>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Новости поисковых систем</title>
		<link rel="stylesheet" href="style/style.css" />

	</head>
	<body>
		<?php
			include 'menu.php';
		?>
		
		<div class="class_main_wrapper">
			
			<?php
				$host = "127.0.0.1";
				$username = "toronasty";
				$password = "kbpfcbvgcjy1";
				$dbname = "mysql";
				$mysqli = new mysqli($host, $username, $password, $dbname);
				$query = "select * from search_news order by id desc limit 30";
				$result = $mysqli->query($query); 
				echo "<div id=news_container class='article_wrapper'>";
				while($row = $result->fetch_array(MYSQLI_ASSOC)) {
					echo 
						"<div class='class_columns_wrapper'>".
						"	<a href='news-article.php?number=".$row["ID"]."'>".
						"		<div class='content_widget'>".
							$row["image"].
				    		$row["header"].
				    		$row["time"].
						"		</div>". 
						"	</a>". 
						"</div>";
				}
				echo "</div>";

			?>

			
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
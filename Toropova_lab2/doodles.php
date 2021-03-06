<!doctype php>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Google Doodle</title>
		<link rel="stylesheet" href="style/style.css" />
		<script>
			var array_all_images, current_image;
			window.onload = function() {
				array_all_images = document.getElementsByClassName("class_image");
				if(array_all_images.length > 0) {
					document.getElementsByClassName("class_all_images")[0].innerHTML = all_images();
					for(let i = 0; i < array_all_images.length; i++) {
						array_all_images[i].hidden = true;
					}
					array_all_images[0].hidden = false;
					current_image = array_all_images[0];
				}
			}
	
			function setPage( pageNum ) {
				if(pageNum < 0 || pageNum >= array_all_images.length) {
					return;
				}
				current_image.hidden = true;
				current_image = array_all_images[pageNum];
				current_image.hidden = false;
			}
	
			function all_images() {
				let result = "";
				for(let i = 0; i < array_all_images.length; i++) {
				console.log(array_all_images[i].src);
					result += ('<a onclick="setPage(' + i + ')">' + '<img style="object-fit:cover;" width="80px" height="80px" src="' + array_all_images[i].src + '"></img></a> ')
				}
				return result;
			}
		</script>
	</head>
	<body>
		<?php
			include 'menu.php';
		?>
		
		<div class="class_main_wrapper">
			<div class="article_wrapper">
				<div class="content_widget">
					<h1>Google doodle</h1>
					<div id="comic-container">
						<div class="class_all_images" style="text-align: center;"></div>
						<div id="class_image"></div>
						<a>
							<img src="images/doodles/photo1.jpg" width="100%" class="class_image"/>
							<img src="images/doodles/photo2.jpg" width="100%" class="class_image"/>
							<img src="images/doodles/photo3.jpg" width="100%" class="class_image"/>
							<img src="images/doodles/photo4.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo5.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo6.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo7.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo8.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo9.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo10.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo11.png" width="100%" class="class_image"/>
							<img src="images/doodles/photo12.jpg" width="100%" class="class_image"/>
							<img src="images/doodles/photo13.jpg" width="100%" class="class_image"/>
						</a>
					</div>
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
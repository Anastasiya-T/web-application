var news_count = 7;

var news = [
	{
		header: "	<h1>Новый алгоритм в Яндекс</h1> ",
		time  : "	<small>03.04.2018</small>",
		image : "	<img src='images/news1.jpg' width='100%' /> ", 
		text  : "	<p>Команда поисковика Яндекс обнародовала информацию о том, что закончены работы по созданию нового алгоритма с названием Баден-Баден, работа которого в основном ориентирована на то, чтобы понижать в выдаче сайты с излишне оптимизированным контентом, такие сео тексты будут крайне негативно оцениваться.  По словам представителей Яндекс, они считают совершенно очевидным тот факт, что эти тексты пишутся если и реальным человеком, то явно не для людей.</p>" +
				"	<p>Яндекс значительно усовершенствовал механизм который искал переоптимизированные страницы, и в итоге вывел его в отдельный алгоритм ранжирования поисковика. Отсюда следует вывод, что совсем скоро у порталов с некачественным переоптимизированным контентом возникнут проблемы с выдачей в поиске.</p> " +
				"	<p>Специалисты Яндекс настоятельно рекомендуют пере сканировать все свои сайты на предмет не качественного контента и принять к этому меры. </p> "
	},
	{
		time  : "	<small>04.04.2018</small>",
		image  : "	<img src='images/news2.jpg' width='100%' />", 
		header : "	<h1>Новое приложение от Google</h1>", 
		text   : "	<p>От доподлинных источников стало известно о том что Google ведет работу над новым приложением, ориентированным на социальную сторону. Пользователи этого приложения получат возможность совместного редактирования и создания фотографий.</p>" + 
				 "	<p>Сами представители Google не стали отрицать этой информации, и дали подтверждение этому факту, назвав его одним из многих экспериментов. По данным того же Гугла, презентация этого приложения может состояться уже в мае этого года, на предстоящей конференции.</p>" +
				 "<p>Сама цель работы приложения заключается в том, чтобы дать возможность пользователю делиться своими фотографии, совместно их сождавать и редактировать. В приложении будет реализовано компьютерное зрение в качестве поиска по фото и картинкам, такие технологии уже успешно применяются популярным видео хостингом YouTube. Название нового приложения пока не разглашается.</p>"
							
	},
	{
		time  : "	<small>04.04.2018</small>",
		image  : "	<img src='images/news3.jpg' width='100%' />", 
		header : "	<h1>Оператор поиска site: под вопросом в Google</h1>", 
		text   : "	<p>Прошлая неделя была ознаменована опросом от Google, суть которого заключалась в том чтобы выяснить отношение пользователей и веб мастеров к поисковой команде «site:», которая в этих кругах очень популярна. И мнения по поводу этого опроса были далеко не однозначны, многие сделали вывод, что такой интерес Google к этой команде не случаен и может повлечь за собой ее устранение из обихода.</p>" +
				 "	<p>И эта точка зрения созрела не из пустого места совсем, некогда Google уже говорил о том что планирует отказаться от ряда команд, и конечно же все сразу подумали о том что «site:» одна из них. Но не смотря на это, сами представители Google не разделяют этого опасения и напротив комментируют свое противоположное к этому мнение.</p>" +
				 "	<p>Изходя из всего этого можно сделать вывод того, что данная команда еще очень и очень важна, причем не только для веб мастеров большой руки, но и для самих специалистов Гугла и поэтому, можно с уверенностью предположить что команда «site:» будет с нами еще долгое время и никуда деваться не собирается.</p>"								
	},
	{
		time  : "	<small>05.04.2018</small>",
		image  : "	<img src='images/news4.jpg' width='100%' />", 
		header : "	<h1>Новое приложение от Google</h1>", 
		text   : "	<p>Компания Яндекс анонсировала новый браузер для представителей бизнес среды, он отличается некоторыми моментами, и основное направление этого браузера, безопасность пользователя при серфинге в интернет.</p>" +
				 "	<p>В первую очередь Яндекс.Браузер для бизнеса направлен на то, чтобы корпоративные данные компании ни в коем случае не смогла попасть в общий доступ интернета, это реализовано таким образом, что в браузере есть настройки, манипулируя которыми пользователь сам может определить какие данные разрешено собирать браузеру, а какие нет.</p>" +
				 "	<p>Еще одним отличительным этапом можно назвать то, что специализированная технология Protect, которая нашла свое применение в новом браузере от Яндекс для бизнеса, в автоматическом режиме производит блокировку доступа к потенциально опасному контенту, скрывает по настройке рекламные баннеры, и отвечает со всей серьезностью за проведение любых электронных платежей, ну и конечно же проводит онлайн мониторинг с целью исключить попытки кражи персональных данных пользователя.</p>" +
				 "	<p>Новый Яндекс браузер может быть дополнен по желанию заказчика специализированные под ведение бизнеса, это всевозможные программные обеспечения такие как складские, или к примеру бухгалтерские, причем работать в них можно прямо в окне браузера.</p>"								
	},
	{
		time  : "	<small>05.04.2018</small>",
		image  : "	<img src='images/news5.jpg' width='100%' />", 
		header : "	<h1>Google Panda учитывает архитектуру Вашего сайта</h1>", 
		text   : "	<p>Тема затронутая на очередной встрече с Джоном Мюллером касалась относительно молодого алгоритма поисковика Google Panda, в частности обсуждалось учитывает ли этот алгоритм при анализе сайта его архитектуру. Как выяснилось из пояснений представителя Гугл, а точнее специалиста по качеству поиска, гугл панда принимает во внимание архитектуру сайта во время его оценки на ровне с остальными аспектами качества сайта.</p>" +
				 "	<p>Мюллер пояснил, что если поисковик  видит на вашем портале проблемы, которые могут сказываться на качестве сайта в целом, то они учитываются. Поэтому уместным будет провести работу по улучшению архитектуры категорий, если имеются таковые проблемы</p>"								
	},
	{
		time  : "	<small>06.04.2018</small>",
		image  : "	<img src='images/news6.jpg' width='100%' />", 
		header : "	<h1>Изменения выдачи и трафика в Google</h1>", 
		text   : "	<p>Англоязычная выдача Google претерпевает некоторые колебания. Это стало известно от крупных владельцев сайтов на территории США и также от аналитических инструментов и компаний.</p>" +
				 "	<p>Причем отмечается что колебания претерпевает не только выдача но и трафик. И по этому можно судить о том что изменения происходят не локально а глобально. Но все же, как считают специалисты, ни о каком масштабном обновлении Гугл не может быть и речи. Здесь можно лишь говорить об незначительных правках погрешностей, ну или действительно о начале многонедельного и масштабного обновления поисковика. Представители Google, как стало уже традиционно, конечно же никак не комментируют колебания трафика и выдачи и уж тем более никак не связывают эти изменения с предстоящим обновлением.</p>" +
				 "	<p>В заключении хотелось бы сказать, что последний раз поисковик обновлялся совсем недавно, в середине декабря ушедшего года.</p>"							
	},
	{
		time  : "	<small>07.04.2018</small>",
		image  : "	<img src='images/news7.jpg' width='100%' />", 
		header : "	<h1>Новый сервис от Mail.Ru Group</h1>", 
		text   : "	<p>Недавно представительство Майл ру сообщило о том, что запускает новый бесплатный сервис для мобильной аналитики под названием myTracker. Суть этого сервиса в том, что все рекламодатели и разработчики получат возможность более детального доступа к данным о мобильной аудитории что значительно в свою очередь сократит затраты на любую из проводимых рекламных компаний.</p>" +
				 "	<p>Сервис мобильной аналитики представляет собой огромный набор инструментов для мобильной аналитики, применяяя которые маркетологи смогут более точно и детально получить данные о своих рекламных кампаниях. Руководителям таких отделов очень пригодится такой инструмент предоставляющий статистику о технических характеристиках устройств и их версий.</p>" +
				 "	<p>Пользователи нового сервиса myTracker смогут получить доступ к неограниченному количеству кампаний, событий и отчетов, которые могут быть настроены по любому из выбранных вами направлений.</p>" +
				 "	<p>Представители Майл групп утверждают что возможности нового сервиса позволяют вывести аналитику мобильных устройств на новый уровень и благодаря интеграции с myTarget, объединяющей крупнейшую мобильную аудиторию в России и СНГ, рекламодателям будет доступна самая точная социально-демографическая статистика</p>"
	},
];

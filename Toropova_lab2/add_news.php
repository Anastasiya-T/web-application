
<?php
	$host = "127.0.0.1";
	$username = "toronasty";
	$password = "kbpfcbvgcjy1";
	$dbname = "mysql";
	$mysqli = new mysqli($host, $username, $password, $dbname);
	
	$current_date = date("d.m.Y");
    $header = str_replace("'", "\\\"", $_POST["header"]);
    $header = str_replace("\n", "<br>", $header);
    $text = str_replace("'", "\\\"", $_POST["text"]);
    $text = str_replace("\n", "<br>", $text);
	$query = "insert into search_news (header, time, image, text)
            values (".
            "'<h1>".$header." </h1>',".
            "'<small>".$current_date." </small>',".
            "'<img src=\"".$_POST["image"]." \" width=\"100%\" />','".
            $text.
            "<p>Добавил пользователь: ".$_POST["user_name"]."<p>".
            "<p>Почта: ".$_POST["email"]."<p>".
            " ')"
        ;
    echo $query;
	$result = $mysqli->query($query); // выполнение запроса
	
	header('Location: news.php ');
?>
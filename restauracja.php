<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Restauracja Wszystkie Smaki</title>
	<link rel="stylesheet" href="styll.css" type="text/css" />
</head>
<body>
	<header>
	<h1> Witamy w restauracji „Wszystkie Smaki"</h1>
	</header>
		<div class="container">
		<div id="lewy">
			<img src="menu.jpg" alt="Nasze danie" />
		</div>
		<div id="prawy">
			<h4>U nas dobrze zjesz!</h4>
			<ol>
				<li> Obiady od 40 zł</li>
				<li> Przekąski od 10 zł</li>
				<li> Kolacje od 20 zł</li>
			</ol>
		</div>
		
		</div>
		<div id="dolny">
			<h2>Zarezerwuj stolik on-line</h2>
		<form method="post" action="rezerwacja.php">
		Data (format rrrr-mm-dd):<br/>
		<input type="date" name="data_rez"/><br/>
		Ile osób?:<br/>
		<input type="numer" name="liczba_osób"/><br/>
		Twój numer telefonu:<br/>
		<input type="text" name="telefon"/><br/>
		<input type="checkbox" id="check"> Zgadzam się na przetwarzanie moich danych osobowych<br/>
		<input type="reset" value="WYCZYŚĆ"/>
		<input type="submit" value="REZERWUJ"/>
		</form>
		</div>
	<footer>
	Stronę internetową opracował: <b><i>Yana Khorolska</i></b>
	</footer>

</body>
</html>
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<html lang="pl">
	<meta charset="utf-8">
<title>Pizzeria</title>	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="styl.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Monoton">

	
</head>
<body style="background-color: black">

	<div class="h-100 bg-dark">
		<div class="container-fluid text-center h-auto  bg-top">
			<div class="row justify-content-center p-2">
				<div class="col-xl-3 col-auto w-auto">
					<img class="text-white text-decoration-none img-top" src="img/pizzaparty.png" alt="pizzaparty">
				</div>
				<div class="col-xl-1 col-auto options w-auto">
					<a class="text-white text-decoration-none px-2 pl-2 lato h-100px pink menu-text-size" href="pizza.php">Start</a>
				</div>
				<div class="col-xl-1 col-auto w-auto options">
					<div class="dropdown">
					    <a class="dropdown-toggle text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" data-toggle="dropdown" href="#">Menu</a>
						    <div class="dropdown-menu bg-dropdown border-0 rounded-0 lato">
						      <a class="dropdown-item text-white a lato" href="menu/pizza-menu.php">Pizza</a>
						      <a class="dropdown-item text-white a lato" href="menu/przystawki-menu.php">Przystawki</a>
						      <a class="dropdown-item text-white a lato" href="menu/desery-menu.php">Desery</a>
						      <a class="dropdown-item text-white a lato" href="menu/napoje-menu.php">Napoje</a>
						    </div>
					  </div>
				</div>
				<div class="col-xl-1 col-auto w-auto options">
					<a class="text-white text-decoration-none px-2 pl-2 lato h-100px pink menu-text-size" href="menu/promocje.php">Promocje</a>
				</div>
				<div class="col-xl-2 col-auto w-auto options">
					<a class="text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" href="menu/zamowienia.php">Zamów online</a>
				</div>
				<div class="col-xl-1 col-auto w-auto options">
					<a class="text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" href="kontakt.php">Kontakt</a>
				</div>
				<div class="col-xl-1 col-auto w-auto options"></div>
					<?php
						
					if (isset($_SESSION['email'])) {
					echo "<div "."class='col-auto w-auto options'".">";
					echo "<a "."class='text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size'"." href='#'".">"."Witaj ".$_SESSION['imie']."!"."</a>";
					echo "<a class='pink-strong a-stopka' href='wyloguj.php'>Wyloguj</a>";
					echo "</div>";

					}else{

						echo "<div "."class='col-auto w-auto options'"."></div>";
						echo "<div "."class='col-auto w-auto options'"."></div>";
						echo "<div " ."class='col-auto w-auto options'".">";
					echo "<a "."class='text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size'"." href='logowanie.php'".">"."Zaloguj się"."</a>";
						echo "</div>";
					}
					?>
			</div>	
		</div>
	</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="text-center monoton pink-strong menu-h1">Kontakt</h1>
					
			</div>
		</div>

			<div class="row justify-content-center row-select row-pad">
				
				<div class="row justify-content-center">
					<div class="col-3 pt-5 pb-5">
						<h4 class="text-center pink-strong monoton">Lokale</h4>	
						<p class="text-center text-white lato p-text">
							<button class="lokal-button text-white lato" id="lokal1">ul. Chrobrego 21</button></br>
							<button class="lokal-button text-white lato" id="lokal2">ul. Walczaka 13</button></br>
							<button class="lokal-button text-white lato" id="lokal3">ul. Hawelańska 1</button></br>
							Gorzów Wielkopolski 66-400
						</p>	
						<p class="text-center text-white lato p-text">
							<button class="lokal-button text-white lato" id="lokal4">ul. Marszałka Piłudskiego 4</button></br>
							Szczecin 71-899
						</p>	
					</div>
					<div class="col-3 pt-5 pb-5">
						<h4 class="text-center pink-strong monoton">Telefon</h4>	
						<p class="text-center text-white lato p-text">
						669-223-112</br>
						669-200-100
					</p>
					</div>
					<div class="col-3 pt-5 pb-5">
						<h4 class="text-center pink-strong monoton">Godziny otwarcia</h4>
							<p class="text-center text-white lato p-text">
									poniedziałek 12:00 - 22:00</br> 
									wtorek 12:00 - 22:00</br>
									środa 12:00 - 22:00</br>
									czwartek 12:00 - 22:00</br>
									piątek 12:00 - 22:00</br>
									sobota 12:00 - 22:00</br>
									niedziela 12:00 - 22:00
							</p>
					</div>
						<div class="col-3 pt-5 pb-5">
							<h4 class="text-center pink-strong monoton">Zamówienia online</h4>
							<p class="text-center text-white lato p-text">
								poniedziałek 12:00 - 21:45</br> 
								wtorek 12:00 - 21:45</br>
								środa 12:00 - 21:45</br>
								czwartek 12:00 - 21:45</br>
								piątek 12:00 - 21:45</br>
								sobota 12:00 - 21:45</br>
								niedziela 12:00 - 21:45
							</p>
						</div>
					</div>
						
				  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2415.8041707096386!2d15.23203091548763!3d52.73572607985561!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47071f991a3983f1%3A0x79cf5e53a0df0088!2sChrobrego%2021%2C%2066-400%20Gorz%C3%B3w%20Wielkopolski!5e0!3m2!1spl!2spl!4v1574801407413!5m2!1spl!2spl" class="google-maps" frameborder="0" style="border:0;" allowfullscreen="" id="map"></iframe>
			</div>
		</div>


<!-- ////////////////Stopka////////////////  -->

	<div class="container-fluid">
		<div class="row stopka">
			<div class="col-6">
				<p class="text-stopka lato text-white pt-5">
					©2019 Pizza Party · <a href="" class="pink-strong a-stopka">Polityka Prywatności</a> · <a href="" class="pink-strong a-stopka">Regulamin</a>
				</p>
			</div>
			<div class="col-6">
				<p class="text-stopka lato text-white float-right">
					Znajdziesz nas na:</br>
					<i class="fa fa-facebook-square" style="font-size:24px"></i>
					<i class="fa fa-instagram" style="font-size:24px"></i>
					<i class="fa fa-snapchat-square" style="font-size:24px"></i>

				</p>
			</div>	
		</div>	
	</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script type="text/javascript" src="script.js"></script>
</body>
</html>
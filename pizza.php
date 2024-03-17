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

					}
					else
					{

						echo "<div "."class='col-auto w-auto options'"."></div>";
						echo "<div "."class='col-auto w-auto options'"."></div>";
						echo "<div "."class='col-auto w-auto options'".">";
					echo "<a "."class='text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size'"." href='logowanie.php'".">"."Zaloguj się"."</a>";
						echo "</div>";
					}
					?>
				
			</div>	
		</div>
	</div>
<!-- aaaaaaaaaaaaaaa -->
		<div id="demo" class="carousel slide slider justify-content-center" data-ride="carousel">
			  <!-- The slideshow -->
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="slider-img img-responsive" src="img/pizza.jpg" alt="zdj1">
			       	<div class="navbar"></div>    	
				      	<div class="carousel-caption text-left">
						    <h1 class="monoton pink-strong">Wielka promocja</h1>
						    <p class="p-caption lato">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias non veritatis voluptatem, reiciendis asperiores adipisci in cumque consequatur ab possimus expedita, a nihil eos hic vel dicta libero! Consequatur, eveniet.</p>
							    <p><a class="p-button float-right lato-bold" href="menu/promocje.php">
							    	Przejdź <i class="fa fa-mail-forward"></i>
							    </a></p>
						 </div>
			    </div>
			    <div class="carousel-item">
			      <img class="slider-img img-responsive" src="img/pizza2.jpg" alt="zdj2">
			      	<div class="navbar"></div>
			      		<div class="carousel-caption text-left">
							    <h1 class="monoton pink-strong">Zimowe desery</h1>
							    <p class="p-caption lato">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, illo neque. Ab sint corrupti in omnis mollitia cumque repudiandae. Dignissimos amet, reprehenderit hic perferendis praesentium quisquam voluptates eius, vero labore.</p>
							    <p><a class="p-button float-right lato-bold" href="menu/desery-menu.php">
							    	Przejdź <i class="fa fa-mail-forward"></i>
							    </a></p>
					 	</div>
			    </div>
			    <div class="carousel-item">
			      <img class="slider-img img-responsive" src="img/pizza3.jpg" alt="zdj3">
			      	<div class="navbar"></div>
			      		<div class="carousel-caption text-left">
						    <h1 class="monoton pink-strong">Nowa pizza wprost od hanysa</h1>
						    <p class="p-caption lato">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente porro provident architecto sunt rerum, consectetur harum iste similique eligendi nostrum repudiandae natus assumenda blanditiis nesciunt doloribus ipsam quam? Ducimus, laudantium.</p>
							    <p><a class="p-button float-right lato-bold" href="menu/pizza-menu.php">
							    	Przejdź <i class="fa fa-mail-forward"></i>
							    </a></p>
					 	</div>
			    </div>
			  </div>
			  <!-- Left and right controls -->
			  <a class="carousel-control-prev" href="#demo" data-slide="prev">
			    <span class="carousel-control-prev-icon"></span>
			  </a>
			  <a class="carousel-control-next" href="#demo" data-slide="next">
			    <span class="carousel-control-next-icon"></span>
			  </a>
		</div>
		<div class="container-fluid opis">
			<div class="row justify-content-center">
				<div class="col-3 pt-5 pb-5">
					<h4 class="text-center pink-strong monoton">Lokale</h4>	
					<p class="text-center text-white lato p-text">ul. Chrobrego 21</br>
					ul. Walczaka 13	</br>
					ul. Hawelańska 1</br>
					Gorzów Wielkopolski 66-400</p>	
					<p class="text-center text-white lato p-text">ul. Marszałka Piłudskiego 4</br>
					Szczecin 71-899
					</p>	
				</div>
				<div class="col-2 pt-5 pb-5">
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
				<div class="col-2 pt-5 pb-5">
					<h4 class="text-center pink-strong monoton p-text">Zamów online</h4>
					<p class="text-center text-white">
						<a class="p-button2 lato-bold text-center" href="menu/zamowienia.php">Zamów</a>
					</p>
				</div>
			</div>

			<div class="container-fluid h-auto">
				<div class="row h-auto">
					<div class="col-6">
					<h1 class="text-center monoton pink-strong">O nas</h1>
							<p class="p-opis text-justify text-white lato">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
					</div>
					<div class="col-6">		
						<div class="position-absolute pl-4">				
							<img src="img/lokal.jpg" class="opis-img-1 img-responsive">
							<img src="img/lokal2.jpg" class="opis-img-2 img-responsive">
						</div>
					</div>
				</div>
			</div>
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

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
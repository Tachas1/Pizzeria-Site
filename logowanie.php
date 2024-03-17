<?php
	session_start();

	if (isset($_SESSION['zalogowany'])&&$_SESSION['zalogowany']==true) 
	{
		header('Location: pizza.php');
		exit();
	}
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
				<div class="col-auto w-auto options"></div>
				<div class="col-auto w-auto options"></div>
				<div class="col-auto w-auto options">
					<a class="text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" href="logowanie.php">Zaloguj się</a>
				</div>
			</div>	
		</div>
	</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="text-center monoton pink-strong menu-h1">Logowanie</h1>
					
			</div>
		</div>

			<div class="row justify-content-center row-select row-pad">
<!-- sssssssssssssssssssssssssssssss -->				
				<form class="text-white lato w-50 p-text" action="zaloguj.php" method="POST">					
							  <div class="form-row">
							    <div class="form-group col-12">
							      <label>E-mail</label>
							      <input type="text" class="form-control order-area" size="80" name="email">
							    </div>
							  </div>
							<div class="form-row">
							    <div class="form-group col-12">
							      <label>Hasło</label>
							      <input type="password" class="form-control order-area" size="80" name="haslo">
							    </div>
							</div>
					<div class="form-row">
						<div class="form-group col-6">	
						  <button type="submit" class="order-button lato-bold ml-1" size="80">Zaloguj</button>
						</div>
						<div class="form-group col-6">
						  <p class="float-right">
						  	<a href="rejestracja.php" class="pink-strong a-stopka">Nie masz konta? Zarejestruj się!</a>
						  </p>
						</div>  
					</div>
					<div class="text-danger lato align-middle">
					<?php
						if (isset($_SESSION['blad'])) {
							echo $_SESSION['blad'];
						};
					?>		
					</div>
				</form>
					
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
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
</body>
</html>
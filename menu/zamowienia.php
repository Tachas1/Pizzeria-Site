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
					<a class="text-white text-decoration-none px-2 pl-2 lato h-100px pink menu-text-size" href="../pizza.php">Start</a>
				</div>
				<div class="col-xl-1 col-auto w-auto options">
					<div class="dropdown">
					    <a class="dropdown-toggle text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" data-toggle="dropdown" href="#">Menu</a>
						    <div class="dropdown-menu bg-dropdown border-0 rounded-0 lato">
						      <a class="dropdown-item text-white a lato" href="pizza-menu.php">Pizza</a>
						      <a class="dropdown-item text-white a lato" href="przystawki-menu.php">Przystawki</a>
						      <a class="dropdown-item text-white a lato" href="desery-menu.php">Desery</a>
						      <a class="dropdown-item text-white a lato" href="napoje-menu.php">Napoje</a>
						    </div>
					  </div>
				</div>
				<div class="col-xl-1 col-auto w-auto options">
					<a class="text-white text-decoration-none px-2 pl-2 lato h-100px pink menu-text-size" href="promocje.php">Promocje</a>
				</div>
				<div class="col-xl-2 col-auto w-auto options">
					<a class="text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" href="zamowienia.php">Zamów online</a>
				</div>
				<div class="col-xl-1 col-auto w-auto options">
					<a class="text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size" href="../kontakt.php">Kontakt</a>
				</div>
				<div class="col-xl-1 col-auto w-auto options"></div>
				<?php
						
					if (isset($_SESSION['email'])) {
					echo "<div "."class='col-auto w-auto options'".">";	
					echo "<a "."class='text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size'"." href='#'".">"."Witaj ".$_SESSION['imie']."!"."</a>";
					echo "<a class='pink-strong a-stopka' href='../wyloguj.php'>Wyloguj</a>";
					echo "</div>";

					}else{

						echo "<div "."class='col-auto w-auto options'"."></div>";
						echo "<div "."class='col-auto w-auto options'"."></div>";
						echo "<div " ."class='col-auto w-auto options'".">";
					echo "<a "."class='text-white text-decoration-none  px-2 pl-2 lato h-100px pink menu-text-size'"." href='../logowanie.php'".">"."Zaloguj się"."</a>";
						echo "</div>";
					}
					?>
				</div>
			</div>	
		</div>
	</div>
<!-- aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa -->
	<div class="container-fluid">
		<div class="row">
			<div class="col-12 text-center">
				<h1 class="text-center monoton pink-strong menu-h1">Zamówienie</h1>
					
			</div>
		</div>

			<div class="row justify-content-center row-select row-pad">
				
				<form class="text-white lato w-50 p-text">					
						<fieldset class="form-group">
						    <div class="row">
						      <div class="col-6">
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="dostawa">
						          <label class="form-check-label">
						            z dostawą
						          </label>
						        </div>
						      </div> 
						      <div class="col-6">
						        <div class="form-check">
						          <input class="form-check-input" type="radio" name="dostawa">
						          <label class="form-check-label">
						            z odbiorem osobistym
						          </label>
						        </div>
						      </div>
						    </div>
						</fieldset>  

					  <div class="form-row">
					    <div class="form-group col-12">
					      <label>Miasto*</label>
					      <input type="text" class="form-control order-area">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label>Ulica*</label>
					      <input type="text" class="form-control order-area">
					    </div>
					    <div class="form-group col-md-3">
					      <label>Nr domu*</label>
					      <input type="text" class="form-control order-area">
					    </div>
					    <div class="form-group col-md-3">
					      <label>Nr mieszkania</label>
					      <input type="text" class="form-control order-area">
					    </div>
					  </div>
					  
					  <button type="submit" class="order-button lato-bold">Wyślij</button>
				</form>

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
		<script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>
</html>
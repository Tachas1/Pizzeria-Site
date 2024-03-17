<?php 

	session_start();

	$connect = @new mysqli('localhost','root','','pizzaparty');

		if($connect->connect_errno!=0)
		{

			echo "Błąd: ".$connect->connect_errno;

		}else
		{

			$email = $_POST['email'];
			$haslo = $_POST['haslo'];

			$email = htmlentities($email, ENT_QUOTES, "UTF-8");
			$haslo = htmlentities($haslo, ENT_QUOTES, "UTF-8");

		if($query = @$connect->query(sprintf("SELECT * FROM uzytkownicy WHERE email='%s' AND haslo='%s'",mysqli_real_escape_string($connect,$email),mysqli_real_escape_string($connect,$haslo))))
		{

			$ile_userow = $query->num_rows;
			if($ile_userow>0)
			{

				$_SESSION['zalogowany'] = true;
				$wiersz = $query->fetch_assoc();
				$_SESSION['id']= $wiersz['id_user'];
				$_SESSION['email'] = $wiersz['email'];
				$_SESSION['imie'] = $wiersz['imie'];

				unset($_SESSION['blad']);
				$query->close();
				header('Location: pizza.php');

			}else
			{

				$_SESSION['blad'] = '<span>Nieprawidłowy email lub hasło!</span>';
				header('Location: logowanie.php');


			}


		}

		$connect->close();
		}
?>
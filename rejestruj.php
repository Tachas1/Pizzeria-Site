<?php 

	session_start();

	$connect = @new mysqli('localhost','root','','pizzaparty');

		if($connect->connect_errno!=0)
		{

			echo "Błąd: ".$connect->connect_errno;

		}else
		{

			$imie = $_POST['imie'];
			$nazwisko = $_POST['nazwisko'];
			$email = $_POST['email'];
			$haslo1 = $_POST['haslo1'];
			$haslo2 = $_POST['haslo2'];
			$haslo = $haslo1;

			$sql = "SELECT email FROM uzytkownicy WHERE email='$email';";

	if ($imie!=''&& $nazwisko!='' && $email!=''&& $haslo1!='' && $haslo2!='' && $haslo1==$haslo2) {
		
			if($query = $connect->query($sql))
			{
				$ile_userow = $query->num_rows;
				if($ile_userow==0)
				{

				mysqli_query($connect,"INSERT INTO uzytkownicy VALUES(, $imie, $nazwisko, $haslo, $email);");
				// header('Location: logowanie.php');
				echo "string";

				}else
				{

				$_SESSION['bladR'] = '<span>Nieprawidłowy email lub hasło!</span>';
				header('Location: rejestracja.php');


			}
	}
}


		$connect->close();
		}
?>
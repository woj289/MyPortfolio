<?PHP
	$adresat = 'woj289@gmail.com'; 	// pod ten adres zostanie wysłana 							// wiadomosc

	$imie = $_POST['imie'];
	$phone = $_POST['email'];
	$content = $_POST['content'];
	$huj = $imie . "\r\n\r\n" . $phone . "\r\n\r\n" . $content;
	$huj1 = $phone . $imie;
	$header = 	"From: ktos@serwer.pl \nContent-Type:".
			' text/plain;charset="iso-8859-2"'.
			"\nContent-Transfer-Encoding: 8bit";
	if (mail($adresat, 'List ze ', $huj , $header))
		echo "<script language='javascript' type='text/javascript'>alert('Wyslano'); </script>";
	else
		echo "<script language='javascript' type='text/javascript'>alert('Wyslano'); </script>";
?>

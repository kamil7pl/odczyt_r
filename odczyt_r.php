<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>pliki</title>
</head>
<body>
    <?php
	//r - Otwiera plik do odczytu, ustawia wskaźnik na początku. Plik musi być wcześniej utworzony.
	$nazwa="testowy.txt";
		if(@fopen($nazwa,"r")){
		$uchwyt=fopen($nazwa,"r");
		$odczyt=fread($uchwyt,filesize($nazwa));//Można zamiast filesize wpisać np. 2.
		echo $odczyt;
		}
		else echo "Brak pliku.";
	?>
</body>
</html>

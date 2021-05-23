<?php
#tipo del contenuto
header('Content-Type: application/json');
#inclusione della connessione
include_once('connessione.php');
#selezione degli editori con quantità maggiore
$sqlQuery ="SELECT NOME_E, COUNT(COD_E) AS QUANTITA
			FROM EDITORE, LIBRO
			WHERE COD_E = C_E
			GROUP BY NOME_E
			HAVING QUANTITA = (
				SELECT MAX(A.QUANTITA)
				FROM (
					SELECT COUNT(COD_E) AS QUANTITA 
					FROM EDITORE, LIBRO 
					WHERE COD_E = C_E 
					GROUP BY NOME_E) AS A)" ;
#inserimento della query e connessione nella variabile result
$result = mysqli_query($link,$sqlQuery);
#variabile del tipo array di appoggio 
$data = array();
foreach ($result as $row) {
	$data[] = $row;
	}
#chiusura della connessione al database
mysqli_close($link);
#conversione in JSON dell'array
echo json_encode($data);
?>
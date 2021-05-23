<?php
#tipo del contenuto
header('Content-Type: application/json');
#inclusione della connessione
include_once('connessione.php');
#selezione delle lingue con quantità maggiore
$sqlQuery ="SELECT LINGUA, COUNT(LINGUA) AS QUANTITA 
			FROM LIBRO 
			GROUP BY LINGUA 
			ORDER BY QUANTITA 
			DESC LIMIT 5";
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
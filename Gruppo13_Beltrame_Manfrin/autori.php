<?php
#tipo del contenuto
header('Content-Type: application/json');
#inclusione della connessione
include_once('connessione.php');
#selezione degli autori con quantità maggiore
$sqlQuery ="SELECT CONCAT_WS(' ',NOME_A,COGNOME_A) AS NOMINATIVO, COUNT(COD_A) AS QUANTITA
            FROM AUTORE, SCRIVERE 
            WHERE COD_AUTORE = COD_A
            GROUP BY NOMINATIVO, COD_A 
            HAVING QUANTITA = (
            SELECT MAX(A.QUANTITA)
            FROM (SELECT COUNT(COD_A) AS QUANTITA FROM AUTORE, SCRIVERE WHERE COD_AUTORE = COD_A 
            GROUP BY NOME_A, COGNOME_A, COD_A) AS A)" ;
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
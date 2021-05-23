<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$TITOLO  = $_POST["TITOLO"];
#selezione dei nomi e cognomi degli studenti che hanno in prestito un determinato libro
$sql = "SELECT TITOLO, NOME_S, COGNOME_S,DATA_USCITA,DATA_LIMITE
FROM PRESTITO, LIBRO, STUDENTE
WHERE ISBN_LIB = ISBN AND TITOLO LIKE '%$TITOLO%' AND MATR=MATRICOLA;";

$result = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<head>
	<?php head() ?>
	<title>Ricerca libro | BiblioFe</title>
</head>
<?php navbar() ?>
<body>
	<?php
	#verifa della query che non restituisca nessuna tupla, se sono presenti le tuple vengono stampate
	$count = mysqli_num_rows($result);
	if ($count == 0) { ?>
		<br><br>
		<img src="Icons/exclamation.svg" width="40" height="40">
		<p>La ricerca non ha prodotto risultati</p>
		<?php }
	else { ?>
		<br><br><br><br><br><br>
		<table id="table-center">
			<thead>
				<tr>
					<th>TITOLO</th>
					<th>NOME</th>
					<th>COGNOME</th>
					<th>DATA USCITA</th>
					<th>DATA LIMITE</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($result)) { ?>
				<tr>
					<td> <?php echo $row['TITOLO']; ?> </td>
					<td> <?php echo $row['NOME_S']; ?> </td>
					<td> <?php echo $row['COGNOME_S']; ?> </td>
					<td> <?php echo $row['DATA_USCITA']; ?> </td>
					<td> <?php echo $row['DATA_LIMITE']; ?> </td>
				</tr>	
			<?php } ?>
			</tbody>
		</table>
		<!--Chiusura della connessione al database-->
		<?php mysqli_close($link); 
		} ?>
		<br><br><br><br>
		<?php footer() ?>
</body>
</html>
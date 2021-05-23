<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$TITOLO  = $_POST["TITOLO"];
$COD_SUC = $_POST["COD_SUC"];

?>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<!DOCTYPE html>
<html>
<head>
    <?php head() ?>
    <title>Ricerca catalogo | BiblioFe</title>
</head>

<?php navbar() ?>

<body>
<?php
	#verifica selezione del codice succursale(via) se non viene inserito, visualizzo tutte le sedi 
	if ($COD_SUC == ""){ 
		#selezione del libro, anno pubblicazione,lingua, sede e in quale quantità è presente 
		$sql = "SELECT TITOLO,ANNO_PUBB,CONCAT_WS(', ',NOME_VIA_SUC, NUM_CIVICO_SUC) AS SEDE , LINGUA, COUNT(ISBN_LIBRO) AS QUANTITA
				FROM COPIA,LIBRO,SUCCURSALE
				WHERE ISBN_LIBRO = ISBN AND IND_S=COD_SUC AND TITOLO LIKE '%$TITOLO%'
				GROUP BY TITOLO, ANNO_PUBB, SEDE, LINGUA
				ORDER BY TITOLO;";

		$result = mysqli_query($link, $sql);
	#verifica che esistano delle tuple
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
						<th>ANNO PUBBLICAZIONE</th>
						<th>LINGUA</th>
						<th>SEDE</th>
						<th>QUANTITA'</th>
					</tr>
				</thead>
				<tbody>
				<?php
					while ($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td> <?php echo $row['TITOLO']; ?> </td>
							<td> <?php echo $row['ANNO_PUBB']; ?> </td>
							<td> <?php echo $row['LINGUA']; ?> </td>
							<td> <?php echo $row['SEDE']; ?> </td>
							<td> <?php echo $row['QUANTITA']; ?> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
			</div>
	<?php } 
	}
	#verifica selezione del codice succursale(via), se viene inserito si omette l'attributo sede(uguale per tutte le tuple)
	else {
		#selezione del libro, anno pubblicazione,lingua, e in quale quantità è presente 
		$sql = "SELECT TITOLO,ANNO_PUBB, LINGUA, COUNT(*) AS QUANTITA
				FROM COPIA,LIBRO,SUCCURSALE
				WHERE ISBN_LIBRO = ISBN AND COD_SUC='$COD_SUC' AND IND_S=COD_SUC AND TITOLO LIKE '%$TITOLO%'
				GROUP BY ISBN_LIBRO, IND_S, TITOLO
				HAVING COUNT(*) >=1
				ORDER BY ISBN_LIBRO;";

		$result = mysqli_query($link, $sql);

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
						<th>ANNO PUBBLICAZIONE</th>
						<th>LINGUA</th>
						<th>QUANTITA'</th>
					</tr>
				</thead>
				<tbody>
					<?php
					while ($row = mysqli_fetch_array($result)) { ?>
						<tr>
							<td> <?php echo $row['TITOLO']; ?> </td>
							<td> <?php echo $row['ANNO_PUBB']; ?> </td>
							<td> <?php echo $row['LINGUA']; ?> </td>
							<td> <?php echo $row['QUANTITA']; ?> </td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		
		<!--Chiusura della connessione al database-->
		<?php mysqli_close($link);
		} } ?>
		<br><br><br><br>	
		<?php footer() ?>
</body>
</html>
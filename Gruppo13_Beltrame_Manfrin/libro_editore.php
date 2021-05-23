<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$ANNO_PUBB  = $_POST["ANNO_PUBB"];
#Elenco del numero di libri pubblicati dall’anno scelto fino ad oggi da ciascun editore
$sql = "SELECT NOME_E, COUNT(ISBN) AS QUANTITA
FROM LIBRO, EDITORE 
WHERE COD_E=C_E AND ANNO_PUBB > '$ANNO_PUBB'
GROUP BY NOME_E
ORDER BY NOME_E ASC ";

$result = mysqli_query($link, $sql);

?>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<!DOCTYPE html>
<html>
<head>
    <?php head() ?>
    <title>Elenco Editori | BiblioFe</title>
</head>

<?php navbar() ?>

<body>
<?php
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
                    <th>NOME</th>
                    <th>QUANTITA'</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($result)) { ?>
				<tr>
                    <td> <?php echo $row['NOME_E']; ?> </td>
                    <td> <?php echo $row['QUANTITA']; ?> </td>
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
        
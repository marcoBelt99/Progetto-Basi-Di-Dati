<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$LINGUA  = $_POST["LINGUA"];
$SUCCURSALE = $_POST["SUCCURSALE"];
#Elenco dei libri scritti in una determinata lingua presenti nella succursale di interesse
$sql = "SELECT DISTINCT TITOLO, ISBN, ANNO_PUBB ,LINGUA, CONCAT_WS(', ',NOME_VIA_SUC, NUM_CIVICO_SUC) AS SEDE
        FROM LIBRO,COPIA,SUCCURSALE
        WHERE ISBN_LIBRO = ISBN AND IND_S = COD_SUC AND LINGUA = '$LINGUA' AND COD_SUC = '$SUCCURSALE'";

$result = mysqli_query($link, $sql);

?>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<!DOCTYPE html>
<html>
<head>
    <?php head() ?>
    <title>Elenco Libri | BiblioFe</title>
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
                    <th>TITOLO</th>
                    <th>ISBN</th>
                    <th>ANNO PUBBLICAZIONE</th>
                    <th>LINGUA</th>
                    <th>SUCCURSALE</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($result)) { ?>
				<tr>
                    <td> <?php echo $row['TITOLO']; ?> </td>
                    <td> <?php echo $row['ISBN']; ?> </td>
                    <td> <?php echo $row['ANNO_PUBB']; ?> </td>
                    <td> <?php echo $row['LINGUA']; ?> </td>
                    <td> <?php echo $row['SEDE']; ?> </td>
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
        
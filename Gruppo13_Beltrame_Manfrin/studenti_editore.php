<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$EDITORE  = $_POST["EDITORE"];
#Elenco degli studenti che hanno preso in prestito i libri di una determinata casa editrice
$sql = "SELECT NOME_S,COGNOME_S,TITOLO, NOME_E
        FROM STUDENTE, LIBRO, PRESTITO, EDITORE
        WHERE MATR=MATRICOLA AND ISBN=ISBN_LIB AND C_E= COD_E AND COD_E='$EDITORE'";

$result = mysqli_query($link, $sql);

?>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<!DOCTYPE html>
<html>
<head>
    <?php head() ?>
    <title>Elenco Studenti | BiblioFe</title>
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
                    <th>COGNOME</th>
                    <th>TITOLO</th>
                    <th>CASA EDITRICE</th>
				</tr>
			</thead>
			<tbody>
				<?php
				while ($row = mysqli_fetch_array($result)) { ?>
				<tr>
                    <td> <?php echo $row['NOME_S']; ?> </td>
                    <td> <?php echo $row['COGNOME_S']; ?> </td>
                    <td> <?php echo $row['TITOLO']; ?> </td>
                    <td> <?php echo $row['NOME_E']; ?> </td>
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
        
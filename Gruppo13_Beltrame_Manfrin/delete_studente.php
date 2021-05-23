<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$MATRICOLA = $_POST["MATRICOLA"];
#selezione dello studente della quale si vuole effettuare la cancellazione
$sql2 ="SELECT MATRICOLA, NOME_S, COGNOME_S, NOME_VIA_S, NUM_CIVICO_S,CAP_S, PROVINCIA_S, NUM_TELEFONO 
		FROM STUDENTE 
		WHERE MATRICOLA = '$MATRICOLA' ";
$result = mysqli_query($link, $sql2);
$row = mysqli_fetch_array($result);		

#selezione dei prestiti in corso dello studente 
$sql3 ="SELECT TITOLO,ISBN_LIB, C_COPIA, MATR, DATA_USCITA, DATA_LIMITE 
        FROM PRESTITO, LIBRO
        WHERE MATR = '$MATRICOLA' AND ISBN_LIB=ISBN";
$res = mysqli_query($link, $sql3);

#cancellazione dello studente
$sql ="DELETE FROM STUDENTE 
	   WHERE MATRICOLA = '$MATRICOLA'";
$query = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<head>
    <?php head() ?>
    <title>Gestione studenti | BiblioFe</title>
</head>

<?php navbar() ?>

<body>
    <br><br><br>
    <?php
    #verifica che sia stata inserita una matricola altrimenti errore 
    if ($MATRICOLA == '---') {?>
    <img src="Icons/exclamation.svg" width="40" height="40"> 
    <p> Errore, inserire matricola</p>
    <?php }
    else {
    #verifica della query, se falsa sono presenti dei prestiti in corso e vengono stampati 
    #altrimenti la cancellazione dello studente è possibile e viene stampata la tupla cancellata
    if (!$query) { ?>
        <img src="Icons/exclamation.svg" width="40" height="40">
        <p>Sono presenti dei prestiti in corso</p>
        <p>Eliminazione dello studente <?php echo $row['NOME_S'], ' ', $row['COGNOME_S'] ?> non possibile</p>
        <br><br>
        <table id="table-center">
            <thead>
                <tr>
                    <th>TITOLO</th>
                    <th>ISBN</th>
                    <th>CODICE COPIA</th>
                    <th>MATRICOLA</th>
                    <th>DATA USCITA</th>
                    <th>DATA LIMITE</th>
                </tr>
            </thead>
            <tbody>
            <?php
				while ($rows = mysqli_fetch_array($res)) { ?>
                <tr>
                    <td> <?php echo $rows['TITOLO']; ?> </td>
                    <td> <?php echo $rows['ISBN_LIB']; ?> </td>
                    <td> <?php echo $rows['C_COPIA']; ?> </td>
                    <td> <?php echo $rows['MATR']; ?> </td>
                    <td> <?php echo $rows['DATA_USCITA']; ?> </td>
                    <td> <?php echo $rows['DATA_LIMITE']; ?> </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

        <?php 
        }
    else { ?>
        <img src="Icons/check.svg" width="40" height="40">
        <p> Lo studente <?php echo $row['NOME_S'], ' ', $row['COGNOME_S'] ?> è stato eliminato correttamente </p>
        <br><br>
        <table id="table-center">
            <thead>
                <tr>
                    <th>MATRICOLA</th>
                    <th>NOME</th>
                    <th>COGNOME</th>
                    <th>INDIRIZZO</th>                    
                    <th>N°CIVICO</th> 
                    <th>CAP</th> 
                    <th>PROVINCIA</th>
                    <th>TELEFONO</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo $row['MATRICOLA']; ?> </td>
                    <td> <?php echo $row['NOME_S']; ?> </td>
                    <td> <?php echo $row['COGNOME_S']; ?> </td>
                    <td> <?php echo $row['NOME_VIA_S']; ?> </td>
                    <td> <?php echo $row['NUM_CIVICO_S']; ?> </td>
                    <td> <?php echo $row['CAP_S']; ?> </td>
                    <td> <?php echo $row['PROVINCIA_S']; ?> </td>
				    <td> <?php echo $row['NUM_TELEFONO']; ?> </td>
				</tr>
            </tbody>
        </table>
        <!--Chiusura della connessione al database-->
        <?php mysqli_close($link);
        }  
    } ?>
    </div>
    <?php footer() ?>  
</body>
</html>
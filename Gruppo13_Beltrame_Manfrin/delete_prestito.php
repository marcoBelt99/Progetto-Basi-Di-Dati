<?php
#inclusione della connessione e function contenente head e navbar
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$MATRICOLA = $_POST["MATRICOLA"];
$ISBN_LIBRO = $_POST["ISBN_LIBRO"];
$COPIA = $_POST["COPIA"];
#selezione del prestito in base a matricola e codice prestito della quale si vuole effettuare la cancellazione
$sql2 ="SELECT TITOLO,ISBN_LIB, C_COPIA, MATR, DATA_USCITA, DATA_LIMITE 
        FROM PRESTITO, LIBRO
        WHERE ISBN_LIB = '$ISBN_LIBRO' AND MATR = '$MATRICOLA' AND C_COPIA = $COPIA AND ISBN_LIB = ISBN; ";
#inserimento della query nella variabile result
$result = mysqli_query($link, $sql2);

#cancellazione del prestito in base a matricola e codice prestito
$sql ="DELETE FROM PRESTITO 
       WHERE ISBN_LIB = '$ISBN_LIBRO' AND C_COPIA = '$COPIA' AND MATR = '$MATRICOLA'; " ;
$query = mysqli_query($link, $sql);


?>
<!DOCTYPE html>
<html>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<head>
    <?php head() ?>
    <title>Gestione prestiti | BiblioFe</title>
</head>

<?php navbar() ?>

<body>
<br><br><br>
<?php

#verifica della query, nel caso sia corretta vengono fornite le informazioni riguardanti il prestito
#altrimenti è presente un errore nei dati inseriti
if (!$query) { ?>
    <img src="Icons/exclamation.svg" width="40" height="40">
    <p>Errore nell' inserimento dei dati</p>
<?php } 

else { 
    $count = mysqli_num_rows($result);
    if  ($count == 0) { ?>
    <img src="Icons/exclamation.svg" width="40" height="40">
    <p>Prestito non trovato</p>
    <?php }
else {
    $row = mysqli_fetch_array($result); ?>
    <img src="Icons/check.svg" width="40" height="40"><p>Restituzione del prestito eseguita correttamente </p>
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
                <tr>
                    <td> <?php echo $row['TITOLO']; ?> </td>
                    <td> <?php echo $row['ISBN_LIB']; ?> </td>
                    <td> <?php echo $row['C_COPIA']; ?> </td>
                    <td> <?php echo $row['MATR']; ?> </td>
                    <td> <?php echo $row['DATA_USCITA']; ?> </td>
                    <td> <?php echo $row['DATA_LIMITE']; ?> </td>
                </tr>
            </tbody>
        </table>
        <!--Chiusura della connessione al database-->
        <?php } }
         mysqli_close($link);?>
        <?php footer() ?>
    </body>
</html>

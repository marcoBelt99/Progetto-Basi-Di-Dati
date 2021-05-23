<?php
#inclusione della connessione e function contenente head e navbar
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$ISBN_LIB = $_POST["ISBN_LIB"];
$COD_C = $_POST["COD_C"];
$MATR = $_POST["MATR"];
$DATA_LIMITE = $_POST["DATA_LIMITE"];
#aggiornamento della data limite in base al codice prestito
$sql = "UPDATE PRESTITO 
        SET DATA_LIMITE = DATE_ADD(DATA_LIMITE, INTERVAL '$DATA_LIMITE' DAY) 
        WHERE C_COPIA = '$COD_C' AND MATR = '$MATR' AND ISBN_LIB = '$ISBN_LIB'";
$query = mysqli_query($link, $sql);
#selezione del prestito del quale si è aggiornata la data limite
$sql2 = "SELECT TITOLO, ISBN_LIB,C_COPIA, MATR, DATA_USCITA, DATA_LIMITE 
         FROM PRESTITO, LIBRO
         WHERE C_COPIA = '$COD_C' AND MATR = '$MATR' AND ISBN_LIB = '$ISBN_LIB' AND ISBN_LIB=ISBN";
$result = mysqli_query($link, $sql2);
$row = mysqli_fetch_array($result);
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
    #verifica della query, nel caso sia corretta viene stampata la tupla del prestito
    #altrimenti errore nell'inserimento dei dati
    if (!$query) { ?>
        <img src="Icons/exclamation.svg" width="40" height="40">
        <p>Errore nell' inserimento dei dati</p>
    <?php
    } else { ?>
        <img src="Icons/calendar-check.svg" width="40" height="40">
        <p>Proroga del prestito eseguita correttamente </p>
        <?php
        echo 'La data limite è stata posticipata di ', "$DATA_LIMITE ", 'giorni'; ?>
        <br><br><br>
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
    <?php 
    }   
    mysqli_close($link);?>
    <br><br><br><br>
    <?php footer() ?>
</body>
</html>
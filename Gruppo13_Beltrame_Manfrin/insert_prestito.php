<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$ISBN = $_POST["ISBN"];
$C_COPIA = $_POST["C_COPIA"];
$MATRI = $_POST["MATRI"];
#inserimento del nuovo prestito
$sql = "INSERT INTO PRESTITO(ISBN_LIB, C_COPIA, MATR, DATA_USCITA, DATA_LIMITE) VALUES ('$ISBN','$C_COPIA','$MATRI',CURDATE(),DATE_ADD(CURDATE(), INTERVAL 30 DAY))";
$query = mysqli_query($link, $sql);
#selezione del prestito appena inserito
$sql2 ="SELECT ISBN_LIB, TITOLO,C_COPIA, MATR, NOME_S, COGNOME_S, DATA_USCITA, DATA_LIMITE 
        FROM PRESTITO, STUDENTE, LIBRO 
        WHERE ISBN_LIB=ISBN AND MATR= '$MATRI' AND MATR = MATRICOLA AND ISBN_LIB= '$ISBN' AND C_COPIA = '$C_COPIA'; ";
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
    #verifica della query, se falsa errore nell'inserimento dei dati oppure prestito già inserito nel caso di reload della pagina 
    #altrimenti il prestito è possibile e viene stampato 
    if (!$query) { ?>
        <img src="Icons/exclamation.svg" width="40" height="40">
        <p>Errore nell' inserimento dei dati o prestito già inserito</p>
        <?php 
    }
    else { ?>
        <img src="Icons/check.svg" width="40" height="40">
        <p>Prestito eseguito correttamente a <?php echo $row['NOME_S'], ' ', $row['COGNOME_S'] ?></p>
        <br><br>
        <table id="table-center">
            <thead>
                <tr>
                    <th>TITOLO</th>
                    <th>ISBN</th>
                    <th>CODICE COPIA</th>
                    <th>NOME</th>
                    <th>COGNOME</th>
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
                    <td> <?php echo $row['NOME_S']; ?> </td>
                    <td> <?php echo $row['COGNOME_S']; ?> </td>
                    <td> <?php echo $row['MATR']; ?> </td>
                    <td> <?php echo $row['DATA_USCITA']; ?> </td>
                    <td> <?php echo $row['DATA_LIMITE']; ?> </td>
                </tr>
            </tbody>
        </table>
        <!--Chiusura della connessione al database-->
        <?php 
        }   
        mysqli_close($link); ?>
        <br><br><br><br>
        <?php footer() ?>
</body>
</html>
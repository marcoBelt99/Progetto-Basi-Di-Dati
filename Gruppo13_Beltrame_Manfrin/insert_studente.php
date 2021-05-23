<?php
#inclusione della connessione e function contenente head e navbar 
include_once('connessione.php');
include_once("function.php");
#dati inseriti dallo studente nel form
$MATRICOLA = $_POST["MATRICOLA"];
$NOME_S = $_POST["NOME_S"];
$COGNOME_S = $_POST["COGNOME_S"];
$NOME_VIA_S = $_POST["NOME_VIA_S"];
$NUM_CIVICO_S = $_POST["NUM_CIVICO_S"];
$PROVINCIA_S = $_POST["PROVINCIA_S"];
$CAP_S = $_POST["CAP_S"];
$NUM_TELEFONO = $_POST["NUM_TELEFONO"];
#inserimento del nuovo studente
$sql = "INSERT INTO STUDENTE(MATRICOLA, NOME_S, COGNOME_S, NOME_VIA_S, NUM_CIVICO_S, PROVINCIA_S, CAP_S, NUM_TELEFONO) 
        VALUES ('$MATRICOLA','$NOME_S','$COGNOME_S','$NOME_VIA_S','$NUM_CIVICO_S','$PROVINCIA_S', '$CAP_S','$NUM_TELEFONO')";

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
    #verifica di eventuali campi vuoti, se non vuoti procedo con l'inserimento della tupla 
    if ($MATRICOLA =="" or $NOME_S=="" or $COGNOME_S=="" or $NOME_VIA_S=="" or $NUM_CIVICO_S=="" or $PROVINCIA_S=="" or $CAP_S=="" or $NUM_TELEFONO=="") { ?>
    <img src="Icons/exclamation.svg" width="40" height="40">
        <p>Errore nell' inserimento dei dati</p>
        <?php 
    }
    else {
        $query = mysqli_query($link, $sql);
    
    #verifica del buon esito della query, se falsa studente già presente altrimenti stampa dello studente inserito
    if (!$query) {  ?>
        <img src="Icons/exclamation.svg" width="40" height="40">
        <p>Errore, studente già inserito</p>
        <?php 
        }
    } 
    if ($query) { ?>
        <img src="Icons/check.svg" width="40" height="40">
        <p>Studente <?php echo "$NOME_S", ' ', "$COGNOME_S" ?> inserito correttamente </p>
        <?php $sql2 = "SELECT MATRICOLA, NOME_S, COGNOME_S, NOME_VIA_S, NUM_CIVICO_S,PROVINCIA_S, CAP_S, NUM_TELEFONO FROM STUDENTE WHERE MATRICOLA = '$MATRICOLA'";
        $result = mysqli_query($link, $sql2);
        $row = mysqli_fetch_array($result); ?>
        <br><br>
        <table id="table-center">
            <thead>
                <tr>
                    <th>MATRICOLA</th>
                    <th>NOME</th>
                    <th>COGNOME</th>
                    <th>INDIRIZZO</th>
                    <th>N°CIVICO</th>
                    <th>PROVINCIA</th>
                    <th>CAP</th>
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
                    <td> <?php echo $row['PROVINCIA_S']; ?> </td>
                    <td> <?php echo $row['CAP_S']; ?> </td>
                    <td> <?php echo $row['NUM_TELEFONO']; ?> </td>
                </tr>
            </tbody>
        </table>
         <!--Chiusura della connessione al database-->
    <?php 
    }   
    mysqli_close($link);?>
    
    <?php footer() ?>
    </body>
</html>
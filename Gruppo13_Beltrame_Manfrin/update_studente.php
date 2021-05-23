<?php
#inclusione della connessione e function contenente head e navbar
include_once('connessione.php');
include_once("function.php");
#controllo di quali dati ha inserito lo studente per effettuare l'aggiornamento 
$MATRICOLA = $_POST["MATRICOLA"];
if (isset($_POST['NOME_VIA_S'])) 
    $NOME_VIA_S = $_POST['NOME_VIA_S'];
else 
    $NOME_VIA_S = null;
if (isset($_POST['NUM_CIVICO_S'])) 
    $NUM_CIVICO_S = $_POST['NUM_CIVICO_S'];
else 
    $NUM_CIVICO_S = null;
if (isset($_POST['PROVINCIA_S'])) 
    $PROVINCIA_S = $_POST["PROVINCIA_S"];
else 
    $PROVINCIA_S = null;
if (isset($_POST['CAP_S'])) 
    $CAP_S = $_POST["CAP_S"];
else $CAP_S = null;
if (isset($_POST['NUM_TELEFONO'])) 
    $NUM_TELEFONO = $_POST["NUM_TELEFONO"];
else $NUM_TELEFONO = null;

#controllo che ci sia almento un attributo non vuoto inserito dallo studente ed eseguo la query in base a quali dati ha inserito
if ($NOME_VIA_S != null && $NUM_CIVICO_S != null || $PROVINCIA_S != null || $CAP_S != null || $NUM_TELEFONO != null){
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S != null && $CAP_S != null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S', NUM_CIVICO_S='$NUM_CIVICO_S', PROVINCIA_S='$PROVINCIA_S', CAP_S='$CAP_S', NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S == null && $CAP_S == null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S='$NUM_CIVICO_S' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S == null && $NUM_CIVICO_S == null && $PROVINCIA_S != null && $CAP_S == null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  PROVINCIA_S='$PROVINCIA_S' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S == null && $NUM_CIVICO_S== null && $PROVINCIA_S == null && $CAP_S != null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  CAP_S='$CAP_S' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S == null && $NUM_CIVICO_S== null && $PROVINCIA_S == null && $CAP_S == null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S != null && $CAP_S == null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S='$NUM_CIVICO_S',PROVINCIA_S='$PROVINCIA_S' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S == null && $CAP_S != null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S='$NUM_CIVICO_S',CAP_S='$CAP_S' WHERE MATRICOLA = '$MATRICOLA'";
    if ($VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S == null && $CAP_S == null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S='$NUM_CIVICO_S',NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S == null && $NUM_CIVICO_S== null && $PROVINCIA_S != null && $CAP_S == null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  PROVINCIA_S='$PROVINCIA_S',NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S == null && $NUM_CIVICO_S== null && $PROVINCIA_S != null && $CAP_S != null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  PROVINCIA_S='$PROVINCIA_S',CAP_S='$CAP_S' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S == null && $NUM_CIVICO_S== null && $PROVINCIA_S == null && $CAP_S != null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  CAP_S='$CAP_S',NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null &&  $PROVINCIA_S != null && $CAP_S != null && $NUM_TELEFONO == null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S='$NUM_CIVICO_S',PROVINCIA_S='$PROVINCIA_S',CAP_S='$CAP_S' WHERE MATRICOLA = '$MATRICOLA'";       
    if ($NOME_VIA_S == null && $NUM_CIVICO_S == null && $PROVINCIA_S != null && $CAP_S != null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  PROVINCIA_S='$PROVINCIA_S',CAP_S='$CAP_S',NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'"; 
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S != null && $CAP_S == null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S = '$NUM_CIVICO_S',PROVINCIA_S='$PROVINCIA_S',NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";
    if ($NOME_VIA_S != null && $NUM_CIVICO_S!= null && $PROVINCIA_S == null && $CAP_S != null && $NUM_TELEFONO != null)
        $sql = "UPDATE STUDENTE SET  NOME_VIA_S='$NOME_VIA_S',NUM_CIVICO_S='$NUM_CIVICO_S',CAP_S='$CAP_S',NUM_TELEFONO='$NUM_TELEFONO' WHERE MATRICOLA = '$MATRICOLA'";

    $query = mysqli_query($link, $sql);
}

#selezione dello studete del quale si è fatto l'aggiornamento
$sql2 = "SELECT MATRICOLA, NOME_S, COGNOME_S, NOME_VIA_S,NUM_CIVICO_S, PROVINCIA_S, CAP_S, NUM_TELEFONO FROM STUDENTE WHERE MATRICOLA = '$MATRICOLA' ";      
?>

<!DOCTYPE html>
<html>

<head>
    <?php head() ?>
    <title>Gestione studenti | BiblioFe</title>
</head>

<?php navbar() ?>

<body>
<br><br><br>
<?php
#verfica che i campi del form non siano stati lasciati vuoti altrimenti errore
if ($MATRICOLA == '---') {?>
    <img src="Icons/exclamation.svg" width="40" height="40"> 
    <p>Errore, selezionare una matricola</p> 
    <?php }


#verifica della query, se falsa errore 
else if (!$query) { ?>
        <img src="Icons/exclamation.svg" width="40" height="40">
        <p>Errore nell' inserimento dei dati</p>
        <?php }
#altrimenti eseguo la query e stampo la tupla dello studente aggiornato
else {      
        $result = mysqli_query($link, $sql2);
        $row = mysqli_fetch_array($result);?>
        <img src="Icons/check.svg" width="40" height="40">
        <p>Modifica dello studente <?php echo $row['NOME_S'], ' ', $row['COGNOME_S'] ?> eseguita correttamente </p>
        <br><br><br>

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
    <?php mysqli_close($link); }   ?>
    <?php footer() ?>  
</body>
   
</html>



<!--inclusione della connessione e function contenente head e navbar-->
<?php
include_once('connessione.php');
include_once("function.php");
#selezione della sede per effettuare ricerca nel catologo
$sql = 'SELECT COD_SUC, CONCAT_WS(", ",NOME_VIA_SUC, NUM_CIVICO_SUC) AS SEDE
        FROM SUCCURSALE';
$result = mysqli_query($link, $sql);
#Elenco dei dipartimenti che condividono la stessa succursale
$sql = "SELECT GROUP_CONCAT( NOME_D SEPARATOR ',') AS DIPARTIMENTI, CONCAT_WS(', ',NOME_VIA_SUC, NUM_CIVICO_SUC) AS SEDE
FROM DIPARTIMENTO, SUCCURSALE
WHERE C_SUC=COD_SUC 
GROUP BY SEDE ;";
$result2 = mysqli_query($link, $sql);
?>

<!DOCTYPE html>
<html>

 <!--Vengono chiamate le funzioni head e navbar presenti in function.php-->   
<head>
    <?php head() ?>
    <title>Homepage | BiblioFe</title>
</head>

<?php navbar() ?>

<body>
    <br><br><br> <br>
    <!--Form per effettuare ricerca nel catologo-->
    <div id="form">
        <form method="POST" action="ricerca_catalogo.php?id=home">
            <br><br>
            <label>CATALOGO</label>
            <br><br>
            <fieldset>
                <label>TITOLO:</label>
                <input type="text" name="TITOLO" autofocus="autofocus" />
                &emsp;
                <label>SEDE:</label>
                <select name="COD_SUC">
                    <option value="">Seleziona la tua biblioteca</option>
                    <?php while ($row = mysqli_fetch_array($result)) { ?>
                        <option value="<?php echo $row['COD_SUC'] ?>"> <?php echo $row['SEDE'] ?> </option>
                    <?php } ?>
                </select>
            </fieldset>
                <br>
                <input type="image" value="Cerca" src="Icons/search.svg" alt="Submit" width="30" height="30" />
                <br><br>
        </form>
    </div>
    <br><br>
    <!--Tabella dei dipartimenti-->
    <h2>LE NOSTRE SUCCURSALI</h2><br><br>
   
    <table id='table-center'>
        <thead>
            <tr>
                <th>DIPARTIMENTI</th>
                <th>SUCCURSALE</th>
            </tr>
        </thead>
        <tbody> 
                <?php
                while ($row = mysqli_fetch_array($result2)) { ?>
                <tr>
                    <td style="width: 500px;"> <?php echo $row['DIPARTIMENTI']; ?> </td>
                    <td> <?php echo $row['SEDE']; ?> </td>
                </tr>
        <?php } ?>
        </form>
        </tbody>
    </table>
    

    <br><br><br><br>

    <?php footer() ?>
</body>

</html>
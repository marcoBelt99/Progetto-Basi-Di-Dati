<?php
#inclusione della connessione e function contenente head e navbar
include_once('connessione.php');
include_once("function.php");
#function per la selezione delle matricole presenti in studente da mostrare nella select
function matricola($link)
{
    $output = '';
    $sql = 'SELECT MATRICOLA
            FROM STUDENTE
            ORDER BY CAST(MATRICOLA AS SIGNED) ASC';
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
        $output .= '<option value="' . $row["MATRICOLA"] . '">' . $row["MATRICOLA"] . '</option>';
    }
    return $output;
}
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
    <br><br><br> <br><br>
    <!--Form per inserire un nuovo studente-->
    <div id="form">
        <form method="POST" action="insert_studente.php?id=studenti">
            <br><br>
            <label> NUOVO STUDENTE</label>
            <br><br>

            <fieldset>
                <label>MATRICOLA:</label>
                <input type="text" name="MATRICOLA" maxlength="10" placeholder="Inserisci la tua matricola"/>    
            </fieldset>

            <fieldset>
                <label>NOME: </label>&emsp;&emsp;&ensp;
                <input type="text" name="NOME_S" maxlength="15" placeholder="Inserisci il tuo nome"/>&emsp;
                <label>COGNOME:</label>&emsp;
                <input type="text" name="COGNOME_S" maxlength="15" placeholder="Inserisci il tuo cognome"/>
            </fieldset>

           
            <fieldset>           
                <label>INDIRIZZO: </label>&ensp;
                <input type="text" name="NOME_VIA_S" maxlength="30" placeholder="Via/Viale/Piazzale/ecc."/>&emsp;
                <label>N°CIVICO: </label>&ensp;&ensp;&ensp;
                <input type="text" name="NUM_CIVICO_S" maxlength="8" placeholder="Es. 12"/>
            </fieldset>

            <fieldset>
                <label>CAP: </label>&emsp;&emsp;&ensp;&ensp;&ensp;
                <input type="text" name="CAP_S" size="10" maxlength="5" placeholder="Es. 44121 (max 5 cifre)"/>&emsp;
                <label>PROVINCIA: </label>&ensp;
                <input type="text" name="PROVINCIA_S" maxlength="30" placeholder="Es. Ferrara"/>
            </fieldset>
            <label>TELEFONO: </label>&ensp;
                <input type="text" name="NUM_TELEFONO" maxlength="15" placeholder="Es. 3334289102"/>    
            
            <h5 style="text-transform: lowercase;">* Tutti i campi sono obbligatori</h5>
            <!--Pulsante per effettuare la conferma dei dati e indirizzamento a insert_studente.php-->
            <input type="image" value="Cerca" src="Icons/arrow.svg" alt="Submit" width="30" height="30" float="right" ; />
            <br><br>
        </form>
    </div>
    <br>
    <!--Form per modificare informazioni di uno studente-->
    <div id="form">
        <form method="POST" action="update_studente.php?id=studenti">
            <br><br>
            <label> MODIFICA STUDENTE</label>
            <br>

            <fieldset>
                <br>
                <label>MATRICOLA:</label>
                <select name="MATRICOLA" id='MATRICOLA'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                    <!--Chiamata a funzione-->
                    <?php echo matricola($link);
                    ?>
                </select>
            </fieldset>

            <fieldset>
                <label>INDIRIZZO: </label>
                <input type="text" name="NOME_VIA_S" maxlength="30" placeholder="Via/Viale/Piazzale/ecc."/>
                &emsp;
                <label>N°CIVICO: </label>&emsp;&emsp;
                <input type="text" name="NUM_CIVICO_S" maxlength="8" placeholder="Es. 12"/>
            </fieldset>
            <fieldset>
                <label>CAP: </label>&emsp;&emsp;&ensp;
                <input type="text" name="CAP_S" maxlength="5" placeholder="Es. 44121 (max 5 cifre)"/>
                &emsp;
                <label>PROVINCIA: </label>&emsp;
                <input type="text" name="PROVINCIA_S" maxlength="30" placeholder="Es. Ferrara"/>
            </fieldset>
                <label>TELEFONO: </label>
                <input type="text" name="NUM_TELEFONO" maxlength="15" placeholder="Es. 3334289102"/>
            <h5 style="text-transform: lowercase;">* Inserire solo i dati che si desidera  aggiornare </h5>
            <!--Pulsante per effettuare la conferma dei dati e indirizzamento a update_studente.php-->
            <input type="image" value="Cerca" src="Icons/arrow.svg" alt="Submit" width="30" height="30" float="right"/>
            <br><br>
            </form>
        </div>
        <br>
        <!--Form per eliminare uno studente -->
        <div id="form">
        <form method="POST" action="delete_studente.php?id=studenti">
            <br><br>
            <label> ELIMINAZIONE STUDENTE</label>
            <br>
            <fieldset>
                <br>
                <label>MATRICOLA:</label>
                <select name="MATRICOLA" id='MATRICOLA'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                    <!--Chiamata a funzione-->
                    <?php echo matricola($link);
                    ?>
                </select>
            </fieldset>
            <br>
            <!--Pulsante per effettuare la conferma dei dati e indirizzamento a delete_studente.php-->
            <input type="image" value="Cerca" src="Icons/arrow.svg" alt="Submit" width="30" height="30" text-align='left' ; />
            <br><br>
        </form>
    </div>
    
    <?php footer() ?>
    </body>
</html>


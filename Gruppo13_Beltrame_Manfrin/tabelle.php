<?php
#inclusione della connessione e function contenente head e navbar
include_once('connessione.php');
include_once("function.php");
#selezione delle 5 lingue con maggiore quantità 
$sql1 ="SELECT LINGUA, COUNT(LINGUA) AS QUANTITA 
        FROM LIBRO    
        GROUP BY LINGUA 
        ORDER BY QUANTITA DESC LIMIT 5;" ;
$result1 = mysqli_query($link, $sql1);
#selezione degli autori con maggiore quantità
$sql2 ="SELECT NOME_A, COGNOME_A, COUNT(COD_A) AS QUANTITA
        FROM AUTORE, SCRIVERE 
        WHERE COD_AUTORE = COD_A
        GROUP BY NOME_A, COGNOME_A
        HAVING QUANTITA = (
            SELECT MAX(A.QUANTITA)
            FROM (
                SELECT COUNT(COD_A) AS QUANTITA 
                FROM AUTORE, SCRIVERE 
                WHERE COD_AUTORE = COD_A 
                GROUP BY NOME_A, COGNOME_A) AS A)" ;
$result2 = mysqli_query($link, $sql2);
#selezione degli editori con maggiore quantità
$sql3 ="SELECT NOME_E, COUNT(COD_E) AS QUANTITA
        FROM EDITORE, LIBRO
        WHERE COD_E = C_E
        GROUP BY NOME_E
        HAVING QUANTITA = (
            SELECT MAX(A.QUANTITA)
            FROM (
                SELECT COUNT(COD_E) AS QUANTITA 
                FROM EDITORE, LIBRO 
                WHERE COD_E = C_E 
                GROUP BY NOME_E) AS A)" ;
$result3 = mysqli_query($link, $sql3);

#selezione della succursale con maggior numero di libri
$sql4 ="SELECT CONCAT_WS(' ',NOME_VIA_SUC,NUM_CIVICO_SUC) AS SUCCURSALE, COUNT(IND_S) AS QUANTITA 
FROM SUCCURSALE,COPIA 
WHERE COD_SUC=IND_S 
GROUP BY NOME_VIA_SUC,NUM_CIVICO_SUC 
HAVING QUANTITA = (      
					SELECT MAX(A.QUANTITA)                     
                    FROM (        
							SELECT COUNT(IND_S) AS QUANTITA                             
                            FROM COPIA,SUCCURSALE
                            WHERE IND_S=COD_SUC
                            GROUP BY NOME_VIA_SUC,NUM_CIVICO_SUC ) AS A)" ;
$result4 = mysqli_query($link, $sql4);

#selezione anno in cui sono stati pubblicati il minor numero di libri
$sql5 ="SELECT ANNO_PUBB, COUNT(ANNO_PUBB) AS QUANTITA
FROM LIBRO
GROUP BY ANNO_PUBB
HAVING QUANTITA = (
					SELECT MIN(A.QUANTITA)
                    FROM (
							SELECT COUNT(ANNO_PUBB) AS QUANTITA
							FROM LIBRO 
							GROUP BY ANNO_PUBB) AS A)" ;
$result5 = mysqli_query($link, $sql5);

#select lingua per form
$sql6 = 'SELECT DISTINCT LINGUA
        FROM LIBRO
        ORDER BY LINGUA';
$result6 = mysqli_query($link, $sql6);

#select codice succursale e sede per form
$sql7 = 'SELECT COD_SUC, CONCAT_WS(", ",NOME_VIA_SUC, NUM_CIVICO_SUC) AS SEDE
        FROM SUCCURSALE';
$result7 = mysqli_query($link, $sql7);

#select del codide editore e nome editore per form
$sql8 = 'SELECT COD_E, NOME_E
        FROM EDITORE';
$result8 = mysqli_query($link, $sql8);

#Elenco degli studenti che sono in ritardo con la restituzione del prestito
$sql9 = 'SELECT  COGNOME_S, NOME_S, DATA_LIMITE, TITOLO
FROM STUDENTE, PRESTITO, LIBRO
WHERE MATR=MATRICOLA AND ISBN=ISBN_LIB AND DATA_LIMITE < CURDATE()
ORDER BY DATA_LIMITE';

$result9 = mysqli_query($link, $sql9);

#Elenco dei libri scritti in media da un autore (il risultato va arrotondato)
$sql10 ='SELECT AVG(CONTEGGIO.LIBRI_SCRITTI) AS MEDIA
         FROM (
            SELECT COUNT(ISBN_L) AS LIBRI_SCRITTI
            FROM SCRIVERE 
            GROUP BY COD_AUTORE ) AS CONTEGGIO';
        
$result10 = mysqli_query($link, $sql10);

#Select anno di pubblicazione per form
$sql11 ='SELECT DISTINCT ANNO_PUBB
        FROM LIBRO
        ORDER BY ANNO_PUBB';
        
$result11 = mysqli_query($link, $sql11);
?>



<!DOCTYPE html>
<html>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<head>
    <?php head() ?>
    <title>Statistiche | BiblioFe</title>
</head>

<?php navbar() ?>

<body >
    <br>
    <h2>STATISTICHE DI BASE</h2>
    <br>  
    <!--Tabella lingue--> 
    <table id="table-center" > 
        <h3>5 Lingue più comuni in cui sono stati scritti i libri</h3>
        <thead>
            <tr>
                <th>LINGUA</th>
                <th>QUANTITA'</th>
            </tr>
        </thead >
        <tbody>
            <?php while ($row = mysqli_fetch_array($result1)) { ?>
                    <tr>
                        <td> <?php echo $row[ 'LINGUA' ]; ?> </td>
                        <td> <?php echo $row[ 'QUANTITA' ]; ?> </td>
                    </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <!--tabella autori--> 
    <table id="table-center">      
        <h3>Autore che ha scritto più libri</h3>
        <thead>
            <tr>
                <th>NOME</th>
                <th>COGNOME</th>
                <th>QUANTITA'</th>
            </tr>
        </thead >
        <tbody>
            <?php while ($row = mysqli_fetch_array($result2)) { ?>
                <tr>
                    <td> <?php echo $row[ 'NOME_A' ]; ?> </td>
                    <td> <?php echo $row[ 'COGNOME_A' ]; ?> </td>
                    <td> <?php echo $row[ 'QUANTITA' ]; ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <!--tabella editori--> 
    <table id="table-center"> 
        <h3>Editore che ha pubblicato più libri</h3>
        <thead>
            <tr>
                <th>NOME EDITORE</th>
                <th>QUANTITA'</th>
            </tr>
        </thead >
        <tbody> 
            <?php while ($row = mysqli_fetch_array($result3)) { ?>
                <tr>
                    <td> <?php echo $row[ 'NOME_E' ]; ?> </td>
                    <td> <?php echo $row[ 'QUANTITA' ]; ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <h2>STATISTICHE AGGIUNTIVE</h2>
    <br>  
    <table id="table-center"> 
        <h3>Succursale che possiede il maggior numero di libri</h3>
        <thead>
            <tr>
                <th>SUCCURSALE</th>
                <th>QUANTITA'</th>
            </tr>
        </thead >
        <tbody> 
            <?php while ($row = mysqli_fetch_array($result4)) { ?>
                <tr>
                    <td> <?php echo $row[ 'SUCCURSALE' ]; ?> </td>
                    <td> <?php echo $row[ 'QUANTITA' ]; ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <table id="table-center"> 
        <h3>Anno in cui sono stati pubblicati il minor numero di libri</h3>
        <thead>
            <tr>
                <th>ANNO PUBBLICAZIONE</th>
                <th>QUANTITA'</th>
            </tr>
        </thead >
        <tbody> 
            <?php while ($row = mysqli_fetch_array($result5)) { ?>
                <tr>
                    <td> <?php echo $row[ 'ANNO_PUBB' ]; ?> </td>
                    <td> <?php echo $row[ 'QUANTITA' ]; ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br>
    <table id="table-center"> 
        <h3>Elenco degli studenti che sono in ritardo con la restituzione del prestito</h3>
        <thead>
            <tr>
                <th>COGNOME</th>
                <th>NOME</th>
                <th>DATA LIMITE</th>
                <th>TITOLO</th>
            </tr>
        </thead >
        <tbody> 
            <?php while ($row = mysqli_fetch_array($result9)) { ?>
                <tr>
                    <td> <?php echo $row[ 'COGNOME_S' ]; ?> </td>
                    <td> <?php echo $row[ 'NOME_S' ]; ?> </td>
                    <td> <?php echo $row[ 'DATA_LIMITE' ]; ?> </td>
                    <td> <?php echo $row[ 'TITOLO' ]; ?> </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br><br><br>
    <?php $row = mysqli_fetch_array($result10) ?>
    <h3>Media dei libri scritti da ciascun autore</h3>
    <p>In base ai libri contenuti nel database gli autori scrivono in media<span style="color: red"> <b><?php echo $row[ 'MEDIA' ]; ?></b></span> libri.</p>
    <br><br>
    <div class="form" >
		<h3>Elenco dei libri scritti in una determinata lingua presenti nella succursale di interesse</h3>
		<form method="POST" action="libri_lingua_succ.php?id=statistiche">
			<fieldset>
                <br><br>
                <label>Lingua:</label>
				<select name="LINGUA">
                <option value="">Seleziona lingua</option>
                    <?php while ($row = mysqli_fetch_array($result6)) { ?>
                        <option value="<?php echo $row['LINGUA'] ?>"> <?php echo $row['LINGUA'] ?> </option>
                    <?php } ?>
                </select>
                &emsp;
				<label>Succursale:</label>
				<select name="SUCCURSALE">
                <option value="">Seleziona succursale</option>
                    <?php while ($row = mysqli_fetch_array($result7)) { ?>
                        <option value="<?php echo $row['COD_SUC'] ?>"> <?php echo $row['SEDE'] ?> </option>
                    <?php } ?>
                </select>
			</fieldset>
			<br>
			<input type="image" value="Cerca" src="Icons/search.svg" alt="Submit" width="30" height="30"/>
			<br><br>
		</form>
      </div>  
      
      <br><br>
    <div class="form" >
		<h3> Elenco degli studenti che hanno preso in prestito i libri di una determinata casa editrice</h3>
		<form method="POST" action="studenti_editore.php?id=statistiche">
			<fieldset>
                <br><br>
				<label>Casa editrice:</label>
				<select name="EDITORE">
                <option value="">Seleziona casa editrice</option>
                    <?php while ($row = mysqli_fetch_array($result8)) { ?>
                        <option value="<?php echo $row['COD_E'] ?>"> <?php echo $row['NOME_E'] ?> </option>
                    <?php } ?>
                </select>
			</fieldset>
			<br>
			<input type="image" value="Cerca" src="Icons/search.svg" alt="Submit" width="30" height="30"/>
			<br><br>
		</form>
      </div>  
      
      <br><br>
    <div class="form" >
		<h3> Elenco del numero di libri pubblicati da ciascun editore dall'anno di pubblicazione scelto fino ad oggi</h3>
		<form method="POST" action="libro_editore.php?id=statistiche">
			<fieldset>
                <br><br>
				<label>Anno di pubblicazione:</label>
				<select name="ANNO_PUBB">
                <option value="null">Seleziona anno</option>
                    <?php while ($row = mysqli_fetch_array($result11)) { ?>
                        <option value="<?php echo $row['ANNO_PUBB'] ?>"> <?php echo $row['ANNO_PUBB'] ?> </option>
                    <?php } ?>
                </select>
			</fieldset>
			<br>
			<input type="image" value="Cerca" src="Icons/search.svg" alt="Submit" width="30" height="30"/>
			<br><br>
		</form>
	  </div>  
    <!--Chiusura della connessione al database-->
    <?php mysqli_close($link); ?>
    <br><br><br><br>
    <?php footer() ?>
</body>
</html>
        
        
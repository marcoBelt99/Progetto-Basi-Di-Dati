<?php 
#inclusione della connessione e function contenente head e navbar
include_once("function.php"); 
?>

<!DOCTYPE html>
<html>
<!--Vengono chiamate le funzioni head e navbar presenti in function.php-->
<head>
    <?php head() ?>
    <title>Ricerca | BiblioFe</title>
</head>

<?php navbar() ?>

	<br>
	<body >
		<br>
		<!--Form della ricerca libri-->
		<div id="form" >
		<h2>Ricerca libri con nome e cognome dello studente</h2>
		<p>Inserendo nome e cognome (anche parzialmente) dello studente è possibile consultare l'elenco dei libri dati in prestito</p>
		<form method="POST" action="ricerca_studente.php?id=ricerca">
			<fieldset>
				<br><br>
				<label>Nome:</label>
				<input type="text" name="NOME_S" autofocus="autofocus" placeholder="Inserisci nome"/>
				&ensp;
				<label>Cognome:</label>
				<input type="text" name="COGNOME_S" placeholder="Inserisci cognome">
				</fieldset>
				<br>
				<input type="image" value="Cerca" src="Icons/search.svg" alt="Submit" width="30" height="30"/>
				<br><br>
		</form>
	  </div>
		<br>
		<!--Form della ricerca studenti-->
	  	<div class="form" >
		<h2>Ricerca studenti con titolo del libro</h2>
		<p>Inserendo il titolo (anche parzialmente) di un determinato libro è possibile consultare l'elenco degli studenti che lo hanno in prestito</p>
		<form method="POST" action="ricerca_libro.php?id=ricerca">
			<fieldset>
				<br><br>
				<label>Titolo:</label>
				<input type="text" name="TITOLO" placeholder="Inserisci titolo"/>
			</fieldset>
			<br>
			<input type="image" value="Cerca" src="Icons/search.svg" alt="Submit" width="30" height="30"/>
			<br><br>
		</form>
	  </div>  
	  <br><br><br><br>
	  <?php footer() ?>
	</body>
</html>


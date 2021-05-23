<?php
#inclusione della connessione e function contenente head e navbar
include_once('connessione.php');
include_once("function.php");
#function per la selezione delle matricole senza duplicati presenti in prestito da mostrare nella select
#ordinati per matricola(cast)
function matr($link)
{
    $output = '';
    $sql = 'SELECT DISTINCT MATR
            FROM PRESTITO
            ORDER BY CAST(MATR AS SIGNED) ASC';
    $result = mysqli_query($link, $sql);

    while ($row = mysqli_fetch_array($result)) {
        #valori delle matricole trovate
        $output .= '<option value="' . $row["MATR"] . '">' . $row["MATR"] . '</option>';
    }
    return $output;
}
#function per la selezione delle matricole presenti in studente da mostrare nella select
function matricola($link)
{
    $output = '';
    $sql = 'SELECT MATRICOLA
            FROM STUDENTE
            ORDER BY CAST(MATRICOLA AS SIGNED) ASC'; #cast per ordinare le matricole essendo di tipo char
    $result = mysqli_query($link, $sql);
    while ($row = mysqli_fetch_array($result)) {
        #valori delle matricole trovate
        $output .= '<option value="' . $row["MATRICOLA"] . '">' . $row["MATRICOLA"] . '</option>';
    }
    return $output;
}
#function per la selezione del titolo e ISBN dei libri in ordine alfabetico presenti in libro da mostrare nella select
function titolo($link)  
 {  
      $output = '';  
      $sql = 'SELECT ISBN, TITOLO
              FROM LIBRO
              ORDER BY TITOLO';  
    $result = mysqli_query($link, $sql);  
    while($row = mysqli_fetch_array($result)) {  
         #valori dei libri trovati, mostra titolo ma si utilizza ISBN associato
        $output .= '<option value="'.$row["ISBN"].'">'.$row["TITOLO"].'</option>';  
      }  
      return $output;  
 }  
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
    <br><br><br> <br><br>
    <!--Form per un nuovo prestito-->
    <div id="form">
        <form method="POST" action="insert_prestito.php?id=prestiti">
        <br><br>
        <label> NUOVO PRESTITO</label>
            <br><br>

            <fieldset>
                <label>TITOLO LIBRO:</label>         
                <select name="ISBN" id='ISBN' style="width: 300px;">
                    <option value="---">---</option>
                    <!--Chiamata a funzione-->
                    <?php echo titolo($link);
                    ?>
                </select>
            </fieldset>
            
            <fieldset>
                <label>CODICE COPIA:</label>
                <select name="C_COPIA" id="C_COPIA" >
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                </select>
                &emsp;
                <label>MATRICOLA:</label>
                <select name="MATRI" id = 'MATRI'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                    <!--Chiamata a funzione-->
                    <?php echo matricola($link);
                    ?>
                </select>
            </fieldset>
            <br> 
            <!--Pulsante per effettuare la conferma dei dati e indirizzamento a insert_prestito.php-->
            <input type="image" value="Cerca" src="Icons/arrow.svg" alt="Submit" width="30" height="30"/>  
            <br><br>
        </form>
    </div>
    <br>
    <!--Form per effettuare la proroga di un prestito-->
    <div id="form">
        <form method="POST" action="update_prestito.php?id=prestiti">
        <br><br>
        <label> PROROGA PRESTITO</label>
            <br><br>
            <fieldset>
                <label>MATRICOLA:</label>
                <select name="MATR" id = 'MATR'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                    <!--Chiamata a funzione-->
                    <?php echo matr($link);?>
                </select>
            </fieldset>
            <fieldset>
                &emsp;
                <label>TITOLO LIBRO:</label>
                <select name="ISBN_LIB" id = 'ISBN_LIB' style="width: 300px;">
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                </select>
            </fieldset>
            <fieldset>
            <label>CODICE COPIA:</label>
                <select name="COD_C" id = 'COD_C'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                </select>
                <label>TEMPO DI PROROGA:</label>
                <select name="DATA_LIMITE" >
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                    <!--Valori per giorni proroga-->
                    <option value="10">10 giorni</option>
                    <option value="15">15 giorni</option>
                    <option value="30">30 giorni</option>
                </select>
            </fieldset>
            <br>
            <!--Pulsante per effettuare la conferma dei dati e indirizzamento a update_prestito.php-->
            <input type="image" value="Cerca" src="Icons/arrow.svg" alt="Submit" width="30" height="30"/>
            <br><br>
        </form>  
    </div>
    <br>
     <!--Form per effettuare la cancellazione di un prestito-->
    <div id="form">
        <form method="POST" action="delete_prestito.php?id=prestiti">
        <br><br>
        <label> RESTITUZIONE PRESTITO</label>
            <br><br>
            <fieldset>
                <label>MATRICOLA:</label>
                <select name="MATRICOLA" id = 'MATRICOLA'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                    <!--Chiamata a funzione-->
                    <?php echo matr($link);?>
                </select>
                </fieldset>
                <fieldset>
                &emsp;
                <label>TITOLO LIBRO:</label>
                <select name="ISBN_LIBRO" id = 'ISBN_LIBRO' style="width: 300px;">
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                </select>
                </fieldset>
                <fieldset>
                <label>CODICE COPIA:</label>
                <select name="COPIA" id = 'COPIA'>
                    <!--Primo valore vuoto-->
                    <option value="---">---</option>
                </select>
            </fieldset>
            <br>
            <!--Pulsante per effettuare la conferma dei dati e indirizzamento a delete_prestito.php-->
            <input type="image" value="Cerca" src="Icons/arrow.svg" alt="Submit" width="30" height="30"/>  
            <br><br>
        </form>
    </div>
    <br><br><br><br>
    
    <?php footer() ?>
</body>
</html>

<script>
$(document).ready(function(){  
    //Script necessario per la selezione del codice prestito in base alla matricola inserita
      $('#MATRICOLA').change(function(){  
           var MATRICOLA = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{MATRICOLA:MATRICOLA},  
                success:function(data){  
                     $('#ISBN_LIBRO').html(data);  
                }  
           });  
      }); 
}); 

$(document).ready(function(){ 
    $('#ISBN_LIBRO').change(function(){  
           var ISBN_LIBRO = $(this).val(); 
           var MATRICOLA = $('#MATRICOLA').val();
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{ISBN_LIBRO,MATRICOLA},  
                success:function(data){  
                     $('#COPIA').html(data);  
                }
           });  
      }); 
});
$(document).ready(function(){  
    //Script necessario per la selezione del codice prestito in base alla matricola inserita
      $('#MATR').change(function(){  
           var MATR = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{MATR:MATR},  
                success:function(data){  
                     $('#ISBN_LIB').html(data);  
                }  
           });  
      });  
 });  

 $(document).ready(function(){  
    //Script necessario per la selezione del codice della copia in base al ISBN(titolo) inserito
      $('#ISBN_LIB').change(function(){  
           var ISBN_LIB = $(this).val(); 
           var MATRICOLA = $('#MATR').val(); 
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{ISBN_LIB,MATRICOLA},  
                success:function(data){  
                     $('#COD_C').html(data);  
                }  
           });  
      });  
 });  
 
$(document).ready(function(){  
    //Script necessario per la selezione del codice della copia in base al ISBN(titolo) inserito
      $('#ISBN').change(function(){  
           var ISBN = $(this).val();  
           $.ajax({  
                url:"load_data.php",  
                method:"POST",  
                data:{ISBN:ISBN},  
                success:function(data){  
                     $('#C_COPIA').html(data);  
                }  
           });  
      });  
 });  


 </script> 
 
<?php  
#inclusione della connessione
include_once('connessione.php');
$output = ''; 
#se la select Matricola è stata definita 
if(isset($_POST["MATRICOLA"]) AND !(isset($_POST["ISBN_LIBRO"])) AND !(isset($_POST["ISBN_LIB"])))  
    { 
      #se la select Matricola non è vuota   
      if($_POST["MATRICOLA"] != '')  
      {    #selezione del codice prestito in base alla matricola(presente in Studente) selezionato 
           $sql ="SELECT TITOLO, ISBN_LIB 
                  FROM PRESTITO, LIBRO
                  WHERE MATR = '".$_POST["MATRICOLA"]."' AND ISBN_LIB = ISBN;";  
      }  
      #inserimento della query e connessione nella variabile result
      $result = mysqli_query($link, $sql);  
      #Primo output vuoto
      $output .='<option value="---">---</option>';
      #output del codice prestito nella select in funzione della matricola
      while($row = mysqli_fetch_array($result))  
      {    
            $output .= '<option value="'.$row["ISBN_LIB"].'">'.$row["TITOLO"].'</option>'; 
      }  
      echo $output;  
 }  
#se la select Matr è stata definita 
if(isset($_POST["MATR"]) AND !(isset($_POST["ISBN_LIB"])))  
    { 
      #se la select Matr non è vuota  
      if($_POST["MATR"] != '')  
      {  
           #selezione del codice prestito in base alla matricola(presente in Prestito) selezionato
           $sql ="SELECT TITOLO, ISBN_LIB 
                  FROM PRESTITO,LIBRO
                  WHERE MATR = '".$_POST["MATR"]."' AND ISBN_LIB=ISBN;";  
      }  
      #inserimento della query e connessione nella variabile result
      $result = mysqli_query($link, $sql);  
      #Primo output vuoto
      $output .='<option value="---">---</option>';
      #output del codice prestito nella select in funzione della matr
      while($row = mysqli_fetch_array($result))  
      {         
            $output .= '<option value="'.$row["ISBN_LIB"].'">'.$row["TITOLO"].'</option>'; 
      }  
      echo $output;  
 }  

#se la select ISBN è stata definita 
if(isset($_POST["ISBN"]))  
 {  
      #se la select ISBN non è vuota   
      if($_POST["ISBN"] != '')  
      {    #selezione del codice copia disponibile(non in prestito) in base al titolo(ISBN) selezionato
           $sql ="SELECT COD_COPIA 
                  FROM COPIA, PRESTITO 
                  WHERE ISBN_LIBRO = '".$_POST["ISBN"]."' AND COD_COPIA != ALL (
                        SELECT C_COPIA 
                        FROM PRESTITO 
                        WHERE ISBN_LIBRO = '".$_POST["ISBN"]."') 
                        GROUP BY COD_COPIA 
                        ORDER BY COD_COPIA ASC";  
      }  
      #inserimento della query e connessione nella variabile result
      $result = mysqli_query($link, $sql); 
      #Primo output vuoto 
      $output .='<option value="---">---</option>';
      #output del codice copia nella select in funzione del ISBN
      while($row = mysqli_fetch_array($result))  
      {          
            $output .= '<option value="'.$row["COD_COPIA"].'">'.$row["COD_COPIA"].'</option>'; 
      }  
      echo $output;  
    }

    #se la select ISBN è stata definita 
if(isset($_POST["ISBN_LIBRO"]) )  
{  
     #se la select ISBN non è vuota   
     if($_POST["ISBN_LIBRO"] != '')  
     {    #selezione del codice copia disponibile(non in prestito) in base al titolo(ISBN) selezionato
          $sql ="SELECT C_COPIA 
                 FROM  PRESTITO 
                 WHERE ISBN_LIB = '".$_POST["ISBN_LIBRO"]."' AND MATR ='".$_POST["MATRICOLA"]."'
                 ORDER BY C_COPIA ASC";
     }  
     #inserimento della query e connessione nella variabile result
     $result = mysqli_query($link, $sql); 
     #Primo output vuoto 
     #$output .='<option value="---">---</option>';
     #output del codice copia nella select in funzione del ISBN
     while($row = mysqli_fetch_array($result))  
     {          
           $output .= '<option value="'.$row["C_COPIA"].'">'.$row["C_COPIA"].'</option>'; 
     }  
     echo $output;  
   }
  
   if(isset($_POST["ISBN_LIB"]))  
 {  
      #se la select ISBN non è vuota   
      if($_POST["ISBN_LIB"] != '')  
      {    #selezione del codice copia disponibile(non in prestito) in base al titolo(ISBN) selezionato
           $sql ="SELECT C_COPIA 
                  FROM  PRESTITO 
                  WHERE ISBN_LIB = '".$_POST["ISBN_LIB"]."'AND MATR ='".$_POST["MATRICOLA"]."'
                  ORDER BY C_COPIA ASC";
      }  
      #inserimento della query e connessione nella variabile result
      $result = mysqli_query($link, $sql); 
      #Primo output vuoto 
      #$output .='<option value="---">---</option>';
      #output del codice copia nella select in funzione del ISBN
      while($row = mysqli_fetch_array($result))  
      {          
            $output .= '<option value="'.$row["C_COPIA"].'">'.$row["C_COPIA"].'</option>'; 
      }  
      echo $output;  
    }

 ?>  
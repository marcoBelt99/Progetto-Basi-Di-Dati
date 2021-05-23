<?php
#Connessione al database
$link = mysqli_connect("127.0.0.1", "marco", "password", "Biblioteca");
#nel caso di errore di connessione stampa dell'errore
if (!$link) {
    echo "Si è verificato un errore: Non riesco a collegarmi al database" . PHP_EOL;
    echo "Codice errore: " . mysqli_connect_errno() . PHP_EOL;
    echo "Messaggio errore: " . mysqli_connect_error() . PHP_EOL;
    exit(-1);
}
?>

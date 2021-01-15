<?php

// dati per la connessione al db
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "db_hotel";

// connessione al db
$conn = new mysqli($servername, $username, $password, $dbname);

// verifico che non ci siano degli errori di connessione
if ($conn && $conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit();
}

// se arrivo qui, la connessione è andata a buon fine
$sql = "SELECT `room_number`, `floor` FROM `stanze`";
$result = $conn->query($sql);

if ($result && $result->num_rows > 0) {
    // la query è andata a buon fine e ci sono delle righe di risultati

    // finché ci sono righe di risultati
    while($row = $result->fetch_assoc()) {
        // recupero una riga di risultati alla volta e ne stampo i valori
        echo "Stanza N. ". $row['room_number']. " piano: ".$row['floor'];
        echo '<br>';
    }
} elseif ($result) {
    // la query è andata a buon fine ma non ci sono righe di risultati
    echo "0 results";
} else {
    // si è verificato un errore nella query (es: nome tabella sbagliato)
    echo "query error";
}

// chiudo la connessione al db
$conn->close();

?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $mail = $_POST["mail"];
    $wiadomosc = $_POST["wiadomosc"];

    
    $to = "lorak.stawecki@onet.pl";
    $subject = "Nowa wiadomość od $imie $nazwisko";
    $message = "Wiadomość od: $imie $nazwisko\nEmail: $mail\nWiadomość:\n$wiadomosc";
    $headers = "From: $mail";

    mail($to, $subject, $message, $headers);
    echo "Dziękujemy za wysłanie wiadomości!";
}
?>

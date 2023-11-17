<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imie = $_POST["imie"];
    $nazwisko = $_POST["nazwisko"];
    $mail = $_POST["mail"];
    $wiadomosc = $_POST["wiadomosc"];
    
    $to = "kontakt@endlessstudio.pl";
    $subject = "Nowa wiadomość od $imie $nazwisko";
    $message = "Wiadomość od: $imie $nazwisko\nEmail: $mail\nWiadomość:\n$wiadomosc";
    $headers = "From: $mail";

   
    $mail_sent = mail($to, $subject, $message, $headers);

    if (mail($to, $subject, $message, $headers)) {
        echo "<p>Dziękujemy za wysłanie wiadomości!</p>";
    } else {
        echo "<p>Wystąpił problem podczas wysyłania wiadomości.</p>";
    }
}
?>

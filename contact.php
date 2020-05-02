<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $ilosc = $_POST['ilosc'];
    $data = $_POST['data'];
    $message = $_POST['message'];
    $upload = $_POST['upload'];

    $email_from = 'Torty zamówienie';
    $email_subject = 'Nowe zamówienie';
    $email_body = "Od: $name.\n".
                  "Email: $email.\n".
                  "Tel: $mobile.\n".
                  "Ilość porcji: $ilosc.\n".
                  "Termin odbioru: $data.\n".
                  "Opis: $message.\n";

    $to = "zamowienia@pracowniatortow.com.pl";
    $headers = "Od: $email_from \r\n";
    
    mail($to,$email_subject,$email_body);
    
    header("location: index.html");
    

?>
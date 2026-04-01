<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $items = $_POST["items"];
    $total = $_POST["total"];

    $to = "impact.design.id@gmail.com"; // 👈 TON EMAIL ICI

    $subject = "Nouvelle commande panier";

    $message = "
Nouvelle commande reçue :

Email client : $email

Produits :
$items

Total : $total FCFA
";

    $headers = "From: site@commande.com";

    mail($to, $subject, $message, $headers);

    echo "OK";
}
?>
<?php

$toppings = "";
$purchases = "";
$to = "dericwadleigh@gmail.com";



foreach($_GET[topping] as $topping)
{
    $toppings .= $topping . "\r\n";
}

for ($n=0; isset($_GET[name][$n]) && isset($_GET[qty][$n]); $n++) {
    $purchases .= $_GET[name][$n] . " : " . $_GET[qty][$n] . "\r\n";
}

$date = date("F j, Y, g:i a");

$content = "Number of Pizzas: " . $_GET[pizza] . "\r\n" . "Pizza Toppings: " . "\r\n" . $toppings . "\r\n" . "Other Purchases: " . $purchases;

mail(
    $to,
    "Pizza Order - {$date}",
    $content,
    "From: Customer");
?>
<script>
window.location = "index.html";
</script>
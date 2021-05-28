<!-- Descrizione:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre * -->

<?php  

$badword = $_GET["badword"];
$filter = $_GET["filter"];

$var = "Consegna con Just Eat e organizza la tua agenda secondo le tue disponibilità. Cacca. Scopri qui di seguito tutti i dettagli della nostra offerta e della paga oraria.";
$var2 = "Consegna con Just Eat e organizza la tua agenda secondo le tue disponibilità. Cacca. Scopri qui di seguito tutti i dettagli della nostra offerta e della paga oraria.";
//print var.length
echo strlen($var);

echo "<br>";
//replace badword
echo "Frase modificabile con GET: ";
echo "<br>";
//localhost:8080/Booleanphp/php-badwords/index.php?badword=Cacca&filter=Accipicchia
echo str_replace($badword, $filter, $var);
echo "<br>";
echo "<br>";
echo "Frase modificato in codice: ";
echo "<br>";
echo str_replace("Cacca", "***", $var2);

?>

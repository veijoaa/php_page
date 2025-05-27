<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Noppa</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<?php
//arvotaan silmäluku
$noppa = rand(1,6);

?>

<h1> Nopanheitto</h1>
Heitit <?php echo $noppa ?> numeron!
<br>
<img src="<?php echo $noppa;?>.jpg">

<h1><a href="Noppa.php">Heitä uudelleen</a></h1>
<br>
Tallennetaan tulokset  txt-tiedostoon.
<?php
$tiedosto="noppantulokset.txt";//nimi tiedostolle
echo "<br>";
$tulos=" Tulos on: " . $noppa ."\n";// tallennettavat tiedot ja rivin vaihto

file_put_contents($tiedosto, $tulos, FILE_APPEND);//Tallennetaan heitot
// luetaan esim 10 viimeistä heittoa sivulle

//tutkitaan ensin onko tiedostoa olemassa
if(file_exists($tiedosto)){
//luetaan tiedot muuttujaan
$linja = file($tiedosto, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
// määritellään näytettävät rivit
$maara = array_slice($linja,-10);
foreach ($maara as $n){
 echo htmlspecialchars($n) . "</br>";
}
}


?>

</body>
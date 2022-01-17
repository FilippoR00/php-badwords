<?php
# index.php?word=cazzo      (for testing)
#stringa di testo
$paragrafo = 'Questo cazzo di testo deve essere censurato';
#stringa con la parola scelta sostituita da tot asterischi attraverso una funzione
$paragrafoCensurato = str_replace($_GET['word'], Nasterischi(), $paragrafo);

# funzione che stampa tot asterischi in base alla lunghezza della parola
function Nasterischi()
{
    $temp = '';
    for ($i = 0; $i < strlen($_GET['word']); $i++) {
        $temp = $temp . '*';
    }
    return $temp;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>
    <h1>PHP Badwords</h1>
    <p> Testo: <?php echo $paragrafo ?></p>
    <h4>Lunghezza testo: <?php echo strlen($paragrafo) ?></h4>
    <p>Testo censurato: <?php echo $paragrafoCensurato ?></p>
</body>

</html>
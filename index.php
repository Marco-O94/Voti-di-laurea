<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voto di laurea</title>
</head>
<body>
<?php
/*Creare un sistema che memorizzi i voti degli esami universitari, sapendo che le materie sono 27. 
* Restituire la media dei voti ed il voto di laurea 
* media*11/3 
*/

 // Inizio dichiarazione variabili
$somma_voti = 0;
$voti = array();
// Fine dichiarazione variabili

//Inizio ciclo
for($i=0;$i<28;$i++) { //Ripeto le azioni dentro il for 27 volte:
    $voto = rand(18,30); //Azione 1: Attribuisco un numero randomico alla variabile $voto.
    $voti[] = $voto; //Aggiungo il voto all'array di voti dichiarato prima.
    $somma_voti +=  $voto; //Vado sommando ogni voto.
}
//Fine ciclo

$media_voti = $somma_voti / 27; //Faccio la media dei voti
$voto_laurea = $media_voti*11/3; //Calcolo il voto di Laurea

echo "I tuoi voti sono: <br><table><tr>";
foreach($voti as $kv => $v) { //Mi stampo tutti i voti
    if($kv % 6 == 0) { //Li stampo incolonnati in una tabella a 6 colonne. Praticamente ogni 6 numeri gli dico di crearmi una nuova riga.
        echo "</tr><tr><td> $v <td>";
    }else{
    echo "<td> $v <td>";
    }
}


echo "</table><br> La tua media corrisponde a $media_voti <br>";
echo "Il tuo voto di laurea è: $voto_laurea";
?> 
</body>
</html>




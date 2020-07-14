<!-- SNACK N°1 -->
<?php

// Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite
// di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra
// di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
// Stampiamo a schermo tutte le partite con questo schema:
//  Olimpia Milano - Cantù | 55-60

// $array_matches = [
//   [
//     'ospite' => 'Milano',
//     'casa' => 'Lecce',
//     'punti_casa'=> 4,
//     'punti_ospite' => 0
//   ],
//   [
//     'ospite' => 'Roma',
//     'casa' => 'Perugia',
//     'punti_casa'=> 0,
//     'punti_ospite' => 3
//   ],
//   [
//     'ospite' => 'Torino',
//     'casa' => 'Napoli',
//     'punti_casa'=> 3,
//     'punti_ospite' => 1
//   ]
//
// ];


 ?>
 <!-- <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <ul>
       <?php// for ($i=0; $i < count($array_matches); $i++) { ?>
         <?php// $this_match = $array_matches[$i]; ?>
       <li><?php //echo $this_match['ospite']; ?> - <?php// echo $this_match['casa']; ?> | <?php// echo $this_match['punti_ospite']; ?> - <?php// echo $this_match['punti_casa']; ?></li>
     <?php //} ?>
     </ul>

   </body>
 </html> -->


<!-- SNACK N°2 -->
<?php
// Passare come parametri GET name, mail e age e verificare
//  (cercando i metodi che non conosciamo nella documentazione) che:
// 1. name sia più lungo di 3 caratteri,
// 2. che mail contenga un punto e una chiocciola
// 3. e che age sia un numero.
// Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
$esito = 'Accesso riuscito';
//Se ci sono campi vuoti = accesso negato
if (empty($name) || empty($mail) || empty($age))  {
  $esito = 'Accesso Negato';
//Se il nome ha meno di 3 caratteri = accesso negato
}elseif (strlen($name) <= 3) {
  $esito = 'Accesso Negato';
//Se il campo 'mail' non contiene la '@'o il '.' = accesso negato
}elseif (strpos($mail, '@') === false || strpos($mail, '.') === false) {
  $esito = 'Accesso Negato';
//Se l'età non è un numero intero = accesso negato
}elseif (is_numeric($age) === false) {
  $esito = 'Accesso Negato';
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1><?php echo $esito; ?></h1>
    <h2>Welcome <?php echo $_GET["name"]; ?></h2>
    <h2>Your email address is: <?php echo $_GET["mail"]; ?></h2>
    <h2>Your age is: <?php echo $_GET["age"]; ?></h2>

  </body>
</html>

<?php 

require_once __DIR__ . "/classes/Product.php";
require_once __DIR__ . "/classes/Costumer.php";
require_once __DIR__ . "/classes/PremiumCostumer.php";

$utente = new Costumer('giusepeppe@gmail.com', '1234', 'giusepeppe');

var_dump($utente);

$utente->setName('Giuseppe');

if(!$utente->setEmail('giusepeppe@gmail.com')){
  echo "<h1>benvenuto</h1>";
}

$premium = new PremiumCostumer('Ugo', 'de Ughi', 'UgodeUghis');
var_dump($premium);

$new_product = new Product("scarpe",100, 5);
$new_product -> getFinalCost();
var_dump($new_product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Shop</title>
</head>
<body>
  
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uvod u PHP</title>
</head>
<body>
<pre>
<?php

switch (date("N")) {
    case 1:
      echo "Ponedjeljak";
      break;
    case 2:
      echo "Utorak";
      break;
    case 3:
      echo "Srijeda";
      break;
    case 4:
      echo "Četvrtak";
      break;
    case 5:
      echo "Petak";
      break;
    case 6:
      echo "Subota";
      break;
    case 7:
      echo "Nedjelja";
      break;
  } 


  
?>
</pre>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="shortcut icon" href="favicon.ico" />
   <title>Belajar PHP</title>
</head>

<body>

   <form method="post">
      Name: <input type="number" name="name"> <br>
      <input type="submit" name="ganjil" value="Generate Bilangan Ganjil">
      <input type="submit" name="prima" value="Generate Bilangan Prima">
      <input type="submit" name="tri" value="Generate Segitiga">
   </form>

   <br>
   I'm Write Number
   <?php
   if (isset($_POST["name"])) {
      echo $_POST["name"];
   }
   ?>
   <br>
   <br>
   <?php
   if (isset($_POST["ganjil"])) {
      for ($i = 1; $i <= $_POST["name"]; $i += 2) {
         echo $i . ", ";
      }
   }
   ?>

   <!-- Generate bilangan Prima -->
   <?php
   if (isset($_POST["prima"])) {
      for ($i = 1; $i <= $_POST["name"]; $i++) {
         $a    = 0;
         for ($j = 1; $j <= $i; $j++) {
            if ($i % $j == 0) {
               $a++;
            }
         }
         if ($a == 2) {
            echo $i . ', ';
         }
      }
   }
   ?>
   <!-- Generate bilangan Segitiga -->
   <?php
   if (isset($_POST["tri"])) {
      $rows = $_POST["name"];
      $n = 1;

      for ($i = 1; $i <= $rows; $i++) {
         for ($j = 1; $j <= $i; $j++) {
            echo $n, "  ";
            $n++;
         }
         echo "</br>";
      }
   }

   ?>


</body>

</html>
<form action="prima.php" method="post">
     Name: <input type="number" name="name">
     <input type="submit" value="Generate Bilangan Prima">
   </form>
<?php
    for($i = 1;$i <= $_POST["name"]; $i++){
        $a    =0;
        for($j=1;$j<=$i;$j++){
            if($i % $j == 0){
                $a++;
            }
        }
        if($a == 2){
         echo $i.' ';
        }
    }
?>
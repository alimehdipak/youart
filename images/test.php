<? 
 //Chooses a random number 
 $num = Rand (1,3); 
 //Based on the random number, gives a quote 
 switch ($num)
 {
 case 1:
 include "adsense.php";
 break;
 case 2:
 include "adiquity.php";
 break; 
 case 3:
 include "buzzcity.php";
 break;
 }
 ?>

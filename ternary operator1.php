<?php
$score = 10;
$age = 20;
echo 'Taking into account your age and score, you are: ',($age > 10 ? ($score < 80 ? 'behind' : 'above average') : 
($score < 50 ? 'behind' : 'above average'));




//problem could be 
/* if($age > 10){
      if(score < 80){
         echo '';
      }
      else{
         echo 'above average';
      }
   else{
      if($score < 50){
         echo 'behind';
      }
      else{
         echo 'above average';
      }
   }
}
*/
?>

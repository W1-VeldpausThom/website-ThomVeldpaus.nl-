<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Opdracht 0018</title>
</head>
<body>
    

<?php
    
/*      1. Declareer de variabele score en initialiseer deze op 60.                                                                                     */           
           $score = 60;
           

/*      2. Declareer de variabele bonus en initialiseer deze op 10.                                                                                     */
           $bonus = 10;
           
           

/*      3. Declareer een variabele voor de naam van de speler en initialiseer de naam op je eigen voornaam.                                             */
           $naam = Thom;
           

/*      Verhoog de score met 100.                                                                                                                       */
           $score += 100;
           
/*      5. Verdubbel de bonus.                                                                                                                          */
           $bonus *= 2;
           
/*      6. Print de waarde van score en bonus                                                                                                           */
           
           /*DEBUG
/*      7. Verhoog de score nu met 50                                                                                                                   */
           $score = $score + 50;                                                                                                                           
                                                                     
           /*DEBUG

/*      8. Als de waarde van score hoger is dan 200 verhoog dan de bonus met 10                                                            */
/*      9. Als de waarde van score lager of gelijk aan 200 is, verlaag dan de bonus met 50                                                 */           
           if (score > 200)
           {
               $bonus += 10;
           }
           else
           {
               $bonus -= 50;
           }




/*      10. Herhaal de stappen 4 t/m 9 en ga dan naar de laatste opdrachtregel                                                                          */
            $score += 100;
            $bonus *= 2;
            echo "<p>De score is $score.<br /> De bonus is $bonus.</p>";
            $score = $score + 50;
            if (score > 200)
           {
               $bonus += 10;
           }
           else
           {
               $bonus -= 50;
           }

/*      11. Reken de waarde uit van score + (bonus * 10) en toon de speler, de som en het resultaat op het scherm                          */
            
            $bonusberekend = $bonus * 10;
            $eindscore = $score + $bonusberekend;
            if ($bonus > 0)
            {
                echo "<h3>U scoorde $score punten. Uw score was $score + $bonusberekend bonuspunten. <br />Dat maakt in totaal van $eindscore punten.</h3>";
            }
            if ($bonus < 0)
            {
                /*$rest = substr("abcdef", 0, -1);  // returns "abcde"*/
                $mintekenverwijderen = substr("$bonusberekend", 1);
                echo "<h3>U scoorde $score punten. Uw score was $score - $mintekenverwijderen bonuspunten. <br />Dat maakt in totaal van $eindscore punten.</h3>";
            }
            
?>

   
    




<blockquote>

<pre>
<!--&lt;?php
    
/*      1. Declareer de variabele score en initialiseer deze op 60.                                                                                     */
           $score = 60;

/*      2. Declareer de variabele bonus en initialiseer deze op 10.                                                                                     */
           $bonus = 10;

/*      3. Declareer een variabele voor de naam van de speler en initialiseer de naam op je eigen voornaam.                                             */
           $naam = Thom

/*      Verhoog de score met 100.                                                                                                                       */
           $score += 100;

/*      5. Verdubbel de bonus.                                                                                                                          */
           $bonus *= 2;

/*      6. Print de waarde van score en bonus                                                                                                           */
           echo "<p>De score is $score.<br /> De bonus is $bonus.</p>";

/*      7. Verhoog de score nu met 50                                                                                                                   */
           $score = $score + 50;                                                                                                                  
                                                                     


/*      8. Als de waarde van score hoger is dan 200 verhoog dan de bonus met 10                                                            */
/*      9. Als de waarde van score lager of gelijk aan 200 is, verlaag dan de bonus met 50                                                 */           
           if (score > 200)
           {
               $bonus += 10;
           }
           else
           {
               $bonus -= 50;
           }




/*      10. Herhaal de stappen 4 t/m 9 en ga dan naar de laatste opdrachtregel                                                                          */
            $score += 100;
            $bonus *= 2;
            echo "<p>De score is $score.<br /> De bonus is $bonus.</p>";
            $score = $score + 50;
            if (score > 200)
           {
               $bonus += 10;
           }
           else
           {
               $bonus -= 50;
           }

/*      11. Reken de waarde uit van score + (bonus * 10) en toon de speler, de som en het resultaat op het scherm                          */
            
            $bonusberekend = $bonus * 10;
            $eindscore = $score + $bonusberekend;
            echo "<h3>U scoorde $score punten. Uw score was $score + $bonusberekend bonuspunte. <br />Een totaal van $eindscore punten.</h3>";
?&gt;-->


</pre>


</blockquote>

</body>
</html>

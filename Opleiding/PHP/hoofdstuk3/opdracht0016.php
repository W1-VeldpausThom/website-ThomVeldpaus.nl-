

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>0016</title>
        <link type="text/css" rel="stylesheet" href="../css/style.css">
    </head>
    <body>

<?php
/*Hier worden de gegevens van de leerlingen toegewezen aan variabelen*/
$leerling1 = "Thom Veldpaus";
$leerlingnummer1 = "317935";
$leerlingleeftijd1 = 23;
$leerlingplaats1 = "Vught";


$leerling2 = "Tom Simons";
$leerlingnummer2 = "317936";
$leerlingleeftijd2 = 19;
$leerlingplaats2 = "Tilburg";


$leerling3 = "Roy Vissers";
$leerlingnummer3 = "317937";
$leerlingleeftijd3 = 17;
$leerlingplaats3 = "Oss";


$leerling4 = "Luc Warmerdam";
$leerlingnummer4 = "317938";
$leerlingleeftijd4 = 17;
$leerlingplaats4 = "Oss";


$leerling5 = "Toby Beks";
$leerlingnummer5 = "317939";
$leerlingleeftijd5 = 17;
$leerlingplaats5 = "'s-Hertogenbosch";

/*wanneer er leerlingen worden toegevoegd aan bovenstaande lijst dient ook hier de leerling aan het rijtje te worden toegevoegd anders zal de berekening van de gemiddelde leeftijd deze niet meenemen in de berekening. Wel word het gemiddelde gedeeld door de leerlingenteller, met andere woorden, het aantal cellen die gemaakt zijn en ++$leerlingenteller bevatten*/

$totaleleeftijd = $leerlingleeftijd1 + $leerlingleeftijd2 + $leerlingleeftijd3 + $leerlingleeftijd4 + $leerlingleeftijd5;

$leerlingenteller = 0;




?>


<table border="1" style="text-align: center">


    <tr>
        <th style="text-align: left">
            leerlingteller
        </th>
        <th style="text-align: left">
            leerling
        </th>
        <th style="text-align: left">
            leerlingnummer
        </th>
        <th style="text-align: left">
            leeftijd
        </th>
        <th style="text-align: left">
            woonplaats
        </th>
    </tr>
    
    <tr>
        <td> 
            <?php echo ++$leerlingenteller; ?>
        </td>
        <td>
            <?php echo $leerling1; ?>
        </td>
        <td>
           <?php echo $leerlingnummer1; ?>
        </td>
        <td>
            <?php echo $leerlingleeftijd1; ?>
        </td>
        <td>
            <?php echo $leerlingplaats1; ?>
        </td>
    </tr>


    <tr>
        <td> 
            <?php echo ++$leerlingenteller; ?>
        </td>
        <td>
            <?php echo $leerling2; ?>
        </td>
        <td>
           <?php echo $leerlingnummer2; ?>
        </td>
        <td>
            <?php echo $leerlingleeftijd2; ?>
        </td>
        <td>
            <?php echo $leerlingplaats2; ?>
        </td>
    </tr>


    <tr>
        <td> 
            <?php echo ++$leerlingenteller; ?>
        </td>
        <td>
            <?php echo $leerling3; ?>
        </td>
        <td>
           <?php echo $leerlingnummer3; ?>
        </td>
        <td>
            <?php echo $leerlingleeftijd3; ?>
        </td>
        <td>
            <?php echo $leerlingplaats3; ?>
        </td>
    </tr>


    <tr>
        <td> 
            <?php echo ++$leerlingenteller; ?>
        </td>
        <td>
            <?php echo $leerling4; ?>
        </td>
        <td>
           <?php echo $leerlingnummer4; ?>
        </td>
        <td>
            <?php echo $leerlingleeftijd4; ?>
        </td>
        <td>
            <?php echo $leerlingplaats4; ?>
        </td>
    </tr>


    <tr>
        <td> 
            <?php echo ++$leerlingenteller; ?>
        </td>
        <td>
            <?php echo $leerling5; ?>
        </td>
        <td>
           <?php echo $leerlingnummer5; ?>
        </td>
        <td>
            <?php echo $leerlingleeftijd5; ?>
        </td>
        <td>
            <?php echo $leerlingplaats5; ?>
        </td>
    </tr>

    <tr>
        <td colspan="4">
            Gemiddelde leeftijd
        </td>
        <td>
<?php 
$gemiddeldeleeftijd = $totaleleeftijd / $leerlingenteller; 
echo "$gemiddeldeleeftijd van $leerlingenteller leerlingen"; 
?>     
        </td>
    </tr>
    
</table>

<blockquote>

    <pre>

&lt;?php
/*Hier worden de gegevens van de leerlingen toegewezen aan variabelen*/
$leerling1 = "Thom Veldpaus";
$leerlingnummer1 = "317935";
$leerlingleeftijd1 = 23;
$leerlingplaats1 = "Vught";


$leerling2 = "Tom Simons";
$leerlingnummer2 = "317936";
$leerlingleeftijd2 = 19;
$leerlingplaats2 = "Tilburg";


$leerling3 = "Roy Vissers";
$leerlingnummer3 = "317937";
$leerlingleeftijd3 = 17;
$leerlingplaats3 = "Oss";


$leerling4 = "Luc Warmerdam";
$leerlingnummer4 = "317938";
$leerlingleeftijd4 = 17;
$leerlingplaats4 = "Oss";


$leerling5 = "Toby Beks";
$leerlingnummer5 = "317939";
$leerlingleeftijd5 = 17;
$leerlingplaats5 = "'s-Hertogenbosch";

/*wanneer er leerlingen worden toegevoegd aan bovenstaande lijst dient ook hier de leerling aan het rijtje te worden toegevoegd anders
zal de berekening van de gemiddelde leeftijd deze niet meenemen in de berekening. Wel word het gemiddelde gedeeld door de
leerlingenteller, met andere woorden, het aantal cellen die gemaakt zijn en ++$leerlingenteller bevatten*/

$totaleleeftijd = $leerlingleeftijd1 + $leerlingleeftijd2 + $leerlingleeftijd3 + $leerlingleeftijd4 + $leerlingleeftijd5;

$leerlingenteller = 0;

?&gt;

    </pre>


</blockquote>








    </body>
</html>













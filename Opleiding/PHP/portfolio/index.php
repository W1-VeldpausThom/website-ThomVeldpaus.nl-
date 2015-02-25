<?php    
    $websiteTitle = "Portfolio Thom Veldpaus"; //regel 113
    $datum_jaar = date ('Y'); //regel 16
    $h1 = "Welkom op mijn portfolio!";

    /*menuitems*/
    $menuHome = '<table class="tablemenu"><tr><td><a href="index.php">Home</a></td>'; //regel 13
    $menuHobbys = "<td><a href='hobbys.php'>Hobby's</a></td>";//regel 13
    $menuOpleiding = "<td><a href='opleiding.php'>Opleiding</a></td>";//regel 13
    $menuContact = "<td><a href='contact.php'>Contact</a></td></tr></table>";//regel 13

    /*genereren van menu*/
    $menu = "<div class='menu'>$menuHome $menuHobbys $menuOpleiding $menuContact </div>"; //regel 137

    /*Up to date copyright text on the bottom of the website.*/
    $copyright = "<p class='bericht' style='text-align: center;'>copyright &copy;$datum_jaar </p>"; //regel 246	
    /*Genereren van de $welkomBoodschap op regel */

    /*$tijd_meter geeft het uur aan van de 24-uursklok in een getal voorbeeld: wanneer $tijd_meter = 18 dan kan het 18:00 tm 18:59 zijn*/
    $tijd_meter = date('G'); 
    /*dayOfTheWeek geeft de nummer van de dag weer in een getal 1 tm 7 waar maandag = 1 tm zondag = 7*/
    $dayOfTheWeek = date('N');

    $tijd = date('H:i');//"H" is uur en "i" is minuut gescheiden door een puntkomma(':') teken 
    /*Het volgende zorgt ervoor dat het nummer van $dayOfTheWeek een geschreven dag word in de welkomstboodschap*/ 
    if ($dayOfTheWeek > 0) 
    {
       if($dayOfTheWeek >1)
       {
           if($dayOfTheWeek > 2)
           {
                if($dayOfTheWeek > 3)
                {
                    if($dayOfTheWeek > 4)
                    {
                        if($dayOfTheWeek > 5)
                        {
                            if($dayOfTheWeek > 6)
                            {
                                $dagVanDeWeek = "Zondag";
                            }
                            else
                            {
                                $dagVanDeWeek = "Zaterdag";
                            }
                        }
                        else
                        {
                            $dagVanDeWeek = "Vrijdag";
                        }
                    }
                    else
                    {
                        $dagVanDeWeek = "Donderdag";
                    }
                }
                else
                {
                    $dagVanDeWeek = "Woensdag";
                }    
           }

           else
           {
               $dagVanDeWeek = "Dinsdag";
           }
       }
       else
       {
           $dagVanDeWeek = "Maandag";
       }
    }
    
    /*dit genereerd de uiteindelijke boodschap op regel 146*/
    if ($tijd_meter < 24)
    {
        if($tijd_meter > 17)
        {
            $welkomBoodschap = "Goedenavond bezoeker! Het is vandaag $dagVanDeWeek $tijd" ;
        }
        else
        {
            if($tijd_meter > 12)
            {
                $welkomBoodschap = "Goedemiddag bezoeker! Het is vandaag $dagVanDeWeek $tijd" ;
            }
            else
            {
                if($tijd_meter > 6)
                {
                    $welkomBoodschap = "Goedemorgen bezoeker! Het is vandaag $dagVanDeWeek $tijd" ;
                }
                else
                {
                    $welkomBoodschap = "Slaap lekker, het is al $dagVanDeWeek $tijd !" ;
                }
            }
        }
    }





	

echo <<<HTML
<!DOCTYPE html>


<html xmlns="http://www.w3.org/1999/xhtml"> 
	<head>
		
		<title>
			$websiteTitle
		</title>
		
		<!--
			verbinding leggen met het STYLE.css bestand in de CSS map onder de hoofdmap.
		-->
		
		<link rel="stylesheet" href="./CSS/STYLE.css" type="text/css" />		
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin" />
		
		
	</head>

   
	<body>
		
		<!-- DIV classe content1 wordt geopend-->
		<div class="content1">
			<a href="index.php">
				<img src="waashazig.jpg" alt="waashazig" id="toplogo" />
			</a>
			<!-- DIV classe "menu" wordt geopend -->
			$menu
			
			
		</div>
		<div class="content2">
			
			<div class="content3">
				<p class="bericht">
                    <!--Hier staat de welkomst boodschap-->
                        $welkomBoodschap
                    
                </p>
				
				
			</div>
			<div class="content4">
				
                

				<table class="htmltags">
					<tr>
						<th class="thvak">Vak</th>
						<th class="cijfer">Cijfer</th>
					</tr>
					<tr class="evenrij">
						<td class="tdvak">Duits</td>
						<td class="tdcijfer">8</td>
					</tr>
					<tr class="onevenrij">
						<td class="tdvak">Economie</td>
						<td class="tdcijfer">6</td>
					</tr>
					<tr class="evenrij">
						<td class="tdvak">Nederlandse taal</td>
						<td class="tdcijfer">7</td>
					</tr>
					<tr class="onevenrij">
						<td class="tdvak">Engelse taal</td>
						<td class="tdcijfer">8</td>
					</tr>
					<tr class="evenrij">
						<td class="tdvak">Wiskunde</td>
						<td class="tdcijfer">7</td>
					</tr>
					<tr class="onevenrij">
						<td class="tdvak">Biologie</td>
						<td class="tdcijfer">6</td>
					</tr>
					<tr class="evenrij">
						<td class="tdvak">Geschiedenis en staatsinrichting</td>
						<td class="tdcijfer">7</td>
					</tr>
					
				</table>
				
				<table class="htmltags">
					<tr>
						<th class="tag">Tag</th>
						<th class="afgeleid">Afgeleid van</th>
						<th class="uitleg">Uitleg</th>
					</tr>
					<tr class="evenrij">
						<td class="tag">&lt;html&gt;</td>
						<td class="afgeleid">HyperText Markup Language</td>
						<td class="uitleg">
							Je opend en sluit elk HTML document met de HTML tag, het gebruik
							van deze tag is verplicht.
						</td>
					</tr>
					<tr class="onevenrij">
						<td class="tag">&lt;head&gt;</td>
						<td class="afgeleid">*</td>
						<td class="uitleg">
							In deze tag worden de instellingen van de pagina bepaald, denk aan
							de paginatitel, het te koppelen CSS bestand en eventueel gebruikte 
							lettertypen die online beschikbaar zijn. Deze tag wordt gebruikt na 
							de HTML en DOCTYPE tag en moet worden gesloten voor het openen van 
							de BODY tag.
						</td>
					</tr>
					<tr class="evenrij">
						<td class="tag">&lt;body&gt;</td>
						<td class="afgeleid">*</td>
						<td class="uitleg">
							Deze tag is net als de HEAD tag verplicht te gebruiken. De BODY wil eigenlijk 
							zeggen het "zichtbare" deel van de webpagina. Alles wat hierin wordt gezet wordt 
							op de daadwerkelijke pagina weergegeven.
						</td>
					</tr>
					<tr class="onevenrij">
						<td class="tag">&lt;title&gt;</td>
						<td class="afgeleid">*</td>
						<td class="uitleg">
							Deze tag plaats je in de HEAD van je pagina. Alles wat je tussen deze tags zet 
							is hetgene wat op het tabblad van de pagina wordt weergegeven.  
						</td>
					</tr>
					<tr class="onevenrij">
						<td class="tag">&lt;/title&gt;</td>
						<td class="afgeleid">*</td>
						<td class="uitleg">
							Een tag sluiten doe je door het plaatsen van een / aan het begin van een tag.
							na het "minder dan" (&lt;) teken met daarop volgend de tag die je wilt sluiten
							net als in dit voorbeeld is gedaan met de &lt;title&gt; -tag.
						</td>
					</tr>
					
					
				</table>
				$copyright  
			</div>
			
		</div>
		<br />
		
            
        
	</body>
</html>
HTML
?>
<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>HEREDOC / NOWDOC</title>
    </head>
    <body>
        <h2>2 Manieren om een lange tekst in een variabele te zetten of te printen met echo</h2>

<?php



//HEREDOC voorbeeld
$my_string = <<<TEST
Het Koning Willem I College is samen met internationale partners op zoek naar goed werkende professionaliseringsmodellen in Europa. Het college participeert sinds 2012 in het Europese project.
TEST;

echo $my_string;

//NOWDOC voorbeeld
echo <<<'EOT'
Mijn naam is "$name". I am printing some $stuff.
EOT;
//verschil: Met NOWDOC worden geen variabelen geïnterpreteerd.


?>
    </body>
</html>

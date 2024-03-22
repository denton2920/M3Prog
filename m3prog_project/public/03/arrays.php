


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$namen = ["de","het","hallo","dag","ha"];
$namen_tekst = [];
print_r($namen);
echo "<br>";
echo count($namen);
echo "<br>";
sort($namen);
print_r($namen);
echo "<br>";
array_pop($namen);
print_r($namen);
echo "<br>";
array_push($namen, ["??"]);
print_r($namen);
echo "<br>";
implode("<br>", $namen_tekst);
print_r ($namen_tekst);
explode($namen_tekst);
echo "<br>";
print_r($namen_tekst);
?>

</body>
</html>
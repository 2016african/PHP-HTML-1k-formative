<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    echo "Jūsu atbildes:";


    echo "<ul>";
echo ($_POST["Vārds"]);
echo "<br>";
echo ($_POST["Epasts"]);
echo "<br>";
echo ($_POST["Atsauksmes"]);
echo "</ul>";

echo '<a href="about.php"> About page </a>';
echo "<br>";
echo '<a href="contact.html"> Contact page </a>';
echo "<br>";
echo '<a href="Index.html"> Index page </a>';
    ?>

</body>
</html>
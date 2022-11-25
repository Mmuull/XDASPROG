<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan 1 PHP</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 5;
        $x = $a + $b;
        $y = $x + $b;
        $z = $a + $x;

        echo "<h1>" .$x. "</h1>";
        echo "<h2>" .$y. "</h2>";
        echo "<h3>" .$z. "</h3>";
    ?>
    <br>
    <h1><?php echo $x?></h1>
    <h2><?php echo $y?></h2>
    <h3><?php echo $z?></h3>
</body>
</html>
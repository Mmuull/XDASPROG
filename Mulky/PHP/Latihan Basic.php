<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan Basic PHP</title>
</head>
<body>
    <?php
        $a = 4;
        $b = 5;
        $x = $a + $b;
        $y = $x + $b;
        $z = $a + $x;

        $q = 5.1;
        $w = true;
        $e = "Hello";
        $r = array ("qwerty","asdfgh");

        echo "<h1>" .$x. "</h1>";
        echo "<h2>" .$y. "</h2>";
        echo "<h3>" .$z. "</h3>";

        echo var_dump($q)."<br>";
        echo var_dump($w)."<br>";
        echo var_dump($e)."<br>";
        echo var_dump($r)."<br>";
    ?>
    <br>
    <h1><?php echo $x?></h1>
    <h2><?php echo $y?></h2>
    <h3><?php echo $z?></h3>
</body>
</html>
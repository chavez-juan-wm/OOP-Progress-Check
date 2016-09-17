<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OOP in PHP</title>

        <?php include("classLib.php"); ?>
    </head>

    <body>
        <?php
            $chubby = new Animal("Chubby", "Siamese Cat");
            $chubby->__set("age", 2);
            echo $chubby->name . "'s age is " . $chubby->__get("age"). '.<br><br>';

            $tootsie = new Dog("Tootsie", "Chihuahua");
            $tootsie->__set("age", 3);
            echo "<br>" . $tootsie->name . "'s age is " . $tootsie->__get("age");
            echo "<br> Is " . $tootsie->name . " friendly? " . $tootsie->friendly;
        ?>
    </body>
</html>
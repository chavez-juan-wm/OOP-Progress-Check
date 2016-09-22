<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>OOP in PHP</title>

        <?php
            //Includes the libraries needed for the classes
            include "classLib.php";
            spl_autoload_register(function($class_name)
            {
                include $class_name . ".php";
            });
        ?>
    </head>

    <body>
        <?php
            //Creates a new instance of the cat class
            $chubby = new Cat("Chubby", "Siamese Cat");
            $chubby->__set("age", 2);
            echo $chubby->name . "'s age is " . $chubby->__get("age"). '.<br><br>';

            //Creates a new instance of the dog class
            $tootsie = new Dog("Tootsie", "Chihuahua");
            $tootsie->favorite();
            $tootsie->__set("age", 3);
            echo "<br>" . $tootsie->name . "'s age is " . $tootsie->__get("age") . ".";
            echo "<br> Is " . $tootsie->name . " friendly? " . $tootsie->friendly;

            //Creates a new instance of the fish class
            $fish = new Fish("Charlie","Betta Fish");
            $fish->__set("age", 1);
            echo "<br>" . $fish->name . "'s age is " . $fish->__get("age") . ".<br><br>";

            //Calls the nameLength method in the Animal class and echoes text depending on the returned value
            $longName = "Balaenoptera Acutorostrata";
            if(Animal::nameLength($longName))
                echo $longName . " is one long name!";
            else
                echo $longName . " isn't that long.";
        ?>
    </body>
</html>
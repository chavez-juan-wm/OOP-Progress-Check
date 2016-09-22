<?php
    //Creates a new class extending from the Animal class
    class Cat extends Animal
    {
        /* When the class is instantiated this code runs and uses the construct from the parent class.
        It also runs the iterateObject method in the class */
        public function __construct($name, $breed)
        {
            parent::__construct($name, $breed);
            $this->iterateObject();
        }

        //Uses the sound method because it is required
        public function sound()
        {
            $this->sound = "meow";
            echo $this->name . " makes a " . $this->sound . " sound.<br>";
        }

        //This iterates through the properties of the class
        public function iterateObject()
        {
            echo "Object Iteration: ";
            foreach($this as $key=>$value)
            {
                print "$key => $value\n";
            }
            echo "<br>";
        }
    }
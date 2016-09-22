<?php
    //Creates a new class extending from the Animal class
    class Fish extends Animal
    {
        /* When the class is instantiated this code runs and uses the construct from the parent class */
        public function __construct($name, $breed)
        {
            parent::__construct($name, $breed);
        }

        //Uses the sound method because it is required
        public function sound()
        {
            echo "<br><br>" . $this->name . " doesn't make a sound because he's a silent fish.";
        }
    }
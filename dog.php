<?php
    //Creates a new class extending from the Animal class
    class Dog extends Animal
    {
        //Adds a new attribute called friendly and set it to "True"
        public $friendly = "True";

        /* When the class is instantiated this code runs and uses the construct from the parent class */
        public function __construct($name, $breed)
        {
            parent::__construct($name, $breed);
        }

        //Uses the sound method because it is required
        public function sound()
        {
            $this->sound = "bark";
            echo $this->name . " makes a " . $this->sound . " sound.";
        }
    }
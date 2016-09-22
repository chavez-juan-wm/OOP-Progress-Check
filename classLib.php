<?php
    abstract class Animal
    {
        //Creates the attributes for the class
        private $age = array();
        public $name;
        public $sound;
        static $longName = 20;

        /* When the class is instantiated this code runs to set the values for the properties of name and breed
         and it runs the sound method */
        public function __construct($name, $breed)
        {
            $this->name = $name;
            $this->breed = $breed;
            $this->sound();
        }

        //Sets the value for age in the array
        public function __set($name, $value)
        {
            $this->age[$name] = $value;
        }

        //Gets the age from the array
        public function __get($name)
        {
            return $this->age[$name];
        }

        //Every child class will have to use this method
        abstract public function sound();

        //This sets my favorite animal as Tootsie no matter what, the children classes can't change this because it's FINAL!
        final public function favorite()
        {
            echo "<br> Tootsie is my favorite animal!";
        }

        //Checks the length of the name and returns true or false depending on the length of the name
        public static function nameLength($name)
        {
            if(strlen($name) >= self::$longName)
                return true;
            else
                return false;
        }
    }
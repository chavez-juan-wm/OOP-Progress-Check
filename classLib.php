<?php
    class Animal
    {
        private $data = array();
        public $name;
        protected $breed;
        public $sound;

        public function __construct($name, $breed)
        {
            $this->name = $name;
            $this->breed = $breed;
            $this->sound();
            $this->favorite();
        }

        public function __set($name, $value)
        {
            $this->data[$name] = $value;
        }

        public function __get($name)
        {
            return $this->data[$name];
        }

        public function sound()
        {
            $this->sound = "meow";
            echo $this->name . " makes a " . $this->sound . " sound.";
        }

        private function favorite()
        {
            if($this->breed == "Siamese Cat")
                echo "<br> " . $this->name . " is my favorite cat! <br>";
            else
                echo "<br> I like " . $this->name . ".";
        }
    }

    class Dog extends Animal
    {
        public $friendly = "True";

        public function __construct($name, $breed)
        {
            parent::__construct($name, $breed);
        }

        public function sound()
        {
            $this->sound = "bark";
            echo $this->name . " makes a " . $this->sound . " sound.";
        }
    }
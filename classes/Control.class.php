<?php

	// This class will be inherit by other classes (TextBox, Select, TextArea...)
	class Control{
		
		private $label;
        private $name;
        private $cssClass;
		
		function __construct($label, $name, $cssClass){
            $this->label = $label;
            $this->name = $name;
            $this->cssClass = $cssClass;
        }

        /**
         * @return mixed
         */
        public function getLabel(){
            return $this->label;
        }

        /**
         * @param mixed $label
         */
        public function setLabel($label){
            $this->label = $label;
        }

        /**
         * @return mixed
         */
        public function getName(){
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name){
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getCssClass(){
            return $this->cssClass;
        }

        /**
         * @param mixed $cssClass
         */
        public function setCssClass($cssClass){
            $this->cssClass = $cssClass;
        }
	}

?>
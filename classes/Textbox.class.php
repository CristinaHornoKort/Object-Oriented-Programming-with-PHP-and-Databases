<?php

	//This class will extend the Control class
	//meaning that ALL the members of the Control class will be automatically inherit to this class
	//i.e. - all attributes of the Control class ($label, $name, $cssClass) are automatically added to this class
	class Textbox extends Control{
		
		private $type;
        private $placeholder;

		public function __construct($_label, $_name, $_type, $_placeholder, $_cssClass){
			
			$this->setLabel($label);
            $this->setName($name);
            $this->setCssClass($cssClass);

            $this->placeholder = $placeholder;
            $this->type = $type;
			
		}

		public function draw(){
			
			$htmlContent = '<label for="'.$this->getName().'">'.$this->getLabel().'</label>';
            $htmlContent .= '<input id="'.$this->getName().'" type="'.$this->type.'" name="'.$this->getName().'" placeholder="'.$this->placeholder.'" class="'.$this->getCssClass().'"  />';

            echo $htmlContent;
			
		}

	}
?>
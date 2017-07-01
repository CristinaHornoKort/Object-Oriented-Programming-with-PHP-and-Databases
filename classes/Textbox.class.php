<?php

	//this class will extend the Control class
	//meaning that ALL the members of the Control class will be automatically inherit to this class
	//i.e. - all attributes of the Control class ($label, $name, $cssClass) are automatically added to this class
	class Textbox extends Control{
		public $type;
		public $placeholder;

		public function __construct($_label, $_name, $_type, $_placeholder, $_cssClass){
			
			$this->label = $_label; //Control class
			$this->name = $_name; //Control class
			$this->type = $_type;
			$this->placeholder = $_placeholder;
			$this->cssClass = $_cssClass; //Control class
			
		}

		public function draw(){
			
			$htmlContent = '<label for="'.$this->name.'">'.$this->label.'</label>';
			$htmlContent .= '<input name="'.$this->name.'" id="'.$this->name.'" type="'.$this->type.'" placeholder="'.$this->placeholder.'" class="'.$this->cssClass.'" />';
			
			echo $htmlContent;
			
		}

	}
?>
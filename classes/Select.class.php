<?php

	class Select extends Control{
		public $options;

		public function __construct($_label, $_name, $_options, $_cssClass){
			
			$this->label = $_label; //Control class
			$this->name = $_name; //Control class
			$this->options = $_options; //$_options has to be an array
			$this->cssClass = $_cssClass; //Control class
						
		}

		public function draw(){
			
			$htmlContent = '<label for="'.$this->name.'">'.$this->label.'</label>';
			$htmlContent .= '<select name="'.$this->name.'" id="'.$this->name.'">';
			foreach ($this->options as $value){
				$htmlContent .= '<option value="'.$value["id"].'">'.$value["name"].'</option>';
			}
			$htmlContent .= '</select>';
			echo $htmlContent;
			
		}
	}

?>
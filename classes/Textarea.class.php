<?php

	class Textarea extends Control{
		public $rows;
		public $cols;
		public $placeholder;

		public function __construct($_label, $_name, $_rows, $_cols, $_placeholder, $_cssClass){
			
			$this->label = $_label; //Control class
			$this->name = $_name; //Control class
			$this->rows = $_rows;
			$this->cols = $_cols;
			$this->placeholder = $_placeholder;
			$this->cssClass = $_cssClass; //Control class
			
		}

		public function draw(){
			
			$htmlContent = '<label for="'.$this->name.'">'.$this->label.'</label>';
			$htmlContent .= '</br><textarea rows="'.$this->rows.'" cols="'.$this->cols.'" name="'.$this->name.'" id="'.$this->name.'" placeholder="'.$this->placeholder.'" class="'.$this->cssClass.'"  ></textarea>';
			
			echo $htmlContent;
			
		}

	}

?>
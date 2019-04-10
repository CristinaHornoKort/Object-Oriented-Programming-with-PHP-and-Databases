<?php

	class Textarea extends Control{
		
		private $rows;
        private $cols;
        private $placeholder;

		public function __construct($_label, $_name, $_rows, $_cols, $_placeholder, $_cssClass){
			
			$this->setLabel($label);
            $this->setName($name);
            $this->rows = $rows;
            $this->cols = $cols;
            $this->placeholder = $placeholder;
            $this->setCssClass($cssClass);
			
		}

		public function draw(){
			
			$htmlContent = '<label for = "'.$this->getName().'">'.$this->getLabel().'</label>';
            $htmlContent .= '<textarea id="'.$this->getName().'" name="'.$this->getName().'" rows="'.$this->rows.'" cols="'.$this->cols   .'"  class="'.$this->getCssClass().'"  ></textarea>';

            echo $htmlContent;

            ?>
                </br></br>
            <?
			
		}

	}

?>
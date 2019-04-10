<?php

	class Select extends Control{
		
		private $options;

		public function __construct($_label, $_name, $_options, $_cssClass){
			
			$this->setLabel($label);
            $this->setName($name);
            $this->options = $_options;
            $this->setCssClass($cssClass);
						
		}

		public function draw(){
			
			$htmlContent = '<label for="'.$this->getName().'">'.$this->getLabel().'</label>';
            $htmlContent .= '<select name="'.$this->getName().'" id="'.$this->getName().'">';
            foreach ($this->options as $value){
                $htmlContent .= '<option value="'.$value["id"].'">'.$value["name"].'</option>';
            }
            $htmlContent .= '</select></br></br>';

            echo $htmlContent;
			
		}
	}

?>
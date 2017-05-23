<?php 
	
	class Fr_slider extends Db{
		public function slide_show(){
			$return = array();
			$this->arrays = $this->handeller->query("SELECT * FROM `slider`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['img'] = $sl['sl_img'];
				$p['name'] = $sl['sl_name'];
				array_push($return,$p);			
				}
			return $return;								  
			
		}
		
				
	}
	
	?>
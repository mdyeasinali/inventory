<?php 
	
	class Fr_adv extends Db{
		public function Show_adv_botm(){
		$return = array();	
		$this->arrays = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_footer`='1' ORDER BY `ad_id` limit 0,1");		
			foreach($this->arrays as $sl){
				$p = array();
				$p['title'] = $sl['ad_title'];
				$p['url'] = $sl['ad_url'];
				array_push($return,$p);			
				}
			return $return;		
		 
		}
		
				
	}
	
	?>
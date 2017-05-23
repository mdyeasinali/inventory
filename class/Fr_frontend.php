<?php 	
	class Fr_frontend extends Db{
		
		public function frontend_show(){
			$return = array();
			$this->arrays = $this->handeller->query("SELECT * FROM `frontend`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['title'] = $sl['title'];
				$p['slogan'] = $sl['slogan'];
				$p['logo'] = $sl['logo'];
				$p['store_name'] = $sl['store_name'];				
				$p['owner_name'] = $sl['store_owner_name'];				
				$p['email'] = $sl['email'];
				$p['phone'] = $sl['phone'];
				$p['address'] = $sl['address'];
				$p['latitude'] = $sl['maps_latitude'];
				$p['longitude'] = $sl['maps_longitude'];
				$p['keyword'] = $sl['meta_keyword'];
				$p['meta_title'] = $sl['meta_title'];
				$p['meta_dis'] = $sl['meta_dis'];
				$p['bag_img'] = $sl['bag_img'];
				$p['copyr'] = $sl['copy_text'];
				$p['facebook'] = $sl['facebook'];
				$p['twitter'] = $sl['twitter'];
				$p['youtube'] = $sl['youtube'];
				$p['google'] = $sl['google'];					
				array_push($return,$p);			
				}
			return $return[0];	
		}
		public function get_front_data(){
		  $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `frontend`");
			foreach($this->arrays as $sl){
				$p = array();				
				$p['email'] = $sl['email'];
				array_push($return,$p);			
				}
			return $return;		
		 }
		
		public function get_store_email(){
		$data = $this->get_front_data();
		foreach($data as $em){
			return $em['email'];			
			}
		}		
				
	}
	
	?>
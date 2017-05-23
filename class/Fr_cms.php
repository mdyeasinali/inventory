<?php 
	class Fr_cms extends Db{
		
		public function all_cms_show(){
			$return = array();
			$this->arrays = $this->handeller->query("SELECT * FROM `information`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['title'] = $sl['Information_title'];
				$p['seo'] = $sl['Information_seo_keyword'];
				$p['des'] = $sl['Information_description'];
				array_push($return,$p);			
				}
			return $return;	
		}
		
		public function cms_show($seo){
				$return = array();
				$row = $this->handeller->query("SELECT * FROM `information`  WHERE `Information_seo_keyword` = '$seo'");
						foreach($row as $c){
							$p = array();					
							$p['in_title'] = $c['Information_title'];
							$p['in_des'] = $c['Information_description'];
							$p['in_title'] = $c['Information_meta_title'];
							$p['in_des'] = $c['Information_meta_description'];
							$p['in_key'] = $c['Information_meta_keyword'];
							$p['in_stores'] = $c['Information_meta_stores'];
							$p['in_seo'] = $c['Information_seo_keyword'];							
				array_push($return,$p);			
				}
				
			return $return[0];
	}
				
	}
	
	?>
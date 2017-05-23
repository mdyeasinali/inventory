<?php 
	class Fr_agent extends Db{
		public function agent_show(){
			$return = array();
			$row = $this->handeller->query("SELECT * FROM `agent` ORDER BY `a_id` DESC limit 0,3");
			foreach($row as $c){
				$p = array();
				$p['id'] = $c['a_id'];
				$p['fn'] = $c['f_n'];
				$p['ln'] = $c['l_n'];
				$p['abt'] = $c['abt'];
				$p['exp'] = $c['exp'];
				$p['sale'] = $c['sale'];
				$p['a_img'] = $c['a_img'];
				$p['seo'] = $c['a_seo_url'];
				$p['em'] = $c['em'];
				$p['mob'] = $c['mob'];
				$p['ph'] = $c['ph'];
				$p['ad1'] = $c['ad1'];
				$p['ad2'] = $c['ad2'];
				$p['tw'] = $c['tw'];
				$p['fb'] = $c['fb'];
				$p['lkd'] = $c['lkd'];
				$p['gl'] = $c['gl'];
				$p['skp'] = $c['skp'];
				array_push($return,$p);			
			}
			return $return;
		}
		public function top_agent_show(){
			$return = array();
			$row = $this->handeller->query("SELECT * FROM `agent` ORDER BY `sale` DESC limit 0,3");
			foreach($row as $c){
				$p = array();
				$p['id'] = $c['a_id'];
				$p['fn'] = $c['f_n'];
				$p['ln'] = $c['l_n'];
				$p['abt'] = $c['abt'];
				$p['exp'] = $c['exp'];
				$p['sale'] = $c['sale'];
				$p['a_img'] = $c['a_img'];
				$p['seo'] = $c['a_seo_url'];
				$p['em'] = $c['em'];
				$p['mob'] = $c['mob'];
				$p['ph'] = $c['ph'];
				$p['ad1'] = $c['ad1'];
				$p['ad2'] = $c['ad2'];
				$p['tw'] = $c['tw'];
				$p['fb'] = $c['fb'];
				$p['lkd'] = $c['lkd'];
				$p['gl'] = $c['gl'];
				$p['skp'] = $c['skp'];
				array_push($return,$p);			
			}
			return $return;
		}
		
		public function single_agent_show($seo){
			$return = array();
			$row = $this->handeller->query("SELECT * FROM `agent`  WHERE `a_seo_url` = '$seo'");
			foreach($row as $c){
				$p = array();							
				$p['id'] = $c['a_id'];
				$p['fn'] = $c['f_n'];
				$p['ln'] = $c['l_n'];
				$p['abt'] = $c['abt'];
				$p['exp'] = $c['exp'];
				$p['a_img'] = $c['a_img'];
				$p['seo'] = $c['a_seo_url'];
				$p['em'] = $c['em'];
				$p['mob'] = $c['mob'];
				$p['ph'] = $c['ph'];
				$p['ad1'] = $c['ad1'];
				$p['ad2'] = $c['ad2'];
				$p['tw'] = $c['tw'];
				$p['fb'] = $c['fb'];
				$p['lkd'] = $c['lkd'];
				$p['gl'] = $c['gl'];
				$p['skp'] = $c['skp'];						
						
						
				array_push($return,$p);			
			}
			return $return[0];
		}
				
			
	}
	
	?>
<?php 
	
	class Fr_property extends Db{			
		public function property_show(){
				$return = array();
				$row = $this->handeller->query("SELECT * FROM `properties` ORDER BY `pro_id` DESC limit 0,12");
						foreach($row as $c){
							$p = array();							
							$p['id'] = $c['pro_id'];
							$p['pro_title'] = $c['pro_title'];
							$p['dis'] = $c['pro_dis'];
							$p['m_title'] = $c['pro_m_title'];
							$p['m_dis'] = $c['pro_m_dis'];
							$p['owner_name'] = $c['pro_owner_name'];
							$p['agents_name'] = $c['pro_agents_name'];
							$p['location'] = $c['pro_location'];
							$p['latitude'] = $c['maps_latitude'];
							$p['longitude'] = $c['maps_longitude'];
							$p['seo'] = $c['pro_seo_url'];
							$p['type'] = $c['pro_type'];
							$p['status2'] = $c['pro_status2'];
							$p['ex_date'] = $c['pro_ex_date'];
							$p['price'] = $c['pro_price'];
							$p['pro_img'] = $c['pro_img'];
							$p['plans_img'] = $c['pro_plans_img'];
							$p['dom'] = $c['pro_dom'];
							$p['area'] = $c['pro_area'];
							$p['bed_rooms'] = $c['pro_bed_rooms'];
							$p['dining_room'] = $c['p_dining_room'];
							$p['baths'] = $c['pro_baths'];
							$p['garages'] = $c['pro_garages'];
				array_push($return,$p);			
				}
			return $return;
		}
		
	public function single_property_show($seo){
				$return = array();
				$row = $this->handeller->query("SELECT * FROM `properties`  WHERE `pro_seo_url` = '$seo'");
						foreach($row as $c){
							$p = array();							
							$p['id'] = $c['pro_id'];
							$p['pro_title'] = $c['pro_title'];
							$p['dis'] = $c['pro_dis'];
							$p['m_title'] = $c['pro_m_title'];
							$p['m_dis'] = $c['pro_m_dis'];
							$p['owner_name'] = $c['pro_owner_name'];
							$p['agents_name'] = $c['pro_agents_name'];
							$p['location'] = $c['pro_location'];
							$p['latitude'] = $c['maps_latitude'];
							$p['longitude'] = $c['maps_longitude'];
							$p['seo'] = $c['pro_seo_url'];
							$p['type'] = $c['pro_type'];
							$p['status2'] = $c['pro_status2'];
							$p['ex_date'] = $c['pro_ex_date'];
							$p['price'] = $c['pro_price'];
							$p['pro_img'] = $c['pro_img'];
							
							$p['p_sl_img1'] = $c['p_sl_img1'];
							$p['p_sl_img2'] = $c['p_sl_img2'];
							$p['p_sl_img3'] = $c['p_sl_img3'];
							$p['p_sl_img4'] = $c['p_sl_img4'];
							
							$p['plans_img'] = $c['pro_plans_img'];
							$p['dom'] = $c['pro_dom'];
							$p['area'] = $c['pro_area'];
							$p['bed_rooms'] = $c['pro_bed_rooms'];
							$p['dining_room'] = $c['p_dining_room'];
							$p['baths'] = $c['pro_baths'];
							$p['garages'] = $c['pro_garages'];
							$p['air'] = $c['p_air'];
							$p['bal'] = $c['p_bal'];
							$p['ct'] = $c['p_ct'];
							$p['cp'] = $c['p_cp'];
							$p['dish'] = $c['p_dish'];
							$p['fridge'] = $c['p_fridge'];
							$p['grill'] = $c['p_grill'];
							$p['heating'] = $c['p_heating'];
							$p['micro'] = $c['p_micro'];
							$p['oven'] = $c['p_oven'];
							$p['parking'] = $c['p_parking'];
							$p['terrace'] = $c['p_terrace'];
							$p['spr'] = $c['p_spr'];
							$p['toast'] = $c['p_toast'];
							$p['den'] = $c['p_den'];
							$p['op'] = $c['p_op'];
							$p['ig'] = $c['p_ig'];
							$p['int'] = $c['p_int'];
							$p['out'] = $c['p_out'];
							$p['rt'] = $c['p_rt'];
							$p['status'] = $c['pro_status'];
							$p['baths'] = $c['pro_baths'];
							$p['garages'] = $c['pro_garages'];						
							
							
				array_push($return,$p);			
				}
				
			return $return[0];
	}
				
	}
	
	?>
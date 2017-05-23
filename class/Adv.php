<?php
 class Adv extends db{	
 		public function adv_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `advertise`");
			foreach($this->arrays as $adv){
				$p = array();
				$p['id'] = $adv['ad_id'];
				$p['ad_title'] = $adv['ad_title'];				
					if($adv['ad_footer'] == 1){
						$p['ad_footer'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_footer'] = '<span class="label label-danger">Disable</span>';
							}
					if($adv['ad_p_page'] == 1){
						$p['ad_p_page'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_p_page'] = '<span class="label label-danger">Disable</span>';
							}
					if($adv['ad_st'] == 1){
						$p['ad_st'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['ad_st'] = '<span class="label label-danger">Disable</span>';
							}
				array_push($return,$p);			
				}
			return $return;	
		}
		
		
		public function add_adv($ad_title,$ad_url,$ad_footer,$ad_p_page,$ad_st,$tkn){		
			$data = array($ad_title,$ad_url,$ad_footer,$ad_p_page,$ad_st);
			$this->arrays = $this->handeller->prepare("INSERT INTO `advertise` (`ad_title`,`ad_url`, `ad_footer`, `ad_p_page`, `ad_st`) VALUES(?, ?, ?, ?, ?)");
			if($this->arrays->execute($data)){
				return $this->url_return(array('advertising.php','Advertisement has been added','success',$tkn));
					}else{
						return $this->url_return(array('advertising.php','Advertisement not added','error',$tkn));
					}				
		}
		
		
		
		public function delete_adv($tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_id` ='$check'");				
				$this->arrays = $this->handeller->prepare("DELETE FROM `advertise` WHERE `ad_id` = ? ");
				if($this->arrays->execute(array($check))){
					$this->url_return(array('advertising.php','Advertisement Deleted', 'success',$tkn));
					}else{
						$this->url_return(array('advertising.php','Advertisement Not Deleted', 'error',$tkn));
						}
    		}
		
		} 
		
		
		
		public function edit_show_adv($adv_id){
			$return = array();
			$advertise = $this->handeller->query("SELECT * FROM `advertise` WHERE `ad_id` = '$adv_id'");
					foreach($advertise as $ec){
						$p = array();							
						$p['title'] = $ec['ad_title'];
						$p['url'] = $ec['ad_url'];
						
						if($ec['ad_footer'] == '1'){
							$p['ad_footer'] = 'checked';
							}else {
								$p['ad_footer'] = '';
								}
						if($ec['ad_p_page'] == '1'){
							$p['ad_p_page'] = 'checked';
							}else {
								$p['ad_p_page'] = '';
								}
						
						if($ec['ad_st'] == '1'){
							$p['ad_st'] = 'checked';
							}else {
								$p['ad_st'] = '';
								}
						array_push($return,$p);
					}
					
			return $return;		
		}
		
		 public function edit_adv($ad_title,$ad_url,$ad_footer,$ad_p_page,$ad_st,$adv_id,$tkn){
			$data = array($ad_title,$ad_url,$ad_footer,$ad_p_page,$ad_st,$adv_id);
			$this->arrays = $this->handeller->prepare("UPDATE `advertise` SET `ad_title` = ? ,`ad_url`=? , `ad_footer`=?,`ad_p_page`=?,`ad_st`=? WHERE `ad_id` = ? ");
			if($this->arrays->execute($data)){
				$this->url_return(array('advertising.php','Advertise Updated', 'success',$tkn));
					}else{
						$this->url_return(array('edit_advertising.php','Advertise Not Update', 'error',$tkn));
					}
		} 
			
		
			
	}
?>
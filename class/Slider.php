<?php
 class Slider extends db{
	  
		public function slider_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `slider`");
			foreach($this->arrays as $sl){
				$p = array();
				$p['id'] = $sl['sl_id'];
				$p['name'] = $sl['sl_name'];
				$p['date'] = $sl['sl_date'];
				$p['img'] = $sl['sl_img'];
					
					if($sl['sl_status'] == 1){
						$p['status'] = '<span class="label label-success">Enable</span>';
						}else {
							$p['status'] = '<span class="label label-danger">Disable</span>';
							}
				array_push($return,$p);			
				}
			return $return;	
		}
		
		
		public function add_slider($sl_name,$sl_url,$ie,$st,$token){			
			$im = $this->image($ie);
				if($im == 10){
						$this->error = 'Image couldnt upload!';
					}				
			$sl_url = $this->get_clean_url($sl_name);	
			$data = array($sl_name,$sl_url,$im,$st);
			$this->arrays = $this->handeller->prepare("INSERT INTO `slider` (`sl_name`, `sl_url`,`sl_img`,`sl_date`,`sl_status`) VALUES(?, ?, ?, NOW(), ?)");
			
			if($this->arrays->execute($data)&& $im != 10){
				return $this->url_return(array('slider.php','Slider hasbeen added','success',$token));
					}else{
						return $this->url_return(array('slider.php','Slider not added '.$this->error,'error',$token));
					}				
		}
		
		
		public function delete_slider($tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `slider` WHERE sl_id ='$check'");
				$row = $this->arrays3->fetch(PDO::FETCH_ASSOC);
				unlink($row['sl_img']);
				$this->arrays = $this->handeller->prepare("DELETE FROM `slider` WHERE sl_id = ? ");
				if($this->arrays->execute(array($check))){
					$this->url_return(array('slider.php','Slider Deleted', 'success',$tkn));
					}else{
						$this->url_return(array('slider.php','Slider Not Deleted', 'error',$tkn));
						}
    		}
		
		}
		
		
		
		public function edit_show_slider($slider_id){
				$return = array();
				$slider = $this->handeller->query("SELECT * FROM `slider` WHERE `sl_id` = '$slider_id'");
						foreach($slider as $ec){
							$p = array();							
							$p['title'] = $ec['sl_name'];
							$p['url'] = $ec['sl_url'];
							$p['img'] = $ec['sl_img'];
							if($ec['sl_status'] == '1'){
								$p['status'] = 'checked="checked"';
								}else {
									$p['status'] = '';
									}
							array_push($return,$p);
						}
						
				return $return;		
			}
		
		public function update_slider($sl_name,$sl_url,$st,$ie,$hidden_img,$tkn,$sl_id){
			if($_FILES[$ie]["size"] == 0 ){
			 $im = $hidden_img;
			 }else{
				 $im = $this->image($ie);
				 if($im == 10){
					 $this->error = 'Image couldnt upload!';
					 }
				   }
			$data = array($st,$sl_name,$sl_url,$im,$sl_id);
			$this->arrays = $this->handeller->prepare("UPDATE `slider` SET `sl_status`= ?,`sl_name` = ? ,`sl_url` = ? ,`sl_img`=? WHERE `sl_id` = ? ");
			if($this->arrays->execute($data)){
				$this->url_return(array('slider.php','Slider Update', 'success',$tkn));
					}else{
						$this->url_return(array('add_slider.php','Slider Not Update', 'error',$tkn));
					}
					}
			
		
			
	 }
?>
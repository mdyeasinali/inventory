<?php 	
	class Frontend extends Db{
		 public function get_frontEnd_data(){
		 $this->arrays = $this->handeller->query("SELECT * FROM `frontend`");
		 return $this->arrays;
	}
		 
	 public function update_frontend($st,$ss,$sn,$son,$pn,$se,$sa,$m_lat,$m_lon,$mk,$mt,$md,$bag_img,$hi_bag_img,$footer_img,$hi_footer_logo,$cr,$fb,$tw,$gl,$yt,$ie,$hi_logo,$tkn){
		 if($_FILES[$ie]["size"] == 0 ){
				 $s_logo = $hi_logo;
				 }else{
					 $s_logo = $this->image($ie);
					 if($s_logo == 10){
						 $this->error = 'Image couldnt upload!';
						 }
					   }
		if($_FILES[$bag_img]["size"] == 0 ){
				 $b_img = $hi_bag_img;
				 }else{
					 $b_img = $this->image($bag_img);
					 if($b_img == 10){
						 $this->error = 'Image couldnt upload!';
						 }
					   }
		if($_FILES[$footer_img]["size"] == 0 ){
				 $f_logo = $hi_footer_logo;
				 }else{
					 $f_logo = $this->image($footer_img);
					 if($f_logo == 10){
						 $this->error = 'Image couldnt upload!';
						 }
					   }				 													
			$data = array($st,$ss,$s_logo,$sn,$son,$pn,$se,$sa,$m_lat,$m_lon,$mk,$mt,$md,$b_img,$f_logo,$cr,$fb,$tw,$gl,$yt);								
			$this->query = $this->handeller->prepare("UPDATE `frontend` SET 
			title = ?, slogan = ?, logo = ?, store_name = ?, store_owner_name = ?, phone = ?, email = ?, address = ?, maps_latitude = ?, maps_longitude = ?, meta_keyword = ?, meta_title = ?, meta_dis = ?, bag_img = ?, footer_img = ?,copy_text = ?, facebook = ?, twitter = ?, google = ?, youtube = ?");
				
				if($this->query->execute($data) && $im != 10){
					return $this->url_return(array('frontend.php','Your Settings has been updated','success',$tkn));
					}else{
						return $this->url_return(array('frontend.php','Your Settings not updated '. $this->error,'eror',$tkn));
						}
		
	}	
	}
	
	?>
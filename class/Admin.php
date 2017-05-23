<?php
	class Admin extends Db{
		public function admin_login($un,$pw){
			 $pw = md5($pw); 
			$this->query = $this->handeller->query("SELECT * FROM `users` WHERE (user_username = '$un' AND user_password = '$pw')");
			$row = $this->query->rowCount();		
			
				if($row > 0){
					$this->data = array($this->user_session_id(),$this->user_agent(),$this->user_ip(),$un,$pw);
					
					$this->query2 = $this->handeller->prepare("UPDATE `users` SET user_session_id = ?, user_agent = ?, user_ip = ? WHERE (user_username = ? AND user_password = ?)");
					$this->query2->execute($this->data);
					
					$this->query3 = $this->handeller->query("SELECT * FROM `users` WHERE (user_username = '$un' AND user_password = '$pw')");
					$row = $this->query3->fetch(PDO::FETCH_ASSOC);					
					$_SESSION['admin'] = $row;	
						$this->url_return(array('index.php','Successfully logged in','success',$this->secure_token($row['user_session_id'])));								
					}else{
						$this->url_return(array('login.php','Invalid Username or Password','error',$this->secure_token($row['user_session_id'])));
						}
			}
			
			public function check_admin_login(){
			if(!isset($_SESSION['admin'])){
				return $this->url_return(array('login.php','Plz Log in to continue','error'));
				}
			}	
			
		public function check_admin_token($tkn){
			if($tkn != md5($_COOKIE["PHPSESSID"])){
				session_destroy();
				session_unset();
				return $this->url_return(array('login.php','Invalid Admin token','error'));
				}
			}			
		public function log_out(){
			if((isset($_GET['log-out'])) && ($_GET['log-out'] == 'true') && ($_GET['token'] == $this->secure_token($_COOKIE['PHPSESSID']))){
				session_destroy();
				session_unset();
				return $this->url_return(array('login.php','Loged Out','error'));
				}
		}
			
		public function admin_data($data){
			$this->data = $_SESSION['admin']; 
			return $this->data[$data];
			}
			
	/*==================================================================amdmin update========================================*/		
		public function admin_update($fn,$ln,$un,$em,$ad1,$ad2,$ie,$hidden_img,$user_id,$token){		
			if($_FILES[$ie]["size"] == 0 ){
					 $u_im = $hidden_img;
					 }else{
						 $u_im = $this->image($ie);
						 if($u_im == 10){
							 $this->error = 'Image couldnt upload!';
							 }
						   }								
		$data = array($fn,$ln,$un,$em,$ad1,$ad2,$u_im,$user_id);
		$this->query = $this->handeller->prepare("UPDATE `users` SET `user_first_name` = ?,`user_last_name` = ?,`user_username` = ?,`user_email` = ?,`user_address` = ?,`user_address2` = ?,`user_img` = ? WHERE `user_id` = ?");			
			if($this->query->execute($data) ){
				return $this->url_return(array('index.php','Your Profile has been updated','success',$token));
				}else{
					return $this->url_return(array('admin_profile.php','Your Profile not updated ','error',$token));
					}			
		}
			
			public function update_user_password($o_pw,$n_pw,$c_pw,$u_id,$tkn){
		  		if($n_pw == $c_pw){
		  		$o_pw = md5($o_pw);
		  		$n_pw = md5($n_pw);
				$this->arrays = $this->handeller->query("SELECT * FROM `users` WHERE `user_id` = '$u_id'");				
		               $row = $this->arrays->fetch();
		  			 	$pass = $row['user_password'];		 		
		  			if($o_pw == $pass){
		  				$this->arrays = $this->handeller->query("UPDATE users SET `user_password`='$n_pw'");						
							$this->url_return(array('index.php','Update password succesfuly','success',$tkn));			  					
		  					}else{
		  						$this->url_return(array('admin_pass.php','Update password  Not succesfuly','error',$tkn));		  						
		  					}
							}else{
								$this->url_return(array('admin_pass.php','New Password and Confirm Password didnt match','error',$tkn));
		  		
		  		}
		      		}
	
	}

?>
<?php 	
	class Agents extends Db{		
	
		public function add_agent($fn,$ln,$abt,$exp,$sale,$em,$mob,$ph,$ad1,$ad2,$tw,$fb,$lkd,$gl,$skp,$ie,$tkn){
			$im = $this->image($ie);
				if($im == 10){
						$this->error = 'Image couldnt upload!';
					}
			$seo_url = $this->get_clean_url($fn);
			$data = array($fn,$ln,$abt,$exp,$seo_url,$sale,$em,$mob,$ph,$ad1,$ad2,$tw,$fb,$lkd,$gl,$skp,$im);							
			$this->query = $this->handeller->prepare("INSERT INTO `agent` (`f_n`,`l_n`,`abt`,`exp`,`a_seo_url`,`sale`,`em`,`mob`,`ph`,`ad1`,`ad2`,`tw`,`fb`,`lkd`,`gl`,`skp`,`a_img`) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? , ? ) ");				
			if($this->query->execute($data) && $im != 10){
				return $this->url_return(array('agents.php','Agent has been added','success',$tkn));
				}else{
					return $this->url_return(array('add_agent.php'.$this->error,'Agent not added ','error',$tkn));
				}
		}
		public function agent_list(){
		 $return = array();
		 $this->arrays = $this->handeller->query("SELECT * FROM `agent`");
			foreach($this->arrays as $us){
				$p = array();
				$p['id'] = $us['a_id'];
				$p['fn'] = $us['f_n'];
				$p['em'] = $us['em'];
				$p['a_img'] = $us['a_img'];
				array_push($return,$p);			
				}
			return $return;	
		}
			
		 public function delete_agent($tkn){
			foreach($_POST['check_list'] as $check) {
				$this->arrays3 = $this->handeller->query("SELECT * FROM `agent` WHERE a_id ='$check'");
				 $this->arrays = $this->handeller->prepare("DELETE FROM `agent` WHERE a_id = ? ");			 		
					if($this->arrays->execute(array($check))){										
						 $this->url_return(array('agents.php','Agent has been Deleted','success',$tkn));
						}else{
							 $this->url_return(array('agents.php','Agent has Not Deleted','error',$tkn));
						}
			}
		
		}
		
		public function edit_show_agent($a_id){
				$return = array();
				$row = $this->handeller->query("SELECT * FROM `agent` WHERE `a_id` = '$a_id'");
						foreach($row as $c){
							$p = array();							
							$p['id'] = $c['a_id'];
							$p['fn'] = $c['f_n'];
							$p['ln'] = $c['l_n'];
							$p['abt'] = $c['abt'];
							$p['exp'] = $c['exp'];
							$p['sale'] = $c['sale'];
							$p['a_img'] = $c['a_img'];
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
		
		public function agent_update($fn,$ln,$abt,$exp,$sale,$em,$mob,$ph,$ad1,$ad2,$tw,$fb,$lkd,$gl,$skp,$ie,$h_img,$a_id,$tkn){
			if($_FILES[$ie]["size"] == 0 ){
					 $p_im = $h_img;
				}else{
						$p_im = $this->image($ie);
						if($p_im == 10){
						 $this->error = 'Image couldnt upload!';
						}
					}
				$seo_url = $this->get_clean_url($fn);
						   
				$data = array($fn,$ln,$abt,$exp,$seo_url,$sale,$em,$mob,$ph,$ad1,$ad2,$tw,$fb,$lkd,$gl,$skp,$p_im,$a_id);
				$this->query = $this->handeller->prepare("UPDATE `agent` SET `f_n` = ?,`l_n`= ?,`abt`= ?,`exp`= ?,`a_seo_url`= ?,`sale`= ?,`em`= ?,`mob`= ?,`ph`= ?,`ad1`= ?,`ad2`= ?,`tw`= ?,`fb`= ?,`lkd`= ?,`gl`= ?,`skp`= ?,`a_img`= ? WHERE `a_id` = ?");
					
					if($this->query->execute($data)&& $im != 10 ){
						return $this->url_return(array('agents.php','Your Profile has been updated','success',$tkn));
						}else{
							return $this->url_return(array('agents.php','Your Profile not updated '. $this->error,'error',$tkn));
							}		
		}
					
	}
	
	?>
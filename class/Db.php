<?php 
class Db extends PDO{
	public $handeller;
	public $query;
	public $arrays;
	public $arrays2;
	public $arrays3;
	public $query2;
	public $query3;
	public $loged;
	
	private $user_ip;
	private $user_session_id;
	private $user_agent;
	
	protected $data;
	protected $error;
		
		
		/*-------------- End Proparty Area -------------*/
		
	/*-------------- Methodes Area -------------*/
		
	public function __construct(){
		$host = Config::get('mysql/host');
		$user = Config::get('mysql/user');
		$pass = Config::get('mysql/pass');
		$db = Config::get('mysql/db');
			try{
				$this->handeller = new PDO("mysql:host={$host}; dbname={$db}", $user, $pass);
				$this->handeller->getAttribute(PDO::ATTR_ERRMODE);
				}catch(PDOException $e){
					die($e);
					}
			
		
		}
		public function url_return(array $a){
			$this->data = header('location:'.$a[0].'?msg='.$a[1].'&type='.$a[2].'&token='.$a[3]);
			return $this->data;
			}
			
		public function fontendurl_return(array $a){
			$this->data = header('location:'.$a[0].'?msg='.$a[1]);
			return $this->data;
			}	
			
		protected function user_ip(){
			$this->data = $_SERVER['REMOTE_ADDR'];
			return $this->data;
			}	
			
		protected function user_session_id(){
			$this->data = $_COOKIE["PHPSESSID"];
			return $this->data;
			}	
			
		protected function user_agent(){
			$this->data = $_SERVER['HTTP_USER_AGENT'];
			return $this->data;
			}	
			
		public function secure_token($tk){
			$this->data = md5($tk);
			return $this->data;
			}
		public function get_alert(){
			if((isset($_GET['msg'])) && (isset($_GET['type']))){
				echo '<script>
					$(document).ready(function(){				
						$("#div3").fadeIn(3000);			  
					});
					$(document).ready(function(){		  
						$("#div3").fadeOut(3000);	  
				});
			</script>
			
			<div id="div3" class="0">
			<div class="3">
				<div class="alert alert-'.$_GET['type'].'">
					<strong>'.$_GET['type'].' !</strong> '.$_GET['msg'].'
				</div>
			</div>	
		</div>';
				}
		}
		
		public static function image($img = null){
		if($img){
			if ((($_FILES[$img]["type"] == "image/gif")
			|| ($_FILES[$img]["type"] == "image/jpeg")
			|| ($_FILES[$img]["type"] == "image/jpg")
			|| ($_FILES[$img]["type"] == "image/pjpeg")
			|| ($_FILES[$img]["type"] == "image/x-png")
			|| ($_FILES[$img]["type"] == "image/png"))
			&& ($_FILES[$img]["size"] < 2000000))
			  {
			  if ($_FILES[$img]["error"] > 0)
				{
				$error = 10;
				return $error;
				}
			  else
				{
				$rnd = rand(0,99999);		
				if (file_exists('images/'. $_FILES[$img]["name"]))
				  {
				      move_uploaded_file($_FILES[$img]["tmp_name"],'images/'. $rnd. $_FILES[$img]["name"]);
					  return 'images/'. $rnd . $_FILES[$img]["name"];
					  
				  }
				else
				  {
					  move_uploaded_file($_FILES[$img]["tmp_name"],'images/'. $_FILES[$img]["name"]);
					  return 'images/'. $_FILES[$img]["name"];
				  }
				}
			  }
			else
			  {
			 $error = 10;
			  return $error;
			  }
			}
		
		return false;
	}
	public function get_clean_url($str) {
		$this->arrays = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $str);
		$this->arrays= strtolower(trim($this->arrays, '-'));
		$this->arrays = preg_replace("/[\/_|+ -]+/", '-', $this->arrays);	
		return $this->arrays;
		}
	public static function email_temp($to,$sms,$sub){
			$message = $sms;
			$headers = "From: Real Estate \r\n" .
		   'Reply-To: '. $_['base_url']. "\r\n" .
		   'X-Mailer: PHP/' . phpversion();				
			$message = wordwrap($message, 70, "\r\n");				
			mail($to, $subject, $message, $headers);
	}


}		
?>
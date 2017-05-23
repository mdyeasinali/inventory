<?php 
class Input{
	public static function get($item){
		if(isset($_POST[$item])){
			return $_POST[$item];
		}elseif(isset($_GET[$item])){
				return $_GET[$item];
		}else{
			return '';	
		}
	}


}		
?>
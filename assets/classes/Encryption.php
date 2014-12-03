<?php 

require_once(dirname(__FILE__)).'/../core/init.php';

class Encryption{
	
	
	/**
 * Returns an encrypted & base-64
 */
	
		
	function encrypt($string, $key) {
        $result = '';
        for($i=0; $i<strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $ordChar = ord($char);
            $ordKeychar = ord($keychar);
            $sum = $ordChar + $ordKeychar;
            $char = chr($sum);
            $result.=$char;
        }
        return base64_encode($result);
    }
 
    function decrypt($string, $key) {
        $result = '';
        $string = base64_decode($string);
        for($i=0; $i<strlen($string); $i++) {
            $char = substr($string, $i, 1);
            $keychar = substr($key, ($i % strlen($key))-1, 1);
            $ordChar = ord($char);
            $ordKeychar = ord($keychar);
            $sum = $ordChar - $ordKeychar;
            $char = chr($sum);
            $result.=$char;
        }
        return $result;
    }
 
   
	
}
		
		
	//$email = 'tue89164@temple.edu';
	//$encript = new Encryption();
	//$result =  $encript->encrypt($email,Config::get('key/email_key'));
	//echo $result;
	
?>
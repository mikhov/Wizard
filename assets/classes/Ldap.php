<?php
require_once(dirname(__FILE__)).'/../core/init.php';

class Ldap
	{
	
	private $ds,$bind; 
	
		public function __construct(){
			//// Initialize the connection with the constructor 
			
			$this->ds=ldap_connect(Config::get('ldap/host'), Config::get('ldap/port'));
			/// Set up Ldap connection
			ldap_set_option($this->ds, LDAP_OPT_PROTOCOL_VERSION, 3);
			ldap_set_option($this->ds, LDAP_OPT_REFERRALS, 0);
			ldap_set_option($this->ds, LDAP_OPT_NETWORK_TIMEOUT, 10);
		
		    /// Bind Connection SSL
			$bind=ldap_bind($this->ds,Config::get('ldap/dn'),Config::get('ldap/ldap_pss'));
		
			//echo $ds;
			//echo '<br>';
			//echo $bind;
			
		}
	
	
		
	    public function get_DN_User($Username){
			
			 /* Filter to introduce the Username of the student*/
			$filter="(&(uid=$Username)(objectclass=posixaccount))";
			
			/* Select what info I want to download from the tree structure*/
			$justthese = array("givenname","mail"); 
		
			/* Execute the search */ 
			$sr=ldap_search($this->ds, Config::get('ldap/basedn'), $filter);
			
			/* Get the entrie and store on the array $info */
			$info = ldap_get_entries($this->ds, $sr);
			
			/* Safe on variables the numbers of entries and de templeEduTunic from the useer */
			$NumberEntries  = $info["count"];
			
			$UserObject = array();
			$UserObject['Email'] 		= $info[0]['mailalternateaddress'][0];
			$UserObject['College'] 	= $info[0]['ou'][0];
			$UserObject['Role'] 		= $info[0]['edupersonaffiliation'];
			$UserObject['title']		= $info[0]['title'][0];
			$UserObject['Name'] 		= $info[0]['givenname'][0];
			$UserObject['LastName'] 	= $info[0]['sn'][0];
			$UserObject['TU_ID'] 		= $info[0]['templeedutuid'][0];
			$UserObject['dn'] 			= $info[0]['dn'];
			
			
			//print_r($UserObject);
			//$User_Object_Json = json_encode($UserObject);
			if($NumberEntries == 0){
		
				return 0; // return 0 because the system do not finde any user
				
			}else{
				
				return $UserObject;
			}
		
			
		} // End get_DN_User Function
		
		
		
		public function ldap_Login($UserObject,$User_Pass){
			
			 if ($bindUser=ldap_bind($this->ds,$UserObject['dn'],$User_Pass)){
					 	
				// Know I need to start the Session and laund the index pages. 
					$_SESSION['UserObject'] = $UserObject;
					$_SESSION['Time'] = time();
					return 1;	/// Return 1 because the user is success logged.
						
				 }else{
						 
					return 0; // Return 0 because the user was not able to login. Wrong user and password. 
				 }
			
	
		} // end ldap_Login function
		
		
		
		
	}	 // End ldap class
	
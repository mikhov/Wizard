<?php
require_once(dirname(__FILE__)).'/../core/init.php';
// Report all PHP errors
error_reporting(-1);
	
	////  THIS IS THE KEY TO ENCRYPT MY EMAILS MESSAGE ///
	
	
	
/*

Table "USER_LDAP"



User_Ldap_Id
User_Name
User_Last
User_Email
User_TUID
UserLDAPChangeDate
UserLDAPChangeTime	


*/

class User_Ldap{
	
	
	private $_db;
	
	public
	$User_Ldap_Id,
	$User_Name,
	$User_Last,
	$User_Email,
	$User_TUID,
	$UserLDAPChangeDate,
	$UserLDAPChangeTime;
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	
	
	public function checkUser($User_TUID){
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM USER_LDAP WHERE User_TUID = ?");
			$query_checkEmail->bindParam(1,$User_TUID);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 1; // User on database
			}else{
				return 0; // No user on database
			}
		
	}
	
	
	
	
			
	public function Insert_User_Ldap($User_Name,$User_Last,$User_Email,$User_TUID)
		{
			//// INITIALIZE THE VARIABLES FOR DATE AND TIME
			
			$UserLDAPChangeDate = date('Y-m-d');
			$UserLDAPChangeTime = date('H:i:s');
			
			
			$query_Check_if_User_exist = $this->_db->prepare("SELECT * FROM USER_LDAP WHERE User_TUID = ?");
			$query_Check_if_User_exist->bindParam(1,$User_TUID);
			$query_Check_if_User_exist->execute();
			
			$resultCheckUser = $query_Check_if_User_exist->rowCount();
			
			if($resultCheckUser == 1){
				
				/* THE USER ALREADY EXIST ON THIS TABLE */
				/* IT IS NOT NECESSARY TO CREATE A NEW RECORD, ONLY UPDATE THEIR INFORMATION ABOUT WHEN THE USER IS CONNECETED */
					$UpdateUser = new User_Ldap();
					$ResultUpdate = $UpdateUser->Update_User($User_TUID,$UserLDAPChangeDate,$UserLDAPChangeTime);
					
					if($ResultUpdate == 1){
						return 1;  /////// user Update successffully
						$UpdateUser = null;
					}else{
						return 0; /////// Error updating User_Ldap table
						$UpdateUser = null;
					}
			
			}else{
				
					/* THE USER DOES NOT EXIST ON THE DATABASE */
					/* IT IS NECESSARY TO CREATE A NEW RECORD */
				
				
				$query_Insert = $this->_db->prepare("INSERT INTO USER_LDAP 
														(User_Name,User_Last,User_Email,User_TUID,UserLDAPChangeDate,UserLDAPChangeTime) 
														VALUES(?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $User_Name);
				$query_Insert->bindParam(2, $User_Last);
				$query_Insert->bindParam(3, $User_Email);
				$query_Insert->bindParam(4, $User_TUID);
				$query_Insert->bindParam(5, $UserLDAPChangeDate);
				$query_Insert->bindParam(6, $UserLDAPChangeTime);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 because "Error inserting new User_Ldap"
				}else{
					return 1;  // 1 is because User_Ldap inserted successeffully";
				}
				
			
				
			}
		
		} // End function insert User
		
		
		
	
		
		
	public function Update_User($User_TUID,$UserLDAPChangeDate,$UserLDAPChangeTime)
				{
			
			$query_Update = $this->_db->prepare("UPDATE USER_LDAP SET UserLDAPChangeDate=?,UserLDAPChangeTime=? WHERE User_TUID =?");
				
				$query_Update->bindParam(1, $UserLDAPChangeDate);
				$query_Update->bindParam(2, $UserLDAPChangeTime);
				$query_Update->bindParam(3, $User_TUID);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0 is because no rows affected 
				}else{
					return 1;  // 1 is because everything work properly.
					}
			
		} // end function Update_User;
		
		
	 
	 
		
		
		
	public function Delete_User($User_Ldap_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM USER_LDAP WHERE User_Ldap_Id = ? ");
			$query_Delete->bindParam(1, $User_Ldap_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
	
		
} // End class User


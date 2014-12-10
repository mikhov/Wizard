<?php
require_once(dirname(__FILE__)).'/../core/init.php';
	
	////  THIS IS THE KEY TO ENCRYPT MY EMAILS MESSAGE ///
	
	
	
/*

Table "User"

User_Id
First_Name	
Last_Name
Email
Temple_Id	
Image	
Password
Security_Token
User_Type_Id
Student_Id
Visitor_Id	
Faculty_Id
Staff_Id


*/

class User{
	
	
	private $_db;
	
	public
	$User_Id,
	$Email,
	$Image,
	$Password,
	$Security_Token,
	$User_Type_Id,
	$Student_Id,
	$Visitor_Id,
	$Faculty_Id,
	$Staff_Id;
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	
	
	public function checkUser($Email){
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM User WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 1; // User on database
			}else{
				return 0; // No user on database
			}
		
	}
	
	
	public function check_Email($Email){
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM User WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 1; // User on database
			}else{
				return 0; // No user on database
			}
		
	}
	
	
			
	public function Insert_User($Email,$Image,$Password,$Security_Token,$User_Type,$User_ID)
		{
			
			
			
			// GLOBAL VARIABLES //
			$User_Type_Id = 0;
			$Student_Id = 0;
			$Visitor_Id = 0;
			$Faculty_Id = 0;
			$Staff_Id = 0;
			
			// JOIN PASSWORD WITH TOKEN //
			$Password = $Security_Token.$Password;
			$Password = md5($Password);
			
			/// Identify what is the type of user is it 
				/*
					Student 1
					Faculty 2
					Staff 3
					Visistor 4
				
				*/
				
				if($User_Type == 1){
					$Student_Id = $User_ID;
					$User_Type_Id = $User_Type; 
				}else if($User_Type == 2){
					$Faculty_Id = $User_ID;
					$User_Type_Id = $User_Type; 
				}else if($User_Type == 3){
					$Staff_Id = $User_ID;
					$User_Type_Id = $User_Type; 
				}else{
					$Visitor_Id = 0;
					$User_Type_Id = 4; 
					}
	
			$query_checkEmail = $this->_db->prepare("SELECT * FROM User WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 2;  // 2 because it is duplicate, it user already exit on the database
				//print 2;
			}else if($resultCheckMail != 1){
				
				$query_Insert = $this->_db->prepare("INSERT INTO User 
													(Email,Image,Password,Security_Token,User_Type_Id,Student_Id,Visitor_Id,Faculty_Id,Staff_Id) 
													VALUES(?,?,?,?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $Email);
				$query_Insert->bindParam(2, $Image);
				$query_Insert->bindParam(3, $Password);
				$query_Insert->bindParam(4, $Security_Token);
				$query_Insert->bindParam(5, $User_Type_Id);
				$query_Insert->bindParam(6, $Student_Id);
				$query_Insert->bindParam(7, $Visitor_Id);
				$query_Insert->bindParam(8, $Faculty_Id);
				$query_Insert->bindParam(9, $Staff_Id);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 because error inserting new entity
					//print 0;
				}else{
					return 1;  // 1 is because everything work properly.
					//print 1;
				}
	
				
				
			} // End else condition
		} // End function insert User
		
		
		
	
		
		
	public function Update_User($User_Id,$Email,$Image,$User_Type_Id)
				{
			
			$query_Update = $this->_db->prepare("UPDATE User SET Email=?,Image=?,User_Type_Id=? WHERE User_Id = ?");
				
				$query_Update->bindParam(1, $Email);
				$query_Update->bindParam(2, $Image);
				$query_Update->bindParam(3, $User_Type_Id);
				$query_Update->bindParam(4, $User_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0 is because no rows affected 
				}else{
					return 1;  // 1 is because everything work properly.
					}
			
		} // end function Update_User;
		
		
	 
	 
	
	 
		public function get_User_Info_by_Email($Email)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM User WHERE Email = ?");
				$query_getUser->bindParam(1, $Email);
				$query_getUser->execute();
				$result = $query_getUser->fetch(PDO::FETCH_ASSOC);
			
				$this->User_Id 			= $result['User_Id'];
				$this->Email			= $result['Email'];
				$this->Password			= $result['Password'];
				$this->Image			= $result['Image'];
				$this->User_Type_Id		= $result['User_Type_Id'];
				$this->Security_Token	= $result['Security_Token'];
				$this->Student_Id		= $result['Student_Id'];
				$this->Visitor_Id		= $result['Visitor_Id'];
				$this->Faculty_Id		= $result['Faculty_Id'];
				$this->Staff_Id			= $result['Staff_Id'];
				
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
	
		public function get_User_Info_by_ID($User_Id)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM User WHERE User_Id = ?");
				$query_getUser->bindParam(1, $User_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetch(PDO::FETCH_ASSOC);
				
				
				$this->User_Id 			= $result['User_Id'];
				$this->Email			= $result['Email'];
				$this->Password			= $result['Password'];
				$this->Image			= $result['Image'];
				$this->User_Type_Id		= $result['User_Type_Id'];
				$this->Security_Token	= $result['Security_Token'];
				$this->Student_Id		= $result['Student_Id'];
				$this->Visitor_Id		= $result['Visitor_Id'];
				$this->Faculty_Id		= $result['Faculty_Id'];
				$this->Staff_Id			= $result['Staff_Id'];
				
			} //  end function get_User_Info_by_ID($User_Id)
			
			
			
	
		public function Login($Email,$Password)
		{
			
			
				$query_Login_getToken = $this->_db->prepare("SELECT * FROM User WHERE Email = ?");
				$query_Login_getToken->bindParam(1, $Email);
				$query_Login_getToken->execute();
			
				if($query_Login_getToken->rowCount() != 0){
						
						
						$ResultToken = $query_Login_getToken->fetch(PDO::FETCH_ASSOC);
							$token = $ResultToken['Security_Token'];
							
							
							/// Know I have the token to join with my password ///
							$Password = $token . $Password;
							$Password = md5($Password);
							
							/// Know I can match the email and password with the database
							
							
							$query_Login = $this->_db->prepare("SELECT * FROM User WHERE Email = ? AND Password = ?");
							$query_Login->bindParam(1, $Email);
							$query_Login->bindParam(2, $Password );
							$query_Login->execute();
							
							if($query_Login->rowCount() == 1)
							{
								
								session_start();
								$_SESSION['token'] = $token;
								$_SESSION['Email'] = $Email;
								$_SESSION['Time'] = time(); 
							
								return 1;
							}else{
								
								return 0;  // return 1 because it is false
							}
						
						
					}else{
						
						return 0;
						
					}
				
	
		
		
		} // this is the end of my Login($Email,$Password) funcoon
		
		
		
		
		
		
		
		
		
function Delete_User($User_Id)
		{
			$query_Delete = $this->_db->prepare("DELETE QUICK FROM User WHERE User_Id = ? ");
			$query_Delete->bindParam(1, $User_Id);
			$query_Delete->execute();
			
			if($query_Delete->rowCount() == 1)
				{	
					return 1;  // return 1 because it is true
				}else{
					return 0;  // return 1 because it is false
				}
			
		} // end Delete_User($User_Id)
		
		
		
		
public function sendEmail($Email,$Student_Id,$User_Type){
			
	
		$results = array();  //This will hold the info to display later with Json
		$Url_Link = "http://web-huertas.com/work/programs/Wizard_Juan/RequestPassword.php?Email_Request=".$Email."&StudentId=".$Student_Id."&User_Type=".$User_Type;
	
			try{
				 
							 $to = $Email;
							 $subject = "Wizard Password Request";
							 $headersEmail = 'From: Wizard@temple.edu';
							 $body = wordwrap("Please click on the following link to create a password:
											   $Url_Link");
												
							if( mail($to, $subject, $body, $headersEmail)){
								return 1;
							}else{
								return 0;
								}
		
				
			}catch(PDOExecption $e) { 
			
					return 0;
			} 	
				
			
		
			
		} // End function
		
		
		
		
		
			
public function Email_ResetPassword($Email){
	
		$Email = (string)$Email;
		
		 ///// I NEED TO ECRYPT THE PASSWORD TO BEFOR SEND THE EMAIL
	 	$EcriptEmail = new Encryption();
		$Email_Encripted = $EcriptEmail->encrypt($Email,Config::get('key/email_key'));
		
		
		$results = array();  //This will hold the info to display later with Json
		$Url_Link = "http://web-huertas.com/work/programs/Wizard_Juan/ResetPassword.php?Email_Reset=".$Email_Encripted;
	
			try{
				 
							 $to = $Email;
							 $subject = "Wizard Reset Password";
							 $headersEmail = 'From: Wizard@temple.edu';
							 $body = "Please click on the following link to reset the password:
											   $Url_Link";
												
							if( mail($to, $subject, $body, $headersEmail)){
								return 1;
							}else{
								return 0;
								}
		
				
			}catch(PDOExecption $e) { 
			
					return 0;
			} 	
		} // End function
		
		
		
		
		
		
	public function Reset_Password($Email,$Password,$Security_Token){
		
		// JOIN PASSWORD WITH TOKEN //
			$Password = $Security_Token.$Password;
			$Password = md5($Password);
			
	   // Time to update the password and token
		
			$query_Update = $this->_db->prepare("UPDATE User SET Password=?,Security_Token=? WHERE Email = ?");
				
				$query_Update->bindParam(1, $Password);
				$query_Update->bindParam(2, $Security_Token);
				$query_Update->bindParam(3, $Email);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0  because no rows affected 
				}else{
					return 1;  // 1 is because everything work properly.
					}
			
		} // end function Update_User;
		
		
		
		
} // End class User


	
	
	//$changePassword = new User();
	//echo $changePassword->Reset_Password('tue89164@temple.edu','12345','1238884848');
<?php
require_once(dirname(__FILE__)).'/../core/init.php';
/*

Table "Staff"

Staff_Id
Last_Name
First_Name
MI
Permissions	
Title
Email
Temple_Id
Home_Phone
Cell_Phone	
Status
FT_PT_Status
Acadamic
Position
Year_Hired
Yeat_Promo
Highest_Degree
School_Degree
Year_Degree


*/

class Staff{
	
	
	private $_db;
	
	public
	$Staff_Id,
	$Last_Name,
	$First_Name,
	$MI,
	$Permissions,	
	$Title,
	$Email,
	$Temple_Id,
	$Home_Phone,
	$Cell_Phone,
	$Status,
	$FT_PT_Status,
	$Acadamic,
	$Position,
	$Year_Hired,
	$Yeat_Promo,
	$Highest_Degree,
	$School_Degree,
	$Year_Degree;
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	
	
	public function checkUser($Email){
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM Staff WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				//echo 1;
				return 1; // User on database
			}else{
				//echo 0;
				return 0; // No user on database
			}
		
	}
	
	
			
	public function Insert_User($Last_Name,$First_Name,$MI,$Permissions,$Title,$Email,$Temple_Id,$Home_Phone,$Cell_Phone,$Status,
								$FT_PT_Status,$Acadamic,$Position,$Year_Hired,$Yeat_Promo,$Highest_Degree,$School_Degree,$Year_Degree)
		{
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM Staff WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 2;  // 2 because it is duplicate, it user already exit on the database
				
			}else if($resultCheckMail != 1){
				
				$query_Insert = $this->_db->prepare("INSERT INTO Staff 
													(Last_Name,First_Name,MI,Permissions,Title,Email,Temple_Id,Home_Phone,Cell_Phone,Status,
								FT_PT_Status,Acadamic,Position,Year_Hired,Yeat_Promo,Highest_Degree,School_Degree,Year_Degree) 
													VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $Last_Name);
				$query_Insert->bindParam(2, $First_Name);
				$query_Insert->bindParam(3, $MI);
				$query_Insert->bindParam(4, $Permissions);
				$query_Insert->bindParam(5, $Title);
				$query_Insert->bindParam(6, $Email);
				$query_Insert->bindParam(7, $Temple_Id);
				$query_Insert->bindParam(8, $Home_Phone);
				$query_Insert->bindParam(9, $Cell_Phone);
				$query_Insert->bindParam(10, $Status);
				$query_Insert->bindParam(11, $FT_PT_Status);
				$query_Insert->bindParam(12, $Acadamic);
				$query_Insert->bindParam(13, $Position);
				$query_Insert->bindParam(14, $Year_Hired);
				$query_Insert->bindParam(15, $Yeat_Promo);
				$query_Insert->bindParam(16, $Highest_Degree);
				$query_Insert->bindParam(17, $School_Degree);
				$query_Insert->bindParam(18, $Year_Degree);
				$query_Insert->execute();
				
				if($query_Insert->rowCount() == 0){
					return 0; // 0 because error inserting new entity
				
				}else{
					return 1;  // 1 is because everything work properly.
				
				}
	
				
				
			} // End else condition
		} // End function insert User
		
		
		
	
		
		
		public function Update_User($Staff_Id,$Last_Name,$First_Name,$MI,$Permissions,$Title,$Email,$Temple_Id,$Home_Phone,$Cell_Phone,$Status,
								$FT_PT_Status,$Acadamic,$Position,$Year_Hired,$Yeat_Promo,$Highest_Degree,$School_Degree,$Year_Degree)
				{
			
			$query_Update = $this->_db->prepare("UPDATE Staff SET Last_Name=?,First_Name =?,MI=?,Permissions=?,Title=?,Email=?,		
												Temple_Id=?,Home_Phone=?,Cell_Phone=?,Status=?,FT_PT_Status=?,Acadamic=?,Position=?,Year_Hired=?,Yeat_Promo=?,
												Highest_Degree=?,School_Degree=?,Year_Degree=? WHERE Staff_Id =?");
				
				$query_Update->bindParam(1, $Last_Name);
				$query_Update->bindParam(2, $First_Name);
				$query_Update->bindParam(3, $MI);
				$query_Update->bindParam(4, $Permissions);
				$query_Update->bindParam(5, $Title);
				$query_Update->bindParam(6, $Email);
				$query_Update->bindParam(7, $Temple_Id);
				$query_Update->bindParam(8, $Home_Phone);
				$query_Update->bindParam(9, $Cell_Phone);
				$query_Update->bindParam(10, $Status);
				$query_Update->bindParam(11, $FT_PT_Status);
				$query_Update->bindParam(12, $Acadamic);
				$query_Update->bindParam(13, $Position);
				$query_Update->bindParam(14, $Year_Hired);
				$query_Update->bindParam(15, $Yeat_Promo);
				$query_Update->bindParam(16, $Highest_Degree);
				$query_Update->bindParam(17, $School_Degree);
				$query_Update->bindParam(18, $Year_Degree);
				$query_Update->bindParam(19, $Staff_Id);
				$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0 is because no rows affected 
				}else{
					return 1;  // 1 is because everything work properly.
					}
			
		} // end function Update_User;
		
		
	 
	 
	
	 
			function get_User_Info_by_Email($Email)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM Staff WHERE Email = ?");
				$query_getUser->bindParam(1, $Email);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
			
				$this->Staff_Id 			= $result['Staff_Id'];
				$this->Last_Name			= $result['Last_Name'];
				$this->First_Name			= $result['First_Name'];
				$this->MI					= $result['MI'];
				$this->Permissions			= $result['Permissions'];
				$this->Title				= $result['Title'];
				$this->Email				= $result['Email'];
				$this->Temple_Id			= $result['Temple_Id'];
				$this->Home_Phone			= $result['Home_Phone'];
				$this->Cell_Phone			= $result['Cell_Phone'];
				$this->Status 				= $result['Status'];
				$this->FT_PT_Status			= $result['FT_PT_Status'];
				$this->Acadamic				= $result['Acadamic'];
				$this->Position				= $result['Position'];
				$this->Year_Hired			= $result['Year_Hired'];
				$this->Yeat_Promo			= $result['Yeat_Promo'];
				$this->Highest_Degree		= $result['Highest_Degree'];
				$this->School_Degree		= $result['School_Degree'];
				$this->Year_Degree			= $result['Year_Degree'];
				
				
		
				
			
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
	
	
	
	
	
			function get_User_Info_by_ID($Staff_Id)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM Staff WHERE Staff_Id = ?");
				$query_getUser->bindParam(1, $User_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				
				$this->Staff_Id 			= $result['Staff_Id'];
				$this->Last_Name			= $result['Last_Name'];
				$this->First_Name			= $result['First_Name'];
				$this->MI					= $result['MI'];
				$this->Permissions			= $result['Permissions'];
				$this->Title				= $result['Title'];
				$this->Email				= $result['Email'];
				$this->Temple_Id			= $result['Temple_Id'];
				$this->Home_Phone			= $result['Home_Phone'];
				$this->Cell_Phone			= $result['Cell_Phone'];
				$this->Status 				= $result['Status'];
				$this->FT_PT_Status			= $result['FT_PT_Status'];
				$this->Acadamic				= $result['Acadamic'];
				$this->Position				= $result['Position'];
				$this->Year_Hired			= $result['Year_Hired'];
				$this->Yeat_Promo			= $result['Yeat_Promo'];
				$this->Highest_Degree		= $result['Highest_Degree'];
				$this->School_Degree		= $result['School_Degree'];
				$this->Year_Degree			= $result['Year_Degree'];
				
				
			} //  end function get_User_Info_by_ID($User_Id)
			
			






		public function get_Staff_Id_Email($Email)
			{
				
					$query_getUser = $this->_db->prepare("SELECT * FROM Staff WHERE Email = ?");
					$query_getUser->bindParam(1, $Email);
					$query_getUser->execute();
				  
				  if($query_getUser->rowCount() != 0){
					
						$result_Staff= $query_getUser->fetch(PDO::FETCH_ASSOC);
						return $this->Staff_Id = $result_Staff['Staff_Id']; 
				 }else{
					 
					  return 0;
					  }
				
			
				
			}  // end function get_User_Info_by_Email($Email);





	
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
		
		












		
} // End class User


	//$Staff = new Staff();
	//$Staff->checkUser('juanitohf@gmail.com');
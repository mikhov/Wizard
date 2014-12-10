<?php
require_once(dirname(__FILE__)).'/../core/init.php';
/*

Table "Faculty"

Faculty_Id
Last_Name
First_Name
MI
Title
Email
Temple_Id
Home_Phone
Cell_Phone
Status	
FT_PT_Status	
Acadamic
Rank
Year_Hired	
Yeat_Promo	
Year_Tenure
Highest_Degree
School_Degree
Year_Degree

*/

class Faculty{
	
	
	private $_db;
	
	public
	$Faculty_Id,
	$Last_Name,
	$First_Name,
	$MI,
	$Title,
	$Email,
	$Temple_Id,
	$Home_Phone,
	$Cell_Phone,
	$Status,
	$FT_PT_Status,	
	$Acadamic,
	$Rank,
	$Year_Hired,	
	$Yeat_Promo,
	$Year_Tenure,
	$Highest_Degree,
	$School_Degree,
	$Year_Degree;
		
	
	
		
	public function __construct(){
		$this->_db = new DB();
		$this->_db = $this->_db ->Connect();
	}
	
	
	
	public function checkUser($Email){
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM Faculty WHERE Email = ?");
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
	
	
			
	public function Insert_User($Last_Name,$First_Name,$MI,$Title,$Email,$Temple_Id,$Home_Phone,$Cell_Phone,$Status,$FT_PT_Status,
								$Acadamic,$Rank,$Year_Hired, $Yeat_Promo,$Year_Tenure,$Highest_Degree,$School_Degree,$Year_Degree)
		{
		
			$query_checkEmail = $this->_db->prepare("SELECT * FROM Faculty WHERE Email = ?");
			$query_checkEmail->bindParam(1,$Email);
			$query_checkEmail->execute();
			
			$resultCheckMail = $query_checkEmail->rowCount();
			
			if($resultCheckMail == 1){
				return 2;  // 2 because it is duplicate, it user already exit on the database
				
			}else if($resultCheckMail != 1){
				
				$query_Insert = $this->_db->prepare("INSERT INTO Faculty 
													(Last_Name,First_Name,MI,Title,Email,Temple_Id,Home_Phone,Cell_Phone,Status,FT_PT_Status,
													Acadamic,Rank,Year_Hired, Yeat_Promo,Year_Tenure,Highest_Degree,School_Degree,Year_Degree) 
													VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
				$query_Insert->bindParam(1, $Last_Name);
				$query_Insert->bindParam(2, $First_Name);
				$query_Insert->bindParam(3, $MI);
				$query_Insert->bindParam(4, $Title);
				$query_Insert->bindParam(5, $Email);
				$query_Insert->bindParam(6, $Temple_Id);
				$query_Insert->bindParam(7, $Home_Phone);
				$query_Insert->bindParam(8, $Cell_Phone);
				$query_Insert->bindParam(9, $Status);
				$query_Insert->bindParam(10, $FT_PT_Status);
				$query_Insert->bindParam(11, $Acadamic);
				$query_Insert->bindParam(12, $Rank);
				$query_Insert->bindParam(13, $Year_Hired);
				$query_Insert->bindParam(14, $Yeat_Promo);
				$query_Insert->bindParam(15, $Year_Tenure);
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
		
		
		
	
		
		
		public function Update_User($Faculty_Id,$Last_Name,$First_Name,$MI,$Title,$Email,$Temple_Id,$Home_Phone,$Cell_Phone,$Status,$FT_PT_Status,
								$Acadamic,$Rank,$Year_Hired, $Yeat_Promo,$Year_Tenure,$Highest_Degree,$School_Degree,$Year_Degree)
				{
			
			$query_Update = $this->_db->prepare("UPDATE Faculty SET Last_Name,First_Name,MI,Title,Email,Temple_Id,Home_Phone,Cell_Phone,Status,FT_PT_Status,
								Acadamic,Rank,Year_Hired, Yeat_Promo,Year_Tenure,Highest_Degree,School_Degree,Year_Degree WHERE Faculty_Id =?");
					
					$query_Update->bindParam(1, $Last_Name);
					$query_Update->bindParam(2, $First_Name);
					$query_Update->bindParam(3, $MI);
					$query_Update->bindParam(4, $Title);
					$query_Update->bindParam(5, $Email);
					$query_Update->bindParam(6, $Temple_Id);
					$query_Update->bindParam(7, $Home_Phone);
					$query_Update->bindParam(8, $Cell_Phone);
					$query_Update->bindParam(9, $Status);
					$query_Update->bindParam(10, $FT_PT_Status);
					$query_Update->bindParam(11, $Acadamic);
					$query_Update->bindParam(12, $Rank);
					$query_Update->bindParam(13, $Year_Hired);
					$query_Update->bindParam(14, $Yeat_Promo);
					$query_Update->bindParam(15, $Year_Tenure);
					$query_Update->bindParam(16, $Highest_Degree);
					$query_Update->bindParam(17, $School_Degree);
					$query_Update->bindParam(18, $Year_Degree);
					$query_Update->bindParam(19, $Faculty_Id);
					$query_Update->execute();
				
				if($query_Update->rowCount() == 0){
					return 0; // 0 is because no rows affected 
				}else{
					return 1;  // 1 is because everything work properly.
					}
			
		} // end function Update_User;
		
		
	 
	 
	
	 
			function get_User_Info_by_Email($Email)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM Faculty WHERE Email = ?");
				$query_getUser->bindParam(1, $Email);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
			
					$this->Faculty_Id 			= $result['Faculty_Id'];
					$this->Last_Name			= $result['Last_Name'];
					$this->First_Name			= $result['First_Name'];
					$this->MI					= $result['MI'];
					$this->Title				= $result['Title'];
					$this->Email				= $result['Email'];
					$this->Temple_Id			= $result['Temple_Id'];
					$this->Home_Phone			= $result['Home_Phone'];
					$this->Cell_Phone			= $result['Cell_Phone'];
					$this->Status 				= $result['Status'];
					$this->FT_PT_Status			= $result['FT_PT_Status'];
					$this->Acadamic				= $result['Acadamic'];
					$this->Rank					= $result['Rank'];
					$this->Year_Hired			= $result['Year_Hired'];
					$this->Yeat_Promo			= $result['Yeat_Promo'];
					$this->Year_Tenure			= $result['Year_Tenure'];
					$this->Highest_Degree		= $result['Highest_Degree'];
					$this->School_Degree		= $result['School_Degree'];
					$this->Year_Degree			= $result['Year_Degree'];
	
		
				
			
				
			}  // end function get_User_Info_by_Email($Email);
	
	
	
	
	
	
	
	
	
			function get_User_Info_by_ID($Faculty_Id)
			{
				
				$query_getUser = $this->_db->prepare("SELECT * FROM Faculty WHERE Faculty_Id = ?");
				$query_getUser->bindParam(1, $User_Id);
				$query_getUser->execute();
				$result = $query_getUser->fetchAll(PDO::FETCH_ASSOC);
				@$result = $result[0];
				
					$this->Faculty_Id 			= $result['Faculty_Id'];
					$this->Last_Name			= $result['Last_Name'];
					$this->First_Name			= $result['First_Name'];
					$this->MI					= $result['MI'];
					$this->Title				= $result['Title'];
					$this->Email				= $result['Email'];
					$this->Temple_Id			= $result['Temple_Id'];
					$this->Home_Phone			= $result['Home_Phone'];
					$this->Cell_Phone			= $result['Cell_Phone'];
					$this->Status 				= $result['Status'];
					$this->FT_PT_Status			= $result['FT_PT_Status'];
					$this->Acadamic				= $result['Acadamic'];
					$this->Rank					= $result['Rank'];
					$this->Year_Hired			= $result['Year_Hired'];
					$this->Yeat_Promo			= $result['Yeat_Promo'];
					$this->Year_Tenure			= $result['Year_Tenure'];
					$this->Highest_Degree		= $result['Highest_Degree'];
					$this->School_Degree		= $result['School_Degree'];
					$this->Year_Degree			= $result['Year_Degree'];
				
				
			} //  end function get_User_Info_by_ID($User_Id)
			
			
			
			
			
			public function get_Faculty_Id_Email($Email)
			{
				
					$query_getUser = $this->_db->prepare("SELECT * FROM Faculty WHERE Email = ?");
					$query_getUser->bindParam(1, $Email);
					$query_getUser->execute();
				  
				  if($query_getUser->rowCount() != 0){
					
						$result_Faculty= $query_getUser->fetch(PDO::FETCH_ASSOC);
						return $this->Faculty_Id = $result_Faculty['Faculty_Id']; 
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


	//$Faculty = new Faculty();
	//$Faculty->checkUser('juanhf@gmail.com');
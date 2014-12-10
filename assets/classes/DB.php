<?php


class DB
	{
	
		private
		$host		=	"localhost",
		$db			=	"userperm",
		$userName 	=	"root",
		$password	= 	"";
		
		
		public function Connect()
		{
					
			return new PDO("mysql:host=$this->host; dbname=$this->db", $this->userName, $this->password);	
			print_r($stmt->errorInfo());

		}
		
		
		
	}	 // End class Connection
	
	
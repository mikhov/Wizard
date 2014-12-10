<?php
require_once(dirname(__FILE__)).'/../DB.php';

/**
 *	Author: Connor Tang
 *
 *	This class provides basic CRUD sql functions
 *	Usage: 
 *	 $q = new Query();
 *	 $table = "access_control";
 *	 
 *	 $columns = ["User_Group_Id", "Column_Id"];
 *	 $values  = [1,1];
 *	 $where = $q->buildWhere($columns,$values);
 *	 
 *	 $columns = ["User_Group_Id", "Column_Id", "Table_Id", "R_perm", "W_perm"];
 *	 $result= $q->Select($table,$columns,$where);
 *
 *	 $values = [1,1,1,0,0];
 *	 $result = $q->Insert($table,$columns, $values);
 *	 
 *	 $columns = ["R_perm", "W_perm"];
 *	 $values = [1,1];
 *	 $result = $q->Update($table,$columns,$values,$where);
 *	 
 *	 $result = $q->Delete($table,$columns,$values);
 *
 **/
 
class Query {

	private $db;

	public function __construct(){
		$this->db = new DB();
		$this->db = $this->db->Connect();			
	}

	public function Insert( $table, $columns, $values ){
		$statement  = "INSERT INTO " . $table . " (";
		$statement .= implode( ", ", $columns ) . ") VALUES (";
		
		if( is_array( $values ) ){
			$statement .= implode( ", ", $values ) . ")";
		} else {
			$statement .= $values . ")";
		}
		return self::Execute( $statement );
	}
	
	public function MultiSelect( $tables, $columns, $conditions = null ){
		$result = [];
		if( is_array( $tables ) && is_array( $columns ) ){
			foreach( $tables as $i => $table ){
				$re = self::Select( $table, $columns[$i], $conditions[$i] );
				array_push( $result, $re );
			}
		}
		return $result;
	}
	
	public function Select( $table, $columns, $condition = null ){
		$statement  = "SELECT " . implode( ", ", $columns );
		$statement .= " FROM " . $table . " WHERE 1 ";
		if( !is_null( $condition ) ){
			$statement .= "AND " . implode( " AND ", $condition );
		}
		
		return self::Execute( $statement );
	}
	
	public function Update( $table, $columns, $values, $condition ){
		$statement  = "UPDATE " . $table . " SET ";
		$statement .= implode( ", ", self::buildWhere( $columns, $values ) ) . " WHERE 1 ";
		// $statement .= implode( ", ", $columns ) . " WHERE 1 ";
		if( !is_null( $condition ) ){
			$statement .= "AND " . implode( " AND ", $condition );
		}		
		
		self::Execute( $statement );
	}
	
	public function Delete( $table, $columns, $values, $noConstraint ){
		$statement  = "DELETE FROM " . $table . " WHERE 1 ";
		$statement .= "AND " . implode( " AND ", self::buildWhere( $columns, $values ) );
		
		return self::Execute( $statement, $noConstraint );	
	}
	
	public function buildWhere( $columns, $values ){
		if( sizeof( $columns ) === sizeof( $values ) ){
			foreach( $columns as $i => $c ){
				$columns[$i] = $c . " = " . $values[$i];
			}
		}
		
		return $columns;
	}
	
	public function Sort( $table, $columns, $condition = null, $row, $order, $start = null, $limit = null ){
		$statement  = "SELECT " . implode( ", ", $columns );
		$statement .= " FROM " . $table . " WHERE 1 ";
		if( !is_null( $condition ) ){
			$statement .= "AND " . implode( " AND ", $condition );
		}
		if( !is_null( $row ) && !is_null( $order ) ){
			$statement .= " ORDER BY " . $row . " " . $order;
		}
		if( !is_null( $start ) && !is_null( $limit ) ){
			$statement .= " LIMIT " . $start . ", " .$limit;
		}
		
		return self::Execute( $statement );	
	}
	
	public function Execute( $query, $noConstraint = 0 ){
		
		//$noConstraint = 1 : execute without foreign key check
		if( $noConstraint === 1 ){
			$query = 'SET foreign_key_checks = 0;' . $query;
		}
		
		try{
			$sql = $this->db->prepare( $query );	
			$sql->execute();
			$result = $sql->fetchAll(PDO::FETCH_ASSOC);
			
			$sql = $this->db->prepare( "SET foreign_key_checks = 1;" );	
			$sql->execute();			
		} catch( PDOException $e ) {
			//error_log("Error message: " . $e->getMessage() . "\n", 3, "/mypath/php.log");
		}
		
		

		return $result;
	}
	
}
?>
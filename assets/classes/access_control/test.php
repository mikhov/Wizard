<?php
require_once(dirname(__FILE__)).'/Query.php';
header( 'Content-type: application/json' );

//This is a simple test for MultiSelect function
$q = new Query();	//create a new instance
$tables = ["user_group", "user", "columns_table" ];	//construct the array which contains table names
//construct the 2D array contains columns: each inside array is mapped to each table above
$columns = [["User_Group_Id", "GroupName"],["UserId", "UserName"],["Column_Id", "Column_Name", "Table_Id"]];

$result=  $q->MultiSelect($tables,$columns,null);

print_r($result);
?>
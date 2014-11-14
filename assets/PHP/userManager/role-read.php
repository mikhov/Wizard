<?php
require_once(dirname(__FILE__)).'/../../classes/access_control/Query.php';
header( 'Content-type: application/json' );

$q = new Query();
$table = "user_group";

$columns = ["User_Group_Id as id", "GroupName as text"];
$result=  $q->Select($table,$columns,null);

if( $result ){
	$root = array("id" => 0, "text" => "All Roles", "children" => $result);
}

echo( json_encode( array( $root ) ) );
?>
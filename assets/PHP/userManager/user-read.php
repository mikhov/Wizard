<?php
require_once(dirname(__FILE__)).'/../../classes/access_control/Query.php';
header( 'Content-type: application/json' );

$page = isset( $_GET['page'] ) ? $_GET['page'] : "1"; 
$limit = isset( $_GET['rows'] ) ? $_GET['rows'] : "30"; 
$sidx = isset( $_GET['sidx'] ) ? $_GET['sidx'] : "UserId"; 
$sord = isset( $_GET['sord'] ) ? $_GET['sord'] : "asc"; 
$search = isset( $_GET['searchString'] ) ? $_GET['searchString'] : null;
$searchOp = isset( $_GET['searchOper'] ) ? $_GET['searchOper'] : null;
$gId = isset( $_GET['groupId'] ) ? $_GET['groupId'] : null;

$q = new Query();
$table = "user";
$columns = ["UserId", "UserName", "User_Group_Id"];

if( !is_null( $gId ) ){
	$where = ["User_Group_Id = '" . $gId . "'"];
} else {
	switch( $searchOp ){
		case 'eq': $where = ["UserName = '" . $search . "'"]; break;
		case 'ne': $where = ["UserName != '" . $search . "'"]; break;
		case 'cn': $where = ["UserName LIKE '%" . $search . "%'"]; break;
		case 'nc': $where = ["UserName NOT LIKE '%" . $search . "%'"]; break;
		default: $where = null;
	}
}

$row=  $q->Select( $table,$columns,$where );

$count = count( $row );
if( $count > 0 ){
	$pageNum = ceil( $count/$limit );
} else {
	$page = 0;
}
$start = $limit * $page - $limit;
$result = $q->Sort( $table,$columns,$where,$sidx,$sord,$start,$limit );

$return = array( "page" => $page, "total" => $pageNum, "records" => $count, "rows" => $result );
echo( json_encode( $return ) );
?>
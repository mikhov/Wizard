<?php
require_once(dirname(__FILE__)).'/../../classes/access_control/Query.php';
header( 'Content-type: application/json' );

$page = $_GET['page']; 
$limit = $_GET['rows']; 
$sidx = $_GET['sidx']; 
$sord = $_GET['sord']; 
$search = isset( $_GET['searchString'] ) ? $_GET['searchString'] : null;
$searchOp = isset( $_GET['searchOper'] ) ? $_GET['searchOper'] : null;

$q = new Query();
$table = "user";
$columns = ["UserId", "UserName", "User_Group_Id"];

switch( $searchOp ){
	case 'eq': $where = ["UserName = '" . $search . "'"]; break;
	case 'ne': $where = ["UserName != '" . $search . "'"]; break;
	case 'cn': $where = ["UserName LIKE '%" . $search . "%'"]; break;
	case 'nc': $where = ["UserName NOT LIKE '%" . $search . "%'"]; break;
	default: $where = null;
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
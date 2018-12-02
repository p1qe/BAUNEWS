<?php
$mysqli = false;
function connectDB (){
	global $mysqli;
	$mysqli= new mysqli("localhost", "root", "", "baunewsbase");
	$mysqli ->query("SET NAMES  'utf - 8' ");
}
function closeDB(){
global $mysqli;
$mysqli -> close ();	
}

function getNews ($limit){
	global $mysqli;
	connectDB();
	$result = $mysqli->query("select * from `news` order by `id` desc limit $limit");
	closeDB();
	return resultToArray ($result);
	}
	
	function resultToArray ($result){
		$array = array ();
		while( ($row = $result->fetch_assoc()) != false)
		$array[] = $row;
		return $array;
	}

?>
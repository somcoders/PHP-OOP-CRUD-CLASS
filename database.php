<?php

function connect(){
	$conn = mysqli_connect('DatabaseHost','DatabaseUser','DatabasePassword','databaseName')
			 or die("database error");
	return $conn;
}

function get($conn){
	$stm =  $conn->prepare("SELECT id,post_content FROM posts")
			or die("query fialed!");
	$stm->execute();
	$stm->bind_result($id,$post_content);
	$rows = array();
	while($row = $stm->fetch()){
		$item  = array(
		'id'=>$id,
		'post_content'=>$post_content
		);
	$rows[] = $item;
	} return $rows;
	
} 
<?php
	include_once 'conn.php';
	function insert($fname,$category,$price)
	{
		$conn=connection();
		$sql="insert into food values(NULL,'$category','$fname','$price')";
		$conn->query($sql);
		$conn->close();
	}
	
function update($fid,$fname)
	{
		$conn=connection();
		$sql="update food set cname='$fname' where cid=$ifd";
		$conn->query($sql);
		$conn->close();
		
	}
	function display()
	{
		$conn=connection();
		$sql="select * from food";
		$result=$conn->query($sql);
		$conn->close();
		return $result;	
	}
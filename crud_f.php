<?php
	include_once 'conn.php';
	function insert($fname,$price)
	{
		$conn=connection();
		$sql="insert into food values(NULL,'$fname','$price')";
		$conn->query($sql);
		$conn->close();
	}
	
function update($fid,$fname)
	{
		$conn=connection();
		$sql="update food set fname='$fname' where fid=$fid";
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
?>
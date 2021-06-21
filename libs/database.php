<?php

class database
{
	public function select($query)
	{
		include('cone.php');
		$run = mysqli_query($con,$query);
		if($run == true)
			return $run;
		else
			return false;
	}
	public function insert($query)
	{
		include('cone.php');
		$insert = mysqli_query($con,$query);
		if($insert)
		{
				header('location:index.php');
				
		}
		else
		{
			echo "did not insert";
		}
	}
	public function update($query)
	{
		include('cone.php');
		$update = mysqli_query($con,$query);
		if($update)
		{
			header('location: index.php?insert= postupdated....');
		}
		else

		{
			echo "did not update";
		}
	}
	public function delete($query)
	{
		include('cone.php');
		$delete = mysqli_query($con,$query);
		if($delete)
		{
			header('location: index.php?insert= post deleted....');
		}
		else
		{
			echo "did not delete";
		}
	}
}

?>
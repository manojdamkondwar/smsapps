<?php
class userRegister
{
	function register()
	{
		if(isset($_REQUEST['uemail']))
		{
			$uemail = filter_var($_REQUEST['uemail'], FILTER_SANITIZE_EMAIL);
			if(! filter_var($uemail, FILTER_VALIDATE_EMAIL))
			{
				echo $uemail.'Not Valid Email ';
				exit;
			}
		}
		if(isset($_REQUEST['uname']))
		{
			$uname = mysql_real_escape_string($_REQUEST['uname']);
		}
		if(isset($_REQUEST['upass']))
		{
			$upass = mysql_real_escape_string($_REQUEST['upass']);
			$upass = md5($upass);
		}
		if(isset($_REQUEST['fname']))
		{
			$fname =  mysql_real_escape_string($_REQUEST['fname']);
		}
		if(isset($_REQUEST['lname']))
		{
			$lname =  mysql_real_escape_string($_REQUEST['lname']);
		}
		if(isset($_REQUEST['umob']))
		{
			$umob =  mysql_real_escape_string($_REQUEST['umob']);
		}
		$sts = 1;
		$sql = 'insert into register (`username`, `pass`, `fname`, `lname`,`mobile`, `email`, `status`) values("'.$uname.'","'.$upass.'","'.$fname.'","'.$lname.'","'.$umob.'","'.$uemail.'","'.$sts.'")';
		$query = mysql_query($sql);
		if($query)
		{
			return 0;	
		}
		else
		{
			//return 1;	
			echo mysql_error();
		}
	}// End register function
	function login()
	{
		$ulogin =  mysql_real_escape_string($_REQUEST['ulogin']);	
		$upass =  mysql_real_escape_string($_REQUEST['upass']);
		$upass = md5($upass);
		$sql = 'select * from register where username="'.$ulogin.'" or mobile="'.$ulogin.'" and pass="'.$upass.'" ';
			//echo $sql;
			$query = mysql_query($sql);
			$row = mysql_fetch_array($query);
			$numrow = mysql_num_rows($query);
			if($numrow == 1)
			{
				$_SESSION['fname'] = $row['fname'];
				$_SESSION['username'] = $ulogin	;
				header('location:index.php');
			}
			else
			{
				header('location:index.php?rec=logerr');
			}
	}	
}

?>
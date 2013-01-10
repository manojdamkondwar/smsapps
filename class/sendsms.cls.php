<?php
class sentSMS
{
	function addSent()
	{
		if(isset($_REQUEST['way2smsuname']))
		{
				$way2smsuname = $_REQUEST['way2smsuname'];
		}
		if(isset($_REQUEST['way2smsupass']))
		{
				$way2smsupass = $_REQUEST['way2smsupass'];
		}
		if(isset($_REQUEST['fmob']))
		{
				$fmob = $_REQUEST['fmob'];
		}
		if(isset($_REQUEST['umessage']))
		{
				$umessage = $_REQUEST['umessage'];
		}
		if(isset($_REQUEST['pvt']))
		{
				$pvt = $_REQUEST['pvt'];
		}
		if(isset($_REQUEST['ip']))
		{
			$ip = $_REQUEST['ip'];
		}
		$sql = 'insert into sentsms (`loginname`, `wayuser`, `fmob`, `sentmsg`, `protect`, `date`, `ip`) values ("'.$_SESSION['username'].'","'.$way2smsuname.'","'.$fmob.'","'.$umessage.'","'.$pvt.'",NOW(),"'.$ip.'")';
		//echo $sql;
		$query = mysql_query($sql);
		if($query)
		{
				  $res =   sendWay2SMS($way2smsuname, $way2smsupass, $fmob, $umessage);
				  if(is_array($res)) $_SESSION['myres'] = $res[0]['result'] ? 'Message Sent Successfully' : 'Message Not Able to Send';
				}
				else
				  if (isset($way2smsuname) && isset($way2smsupass) && isset($fmob) && isset($umessage))
				  {
					$smsg = stripslashes($_POST['msg']);
					$res =  sendWay2SMS($_POST['uid'], $_POST['pwd'], $_POST['phone'], $smsg);
					if(is_array($res)) $_SESSION['myres'] =  $res[0]['result'] ? 'Message Sent Successfully' : 'Message Not Able to Send';
					else if($res == 'invalid login')
					{
						$_SESSION['myresCheck'] = 'Please Check Way2SMS Username or Password';
					}
					echo  $_SESSION['myres'];
		}
	}
	function lestSMSLeft()
	{
		$sqlLeftList = 'select loginname,sentmsg from sentsms where protect = "private" order by srno desc LIMIT 0 , 10 '; 
		$queryLeftList = mysql_query($sqlLeftList);
		while($rowLeftList = mysql_fetch_array($queryLeftList))
		{?>
			<ul>
				<li>
					<h3><?php echo $rowLeftList['loginname']  ?></h3>
					<p><?php echo $rowLeftList['sentmsg']  ?></p>
				</li>
			</ul>	
		<?php }
		
	}
	function addCateSMS()
	{
			
	}
}
?>
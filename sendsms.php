<?php
include_once('header.php');
if(!isset($_SESSION['username']))
{
	header('location:index.php');
}
if(isset($_REQUEST['submit']))
{
	$obj = new sentSMS();
	$obj->addSent();
}
		function get_real_ip_addr()
		{
			if(!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
			{
				$ip=$_SERVER['HTTP_CLIENT_IP'];
			}
			else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
			{
				$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
			}
			else
			{
				$ip=$_SERVER['REMOTE_ADDR'];
			}
			return $ip;
			}
		$ip = get_real_ip_addr();
?>
<script type="text/javascript">
function valSendSMS()
{
	var way2smsuname = $('#way2smsuname').val();
	if(way2smsuname == '')
	{
		$('#uway2sms').html('Please Enter Your Way2SMS No')
		$('#uway2sms').css("color","Red");
		$('#way2smsuname').focus()
		return false	
	}
	if(way2smsuname != '')
	{
		if(isNaN(way2smsuname))
		{
			$('#uway2sms').html("Mobile No Should Be Only Digits.");
			$('#uway2sms').css("color","Red");
			$('#way2smsuname').focus();
			return false;
		}
		else if(way2smsuname.length<10)
		{
			$('#uway2sms').html("Mobile No. Should Be 10 Digits.");
			$('#uway2sms').css("color","Red");
			$('#way2smsuname').focus();
			return false;
		}
	}
	var way2smsupass = $('#way2smsupass').val();
	if(way2smsupass == '')
	{
		$('#uway2sms').html('');
		$('#pmsgway2sms').html('Please Enter Your Way2SMS Password');
		$('#pmsgway2sms').css("color","Red");
		$('#way2smsupass').focus();
		return false;	
	}
	/*if(way2smsupass != '')
	{
		if(way2smsuname.length<6 || way2smsuname.length>10)
		{
			$('#pmsgway2sms').html("Password");
			$('#pmsgway2sms').css("color","Red");
			$('#way2smsupass').focus();
			return false;
		}
	}*/
	var fmob = $('#fmob').val();
	if(fmob == '')
	{
		$('#pmsgway2sms').html('');
		$('#ummsg').html('Please Enter Your Way2SMS No')
		$('#ummsg').css("color","Red");
		$('#fmob').focus()
		return false	
	}
	if(fmob != '')
	{
		if(isNaN(fmob))
		{
			$('#ummsg').html("Mobile No Should Be Only Digits.");
			$('#ummsg').css("color","Red");
			$('#fmob').focus();
			return false;
		}
		else if(way2smsuname.length<10)
		{
			$('#ummsg').html("Mobile No. Should Be 10 Digits.");
			$('#ummsg').css("color","Red");
			$('#fmob').focus();
			return false;
		}
	}
	var umessage = $('#umessage').val();
	if(umessage == '')
	{
		$('#ummsg').html('');
		$('#lmmsg').html('Please Enter 160 Characters Message')
		$('#lmmsg').css("color","Red");
		$('#umessage').focus()
		return false	
	}
	if(umessage.length >160)
	{
		$('#ummsg').html('');
		$('#lmmsg').html('Please Enter 160 Characters Only')
		$('#lmmsg').css("color","Red");
		$('#umessage').focus()
		return false	
	}
		
}
function checkChar(limitField, limitCount, limitNum) {
	if (limitField.value.length > limitNum) {
		limitField.value = limitField.value.substring(0, limitNum);
	} else {
		limitCount.value = limitNum - limitField.value.length;
	}
	
}
function count()
{
	var umessage = $('#umessage').val();
	//alert(umessage);
	var txtLimit = 160;
	limitCount = txtLimit - umessage.length;
	$('#lmmsg').html('Please Enter '+ limitCount +' Characters Only')
	$('#lmmsg').css("color","Red");
	/*if(umessage.length >160)
	{
		$('#ummsg').html('');
		$('#lmmsg').html('Please Enter 160 Characters Only')
		$('#lmmsg').css("color","Red");
		$('#umessage').focus()
		return false	
	}*/	
}
</script>
<body>
<?php include_once('left.php')?>
<div id="ads">
	<div id="support">
		<h2>Need Help?</h2>
		<h3>+91 86 86 50 16 15</h3>
	</div>
	<div id="ad160x600">
    	<?php include_once('right.php');?>
    </div>
</div>
<div id="main">
	<div id="welcome" class="post">
    	<form method="post" action="#" autocomplete="off">
      <table style="background-color:#036; font-size:16px; color:#FFF" width="750" border="0" cellspacing="20">
        <tr>
          <td colspan="2"><span id="req">*</span> Fields Are Required </td>
        </tr>
        <tr>
          <td width="150px"><span class="tdtxt"> Way2SMS Username</span><span id="req">*</span></td>
          <td><input type="text" name="way2smsuname" id="way2smsuname"  class="txtBox" maxlength="10"/>
            <span id="uway2sms"> </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Password</span><span id="req">*</span></td>
          <td><input type="password" name="way2smsupass" id="way2smsupass"  class="txtBox" maxlength="10"/>
            <span id="pmsgway2sms"> </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Friends Mobile No</span><span id="req">*</span></td>
          <td><input type="text" name="fmob" id="fmob" class="txtBox" maxlength="15"/>
           <span id="ummsg">  </span>
          </td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Message </span><span id="req">*</span></td>
          <td><textarea name="umessage" id="umessage" cols="25" rows="7" onKeyUp="return checkChar(this.form.umessage,this.form.lmmsg,160)" onKeyDown="return count();"/></textarea>
          <span id="lmmsg">  </span></td>
        </tr>
        <tr>
        <td></td>
          <td> <input type="radio" name="pvt" id="pvt" checked="checked" value="private"> Private
          <input type="radio" name="pvt" id="pvt" value="public"> Public </td>
        </tr>
        <tr>
          <td colspan="2" align="center">
          <input type="hidden" name="ip" id="ip" value="<?php echo $ip;?>">
          <input type="submit" name="submit" id="submit" value="Send" class="but" onClick="return valSendSMS();"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
          	<?php 
				if(isset($_SESSION['myresCheck'] ))
				{
					echo $_SESSION['myresCheck']; 	
				}
			?>
          </td>
        </tr>
     </table>
    </form>
	</div>
	</div>
</div>
<div id="footer">
<?php include_once('footer.php'); ?>
</div>
</body>
</html>

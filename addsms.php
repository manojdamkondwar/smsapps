<?php
include_once('header.php');
if(!isset($_SESSION['username']))
{
	header('location:index.php');
}
if(isset($_REQUEST['submit']))
{
	$obj = new sentSMS();
	$obj->addCateSMS();
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
          <td width="150px"><span class="tdtxt"> Select SMS Category</span><span id="req">*</span></td>
          <td>
          <select id="smscate" name="smscate">
          		  <option>Anniversary SMS</option></li>
                  <option>April Fool SMS</option></li>
                  <option>ASCII SMS</option></li>
                  <option>Birthday</option></li>
                  <option>Break Up SMS</option></li>
                  <option>Broken Heart SMS</option></li>
                  <option>Children Day SMS</option></li>
                  <option>Christmas SMS</option></li>
                  <option>Cool SMS</option></li>
                  <option>Decent SMS</option></li>
                  <option>Eid SMS</option></li>
                  <option>Exam SMS</option></li>
                  <option>Famous Quotes</option></li>
                  <option>Father Day SMS</option></li>
                  <option>Flirt SMS</option></li>
                  <option>Friendship SMS</option></li>
                  <option>Funny SMS</option></li>
                  <option>Ghazal SMS</option></li>
                  <option>Good Luck SMS</option></li>
                  <option>Good Morning SMS</option></li>
                  <option>Good Night SMS</option></li>
                  <option>Greetings SMS</option></li>
                  <option>Happy New Year</option></li>
                  <option>Independence Day SMS</option></li>
                  <option>Insult/Rude SMS</option></li>
                  <option>Love Quotes</option></li>
                  <option>Love SMS</option></li>
                  <option>Mother Day SMS</option></li>
                  <option>Poetry SMS</option></li>
                  <option>Politics SMS</option></li>
                  <option>Punjabi SMS</option></li>
                  <option>Raining sms</option></li>
                  <option>Ramadan SMS</option></li>
                  <option>Random sms</option></li>
	              <option>Romantic SMS</option></li>
                  <option>Sardar SMS</option></li>
                  <option>Short SMS</option></li>
                  <option>SMS Jokes</option></li>
                  <option>SMS Templates</option></li>
				  <option>Sorry SMS</option></li>
                  <option>Valentine SMS</option></li>
                  <option>Wife SMS</option></li>
                  <option>Wise SMS Quotes	</option></li>
             </select>     
            <span id="uway2sms"> </span></td>
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

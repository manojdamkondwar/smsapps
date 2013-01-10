<?php 
	include_once('header.php');
?>
<?php
if(isset($_REQUEST['submit']))
{
	$obj = new userRegister();
	$rec_val = $obj->register();
	if($rec_val == '0')
	{
		//echo 'success';
		header('location:index.php?rec=suc');
	}
	else
	{
		//echo 'not';	
		header('location:index.php?rec=err');
	}
}
?>
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
  <div style="padding-top:100px;">
    <form method="post" action="#">
      <table style="background-color:#036; font-size:16px; color:#FFF" width="750" border="0" cellspacing="20">
        <tr>
          <td colspan="2"><span id="req">*</span> Fields Are Required </td>
        </tr>
        <tr>
          <td width="150px"><span class="tdtxt"> Username</span><span id="req">*</span></td>
          <td><input type="text" name="uname" id="uname"  class="txtBox" maxlength="10"/>
            <span id="umsg"> </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Password</span><span id="req">*</span></td>
          <td><input type="password" name="upass" id="upass"  class="txtBox" maxlength="10"/>
            <span id="pmsg"> </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Retype Password</span><span id="req">*</span></td>
          <td><input type="password" name="rupass" id="rupass"  class="txtBox" maxlength="10"/>
           <span id="rpmsg">  </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> First name</span><span id="req">*</span></td>
          <td><input type="text" name="fname" id="fname" class="txtBox" maxlength="15"/>
           <span id="fmsg">  </span>
          </td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Last name</span><span id="req">*</span></td>
          <td><input type="text" name="lname" id="lname" class="txtBox" maxlength="20"/>
          <span id="lmsg">  </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Mobile No</span><span id="req">*</span></td>
          <td><input type="text" name="umob" id="umob" class="txtBox" maxlength="10"/>
          <span id="mmsg">  </span></td>
        </tr>
        <tr>
          <td><span class="tdtxt"> Email ID</span><span id="req">*</span></td>
          <td><input type="email" name="uemail" id="uemail" class="txtBox"/>
          <span id="emsg">  </span></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Submit" class="but" onClick="return valSMS();"/></td>
        </tr>
      </table>
    </form>
  </div>
</div>
<div id="footer">
  <?php include_once('footer.php'); ?>
</div>
</body>
</html>
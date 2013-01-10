<?php

?>
<div id="sidebar">
	<div id="logo">
		<span style="font-size:24px;"><a href="#">Way2NewSmS</a></span>
		<h2><span style="color:#fff">free SMS</span></h2>
	</div>
	<div id="menu" class="boxed">
		<div class="content">
			<ul>
				<li class="active"><a href="#" title="">Home</a></li>
                <?php if(isset($_SESSION['username'])){?>
 	            <li><a href="index.php?log=1" title="">Logout</a></li>   
                <li><a href="sendsms.php" title="">Send SMS</a></li>
                <li><a href="addsms.php" title="">Submit SMS</a></li>
      			<li><a href="mycontact.php" title="">My Contacts</a></li>          
                <?php } else {?>
				<li><a href="register.php" title="">Register</a></li>
                <?php } ?>
                <li><a href="#" title="">About Us</a></li>
				<li><a href="#" title="">Contact Us</a></li>

			</ul>
		</div>
	</div>
    <?php if(isset($_SESSION['username'])==''){ ?>
	<div id="login" class="boxed">
		<h2 class="title" style="padding-left:40px;">User Account</h2>
		<div class="content">
			<form id="form1" method="post" action="#">
				<fieldset>
				<legend>Sign-In</legend>
				<label for="inputtext1">User Id or Mobile No:</label>
				<input id="ulogin" type="text" name="ulogin" />
				<label for="inputtext2">Password:</label>
				<input id="upass" type="password" name="upass"/>
				<input id="login" type="submit" name="login" value="Sign In" onclick="return valLogin();"/>
				<p><a href="#">Forgot your password?</a></p>
				</fieldset>
			</form>
		</div>
	</div>
    <?php } ?>
	<div id="updates" class="boxed">
		<h2 class="title">Recent Added SMS</h2>
		<div class="content">
			<?php
            	$obj = new sentSMS();
				$obj->lestSMSLeft();
			?>
		</div>
	</div>
</div>
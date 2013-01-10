<?php include_once('header.php');
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
	<div id="welcome" class="post">
    <?php
	if(isset($_REQUEST['rec']))
	{
		$msg = $_REQUEST['rec'];
    	if($msg == 'sec')
		{
			echo "<span style='color:#363;font-size:18px'>Thank For Register with us you can login now </span>";
		}
		if($msg=='err')
		{
			echo "<span style='color:#F00;font-size:18px'>	Sorry to say this time not able to register </br> please contact with Administrator admin@way2newsms.com </span>";
		}
		if($msg=='logerr')
		{
			echo "<span style='color:#F00;font-size:18px'>	Sorry to say User Id or Login name is Wrong </br> please contact with Administrator admin@way2newsms.com </span>";
		}
	}
	?>
		<?php include_once('main.php') ?>
	</div>
	</div>
</div>
<div id="footer">
<?php include_once('footer.php'); ?>
</div>
</body>
</html>

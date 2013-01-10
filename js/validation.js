function valSMS()
{
	var uname = $('#uname').val()
	if(uname == '')
	{
		//alert('Please Enter Your Name');
		$('#umsg').html('Please Enter Your Name')
		$('#umsg').css("color","Red");
		$('#uname').focus()
		return false
	}
	if(uname != '')
	{
		uname = $.trim(uname);
		$.post('query.php',{quer:'querName',sval:uname},function(data)
		{
			//alert(data)
			if(data == 1)
			{
				$('#uname').val('');
				$('#uname').focus();
				$('#umsg').html('Sorry Username Not Available')
				$('#umsg').css("color","Red");
			}
			else
			{
				$('#umsg').html('Looking Good')
				$('#umsg').css("color","Green");
			}
		});
	}
	var upass = $('#upass').val()
	if(upass == '')
	{
		//alert('Please Enter Your Name');
		$('#umsg').html('')
		$('#pmsg').html('Please Enter Password')
		$('#pmsg').css("color","Red");
		$('#upass').focus()
		return false
	}
	var rupass = $('#rupass').val()
	if(rupass == '')
	{
		//alert('Please Enter Your Name');
		$('#pmsg').html('')
		$('#rpmsg').html('Please Enter Retype Password')
		$('#rpmsg').css("color","Red");
		$('#rupass').focus()
		return false
	}
	if(upass != rupass)
	{
		$('#rpmsg').html('')
		$('#rpmsg').html('Retype Password Not Matching')
		$('#rpmsg').css("color","Red");
		$('#rupass').focus()
		return false
	}
	var fname = $('#fname').val()
	if(fname == '')
	{
		//alert('Please Enter Your Name');
		$('#rpmsg').html('')
		$('#fmsg').html('Please Enter First Name')
		$('#fmsg').css("color","Red");
		$('#fname').focus()
		return false
	}
	var lname = $('#lname').val()
	if(lname == '')
	{
		//alert('Please Enter Your Name');
		$('#fmsg').html('')
		$('#lmsg').html('Please Enter Last Name')
		$('#lmsg').css("color","Red");
		$('#lname').focus()
		return false
	}
	var umob = $('#umob').val()
	if(umob == '')
	{
		//alert('Please Enter Your Name');
		$('#lmsg').html('')
		$('#mmsg').html('Please Enter Mobile Number')
		$('#mmsg').css("color","Red");
		$('#umob').focus()
		return false
	}
	if(umob != '')
	{
		if(isNaN(umob))
		{
			$('#lmsg').html('')
			$('#mmsg').html("Mobile No Should Be Only Digits.");
			$('#mmsg').css("color","Red");
			$('#umob').focus();
			return false;
		}
		else if(umob.length<10 || umob.length>12)
		{
			$('#lmsg').html('')
			$('#mmsg').html("Mobile No. Should Be 10 Digits.");
			$('#mmsg').css("color","Red");
			$('#umob').focus();
			return false;
		}
	}
	var uemail = $('#uemail').val()
	if(uemail == '')
	{
		//alert('Please Enter Your Name');
		$('#mmsg').html('')
		$('#umob').html('')
		$('#emsg').html('Please Enter Email Id')
		$('#emsg').css("color","Red");
		$('#uemail').focus()
		return false
	}
	if(uemail != '')
	{
		$('#lmsg').html('')
		$('#umob').html('')
		var uemail = $('#uemail').val();
		var emailRegEx = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;
		if (uemail.search(emailRegEx) == -1)
		{
			$('#emsg').html("Please enter a valid email address.");
			$('#emsg').css("color","Red");
			$('#uemail').focus();
			return false;
		}
	}
	
}
function valLogin()
{
	var ulogin = $('#ulogin').val();
	if(ulogin == '')
	{
		alert('Please Enter Login Name or Mobile no');
		$('#ulogin').focus();
		return false;
	}
	var upass = $('#upass').val();
	if(upass == '')
	{
		alert('Please Enter Password');
		$('#upass').focus();
		return false;
	}
}

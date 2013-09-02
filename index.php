<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=gb2312' />
<meta http-equiv='keywords' content='cuc,makrt' />
<title>StarsBox</title>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  //$("#passwordp").hide();
 // $("#passwordt").show();
  $("#passwordt").focus(function(){
	if($("#passwordt").val() == "密码")
		{
		//alert("d");
	  	$("#passwordp").show();
	  	$("#passwordp").focus();
		$("#passwordt").hide();
		}
	  });
  
  $("#passwordp").blur(function(){
	  if (!$('#passwordp').val())
	  {
		//alert("tes");
	  	$("#passwordt").show();
	    $("#passwordt").attr("value","密码");
		$("#passwordp").hide();
	  }
	  
  });

  $("#username").blur(function(){
	  if (!$(this).val())
	  {
		//alert("tes");
	    $(this).attr("value","yong");
	  }
	  
  });
  
});
</script>
</head>
<body>
	<form id='login' action="$_SERVER['PHP_SELF']" method='post'
		accept-charset='UTF-8'>
		<fieldset>
			<label for='username'> <span>UserName*:</span> <input type='text'
				name='username' id='username' value="yonghuming" maxlength="50" />
			</label> <label for='password'> 
			<span>Password*:</span><br/>
			 <input
				type='password' name='password' id='passwordp' style="display:none" maxlength="50" /><br />
				<input
				type='text' name='password' id='passwordt' value="密码" maxlength="50" /><br />
			</label>
		</fieldset>
		<fieldset>
			<input type='submit' name='Submit' value='Submit' />
		</fieldset>
	</form>
</body>
</html>
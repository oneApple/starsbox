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
  $("#showpsw").focus(function(){
	if($(this).val() == "����")
		{
	  	$("#hidepsw").show();
	  	$("#hidepsw").focus();
		$(this).hide();
		}
	  });

  $("#username").focus(function(){
		if($(this).val() == "�û���")
			{
		  	$(this).val("")
			}
  });
  
  $("#hidepsw").blur(function(){
	  if (!$(this).val())
	  {
	  	$("#showpsw").show();
	    $("#showpsw").attr("value","����");
		$(this).hide();
	  }
  });

  $("#username").blur(function(){
	  if (!$(this).val())
	  {
	    $(this).attr("value","�û���");
	  } 
  });
  
});
</script>

<style type="text/css">
  .logininput
	{
	font-family: cursive , serif ;
    color: gray ;
    }
</style>
</head>

<body>
	<form id='login' action="$_SERVER['PHP_SELF']" method='post'
		accept-charset='UTF-8'>
		<fieldset>
		<div class="logininput">
		<p>himan</p>
			<input type='text' id='username' value="�û���" maxlength="50" /> <input
				 type='password' id='hidepsw' style="display: none" maxlength="50" />
			<input type='text' id='showpsw' value="����" maxlength="50" /><br />
		</div>
		</fieldset>
		<fieldset>
			<input type='submit' name='Submit' value='��½' />
		</fieldset>
	</form>
</body>
</html>
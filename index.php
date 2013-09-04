<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh-CN" lang="zh-CN">
<head>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='keywords' content='cuc,makrt' />
<title>StarsBox</title>

<script
	src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("#showpsw").focus(function(){
	if($(this).val() == "密码")
		{
	  	$("#hidepsw").show();
	  	$("#hidepsw").focus();
		$(this).hide();
		}
	  });

  $("#username").focus(function(){
		if($(this).val() == "用户名")
			{
		  	$(this).val("")
		  	$(this).css("color","black")
			}
  });
  
  $("#hidepsw").blur(function(){
	  if (!$(this).val())
	  {
	  	$("#showpsw").show();
	    $("#showpsw").attr("value","密码");
		$(this).hide();
	  }
  });

  $("#username").blur(function(){
	  if (!$(this).val())
	  {
		$(this).css("color","gray")
	    $(this).attr("value","用户名");
	  } 
  });
  
});

</script>

<style type="text/css">
.login_input {
	color: gray;
	width: 250px;
	height: 25px
}

.login_field {
	margin-top: 10%;
	margin-left: 35%;
	line-height: 400%;
}

.login_row3_submit {
	line_with: 200%;
	color: gray;
	word_space: 100px;
}

a:link,a:visited {
	color: gray;
}

#btsubmit {
	position: relative;
	top: 16px;
	width: 80px;
	line_with: 200%;
	float: right;
}

.register_link {
	float: right;
}

.links,.copyright {
	text-align: center;
}



div#header {
	width: 100%;
	min-height: 30px;
	background-color: gray;
}

div#left {
	display：inline;
	float:left;
	min-height: 30px;
	padding-top:5%;
	padding-left:10%;
}

div#right {
	display：inline;
	float:left;
	height:100%;
	min-height: 30px;
}

div.foot_center {
	position:relative;
	padding:10%;
	clear:both;
}
</style>
</head>

<body>
	<div id="header"></div>
		<div id="left">
			<form id='login_form' action="$_SERVER['PHP_SELF']" method='post'
				accept-charset='UTF-8'>

				<fieldset class="login_field">
					<div class="login_row1_username" style="padding-top:10%">
						<input class="login_input" type='text' id='username' value="用户名" />
					</div>
					<div class="login_row2_password">
						<input class="login_input" type='password' id='hidepsw'
							style="display: none" /> <input class="login_input" type='text'
							id='showpsw' value="密码" />
					</div>
					<div class="login_row3_submit">
						<label class="remeber_check"> <input type="checkbox" value="1"
							checked="checked" /> <span>记住我</span>
						</label> <a class="forgot" href="/account/resend_password">忘记密码?</a>
						<input type='submit' id="btsubmit" name='Submit' value='登录' />
					</div>
					<div class="register_link">
						<span><a href="https://reg.jd.com/reg/person">免费注册&gt;&gt;</a></span>
					</div>
					
				</fieldset>
				
			</form>
		</div>
		<div id="right"></div>
		<div class="foot_center">
			<div class="links">
				<a rel="nofollow" target="_blank"
					href="http://www.jd.com/intro/about.aspx">帮助说明</a>| <a
					rel="nofollow" target="_blank" href="http://www.jd.com/contact/">联系我们</a>|
				<a target="_blank" href="http://club.jd.com/links.aspx">友情链接</a>
			</div>
			<div class="copyright">Copyright&copy;2013&nbsp;&nbsp;StarsBox.com&nbsp;版权所有</div>
		</div>
</body>
</html>
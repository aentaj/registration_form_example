<?php
//register_form
//page name space = rf
//pre-requisits: style.css,reset.css,... tbc

//page variables
	$_GLOBALS['rf.ap'] = "api_register.php";//$_SESSION['cp'];//ap = action_page
	$_GLOBALS['rf.tc'] = "grad0";//tc = table_class
	$_GLOBALS['rf.tk'] = "token";//tk = token
?>
<form method="POST" action=<?php echo "\"".$_GLOBALS['rf.ap']."\"";?>>
	<table style="margin: 0 auto" class=<?php echo "\"".$_GLOBALS['rf.tc']."\"";?> align="center">
		<tr><th colspan=3>تسجيل مستخدم جديد</th></tr>
		<tr><td style="text-align: right">البريد الإلكتروني</td><td><input style="text-align: center;" type="text" name="email" size="30" /></td></tr>
		<tr><td style="text-align: right">رقم الجوال</td><td><input style="text-align: center;" type="text" name="mobile" size="30" /></td></tr>
		<tr><td style="text-align: right">كلمة المرور</td><td><input style="text-align: center;" type="password" name="password" size="31" /></td></tr>
		<tr><td style="text-align: right">تأكيد كلمة المرور</td><td><input style="text-align: center;" type="password" name="cpassword" size="31" /></td></tr>
        <tr><td colspan="100%" align="center"><input type="submit" name="login" value="إرسال - Submit" /></td></tr>
	</table>
		<input type="hidden" name="token" value="<?php echo $_GLOBALS['rf.tk'];?>" />
</form>


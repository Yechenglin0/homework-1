<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
	<title>主页</title>
</head>
<body>
	<?php
		session_start();
		if ($_SESSION['login']) {
			?>
				<a href="login.html">登入</a>
				<a href="regist.html">注册</a>
			<?php
		}	
		else{
			?>
			<form action="logout.php" method="post">
				<input type="button" value="注销">
			</form>
			<?php
		}
	?>
</body>
</html>
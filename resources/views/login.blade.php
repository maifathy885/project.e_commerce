<html>
	<head>
		<title>Log in</title>
	</head>
	<body style="background-image:url('images/4.jpg');background-size:cover">
	<form action="{{route('home')}}" method="post">
			<table style="margin-left:56%;margin-top:23%;font-weight:bold;font-size:50">
				<tr><td>username:</td><td><input type='text' name='user' style="font-size:25"></td></tr>
				<tr><td>password:</td><td><input type='password' name='pass' style="font-size:25"></td></tr>
			   <tr><td><input type='submit' value='Log in' style="margin-left:140%;font-weight:bold;font-size:37;background:LightCoral"></td></tr>
			</table>
	</form>
	</body>
</html>
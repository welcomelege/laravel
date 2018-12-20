<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div >
	<form action="{{url('admin/lege_login')}}" method="post">
		{{ csrf_field() }}
			<h1>登录</h1>
		用户名：<input type="text" name='username'> <br>
		密码：<input type="text" name='passworsd'> <br>
		<input type="submit" value="提交">
	</form>
	</div>
</body>
</html>
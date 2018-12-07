<!DOCTYPE html>
<html>
<head>
	<title>LOGIN DROPRESS</title>
	<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<style>
@media (min-width: 576px) { ... }
body{
    background-image:url('bckg.jpg') ;
    background-size: cover;
	}
div.login{
    background: #930707;
    width: 350px;
    margin: 150px auto 0;
    border-radius: 16px;
    }
label{
	color: #ffffff;
	size:20px;
}
.btn{
margin-left: 39%;
margin-top: 5%;
padding: 4px 8px;
}
div.ktdaftar h3{
	font-size: 20px;
	color: #ffffff;
	font-family: sans-serif;
	text-align: center;
}
div.ktdaftar a{
	font-size: 20px;
	color: yellow;
	font-family: sans-serif;
	text-align: center;
}
div.ktdaftar a:hover{
	color: #4286f4;
}
</style>
</head>
<body>
	<br/>
	<br/>
	<div class="login">
	<br/>
		<form action="login.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="btn btn-lg btn-primary">
			</div>
			<div class="ktdaftar">
			<h3>Belum punya akun? Silahkan klik<a href="daftar.php"> Daftar!</a></h3>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>REGISTER DROPRESS</title>
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
    width: 460px;
    margin: 150px auto 0;
    border-radius: 16px;
    }
label{
	color: #ffffff;
	size:20px;
}
.btn{
margin-left: 41%;
margin-top: 5%;
padding: 4px 8px;
}
div.ktdaftar h3{
	font-size: 18px;
	color: #ffffff;
	font-family: sans-serif;
	text-align: center;
}
div.ktdaftar a{
	font-size: 18px;
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
		<form action="daftar.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Nama Lengkap *</label>
				<input type="text" name="fullname" id="fullname" />
			</div>
			<div>
				<label>Email *</label>
				<input type="text" name="email" id="email" />
			</div>
			<div>
				<label>Password *</label>
				<input type="password" name="password" id="password" />
			</div>
			<div>
				<label>Alamat *</label>
				<input type="text" name="alamat" id="alamat" />
			</div>
			<div>
				<label>No HP *</label>
				<input type="text" name="nohp" id="nohp" />
			</div>
			<div>
				<label>No KTP *</label>
				<input type="text" name="noktp" id="noktp" />
			</div>
			<div>
				<input type="submit" value="Daftar" class="btn btn-lg btn-primary">
			</div>
			<div class="ktdaftar">
			<h3>*Anda menyetujui<a href="#"> syarat dan ketentuan </a>yang telah dibuat oleh DROPRESS dengan meng-klik tombol Daftar.</h3>
			</div>
		</form>
	</div>
</body>
 
<script type="text/javascript">
	function validasi() {
		var fullname = document.getElementById("fullname").value;
		var email = document.getElementById("email").value;
		var password = document.getElementById("password").value;		
		var alamat = document.getElementById("alamat").value;
		var nohp = document.getElementById("nohp").value;
		var noktp = document.getElementById("noktp").value;
		if (fullname != "" && email!="" && password!="" && alamat!="" && nohp!="" && noktp!="") {
			return true;
		}else{
			alert('Isikan semua data yang ada dengan benar!');
			return false;
		}
	}
 
</script>
</html>
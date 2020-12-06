<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>প্রবেশ করুন</title>
	<link rel="stylesheet" type="text/css" href="form.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<style>
		*{
			margin: 0;
			padding: 0;
			font-family: verdana;
		}
		body{
			background-image: url("BG.jpg");
		}
		#wrap{
			margin-top: 155px;
			margin-left: 480px;
			width: 412px;
			background: #0006;
			padding: 20px;
			border: 3px solid #0ced39;
			border-radius: 5px;
		}
		#wrap h2{
			font-size: 30px;
			text-align: center;
			margin-bottom: 30px;
			color: #0ced39;
		}
		#wrap input{
			width: 400px;
			height: 35px;
			margin-bottom: 18px;
			border-radius: 10px;
			background-color: #0003;
			border: 2px solid #0ced39;
			padding: 7px;
			color: #ffffff;
			font-size: 20px;
		}
		#wrap #btn-nn{
			width: 411px;
			height: 40px;
			background-color: #0ced39;
			color: #000000;
			border-radius: 5px;
			border: 0;
			font-size: 18px;
			font-style: normal;
			margin-bottom: 5px;
		}
		::placeholder{
  			color: #0ced39;
		}
		p1{
			color: #ffffff;
		}
		a{
			color: #ffeb08;
		}
		#s_under{
			text-decoration: none;
		}

		#nav-bar
{
    width: 100%;
    height: auto;
}
nav
{
    width: 100%;
    height: 75px;
    background-color: #0006;
    line-height: 75px;
}
nav ul
{
    float: right;
    margin-right: 40px;
}
nav ul li
{
    list-style-type: none;
    display: inline-block;
    transition: 0.8s all;
    -webkit-border-radius: 10px;
    -moz-border-radius: 10px;
    border-radius: 10px;
    border: none;
}
nav ul li:hover
{
	background-color: #FF5733;
}
nav ul li a{
  text-decoration: none;
  color: #ffffff;
  padding: 10px;
}
.search
{
    align-content: center;
    width: 600px;
    padding: 10px;
    -webkit-border-radius: 20px;
    -moz-border-radius: 20px;
    border-radius: 20px;
    border: none;
    font-size: 18;
    text-align: left;
    margin: 15px;
}
.search
{
    font-size: 20px;
}
	</style>

</head>
<body>

	<div id="nav-bar">
		<nav>
			<a href="index.html"><img src="Ispat.png" width="225" height="72"></a>
			<ul>
			    <li class="searchli">
                <div>
			        <input type="text" class="search" placeholder="খুঁজুন...">
			        <button class="button"><i class="fas fa-search"></i> </button>
			     </div>
			    </li>
				<li><i class="fas fa-home"></i><a href="index.html">হোম</a></li>
                <li><i class="fas fa-user-tie"></i><a href="login.php">অ্যাকাউন্ট</a></li>
			</ul>
		</nav>
	</div>
	
	<div id="wrap">
		<form action="index.php" method="POST">
			<h2>সঠিক তথ্য দিন</h2>

			<input type="text" name="username" placeholder="ইউজারনেম">
			<input type="password" name="password" placeholder="পাসওয়ার্ড">
	
			<button type="submit" id="btn-login" name="button1" class="button" onClick="parent.location='login.php'">প্রবেশ করুন</button>

			<p1>কোন অ্যাকাউন্ট নেই?</p1><p2 style="font-size:100%;"><a id="s_under" href="sign_up.php"> অ্যাকাউন্ট খুলুন এখনই</a></p2>
		</form>
	</div>

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>নিবন্ধন পাতা</title>
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
			margin-top: 35px;
			margin-left: 510px;
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
		#wrap #btn-reg{
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
		#cntr{
			display: inline;
		}
		#cntr input{
			width: 50px;
			height: 20px;
		}
		#lb1{
			font-size: 20px;
			color: #0ced39;
		}
		#lb2{
			margin-right: 20px;
			width: 20px;
			height:10px;
			color: #0ced39;
		}
		#lb3{
			width: 20px;
			height:10px;
			color: #0ced39;
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
    background-color: #0005;
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
		<form action="sign_up_db.php" method="POST">
			<h2>নিবন্ধন ফরম</h2>
			<input type="text" name="name" placeholder="আপনার নাম">
			<input type="text" name="phone" placeholder="মোবাইল নাম্বার">

			<input type="email" name="email" placeholder="ই-মেইল (অত্যাবশ্যক নয়)">
			<input type="text" name="address" placeholder="পূর্ণ ঠিকানা">
			<input type="text" name="username" placeholder="ইউজারনেম">
			<input type="password" name="password" placeholder="পাসওয়ার্ড">
	
			<button type="submit" onclick="window.location.href='sign_up_db.php'" id="btn-reg">নিবন্ধন করুন</button>
		</form>
	</div>

</body>
</html>
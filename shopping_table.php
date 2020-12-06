<!DOCTYPE html>
<html>
<head>
	<title>কেনাকাটার তালিকা</title>
	<link rel="stylesheet" type="text/css" href="shop_table.css">
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
				<li><i class="fas fa-home"></i><a href="index.php">হোম</a></li>
                <li><i class="fas fa-user-tie"></i><a href="login.php">অ্যাকাউন্ট</a></li>
			</ul>
		</nav>
	</div>
	
	<br>

	<table>
		<tr>
			<th>পণ্যের নাম</th>
			<th>পণ্যের দাম</th>
		</tr>
	</table>
	<br>
	<button type="submit" onclick="window.location.href='payment.php'" id="btn-reg">পেমেন্ট করুন</button>
	<br><br>
</body>
</html>
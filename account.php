<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Furnica</title>
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<script type="text/javascript"></script>
		<script src="js/reg.js"></script>
	</head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

<body>
	<header>
			<a href="index.html"><img src="images/logo.png" width="197" height="99" alt="logo"/></a>
			<nav>
				<ul class="nav_links">
					<li><a href="index.html">Home</a></li>
					<li><a href="product.html">Products</a></li>
					<li><a href="cart.html">Cart</a></li>
					<li><a href="account.html">Account</a></li>
				</ul>
			</nav>
	</header>
	<div class="content">
		<div class="title">Account Registration</div>
		<div class="break"></div> 
	  <form name="myForm" onsubmit="return validateForm()" action="product.html" method="post">
	    <div class="user-details">
			  <div class="subtitle" align="center">Personal Details</div>
			<div class="break2"></div> 
					<div class="input-box">
						<span class="fname">Full Name:</span>
						<input type="text" name="fname" required>
					</div>
			  <div class="input-box">
						<span class="email">Email:</span>
						<input type="email" name="email" required>
		  </div>
			  <div class="input-box">
						<span class="phone">Phone:</span>
						<input type="text" name="phone" required>
			</div>
			  <div class="input-box">
						<span class="password">Password:</span>
						<input type="password" name="password" required>
		  </div>
			<div class="break"></div> 
				<div class="shipping-details">
				<div class="subtitle" align="center">Shipping Details</div>
					<div class="break2"></div> 
				  <div class="input-box">
						<span class="address1">Address:</span>
						<input type="text" name="address" required>
				  </div>
				  <div class="input-box">
						<span class="city">City:</span>
						<input type="text" name="city" required>
				  </div>
				  <div class="input-box">
						<span class="postal">Postal Code:</span>
						<input type="text" name="postal" required>
				  </div>
				  <div class="input-box">
					<span class="state">State:</span>
						<select name="state">
       						<option selected="" value="Default">Select a state.</option>
							<option value="Johor">Johor</option>
        					<option value="Kedah">Kedah</option>
							<option value="Kelantan">Kelantan</option>
							<option value="Malacca">Malacca</option>
							<option value="Negeri Sembilan">Negeri Sembilan</option>
							<option value="Pahang">Pahang</option>
							<option value="	Penang">Penang</option>
							<option value="	Perak">	Perak</option>
							<option value="Sabah">Sabah</option>
							<option value="	Sarawak">Sarawak</option>
							<option value="Terengganu">Terengganu</option>
							<option value="Kuala Lumpur">Kuala Lumpur</option>
							<option value="Labuan">Labuan</option>
							<option value="	Putrajaya">	Putrajaya</option>
        				</select>
				  </div>
				</div>
			</div>
		  <p><br>
		    <input class="submit" type="submit" name="submit" value="Submit"/>
	    </p>
		  <p>&nbsp;</p>
		  <p>&nbsp;</p>
	  </form>
		
		</div>
	
</body>
</html>

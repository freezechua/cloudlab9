<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>productica</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
	<script src="js/cart.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
	<header>
		<a href="index.php"><img src="images/logo.png" width="197" height="99" alt="img1" /></a>
		<nav>
			<ul class="nav_links">
				<li><a href="index.php">Home</a></li>
				<li><a href="product.php">Products</a></li>
				<li><a href="cart.php">Cart</a></li>
				<li><a href="account.php">Account</a></li>
			</ul>
		</nav>
	</header>
	<div class="content2">
		<div class="title">Products</div>
		<div class="products">
			<div class="break"></div>
			<div class="subtitle">Watch</div>
			<div class="break2"></div>
			<fieldset class="col1">
				<img src="images\product-9.jpg" class="img1">
				<div class="productname">Roadster Watch</div>
				<div class="productprice">
					<p>RM 700</p>
				</div>
				<button type="button" onclick="addproduct('Roadwatch','400')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="images\product-8.jpg" class="img1">
				<div class="productname">Fossil Watch</div>
				<div class="productprice">
					<p>RM 600</p>
				</div>
				<button type="button" onclick="addproduct('Fossilwatch','300')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle">Shirt</div>
			<div class="break2"></div>

			<fieldset class="col1">
				<img src="images\gallery-1.jpg" class="img1">
				<div class="productname">Red Printed T-Shirt</div>
				<div class="productprice">
					<p>RM 70</p>
				</div>
				<button type="button" onclick="addproduct('Redshirt','70')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="images\product-4.jpg" class="img1">
				<div class="productname">Blue Printed T-Shirt</div>
				<div class="productprice">
					<p>RM 90</p>
				</div>
				<button type="button" onclick="addproduct('Blueshirt','90')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle">Shoes</div>
			<div class="break2"></div>
			<fieldset class="col1">
				<img src="images\product-5.jpg" class="img1">
				<div class="productname">Grey Shoe</div>
				<div class="productprice">
					<p>RM 400</p>
				</div>
				<button type="button" onclick="addproduct('Greyshoe','1050')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="images\product-10.jpg" class="img1">
				<div class="productname">Black Shoe</div>
				<div class="productprice">
					<p>RM 500</p>
				</div>
				<button type="button" onclick="addproduct('Blackshoe','1000')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle">Pants</div>
			<div class="break2"></div>
			<fieldset class="col1">
				<img src="images\product-3.jpg" class="img1">
				<div class="productname">Slim Pants</div>
				<div class="productprice">
					<p>RM 115</p>
				</div>
				<button type="button" onclick="addproduct('Slimpants','1000')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="images\product-12.jpg" class="img1">
				<div class="productname">Fit Pants</div>
				<div class="productprice">
					<p>RM 125</p>
				</div>
				<button type="button" onclick="addproduct('Fitpants','1500')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<div class="break"></div>

			<div class="subtitle">Socks</div>
			<div class="break2"></div>

			<fieldset class="col1">
				<img src="images\product-7.jpg" class="img1">
				<div class="productname">Short Socks</div>
				<div class="productprice">
					<p>RM 150</p>
				</div>
				<button type="button" onclick="addproduct('Shortsocks','800')" class="btnatc">Add to Cart</button>
			</fieldset><br>

			<fieldset class="col2">
				<img src="images\product-13.jpg" class="img1">
				<div class="productname">Long Socks</div>
				<div class="productprice">
					<p>RM 100</p>
				</div>
				<button type="button" onclick="addproduct('Longsocks','1000')" class="btnatc">Add to Cart</button>
			</fieldset>
			<div class="break"></div>
			<div class="break"></div>
		</div>
	</div>
</body>

</html>
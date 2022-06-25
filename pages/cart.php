<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>
		<title>Furnica</title>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="js/cart.js"></script>
		<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
		<link href="css/style.css" rel="stylesheet" type="text/css">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	</head>

<body>
	<header>
			<a href="index.html"><img src="images/logo.png" width="197" height="99" alt="img1"/></a>
			<nav>
				<ul class="nav_links">
					<li><a href="index.html">Home</a></li>
					<li><a href="product.html">Products</a></li>
					<li><a href="cart.html">Cart</a></li>
					<li><a href="account.html">Account</a></li>
				</ul>
			</nav>
	</header>
	<div class="content2">
	  <div class="title">Cart</div>
	  <div class="break"></div>
	  <table width="1000" class="summary" style="text-align: center;">
		<thead>
			<tr>
				<th>Num.</th>
				<th>Products</th>
				<th>Quantity</th>
				<th>Price</th>
			</tr>
		</thead>
		<tbody></tbody>
		</table>
	  <br><br>
		
		<table width="1000" class="summary2" style="line-height: 2;">
			<tr>
				<td width="225">Subtotal</td>
				<td width="763"  class="subtotal"></td>
			</tr>
			<tr>
				<td>Postage Fees</td>
				<td class="postage"></td>
			</tr>
			<tr>
				<td class="discount_rate">Discount</td>
				<td class="discount"></td>
			</tr>
			<tr>
				<td>Total</td>
				<td class="total"></td>
			</tr>	
		</table>
		<div class="break"></div>
		<button type="button" onclick="confirmorder()" class="btnco">Confirm Order</button>
		<div class="break"></div>
		<div class="break"></div>
	</div>	
</body>
</html>

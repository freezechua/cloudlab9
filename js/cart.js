function addproduct(productname,productprice){
	if(localStorage.getItem("selected_productname")===null){
		var productname_array = [];
		var productprice_array = [];
		productname_array.push(productname); //array.push means add 1 more data to the array at ending of array (try google)
		productprice_array.push(productprice);
		localStorage.setItem('selected_productname', JSON.stringify(productname_array));
		localStorage.setItem('selected_productprice', JSON.stringify(productprice_array));
	}else{
		var productname_array=[];
		var productprice_array=[];
		var productname_array = JSON.parse(localStorage.getItem("selected_productname"));//retrive productname data first then baru push new productname into current data
		var productprice_array = JSON.parse(localStorage.getItem("selected_productprice"));
		
		productname_array.push(productname);
		productprice_array.push(productprice);
		localStorage.setItem('selected_productname', JSON.stringify(productname_array));
		localStorage.setItem('selected_productprice', JSON.stringify(productprice_array));
	}
}

function displayproduct(){
	var product_array = JSON.parse(localStorage.getItem("selected_productname"));//get productiture name
	var product_price = JSON.parse(localStorage.getItem("selected_productprice"));//get productiture price
	//console.table(product_array);
	var counter=0;
	var tablestring="<table><>"
	while (counter<product_array.length){
		//console.log("productiture "+parseInt(counter+1)  +" name :" +product_array[counter]);
		//console.log("productiture "+parseInt(counter+1)  +" price :" +product_price[counter]);
		markup = "<tr><td>"+parseInt(counter+1)+"</td><td>" + product_array[counter] +"</td><td><input type='number' value='1' class='quantity' id='quantity_item"
		+parseInt(counter+1)+"' onchange=changequantity("+parseInt(counter+1)+","+product_price[counter]+") name='quantity_item"+parseInt(counter+1)
		+"' min='1' step='1'>" + "</td><td><input type='text' readonly class='price' id='price_item"+parseInt(counter+1)+"' value='RM " + product_price[counter] 
		+ "' name='price_item"+parseInt(counter+1)+"'></td></tr>";
        $(".summary tbody").append(markup);
		counter++;
	}
}

function clearproduct(){ //used after click submit order button in summary page
	localStorage.clear();
}

$( document ).ready(function() {
	displayproduct();
	//must be inside document.ready function
	$('.summary').DataTable( {
		columnDefs: [
		{
			targets: [0, 1, 2, 3] ,//align text in table to be center
			className: 'dt-body-center'
		}
	  ]
	} );
	
	//var myTable =$('.summary').DataTable();
	
	//$('.summary tbody tr:first').remove();
	calculatetotal();
});
var totalquantity=0;
function changequantity(index,productprice){
	//console.log($("#quantity_item"+index).val());
	//console.log($("#price_item"+index).val());
	var price = Number($("#quantity_item"+index).val())*Number(productprice);
	$("#price_item"+index).val('RM '+price.toFixed(2));
	calculatetotal();
}

function calculatetotal(){
	var subtotal=0;
	$('.price').each(function(){
		var totalprice=$(this).val();
		var price = $(this).val().replace('RM','');
		//price=Number(price);
		//console.log(price);   //prints: 123
		subtotal+=Number(price);
	});
	var totalquantity=0;
	$('.quantity').each(function(){
		var quantity = $(this).val();
		totalquantity += parseInt($(this).val());
	});
	//console.log(subtotal.toFixed(2));
	
	
	if(totalquantity>=5&&totalquantity<=10){
		var discount=0.05;
		var discount_rate="5%";
	}else if(totalquantity>10){
		var discount=0.15;
		var discount_rate="15%";
	}else{
		var discount=0;
		var discount_rate="0%";
	}
	
	if (subtotal>100){
		var postage=0;
	}else{
		var postage=10;
	}
	
	var discount_price=subtotal*discount;
	var total=subtotal-discount_price+postage;
	$(".subtotal").html('RM '+subtotal.toFixed(2));
	$(".postage").html('RM '+postage.toFixed(2));
	$(".discount").html('RM '+discount_price.toFixed(2));
	$(".discount_rate").html('Discount ('+discount_rate+')');
	$(".total").html('RM '+total.toFixed(2));
}

function confirmorder(){
	clearproduct();
	alert("Product ordered successfully.");
	location.href="product.html";
}
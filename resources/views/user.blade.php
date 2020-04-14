<html>
	<head>
		<title>User Page</title>
		<style>
		button{
		width:160px;
		height:50px;
		padding:1 15px;
		margin-left:40%;
		margin-top:2%;
		border-radius:8px;
		background-color:SkyBlue;
		text-align:center;
		font-weight:bold;
		font-size:20;
		}
		button a{
		text-decoration:none;
		}
		
		</style>
	</head>
	<body style="background-image:url('images/pngtree-business-man-office-scene-design-png-image_4029208.jpg');background-size:cover">

	<a href="{{route('user_buy_product')}}"><button>Show Products</button></a>
	<br>
	<a href="{{route('cart')}}"><button>Show Carts</button></a>
	<br>
	

	</body>
</html>
<html>
	<head>
		<title>Admin Page</title>
		<style>
		button{
		width:160px;
		height:50px;
		padding:1 15px;
		margin-left:40%;
		margin-top:2%;
		border-radius:8px;
		background-color:‎#f5a6b2;
		text-align:center;
		font-weight:bold;
		font-size:20;
		}
		button a{
		text-decoration:none;}
		
		</style>
	</head>
	<body style="background-image:url('images/2.jpg')">
	<a href="{{route('category')}}"><button>Show Categories</button></a>
	<a href="{{route('products')}}"><button>Show Products</button></a>
	<br>
	

	</body>
</html>
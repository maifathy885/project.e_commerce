<html>
	<head>
		<title>Category Page</title>
		<style>
		.d{
		width:160px;
		height:50px;
		padding:1 15px;
		border-radius:8px;
		background-color:aqua;
		text-align:center;
		font-weight:bold;
		font-size:20;
		}
		.dd{
		margin-left:35%;
		margin-top:2%;
		width:160px;
		height:50px;
		padding:1 15px;
		border-radius:8px;
		background-color:aqua;
		text-align:center;
		font-weight:bold;
		font-size:20;}
		button a{
		text-decoration:none;}
		.bb{margin-left:5%;font-weight:bold;font-size:15;}
		.m{
		margin-left:10%;
		margin-top:5%;}
		.n{margin-left:23%;margin-top:2%}
		</style>
	</head>
	<body style="background-color:CadetBlue">
	<div class="m">
	<a href="{{route('phones_product')}}"><button class="d">Phones</button></a>
	
	<a href="#"><button class="bb">Delete Category</button></a>
	<a href="#"><button class="bb">Edit Category Info</button></a>
	<br>
	
	<image src="images/IMG-20200408-WA0041.jpg" width=250 height=150 class="n"><br>
	</div>
	<div class="m">
	<a href="{{route('electrics_product')}}"><button class="d">Electric Devices</button></a>
	
	<a href="#"><button class="bb">Delete Category</button></a>
	<a href="#"><button class="bb">Edit Category Info</button></a>
	<image src="images/IMG-20200408-WA0035.jpg" width=250 height=150 class="n"><br>
	<br>
	</div>
	<a href="#"><button class="dd">Add Category</button></a>

	
	</body>
</html>
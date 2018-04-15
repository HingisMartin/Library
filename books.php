<html>
<head>
	<title>Library</title>
	<style>
	.navbar{
		display=flex;
	}
	a{
		padding: 10px;
		text-decoration: none;
	}
	a:hover{
		background-color: #355;
		color: white;
	}
	img{
		height: 150px;
		width:150px;
	}
	.div-left {
    float: left;
    height: 150px;
    width:150px;

    max-width: 170px;
    margin: 0;
    padding: 1em;
}
.div-article {
	height: 150px;
	width:150px;
	
    margin-left: 170px;
    border-left: 1px solid gray;
    padding: 1em;
}
span{
	padding-top: 100px:;
}
	</style>
</head>
<body>
	<nav class="navbar">
		<a href="index.html">Home</a>
		<a href="books.php">Books</a>
	</nav>
	<hr>
<?php
include('config.php');
$sql="select * from books";
$res=mysqli_query($conn,$sql);
while($row= mysqli_fetch_assoc($res)){
	echo "<div class=\"div-left\"> <img src=\"".$row['image']."\" /></div> <div class=\"div-article\"> ".
	 $row['Bookname'] ."<br><span> Author :</span>" .$row['Author']." Availability :".$row['Availability']."</div><br>";
}
?>
<footer>Copyright &copy; HM</footer>
</body>
</html>

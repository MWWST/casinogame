<?php 
session_start();
?>
<html>
<head>
	<title></title>

<style>
#container{
	width:980;
	margin: 0px auto;
}
#gamble {
	padding-left: 450px;
	padding-top:200px;
}

#farm {
	display: inline-block;
	vertical-align: top;	
	border: 1px solid #000000;
	padding:20px;
}
#cave {
	display: inline-block;
	vertical-align: top;	
	border: 1px solid #000000;
	padding:20px;
}
#house {
	display: inline-block;
	vertical-align: top;	
	border: 1px solid #000000;
	padding:20px;
}

#casino {
	display: inline-block;
	vertical-align: top;	
	border: 1px solid #000000;
	padding:20px;

}

#activites {
	margin-top: 20px;
	width:675px;
	height:400px;
	overflow: scroll;
	border:1px solid #000000;
}
</style>
</head>
<body>
<div id-="container">
	<div id="gamble">
	<div id="goldcount">

<?php if(isset($_SESSION['counter'])) {
	echo $_SESSION['counter'];
	}
	else 	{
	echo "0";
		}

?>
	</div>
		<div id="farm">
		(earns 10-20 golds)
			<form action="process.php" method="post" enctype="multipart/form">
			<input class="button" type ="submit" value="FindGold!">
			<input type ="hidden" name="action" value ="farmgold">
			</form>
		</div>
		<div id="cave">
		(earns 10-20 golds)
			<form action="process.php" method="post" enctype="multipart/form">
			<input class="button" type ="submit" value="FindGold!">
			<input type ="hidden" name="action" value ="cavegold">
			</form>
		</div>
		<div id="house">
		(earns 10-20 golds)
			<form action="process.php" method="post" enctype="multipart/form">
			<input class="button" type ="submit" value="FindGold!">
			<input type ="hidden" name="action" value ="housegold">
			</form>
		</div>
		<div id="casino">
		(earns 10-20 golds)
			<form action="process.php" method="post" enctype="multipart/form">
			<input class="button" type ="submit" value="FindGold!">
			<input type ="hidden" name="action" value ="casinogold">
			</form>
		</div>
	<div>
	<div id="activites">
		<?php 
			if (isset($_SESSION['activities'])){
		 foreach($_SESSION['activities'] as $activity) {
			// foreach($activity as $value) {
				var_dump($activity);
				var_dump($_SESSION['activities']);
			?> <div><?=$activity;?></div>
		<?php }
	 }
	  ?>
	</div>
</div>
</body>
</html>


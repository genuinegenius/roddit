<?php include('server.php'); ?>
<?php include('server1.php'); ?>
<html>
<style>
	body
	{
		overflow-x:auto;
		margin:0;
		padding:0;
	}
	.container{
		overflow-y:auto;
		overflow-x:hidden;
		width:1349px;
		height:auto;
		min-height:100%;
		background-color:#eef2f5;
		margin:auto;
		padding:0;
	}
	.top{
		display:inline-block;
		margin:0px 0px 0px 0px;
		height:50px;
		width:100%;
		background-color:#cee3f8;
		border-top-style:solid;
		border-top-width:1px;
		border-bottom-style:solid;
		border-bottom-width:1px;
		border-bottom-color:#0000A0;
	}
	.redditlink{
		display:inline-block;
		margin:5 0 0 0;
		padding:0;
	}
	.redditlink1:hover{
		background-color:#add8e6;
		border:1px solid #add8e6;
		border-radius:5px;
	}
	.login{
		display:inline-block;
		float:right;
		width:410px;
		height:20px;
		background-color:#ADD8E6;
		text-align:left;
		border-radius:5%;
		margin:30 0 0 0;
	}
	p.logpage{
		text-align:left;
		color:gray;
		padding:4 0 0 4;
		margin:0;
	}
	.mainpage{
		float:left;
		padding:0;
		margin-top:0px;
		margin-left:0px;
		height:auto;
		min-height:100%;
		width:100%;
		background-color:#eef2f5;
	}
	.postare{
		margin: auto;
		margin-top: 25;
		padding: 15;
		width: 85%;
		height: auto;
		min-height: 100%;
		background-color: white;
		border: 0;
		border-radius: 5px;
	}
	button.inapoi{
		margin: 0;
		padding: 5;
		width: auto;
		height: 25;
		background-color: gray;
	}
	a{
		text-decoration:none;
		color:black;
	}
	.titlu{
		padding: 0;
		margin: 0;
		text-transform: uppercase;
	}
	.tabmenu1{
		display:inline-block;
		list-style-type:none;
		margin-left:0;
		margin-top:15px;
		padding:0px
	}
	li{
		padding:0;
		background-color:#eef2f5;
		display:inline-block;
		padding:0;
		margin-right:10px;
	}
	li.selected2{
		color:black;
		background-color:white;
	}
	li:hover{
		opacity:0.8;
	}
	a.selected3{
		padding:0;
		background-color:white;
		color:blue;
		border-bottom-style:solid;
		border-bottom-width:1.5;
		border-bottom-color:blue;
	}
	.numelike{
		margin: auto;
		margin-top: 0;
		margin-left: 0;
		padding: 0;
		width: 85%;
		height: auto;
		min-height: 100%;
		background-color: white;
		border: 0;
		border-radius: 5px;
	}
</style>
<title> roddit </title>
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
		<link rel="stylesheet" type="text/css" href="css\modal.css"><!--link the css file-->
	</head>
<body bgcolor="#eef2f5">
	<div class="container">
		<!--CHENARUL DE SUS-->
		<div class="top">
			<!--Poza roddit-->
			<a href="action_login.php"><img class="redditlink" src="img\reddit.png" height="40px" width="120px"></img></a>
			<!--Login si signup-->
			<div class="login">
				<p class="logpage"><a class="loginpagelink" href="profile.php"> <?php echo $_SESSION['username']; ?></a> <font size=1>|</font> <a class="loginpagelink" href="setari.php">setari</a> <font size=1>|</font> <a class="loginpagelink" href="action_login.php?logout='1'">delogheaza-te</a> </p>
			</div>
		</div>
		<div class="mainpage">
			<div class="postare">
				<button type="button" class="inapoi"> <a href="action_login.php" style="color: white;"> Inapoi </a> </button>
				<button type="button" class="inapoi"> <a href="#" style="color: white;"> Profil: <?php echo $_SESSION['postarealui']; ?> </a> </button>
				<span style="margin-left: 15; color: gray;"> postat pe data de 
					<?php 
						echo date('d',strtotime($_SESSION['datapostarii'])); 
						echo ' ' . date('M',strtotime($_SESSION['datapostarii']));
						echo ' ' . date('Y',strtotime($_SESSION['datapostarii']));
					?>
				</span>
				<p class="titlu" style="margin-top: 35;"> Titlul: <span style="color: blue;"> <?php echo $_SESSION['titlulpostarii']; ?> </span> </p>
				<?php
				if($_SESSION['textulpostarii'] != '')
					echo '<p class="titlu" style="margin-top: 5;"> Textul: <span style="color: blue;">';
					echo $_SESSION['textulpostarii'];
					echo '</span> </p>'
				?>
				<ul class="tabmenu1">
					<?php
						$var=$_SESSION['idulpostariilike'];
						echo '<li class="selected2"> <a href="postari_voturinegative.php?likepost=1&dislikepost=0&comentariupost=0&id='. $var .'"> <font size=3 style="font-family:Bookman;"> Voturi pozitive </font> </a> </li>';
					?>
					<li class="selected2"> <a class="selected3" href="#"> <font size=3 style="font-family:Bookman;"> Voturi negative </font> </a> </li>
					<?php
						$var=$_SESSION['idulpostariilike'];
						$var2=$_SESSION['nrcom'];
						echo '<li class="selected2"> <a href="./postari_comentarii.php?likepost=0&dislikepost=0&comentariupost=1&id=' . $var . '&nrcom=' . $var2 . '"> <font size=3 style="font-family:Bookman;"> Comentarii </font> </a> </li>';
					?>
				</ul>
				<div class="numelike">
					<?php
						$localhost = "localhost";
						$idbazadedate = "root";
						$parolabazadedate = "";
						$db2 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'posts');
						$idulpostarii = $_SESSION['idulpostariilike'];
						$audatlike = "SELECT * FROM votari WHERE jos=1 AND idpost='$idulpostarii'";
						$result = mysqli_query($db2,$audatlike);
						while ($r = mysqli_fetch_array($result)) 
						{
							echo $r['cinedalike'] . " ";
						}
					?>
				</div>
			</div>
		</div>
	</div>
</body>


</html>
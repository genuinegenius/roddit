<?php include('server.php'); ?>
<?php include('server7.php'); ?>
<html>
	<title> roddit : <?php echo $_SESSION['username']; ?> </title>
	<head> 
		<link rel="icon" type="png" href="img\wtm.png"><!--link the watermark-->
		<link rel="stylesheet" type="text/css" href="css\modal.css"><!--link the css file-->
	</head>
	<style>
		#urmaritori{
			font-family:Arial;
			display:inline-block;
			margin:10 0 0 15;
			padding:2 8 0 7;
			height:auto;
			width:auto;
			text-align:center;
			background-color:#d3d3d3;
			border:1px solid #d3d3d3;
			border-radius:5px;
			color:gray;
		}
	</style>
	<style>
		body{
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
			width:1366px;
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
		a{
			text-decoration:none;
			color:black;
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
			width:900;
			background-color:#eef2f5;
		}
		.mainleftside{
			float:left;
			padding:0;
			margin-top:0;
			margin-left:0;
			height:90;
			max-height:100%;
			width:964;
			background-color:#eef2f5;
		}
		.mainrightside{
			float:right;
			padding:10 0 0 0;
			margin-top:0;
			height:80;
			max-height:100%;
			width:385;
			background-color:#eef2f5;
			}
		form.search{
			width:375;
			border: 1px solid #f1f1f1;
		}
		input.searchbar{
			width: 99.5%;
			padding: 5px 5px;
			margin: 1 1 1 1;
			display: inline-block;
			border: 1px solid #ccc;
		}
		a.copyright1:hover{
			text-decoration:underline;
			color:gray;
		}
		a.linkpostnou{
			text-decoration:none;
			color:black;
			margin-left:15px;
			padding:8px 114px 3px 114px;
			border:1px solid #cee3f8;
			border-radius:5px;
			text-align:center;
			background-color:#cee3f8;
			cursor:pointer;
		}
		a.linkpostnou:hover{
			opacity:0.8;
		}
	.profilerightside{
		float:right;
		margin-top:0;
		height:auto;
		min-height:100%;
		width:449;
		background-color:#eef2f5;
		}
	.chenaruldindreapta{
		margin-left:25;
		margin-top:50;
		height:100px;
		width:350px;
		background-color:white;
		border-style:solid;
		border-width:1px;
		border-color:white;
		border-radius:5px;
	}
	a.linkprofil{
		text-decoration:none;
	}
	a.linkprofil:hover{
		text-decoration:underline;
	}
	a.linkpostnou{
		text-decoration:none;
		color:white;
		margin-left:15px;
		padding:6px 118px 3px 118px;
		border:1px solid #0000A0;
		border-radius:5px;
		text-align:center;
		background-color:#0000A0;
		cursor:pointer;
	}
	a.linkpostnou:hover{
		opacity:0.6;
	}
	p.setaritext{
		text-align:left;
		padding-top:25px;
		padding-left:50px;
	}
	.tabmenu1{
			display:inline-block;
			list-style-type:none;
			margin-left:80px;
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
			background-color:#eef2f5;
		}
		li:hover{
			opacity:0.8;
		}
		a.selected3{
			padding:0;
			background-color:#eef2f5;
			color:blue;
			border-bottom-style:solid;
			border-bottom-width:1.5;
			border-bottom-color:blue;
		}
		p.niciunpost{
			text-align:left;
			color:gray;
			margin-left:150;
		}
	.chenarnewsfeed{
		margin-left:80;
		margin-top:0;
		height:auto;
		min-height:100%;
		width:735;
		background-color:white;
		border-style:solid;
		border-width:1px;
		border-color:white;
		border-radius:5px;
	}
		.divpostareright{
			float:left;
			height:auto;
			min-height:40;
			width:99%;
			margin:2 0 2 2;
			padding:0;
			border:1px solid white;
			background-color:white;
			
		}
	</style>
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
			<!--Pagina principala dreapta-->
			<div class="mainpage">
				<ul class="tabmenu1">
					<li class="selected2"> <a href="profile.php"> <font size=3 style="font-family:Bookman;"> Prezentare Generala </font> </a> </li>
					<li class="selected2"> <a href="posturi.php"> <font size=3 style="font-family:Bookman;"> Posturi </font> </a> </li>
					<li class="selected2"> <a class="selected3" href="#"> <font size=3 style="font-family:Bookman;"> Comentarii </font> </a> </li>
				</ul>
				<?php
					if($k==0)
						echo '<p class="niciunpost"> <i> hmmm... se pare ca nu ai niciun comentariu inca </i> </p>';
					else
					{
						echo '<div class="chenarnewsfeed">';
						$var=$k;
						while($var){
							$_SESSION['user'] = $user[$var];
							$_SESSION['commtext'] = $comentariu[$var];
							$_SESSION['idpost'] = $idpost[$var];
							$_SESSION['data'] = $data[$var];
							echo '<div id="divmare" class="divpostare">';
								echo '<div id="divdreapta" class="divpostareright">';
									echo '<p style="color:blue;padding:0;margin:0;"> ai comentat pe ';
									echo date('d',strtotime($_SESSION['data'])); 
									echo ' ' . date('M',strtotime($_SESSION['data']));
									echo ' ' . date('Y',strtotime($_SESSION['data'])) . '<br>';
									echo '</p>';
									echo '<p style="color:gray;padding:0;margin:0 0 0 5;">' . '<i>"' . $_SESSION['commtext'] . '"</i>' . '</p>';
									
								echo '</div>';
							echo '</div>';
							$var=$var-1;
						}
						echo '</div>';
					}
				?>
			</div>
			<div class="profilerightside">
				<div class="chenaruldindreapta" style="height:auto;">
					<?php
						$localhost = "localhost";
						$idbazadedate = "root";
						$parolabazadedate = "";
						$db3 = mysqli_connect($localhost , $idbazadedate , $parolabazadedate , 'registration');
						$nume = $_SESSION['username'];
						$sql = "SELECT * FROM users WHERE username='$nume'";
						$result = mysqli_query($db3,$sql);
						while($r = mysqli_fetch_array($result))
						{
							if($r['avatar']){
								echo '<img src="data:image/jpeg;base64,';
								echo base64_encode($r['avatar']);
								echo '" alt="avatar" style="width:100; height:100; border-radius:15%; margin-left:15px; margin-top:30px;" title="Avatar"></img> <br>';
							}
							else
								echo '<img src="/img/avatardefault.png" alt="avatar" style="width:100; height:100; border-radius:15%; margin-left:15px; margin-top:30px;" title="Avatar"></img> <br>';
							//echo '<br>';
							echo '<div id="urmaritori">';
							echo '<span style="margin:0; padding:0; ">Urmăritori ' . $r['urmaritori'] . '</span>';
							echo '</div>';
							echo '<div id="urmaritori">';
							echo '<span style="margin:0; padding:0; ">Urmăriri ' . $r['urmariri'] . '</span>';
							echo '</div>';
							echo '<p style="padding:0px 0px 0px 15px; margin-bottom: 0; color:black;"><a class="linkprofil" href="profile.php" title="Profilul tau"><i>u/ </i>' . $_SESSION['username'] . '</a></p>';
							echo '<p style="padding:0px 0px 0px 15px; color:gray; margin: 0;">' . $r['porecla'] .'</p>';
							echo '<p style="padding:0px 0px 0px 15px; color:gray; margin: 0; margin-bottom: 15;"><i>';
							if ($r['bio']!=NULL){
								echo '"' . $r['bio'] . '"';
							}
							else
								echo $r['bio'];
							echo '</i> </p>';
						}
					mysqli_close($db3);
					?>
					<a class="linkpostnou" href="submit.php" title="Posteaza ceva nou">POST NOU</a>
					<p style="padding:5px 0px 0px 15px; display:inline-block;"><a class="linkprofil" style="color:gray;" href="setari.php">Setari</a></p>
					<p style="padding:5px 20px 0px 0px; float:right;"><a class="linkprofil" style="color:gray;" href="">Ajutor</a></p>
				</div>
				
			</div>
		</div>
	</body>
</html>
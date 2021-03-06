<!DOCTYPE html>

<?php
	require('config/db.php');

	$query = 'SELECT * FROM posts ORDER BY created_at DESC';

	$result = mysqli_query($conn, $query);

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	
	mysqli_free_result($result);

	mysqli_close($conn);
?>

<html lang="en-US">
  <head>
	<style>
		.group:after {
		  content: "";
		  display: table;
		  clear: both;
		}

		* {
				box-sizing: border-box;
		}
		body {margin:0;}

		#navbar ul {
			
				position: fixed;
				top: 0;
				width: 100%;
				list-style-type: none;
				margin: 0;
				padding: 0;
				overflow: hidden;
				background-color: steelblue;
		}

		#navbar .leftBar {
				float: left;
				
		}

		#navbar .rightBar{
				float: right;
				
		}

		#navbar li a {
				display: block;
				color: white;
				text-align: center;
				padding: 14px 16px;
				text-decoration: none;
		}

		#navbar li a:hover:not(.active) {
				background-color: cornflowerblue;
		}

		#navbar .active {
				background-color: darkblue;
		}

		
		.column {
				float: left;
				padding: 10px;
		}
		.column.side {
				
				width: 10%;
		}

		.column.middle {
				width: 80%;
			
		}
	
		#content{
			padding:20px;
			margin-top:30px;
			
		}	

		#content:after {
				content: "";
				display: table;
				clear: both;
		}
		
		#logo{		
			float: left;			
		}

		.blog{
			border-style: solid;
    		border-width: 2px;
    		padding: 0px;
			margin: 10px;
    		margin-bottom: 15px;
			background-color: #f2f2f2;
			border-radius: 7px;
			border-color: #666666;
		}
		
		.autor{
			float: left;
			border-right:1px solid black;
			border-top:1px solid black;
			padding: 5px;
			margin: 0px;		
			border-radius: 3px;
			border-color: #666666;	
		}

		.date{
			float: right;
			border-left:1px solid black;
			border-top:1px solid black;
			padding: 5px;
			margin: 0px;
			border-radius: 3px;
			border-color: #666666;
		}

		a:visited{
			color: black;
		}
		
		a{
			color: black;
		}
			
	</style>
    <meta charset="utf-8">
		<meta name="author" content="Giorgi Khosroshvili">
		<meta name="description" content="This is the home page of blog site. 
		Here you can see all kind of information.">
    <title>New Posts</title>
  </head>
  <body>
		
    <div id="navbar" class="group">
	
			
		<ul class="group">
			<li> <img id="logo" src="blogicon.png" id="log" height="48" width="48"></li>
			<li><a class="leftBar" href="index.php">Home Page</a></li>
			<li><a class="leftBar active" href="newposts.php">New Posts</a></li>
	
			<li><a class="rightBar" href="login.php">Log In</a></li>
			<li><a class="rightBar" href="signup.php">Sign Up</a></li>
		</ul>
		
    </div> <!-- #navbar -->
    

	<div id="content"> 
		<div class="column side">
			<h2>Side</h2>
			
			<p></p>
		</div>  <!-- left column -->

		<div class="column middle">
			<h1 style="padding-bottom: 40px;">New Posts</h1>
			
			
			<ul style="list-style-type: none;">
				<li> 
					<a href="postpage.php">	
					<div class="blog group">	
						<h2 style="padding: 5px;"> Title of the post </h2>			

						<p class="autor">Subbmited by: Bla </p>
						<p class="date">Date: 10/10/2010</p>		
					</div>	
					</a>	
				</li>	
				
				<li>	
					<div class="blog group">	
						<h2 style="padding: 5px;"> Ronald scores double aganst Juve </h2>			

						<p class="autor">Subbmited by: Giorgi </p>
						<p class="date">Date: 10/10/2015</p>		
					</div>	
				</li>


				<li>	
					<div class="blog group">	
						<h2 style="padding: 5px;"> VP wins DAC </h2>			

						<p class="autor">Subbmited by: xosrika </p>
						<p class="date">Date: 10/10/2010</p>		
					</div>	
				</li>

				<li>	
					<div class="blog group">	
						<h2 style="padding: 5px;"> CoD >> Battelfield </h2>			

						<p class="autor">Subbmited by: someone from past </p>
						<p class="date">Date: 10/10/2018</p>		
					</div>	
				</li>

				<?php foreach($posts as $post): ?>
				<li>	
					<a href=<?php echo "postpage.php?id=".$post['id'];?>>	
					<div class="blog group">	
						<h2 style="padding: 5px;"><?php echo $post['title']; ?></h2>			

						<p class="autor">Subbmited by:<?php echo ' '.$post['author']; ?></p>
						<p class="date">Date:<?php echo ' '.$post['created_at']; ?></p>		
					</div>
					</a>	
				</li>
				<?php endforeach; ?>
				 
			</ul>


		</div> <!-- column middle -->
		 
		<div class="column side">
			<h2>Side</h2>
			<p></p>
		</div> <!-- right column -->
	</div> <!-- #content -->
	</body>
		

</html>

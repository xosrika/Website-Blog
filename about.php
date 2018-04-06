<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>

	<style >

		.group:after {
		  content: "";
		  display: table;
		  clear: both;
		}
		#header{
			width: 100%;
			background: green;
			padding: 20px;
		}
		#logo{
			float: left;

		}	
		#menu{
			float: right;
		}
		#menu ul{
			margin-right: 100px; 
		}
		#menu li{
			float: left;
			margin-left: 20px;
			list-style-type: none;	
		}	

		#red-container{
			width: 100%;
			margin-top: 20px;
		}

		#sidebar{
			width: 22%;
			
			height: 100%;
			
			float: left;
			
			background: yellow;

		}

		#menu-sidebar{
			padding: 5px;
		}

		#menu-sidebar ul{
			list-style-type: none;
		}
		#menu-sidebar li{
			list-style-type: none;
		}

		#main{
			float: left;
			width: 72%;
			padding: 20px;
		}

		h1{
			color: red;
		}

		#frm{
			border-style: solid;
    		border-width: 2px;
			
		}

		#commentarea{
			width: 98%;
			height: 100%;
		}

		#button{
			float: right;
		}

		.blog{
			border-style: solid;
    		border-width: 4px;
    		padding: 5px;
    		margin-bottom: 15px;
		}

	</style>

</head>
<body>
	<div id="header" class="group">
		<img src="Will-Logo-1.png" id="log" height="42" width="42">

		<div id="menu">
			<ul >
				<li><a href="bla.html">home</a> </li>
				<li><a href="bla.html">home</a> </li>
				<li><a href="bla.html">home</a> </li>
				<li><a href="bla.html">home</a> </li>
			</ul>
		</div>		
	</div>	


	<div id="red-container" clas="group">
		
		<div id="sidebar">

			<div id="menu-sidebar">
				<h3 style="padding-left: 20px;">Menu</h3>
				<ul>	
					<li><a href="bla.html">home</a> </li>
					<li><a href="bla.html">home</a> </li>
					<li><a href="bla.html">home</a> </li>
					<li><a href="bla.html">home</a> </li>
				</ul>
			</div>
		</div>	


		<div id="main">

			<div class="blog">	
				<h1>Title Of The Blog</h1>

				<div id="content">
					<p>The content of the bloooooog asdas sda asd sadsdaaads adsd adf afad faadffafa fa fa df adf adfa dfadsf af f dafa fda fadsfadsf adfsa sdf afa fa fa dsfa f afadsfadfad fdadf adf dfasf dasf asdf adfs dff af da dfa adfs adffd afd adf fadf f ads  f aff fadsf dfa af fa af a fa affd fad fdas af afds</p>	
				</div>

				<div id="frm" class="group">
					<h2>Add Comment</h2>
					<form method="GET" action="bla.html">
						<textarea id="commentarea"> text area of form  </textarea> 


						<input type="button" name="button" value="comment" id="button">
					</form>

				</div>
			</div>


			
		</div>

	</div>

</body>
</html>
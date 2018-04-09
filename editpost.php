<!DOCTYPE html>

<?php
    require('config/db.php');
    
    if(isset($_POST['submit'])){
        $update_id = mysqli_real_escape_string($conn, $_POST['update_id']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $body = mysqli_real_escape_string($conn, $_POST['body']);
        $author = mysqli_real_escape_string($conn, $_POST['author']);
        

        $query = "UPDATE posts SET
                title = '$title',
                author = '$author',
                body = '$body'
            WHERE id = {$update_id};";
        echo $query;
        if(mysqli_query($conn, $query)){
           header("Location: http://localhost/website-blog/newposts.php");
        } else{
            echo "ERORR: ".mysqli_error($conn);
        }
    }

	$id = mysqli_real_escape_string($conn, $_GET["id"]);
	$query = "SELECT * FROM posts WHERE id = $id;";
	$result = mysqli_query($conn, $query);

	$post = mysqli_fetch_assoc($result);
	var_dump($result);	
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
		
			
	</style>
    <meta charset="utf-8">
		<meta name="author" content="Giorgi Khosroshvili">
		<meta name="description" content="This is the home page of blog site. 
		Here you can see all kind of information.">
    <title>Blog</title>
  </head>
  <body>
		
    <div id="navbar" class="group">
	
			
		<ul class="group">
			<li> <img id="logo" src="blogicon.png" id="log" height="48" width="48"></li>
			<li><a class="leftBar active" href="index.php">Home Page</a></li>
			<li><a class="leftBar" href="newposts.php">New Posts</a></li>
	
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
        <h1 style="padding-bottom: 40px;">Edit Post</h1>

        <form method="POST" action=<?php $_SERVER['PHP_SELF']; ?>>
            <label>Title</label>
            <input type="text" name="title" value="<?php echo $post['title'] ?>">
            <label>Author</label>
            <input type="text" name="author" value="<?php echo $post['author'] ?>">
            <label>Body</label>
            <textarea name="body"><?php echo $post['body'] ?></textarea>
            <input type="hidden" name="update_id", value="<?php echo $post['id'] ?>">   
            <input type="submit" name="submit", value="Submit">
        </form>
		</div> <!-- column middle -->
		 
		<div class="column side">
			<h2>Side</h2>
			<p></p>
		</div> <!-- right column -->
	</div> <!-- #content -->
	</body>
		

</html>

<!DOCTYPE html>

<?php
	require('config/db.php');

	if(isset($_POST['delete'])){
        $delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
        

		$query = "DELETE FROM posts where id = {$delete_id};";
                
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


        .post_content{
            border-style: solid;
    		border-width: 2px;
    		padding-right: 3%;
            padding-left: 3%;
			margin-left: 5%;
            margin-right: 5%;
    		margin-bottom: 15px;
			background-color: #e6e6e6;
			border-radius: 7px;
			border-color: #595959;        
            
        }
        
        .comments{
            margin-top:50px;
            padding: 3%;
        }

        .comment{
            border-style: solid;
    		border-width: 2px;
    		
			margin-left: 5%;
            margin-right: 5%;
    		margin-bottom: 15px;
			background-color: #f2f2f2;
			border-radius: 10px;
			border-color: #666666;        
            
        }

        .comment h3{
            margin: 0px;
            padding: 3%;        
        }

        .comment p{
            margin: 0px;
            padding: 3%;
            background-color: white;
            
            
    		border-width: 1px;
        }
        
        .date{
            float: right;
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
			<li><a class="leftBar" href="index.php">Home Page</a></li>
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
			<div class="post_content group">
                <h1><?php echo $post['title']; ?></h1>
                <p> 
					<?php echo $post['body']; ?>
                </p>


                <p><strong>Subbmited by:<?php echo ' '.$post['author']; ?></strong> </p>
				<p><strong>Date: <?php echo ' '.$post['created_at']; ?> </strong></p>
				<a href=<?php echo "editpost.php?id=".$id;?>>Edit Post</a>

				<form method="POST", action=<?php $_SERVER['PHP_SELF']; ?>>
					<input type="hidden" name="delete_id", value="<?php echo $post['id'] ?>">   
					<input type="submit" name="delete" value="Delete">
				</form>
            </div> <!-- post ontent -->

            <div class="comments">

                <div class="comment">
                    <h3>comment autor <span class="date"> Date: 10/10/10 </span> </h3>
                   
                    <p>
                    fish, mainly flying fish, and squid, catching them by plunge-diving into the ocean. This bird is con
                    idered to be a le
                    st-concern species according to the International Union for Conservation of Nature (IUCN), though it 
                    is adversely affected by human contact. Rats and feral cats prey on eggs and young at nesting sites.
                    </p>
                </div>

                 

            </div><!-- comments -->
		</div> <!-- column middle -->
		 
		<div class="column side">
			<h2>Side</h2>
			<p></p>
		</div> <!-- right column -->
	</div> <!-- #content -->
	</body>
		

</html>

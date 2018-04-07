<!DOCTYPE html>

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
                <h1>Title </h1>
                <p> 
                    Content of the post 
                    The red-tailed tropicbird (Phaethon rubricauda) is a seabird native to tropical Indi
                    an and Pacific Oceans. One of three closely related species of tropicbird, it was describe
                    d by Pieter Boddaert in 1783. Superficially resembling a tern in appearance, it has almost al
                    l-white plumage with a black mask and a red bill. The sexes have similar plumage. Adults have red ta
                    l streamers that are about twice their body length, which gives rise to its common name. There are fou
                    subspecies recognised, though there is evidence there is a clinal change with smaller birds in the north
                     and larger in the south (and hence no grounds for any subspecies).

                    Nesting takes place in loose colonies on oceanic islands, the nest itself a scrape found on a cliff
                     face, in a crevice, or 
                    a sandy beach. A single egg is laid, being incubated by both sexes for about six weeks. The red-ta
                    iled tropicbird eats
                    fish, mainly flying fish, and squid, catching them by plunge-diving into the ocean. This bird is con
                    idered to be a le
                    st-concern species according to the International Union for Conservation of Nature (IUCN), though it 
                    is adversely affected by human contact. Rats and feral cats prey on eggs and young at nesting sites.

                </p>


                <p><strong>Subbmited by: Giorgi</strong> </p>
				<p><strong>Date: 10/10/2015 </strong></p>
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

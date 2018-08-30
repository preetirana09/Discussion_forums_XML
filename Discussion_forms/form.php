<?php
$xml = simplexml_load_file("forms.xml") or die("Error: Cannot create object");
			foreach($xml->children() as $comm)
			{echo "<body style='padding:50px 10px 10px 10px;'>";
				print "<h2 > <b> ".$comm->username."<h4 >".$comm->comment."</h4>";
				echo "</body>";
				
			}
			
		?>
		
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
		 <link href="css/style.css" rel="stylesheet">
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Forums</title>
    </head>
    <body style="background-image: url('img/home1.jpg');">
	 <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.html">Discussion forms.</a>
                </div>
				</div>
				</div>
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h1 >submit your comments.</h1>
                    <form action="discussion_forms.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="username"  placeholder="User Name" >
                        </div>
						 
                        <div class="form-group">
                            <textarea rows="4" cols="50" name="comment" placeholder="comment box">

</textarea>
</div>
 <div class="form-group">
                         <input type="submit" name="ok">

                       </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
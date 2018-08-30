<html>
	<head>
		<title>Disussion Forms</title>
	</head>
	<body>
		<?php
			if (isset($_REQUEST['ok'])) {
			$xml = new DOMDocument("1.0","UTF-8");
			$xml->load("forms.xml");
 
			$rootTag = $xml->getElementsByTagName("discussion")->item(0);
 
			$dataTag = $xml->createElement("forum");
 
			$aTag = $xml->createElement("username",$_REQUEST['username']);
		
			$bTag = $xml->createElement("comment",$_REQUEST['comment']);
 
			$dataTag->appendChild($aTag);
			$dataTag->appendChild($bTag);
			
 
			$rootTag->appendChild($dataTag);
 
			$xml->save("forms.xml");
			}
			
		?>
		<h1> Your response has been submitted. </h1>
		<a href="form.php"> click here to submit another response. </a>
		
		<!--<form action="discussion_forms.php" method="post">
			Username: <input type="text" name="username" /><br><br>
			Comment: <input type="text" name="comment" /><br>
			<input type="submit" name="ok">
		</form>-->
	</body>
</html>﻿
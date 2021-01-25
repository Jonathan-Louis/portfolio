<?php

	include("functions.php");
	
	include("views/header.php");
	
	if($_GET['page'] == 'projects'){
		
		include("views/projects.php");
		
	} else if($_GET['page'] == 'contact'){

		include("views/contact.php");
	
	} else if($_GET['page'] == 'search'){

		include("views/search.php");
	
	} else if($_GET['page'] == 'resume'){

		include("views/resume.php");
	
	} else{
	
		include("views/home.php");
	
	}
	
	include("views/footer.php");






?>
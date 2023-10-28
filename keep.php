<?php
	if(isset($_POST['act'])){
		if($_POST['act'] == "add"){
			echo "Adding Data <a href=index.php>[Home]</a>";
		} else if($_POST['act'] == "edit"){
			echo "Editing Data <a href=index.php>[Home]</a>";
		}
	}

		if(isset($_GET['del'])){
			echo "Deleting Data <a href=index.php>[Home]</a>";
	}

?>
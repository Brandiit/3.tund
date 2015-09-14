<h3>menüü</h3>
<ul> 
<?php
	if($page_file_name !="home.php") {
		echo '<li><a href="home.php">Avaleht</a></li>';
		} else {	
		echo '<li>Avaleht</li>';
		}


	if($page_file_name != "user_form.php") {
		echo '<li><a href="user_form.php">Logi sisse</a></li>';
	} else {
		echo '<li>Logi sisse</li>';
	}
?>
</ul>
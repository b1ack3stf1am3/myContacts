<?php
if(isset($_GET['p'])) {
	$p = $_GET['p'];
} else {
	$p = DEFAULT_PAGE;
}

include("pages/$p.php");
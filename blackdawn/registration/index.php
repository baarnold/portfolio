<?php # Script 18.5 - index.php
//Main page for site

// Include config file
require('includes/config.inc.php');

// Set title page and include header
$page_title = 'Welcome to this Site';
include('includes/header.php');

// Welcome user by name if logged in
echo '<h1>Welcome';
if (isset($_SESSION['first_name'])) {
	echo ", {$_SESSION['first_name']}";
}
echo '!</h1>';
?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? 
Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem 
non blanditiis ex fugiat.</p>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum 
aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit 
dolorum!</p>

<?php include('includes/footer.php'); ?>
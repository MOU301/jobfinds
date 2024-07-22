<?php include 'core/init.php'; 
$user=new user;
$template=new template("templates/front_page.php");

$template->contacts=$user->getAllAddress();

   

echo $template;
?>

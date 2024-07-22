<?php 
include 'core/init.php';
$user=new user;
$contact_id=isset($_GET['contact_id']) ? $_GET['contact_id']:null;

if($user->Delete($contact_id)){
    $data['message']='success';
 
}
else{
    $data['message']='error';  
}
echo json_encode($data);

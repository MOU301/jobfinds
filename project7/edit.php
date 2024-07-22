<?php include 'core/init.php'; 
$user=new user;
$validator=new validator;
$template=new template("templates/edit_page.php");
$contact_id=isset($_GET['id']) ? $_GET['id']:null;
$template->contact=$user->getContact($contact_id);
$template->cities=$cities;
$template->groups=$user->getGroup();
$contact_id=isset($_GET['id']) ? $_GET['id']:null ;
if(isset($_POST['update'])){
  
    $array_field=['first_name','last_name','email','phone','address1','address2','state','city'];
  if($validator->isRequired($array_field)){
    $data=[];
    $data['first_name']=$_POST['first_name'];
    $data['last_name']=$_POST['last_name'];
    $email=$_POST['email'];
  
    if($validator->checkemail($email)){
      $data['email']=$email;
     }else{
      redirect("add.php","check your email please",'error');
      echo 'check your email please !!';
     }
    $data['phone']=$_POST['phone'];
    $data['address1']=$_POST['address1'];
    $data['address2']=$_POST['address2'];
    $data['city']=$_POST['city'];
    $data['state']=$_POST['state'];
    $data['zpcode']=$_POST['zpcode'];
    $data['notes']=$_POST['notes'];
    $data['contact_group']=$_POST['contact_group'];
    if($user->Update($data,$contact_id)){
      redirect('index.php','updated is contact in datebase','success');
  
    }
    else{
      redirect('add.php','there is error in register in datebase','error');
    }
    
  }else{
    
    redirect('add.php','please fill the field !!','error');
    echo 'please fill the field !!';
  
  }



}
echo $template;
?>
<?php 

class user{
    private $db;
    public function __construct()
    {
      $this->db=new database;  
    }
    public function getAllAddress(){
        $q='SELECT contacts.* , group_contact.name
         FROM contacts 
        INNER JOIN group_contact 
        on contacts.contact_group=group_contact.id';
        $this->db->query($q);
        return $this->db->resultSet();
    }

    public function getGroup(){
          $q='SELECT * FROM `group_contact`';
          $this->db->query($q);
          return $this->db->resultSet();
        }


    public function getContact($contact_id){
      $q="SELECT * FROM `contacts` WHERE id=:contact_id";
      $this->db->query($q);
      $this->db->bind(':contact_id',$contact_id);
      return $this->db->signle();
    }
    public function AddContact($data){
      $q="INSERT INTO `contacts` ( `first_name`, `last_name`, `email`, `phone`, `address1`, `address2`, `city`, `state`, `zpcode`, `notes`, `contact_group`) 
      VALUES (:first_name, :last_name, :email, :phone, :address1, :address2, :city, :state, :zpcode, :notes, :contact_group)";
    $this->db->query($q);
    $this->db->bind(':first_name',$data['first_name']);
    $this->db->bind(':last_name',$data['last_name']);
    $this->db->bind(":email",$data['email']);
    $this->db->bind(':phone',$data['phone']);
    $this->db->bind(":address1",$data['address1']);
    $this->db->bind(":address2",$data['address2']);
    $this->db->bind(":city",$data['city']);
    $this->db->bind(":state",$data['state']);
    $this->db->bind(":zpcode",$data['zpcode']);
    $this->db->bind(":notes",$data['notes']);
    $this->db->bind(":contact_group",$data['contact_group']);
  
    if($this->db->execute()){
    return true;
  }  
  else{
    return false;
  }
  

  }
  public function Update($data,$contact_id){
  $q="UPDATE `contacts` SET 
    `first_name`=:first_name,
    `last_name`=:last_name,
    `email`=:email,
    `phone`=:phone,
    `address1`=:address1,
    `address2`=:address2, 
    `city`=:city,
    `state`=:state,
    `zpcode`=:zpcode,
    `notes`=:notes,
    `contact_group`=:contact_group
     WHERE `id`='$contact_id'";
    $this->db->query($q);
    $this->db->bind(':first_name',$data['first_name']);
    $this->db->bind(':last_name',$data['last_name']);
    $this->db->bind(":email",$data['email']);
    $this->db->bind(':phone',$data['phone']);
    $this->db->bind(":address1",$data['address1']);
    $this->db->bind(":address2",$data['address2']);
    $this->db->bind(":city",$data['city']);
    $this->db->bind(":state",$data['state']);
    $this->db->bind(":zpcode",$data['zpcode']);
    $this->db->bind(":notes",$data['notes']);
    $this->db->bind(":contact_group",$data['contact_group']);
    if($this->db->execute()){
      return true ;
    }
    else{
      return false;
    }
  }
  public function Delete($contact_id){
    $q="DELETE FROM `contacts` WHERE `contacts`.`id` =:contact_id";
    $this->db->query($q);
    $this->db->bind(":contact_id",$contact_id);
    if($this->db->execute()){
      return true;
    }
    else{
      return false; 
    }

  }
   
  
}




?>
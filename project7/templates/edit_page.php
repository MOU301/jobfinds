<?php include "inc/header.php"; ?>
<h3 class="d-flex justify-content-center underline p-3">Update Contact</h3>
          <form action="edit.php?id=<?php echo $contact->id; ?>" method="post">
            <div class="row">
            
            <div class="col-3">
                <label >Frist_Name :</label>
                <input type="text" name="first_name" value=<?php echo $contact->first_name;?> class="form-control">
            </div>
            <div class="col-3">
                <label >Last_Name :</label>
                <input type="text" name="last_name" value=<?php echo $contact->last_name;?> class="form-control">
            </div>
            <div class="col-3">
                <label >Email :</label>
                <input type="text" name="email" value=<?php echo $contact->email;?> class="form-control">
            </div>
            <div class="col-3">
                <label >Phone :</label>
                <input type="text" name="phone" value=<?php echo $contact->phone;?> class="form-control">
            </div>
            <div class="col-3">
                <label >Adddress1 :</label>
                <input type="text" name="address1" value=<?php echo $contact->address1;?> class="form-control">
            </div>
            <div class="col-3">
                <label >Address2 :</label>
                <input type="text" name="address2"  value=<?php echo $contact->address2;?> class="form-control">
            </div>
            <div class="col-3">
                <label >City :</label>
                <select name="city"  class="form-control">
                    <option> select city</option>
                    <?php foreach($cities as $key=>$val) : ?>
                     <option value=<?php echo $key ;?> <?php echo ($key==$contact->city) ? "selected":""; ?>><?php echo $val;?></option>
                    <?php endforeach ; ?>
                </select>
            </div>
            <div class="col-3">
                <label >State :</label>
                <input type="text" name="state" value='<?php echo $contact->state; ?>' class="form-control">
            </div>
            <div class="col-3">
                <label >Z_Code :</label>
                <input type="text" name="zpcode" value='<?php echo $contact->zpcode; ?>' class="form-control">
            </div>
            <div class="col-3">
                <label >Contact_Group :</label>
                <select name="contact_group" class="form-control">
                    <option>select group</option>
             <?php foreach($groups as $group) : ?>
                    <option value=<?php echo $group->id;?> <?php echo ($group->id==$contact->contact_group) ? "selected":""; ?>><?php echo $group->name;?></option>
             <?php endforeach ;?> 
                 </select>  
            </div>
            <div class="col-6">
                <label >Notice :</label>
                <textarea name="notes" class="form-control"><?php echo $contact->notes ; ?></textarea>
            </div>
        </div>
        <input type="submit" value="Send" name="update" class="btn btn-primary">
        <a href="index.php" class="btn btn-dark">Home</a>
        </form>
      
    </div>


<?php include "inc/footer.php"; ?>
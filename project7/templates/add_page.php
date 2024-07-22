<?php include "inc/header.php"; 
?>


<h3 class="d-flex justify-content-center underline p-3">Add Contact</h3>
          <form action="add.php" method="post">
            <div class="row">
            <div class="col-3">
                <label >Frist_Name :</label>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div class="col-3">
                <label >Last_Name :</label>
                <input type="text" name="last_name" class="form-control">
            </div>
            <div class="col-3">
                <label >Email :</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="col-3">
                <label >Phone :</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="col-3">
                <label >Adddress1 :</label>
                <input type="text" name="address1" class="form-control">
            </div>
            <div class="col-3">
                <label >Address2 :</label>
                <input type="text" name="address2" class="form-control">
            </div>
            <div class="col-3">
                <label >City :</label>
                <select name="city"  class="form-control">
                    <option> select city</option>
                    <?php foreach($cities as $key=>$val) : ?>
                     <option value=<?php echo $key ;?>><?php echo $val;?></option>
                    <?php endforeach ; ?>
                </select>
            </div>
            <div class="col-3">
                <label >State :</label>
                <input type="text" name="state" class="form-control">
            </div>
            <div class="col-3">
                <label >Z_Code :</label>
                <input type="text" name="zpcode" class="form-control">
            </div>
            <div class="col-3">
                <label >Contact_Group :</label>
                <select name="contact_group" class="form-control">
                    <option>select group</option>
             <?php foreach($groups as $group) : ?>
                    <option value=<?php echo $group->id;?>><?php echo $group->name;?></option>
             <?php endforeach ;?> 
                 </select>  
            </div>
            <div class="col-6">
                <label >Notice :</label>
                <textarea name="notes" class="form-control"></textarea>
            </div>
        </div>
        <input type="submit" value="Add" name="add" class="btn btn-primary">
        <a href="index.php" class="btn btn-dark">Home</a>
        </form>
     

<?php include "inc/footer.php"; ?>
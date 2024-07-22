<?php include 'inc/header.php'; ?>


       
       
       <div class="py-5 my-3 d-flex justify-content-between underline">
           <h1>Ajax Address Bock</h1>
           <div>
               <a href="add.php" class="btn btn-primary">Add Contact</a>
           </div>
       </div>
       <div class="d-flex justify-content-center ">
           <!-- <div class="image-small">
               <img src="settes/images/loader_image.gif">
           </div> -->
       </div>
         <?php if(!empty($contacts)) : ?>
       <table class="table">
           <thead>
               <tr>
                    <th>#</th>
                   <th>name</th>
                   <th>phone</th>
                   <th>email</th>
                   <th>address</th>
                   <th>group</th>
                   <th>action</th>
               </tr>
           </thead>
           <tbody>
           <?php $x=1; foreach($contacts as $contact) : ?>
               <tr class='cont<?php echo $contact->id ;?>'>
                   <td><?php echo $x++; ?></td>
                   <td><?php echo $contact->first_name; ?></td>
                   <td><?php echo $contact->phone; ?></td>
                   <td><?php echo $contact->email; ?></td>
                   <td><?php echo $contact->address1; ?></td>
                   <td><?php echo $contact->name; ?></td>
                   <td>
                       <div class="d-flex">
                         <a href="edit.php?id=<?php echo $contact->id; ?>" class="btn btn-primary mx-1">Edit</a>
                         <button  data-id=<?php echo $contact->id;?>  class="btn btn-danger delete">delete</button>
                       </div>
                     </td>
                     
               </tr>
               <?php endforeach ;?>
           </tbody>
       </table>

    <?php else : ?>
        <div class="d-flex justify-content-center p-5">
            <h3 class="bg-danger p-3 text-white">There are not contacts in database sorry !!</h3>
        </div>
    <?php endif ;?>       
       
 

<?php include "inc/footer.php"; ?>
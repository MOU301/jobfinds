</div>
<script src="templates/settes/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="templates/settes/jequery.js"></script>
<script>
    $(document).ready(function(){
    $('.delete').click(function(){
        var contact_id=$(this).attr('data-id');
       $.ajax({
        method:'GET',
        url:'delete.php',
        data:{contact_id:contact_id},
        success:function(data){
            const obj=JSON.parse(data);
            if(obj.message=='success'){
                console.log(contact_id);
                const rem='.cont'+contact_id;
                console.log(rem);
                $(rem).remove();  
            }
            
        }
        
       })
       
    })
})
</script>
</body>
</html>
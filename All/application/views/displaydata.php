<!DOCTYPE html>  
<html>  
<head>  
    <title>Display Record</title>  
</head>  
<body> 
 
   <table border="1">         
        <thead>  
            <th>ID</th>  
            <th>FIRST NAME</th>  
            <th>LAST NAME</th>  
            <th>EMAIL</th>  
            <th>PASSWORD</th> 
			<th>Photo</th> 			
            <th>ACTION</th>  
        </thead> 
            <?php  
			foreach($this->a->displaystud() as $stud)
               // foreach($students as $stud)  
                {
					?>
					<tr>
					<td><?= $stud['id']?></td>
					<td><?= $stud['first_name']?></td>
					<td><?= $stud['last_name']?></td>
					<td><?= $stud['email']?></td>
					<td><?= $stud['password']?></td>	
					
					<td><img src="<?php echo '../images/' .$stud['image']; ?>" height="50" width="50"></td>
					<td> <video controls controlsList="nodownload" src="<?php echo '../videos/'.$stud['video'] ?>"  height="100px"  width="100px"/></td>	
					<td><a href="<?php echo base_url() . "allcontroller/edit?id=" . $stud['id']; ?>">
<button>Edit</button></a>
					<a href="<?php echo base_url() . "allcontroller/delete?id=" . $stud['id']; ?>">
<button>Delete</button></a></td>
					
					</tr>
                 <?php
				}
				?>
        
	 
    </table>  
</body>  
</html>  
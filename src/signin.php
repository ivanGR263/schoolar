<?php 
      include ('../config/database.php');

     $email = $_POST ['e_mail'];
     $passw = $_POST ['p_sswd'];

     $sql = "
     SELECT 
	    --id,
	    --email,
	    --password,
	COUNT (id) as total
	
FROM users

	WHERE 
	    email    =  '$email' and 
	    password =  '$passw' and
	    status = true 
	 ";
   $res = pg_query($conn, $sql);
   
    if ($res){
        $row = pg_fetch_assoc ($res);
        if($row['total'] > 0){
            echo  "login ok";
        }else {
            echo "user does not exist";
        }
    }

?>